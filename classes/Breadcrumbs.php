<?php namespace Devnull\Breadcrumb\Classes;

/**                _                             _
__ _  ___ _ __ ___| | ___ __   ___ _ __ __ _ ___(_) __ _
/ _` |/ _ \ '__/ _ \ |/ / '_ \ / _ \ '__/ _` / __| |/ _` |
| (_| |  __/ | |  __/   <| |_) |  __/ | | (_| \__ \ | (_| |
\__, |\___|_|  \___|_|\_\ .__/ \___|_|(_)__,_|___/_|\__,_|
|___/                   |_|

 * This is a gerekper.main[main] for OctoberCMS
 *
 * @category   Gerekper+ Addons | Toolbox Plugin File
 * @package    Devnull.classes | Octobercms
 * @author     devnull <www.gerekper.asia>
 * @copyright  2012-2019 Gerekper Inc
 * @license    http://www.gerekper.asia/license/modules.txt
 * @version    1.0.0
 * @link       http://www.gerekper.asia/package/toolbox
 * @see        http://www.github.com/gerekper/toolbox
 * @since      File available since Release 1.0.0
 * @deprecated -
 */


class Breadcrumbs
{
    //----------------------------------------------------------------------//
    //	Constant Functions - Start
    //----------------------------------------------------------------------//

    function __construct()
    {
        $this->_schema          =   [];
    }

    //----------------------------------------------------------------------//
    //	Constant Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Construct Functions - Start
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Construct Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Main Functions - Start
    //----------------------------------------------------------------------//

    public static function get_schema_breadcrumbs()
    {
        $_get_schema_breadcrumbs = [
            ['page_name' => 'Home',                 'page_child' => '0',        'page_baseFileName' => 'home',                  'hide' => '0', 'disabled' => '0', 'class' => 'pg pg-home',      'type' => '_self', 'href' => '',                             'status' => '1'],
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
        return $_get_schema_breadcrumbs;
    }

    //----------------------------------------------------------------------//
    //	Main Functions - End
    //----------------------------------------------------------------------//

}