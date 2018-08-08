<?php namespace Devnull\Breadcrumb;

use App;
use System\Classes\PluginBase;
use Illuminate\Foundation\AliasLoader;
/**                _                             _
__ _  ___ _ __ ___| | ___ __   ___ _ __ __ _ ___(_) __ _
/ _` |/ _ \ '__/ _ \ |/ / '_ \ / _ \ '__/ _` / __| |/ _` |
| (_| |  __/ | |  __/   <| |_) |  __/ | | (_| \__ \ | (_| |
\__, |\___|_|  \___|_|\_\ .__/ \___|_|(_)__,_|___/_|\__,_|
|___/                   |_|

 * This is a gerekper.main[main] for OctoberCMS
 *
 * @category   Gerekper+ Addons | Toolbox Plugin File
 * @package    Devnull.breadcrumbs | Octobercms
 * @author     devnull <www.gerekper.asia>
 * @copyright  2012-2019 Gerekper Inc
 * @license    http://www.gerekper.asia/license/modules.txt
 * @version    1.0.0
 * @link       http://www.gerekper.asia/package/toolbox
 * @see        http://www.github.com/gerekper/toolbox
 * @since      File available since Release 1.0.0
 * @deprecated -
 */

class Plugin Extends PluginBase
{
    //----------------------------------------------------------------------//
    //	Constant Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Construct Functions - Start
    //----------------------------------------------------------------------//

    function __construct()
    {
        $this->code = 'devnull.breadcrumb';
    }

    //----------------------------------------------------------------------//
    //	Construct Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Main Functions - Start
    //----------------------------------------------------------------------//

    public function pluginDetails()
    {
        return [
            'name'          =>  'devnull.breadcrumb::lang.plugin.name',
            'description'   =>  'devnull.breadcrumb::lang.plugin.description',
            'author'        =>  'devnull.breadcrumb::lang.plugin.author',
            'icon'          =>  'icon-bomb',
            'homepage'      =>  'devnull.breadcrumb::lang.plugin.homepage'
        ];
    }

    public function register()
    {
        $alias = AliasLoader::getInstance();
        $alias->alias('Breadcrumb', 'Devnull\Breadcrumb\Facades\Breadcrumb');

        App::singleton('breadcrumb.breadcrumbs', function(){
            return \Devnull\Breadcrumb\Classes\Breadcrumbs::instance();
        });
    }

    public function registerNavigation()
    {
        return [];
    }

    public function registerSettings()
    {
        $_value = [
            'settingsBreadcrumbs' => [
                'label'         =>  'devnull.main::lang.settings.breadcrumbs_label',
                'description'   =>  'devnull.main::lang.settings.breadcrumbs_description',
                'category'      =>  'devnull.main::lang.settings.main_category',
                'icon'          =>  'icon-rss-square',

                'class'         =>  'Devnull\Breadcrumb\Models\settingsBreadcrumbs',
                'keywords'      =>  'gerekper main breadcrumbs theme asia umbrella corporation',
                'order'         =>  101,
            ]
        ];
        return $_value;
    }

    public function registerComponents()
    {
        return [
            'Devnull\Breadcrumb\Component\Breadcrumbs'      =>  'Breadcrumbs',
        ];
    }

    public function registerPermissions()
    {
        return [
            'devnull.breadcrumb.access_plugin'    =>  ['label' => 'devnull.breadcrumb::lang.permissions.access_plugin'],
            'devnull.breadcrumb.menu_access'      =>  ['label' => 'devnull.breadcrumb::lang.permissions.menu_access'],
        ];
    }

    public function registerSchedule($schedule)
    {
        $schedule->command('cache:clear')->everyFiveMinutes();
    }

    public function registerFormWidgets()
    {
        return [
            'Owl\FormWidgets\HasMany\Widget' => [
                'label' =>  'HasMany',
                'code'  =>  'owl-hasmany',
            ]
        ];
    }

    public function registerReportWidgets(){}
    public function registerMarkupTags(){}
    public function boot(){}
    public function registerListColumnTypes(){}
    public function registerMailTemplates(){}
    public function registerConsoleCommand($key, $class){}

    //----------------------------------------------------------------------//
    //	Plugin Functions - end
    //----------------------------------------------------------------------//
}