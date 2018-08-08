<?php namespace Devnull\Breadcrumb\Updates;

use DB;
use Devnull\Breadcrumb\Classes\InstallMain;
use Devnull\Breadcrumb\Classes\SystemSettings;
use Devnull\Breadcrumb\Classes\Seeding;
use October\Rain\Database\Updates\Seeder;
use Devnull\Breadcrumb\Models\Breadcrumb;
use Devnull\Breadcrumb\Models\Settings;


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
        $this->_schema                      =   [];
        $this->installations                =   new InstallMain();
        $this->_system_settings             =   'system_settings';
        $this->_main_code                   =   'devnull_main_settings';
        $this->time_now                     =   $this->installations->set_date_now();

        $this->seeding                      =   new Seeding();
        $this->_main_breadcrumb             =   Breadcrumb::$_table;
        $this->_db_variables_breadcrumbs    =   SystemSettings::get_config_breadcrumbs();

        $this->_all_tables                  =   [$this->_main_breadcrumb];
        $this->_all_config                  =   [$this->_db_variables_breadcrumbs];

        $this->_all_codes = [
            SystemSettings::get_breadcrumbs_code()  =>  $this->_db_variables_breadcrumbs,
        ];
    }

    //----------------------------------------------------------------------//
    //	Construct Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Main Functions - Start
    //----------------------------------------------------------------------//

    public function run() { $this->run_all_seed(); }

    private function run_all_seed()
    {
        foreach($this->_all_tables as $_all_tables)
        {
            $this->installations->check_existing($_all_tables);
            switch($_all_tables)
            {
                case $this->_main_breadcrumb:
                    SeedAllTable::init_schema_breadcrumbs();
                    break;
                default:
                    break;
            }
            $this->installations->optimize_settings();
        }
        self::setSettings($this->_all_codes);
    }

    //----------------------------------------------------------------------//
    //	Main Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Seed Functions - Start
    //----------------------------------------------------------------------//

    private function init_schema_breadcrumbs()
    {
        foreach($this->seeding->get_schema_breadcrumbs() as $_schema)
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
        }
        $this->installations->schema_default();
        $this->installations->optimize_table(Breadcrumb::$_table);
    }

    public function setSettings($_value)
    {
        foreach ($_value as $_key => $_code)
        {
            switch (self::checkSettings($_key))
            {
                case TRUE:
                    self::del_db_variables($_key);
                    SeedAllTable::init_db_variables($_code);
                    break;
                case FALSE:
                    self::init_db_variables($_code);
                    break;
                default:
                    break;
            }
        }
        return TRUE;
    }

    private function checkSettings($_value)
    {
        $_checkSettings = DB::table(Settings::$_table)->where('item', '=', $_value)->pluck('item');
        return ($_checkSettings)? TRUE : FALSE;
    }

    private function init_db_variables($_value)
    {
        foreach ($_value as $_per_value)
        {
            DB::table(Settings::$_table)->insert($_per_value);
        }
        //$this->installations->optimize_table(Settings::$_table);
        return TRUE;
    }

    private function del_db_variables($_value)
    {
        DB::table(Settings::$_table)->where('item', '=', $_value)->delete();
    }

    //----------------------------------------------------------------------//
    //	Seed Function Tables - End
    //----------------------------------------------------------------------//
}