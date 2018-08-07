<?php namespace Devnull\Breadcrumb\Updates;

use DB;
use Devnull\Main\Classes\InstallMain;
use Devnull\Breadcrumb\Models\Setting;
use October\Rain\Database\Updates\Seeder;
use Devnull\Breadcrumb\Models\Breadcrumb;
use Symfony\Component\Validator\Constraints\True;

    /**                _                             _
    __ _  ___ _ __ ___| | ___ __   ___ _ __ __ _ ___(_) __ _
    / _` |/ _ \ '__/ _ \ |/ / '_ \ / _ \ '__/ _` / __| |/ _` |
    | (_| |  __/ | |  __/   <| |_) |  __/ | | (_| \__ \ | (_| |
    \__, |\___|_|  \___|_|\_\ .__/ \___|_|(_)__,_|___/_|\__,_|
    |___/                   |_|

     * This is a gerekper.main[main] for OctoberCMS
     *
     * @category   Gerekper+ Addons | Toolbox Plugin File
     * @package    Devnull.classes.components | Octobercms
     * @author     devnull <www.gerekper.asia>
     * @copyright  2012-2019 Gerekper Inc
     * @license    http://www.gerekper.asia/license/modules.txt
     * @version    1.0.0
     * @link       http://www.gerekper.asia/package/toolbox
     * @see        http://www.github.com/gerekper/toolbox
     * @since      File available since Release 1.0.0
     * @deprecated -
     */

class SeedAllTable extends Seeder
{
    //----------------------------------------------------------------------//
    //	Constant Functions - Start
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Constant Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Construct Functions - Start
    //----------------------------------------------------------------------//

    function __construct()
    {
        $this->_schema              =   [];
        $this->installations        =   new InstallMain();
        $this->_system_settings     =   'system_settings';
        $this->_main_code           =   'devnull_main_settings';
        $this->time_now             =   $this->installations->set_date_now();

        $this->_db_default          =   "{\"use_plugin\":\"1\",\"use_plugin_breadcrumbs\":\"1\"}";
        $this->_db_variables        =   ['item' => $this->_main_code, 'value' => $this->_db_default];

        $this->_main_breadcrumb     =   Breadcrumb::$_table;

        $this->_all_tables          =   [ $this->_main_breadcrumb ];
    }

    //----------------------------------------------------------------------//
    //	Construct Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Main Functions - Start
    //----------------------------------------------------------------------//

    public function run() {$this->run_all_seed();}

    //----------------------------------------------------------------------//
    //	Shared Functions - Start
    //----------------------------------------------------------------------//

    private function run_all_seed()
    {
        foreach($this->_all_tables as $_all_tables)
        {
            $this->installations->check_existing($_all_tables);
            switch($_all_tables)
            {
                case $this->_main_breadcrumb:
                    $this->schema_breadcrumb();
                    break;
                default:
                    break;
            }
            $this->installations->optimize_settings();
        }
        SeedAllTable::setSettings(TRUE);
    }

    public function setSettings($_value)
    {
        $_setSettings = null;

        if ($_value == TRUE) {
            if (SeedAllTable::checkSettings() == TRUE) { DB::table(Setting::$_table)->insert($this->_db_variables);}
            else {
                DB::table(Setting::$_table)->where('item', '=', $this->_main_code)->delete();
                DB::table(Setting::$_table)->insert($this->_db_variables);
            }
            $_setSettings = TRUE;
        }
        else {
            if (!DB::table(Setting::$_table)->where('item', '=', $this->_main_code)->fetch())
                DB::table(Setting::$_table)->where('item,', '=', $this->_main_code)->delete();
            $_setSettings = FALSE;
        }
        return $_setSettings;
    }

    private function checkSettings()
    {
        $_checkSettings = DB::table(Setting::$_table)->where('item', '=', $this->_main_code)->pluck('item');
        return (!$_checkSettings)? false : true;
    }

    //----------------------------------------------------------------------//
    //	Main Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Seed Schema Tables - Start
    //----------------------------------------------------------------------//

    private function schema_breadcrumb()
    {
        $this->_schema = [
            ['page_name' => 'Home',                 'page_child' => '0',        'page_baseFileName' => 'home',                  'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-home',      'type' => '_self', 'href' => '',                              'status' => '1'],
            ['page_name' => 'Dashboard',            'page_child' => 'home',     'page_baseFileName' => 'dashboard',             'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-desktop',   'type' => '_self', 'href' => 'admin/dashboard',              'status' => '1'],
            ['page_name' => 'Policy',               'page_child' => 'home',     'page_baseFileName' => 'policy',                'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-cupboard',  'type' => '_self', 'href' => 'policy',                       'status' => '1'],
            ['page_name' => 'Privacy Policy',       'page_child' => 'policy',   'page_baseFileName' => 'privacy-policy',        'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-note',      'type' => '_self', 'href' => 'policy/privacy',               'status' => '1'],
            ['page_name' => 'Cookies Policy',       'page_child' => 'policy',   'page_baseFileName' => 'cookies-policy',        'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-note',      'type' => '_self', 'href' => 'policy/cookies',               'status' => '1'],
            ['page_name' => 'Accessibility Policy', 'page_child' => 'policy',   'page_baseFileName' => 'accessibility-policy',  'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-note',      'type' => '_self', 'href' => 'policy/accessibility',         'status' => '1'],
            ['page_name' => 'FAQ',                  'page_child' => 'home',     'page_baseFileName' => 'faq',                   'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-search',    'type' => '_self', 'href' => 'frequently-asked-questions',   'status' => '1'],
            ['page_name' => 'Key Terms',            'page_child' => 'home',     'page_baseFileName' => 'key-terms',             'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-note',      'type' => '_self', 'href' => 'key-terms',                    'status' => '1'],
            ['page_name' => 'Jobs',                 'page_child' => 'home',     'page_baseFileName' => 'jobs',                  'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-search',    'type' => '_self', 'href' => 'jobs',                         'status' => '1'],
            ['page_name' => 'News Room',            'page_child' => 'home',     'page_baseFileName' => 'terms-of-use',          'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-layouts3',  'type' => '_self', 'href' => 'newsroom',                     'status' => '1']
        ];

        foreach($this->_schema as $_schema)
        {
            Breadcrumb::updateOrCreate([
                'page_name'         =>  $_schema['page_name'],
                'page_child'        =>  $_schema['page_child'],
                'page_baseFileName' =>  $_schema['page_baseFileName'],
                'hide'              =>  $_schema['hide'],
                'disabled'          =>  $_schema['disabled'],
                'class'             =>  $_schema['class'],
                'type'              =>  $_schema['type'],
                'href'              =>  $_schema['href'],
                'status'            =>  $_schema['status']
            ]);
            $this->installations->schema_default();
        }
    }

    //----------------------------------------------------------------------//
    //	Seed Function Tables - End
    //----------------------------------------------------------------------//


}
