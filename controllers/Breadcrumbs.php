<?php namespace Devnull\Main\Controllers;

use DB, Flash, Lang, Backend, BackendMenu;
use Backend\Classes\Controller;
use Devnull\Main\Models\Breadcrumb;

/**                _                             _
__ _  ___ _ __ ___| | ___ __   ___ _ __ __ _ ___(_) __ _
/ _` |/ _ \ '__/ _ \ |/ / '_ \ / _ \ '__/ _` / __| |/ _` |
| (_| |  __/ | |  __/   <| |_) |  __/ | | (_| \__ \ | (_| |
\__, |\___|_|  \___|_|\_\ .__/ \___|_|(_)__,_|___/_|\__,_|
|___/                   |_|

 * This is a gerekper.main[main] for OctoberCMS
 *
 * @category   Gerekper+ Addons | Toolbox Plugin File
 * @package    Devnull.breadcrumb.controllers | Octobercms
 * @author     devnull <www.gerekper.asia>
 * @copyright  2012-2019 Gerekper Inc
 * @license    http://www.gerekper.asia/license/modules.txt
 * @version    1.0.0
 * @link       http://www.gerekper.asia/package/toolbox
 * @see        http://www.github.com/gerekper/toolbox
 * @since      File available since Release 1.0.0
 * @deprecated -
 */

class Breadcrumbs extends Controller
{
    //----------------------------------------------------------------------//
    //	Constant Functions - Start
    //----------------------------------------------------------------------//

    public $implement = '';
    public $formConfig = '';
    public $listConfig = '';

    //----------------------------------------------------------------------//
    //	Constant Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	__construct Functions - Start
    //----------------------------------------------------------------------//

    public function __construct()
    {
        parent::__construct();
    }

    //----------------------------------------------------------------------//
    //	Override Functions - End
    //----------------------------------------------------------------------//

    public function index()
    {}

    //----------------------------------------------------------------------//
    //	Shared Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	OnAjax Functions - End
    //----------------------------------------------------------------------//

    public function onDoTruncate()
    {
        if (Breadcrumb::DoTruncate() == TRUE)
            Flash::Success(Lang::get('devnull.breadcrumb::lang.main.truncate_process'));
        else
            FLash::Warning(Lang::get('devnull.breadcrumb::lang.main.truncate_failed'));

        return true ; // return to admin; TODO:
    }

    public function onDoDefault()
    {
        if (Breadcrumb::DoDefault() == TRUE)
            Flash::Success(Lang::get('devnull.breadcrumb::lang.main.default_success'));
        else
            Flash::Warning(Lang::get('devnull.breadcrumb::lang.main.default_failed'));

        return true; // return to admin :TODO:
    }

    //----------------------------------------------------------------------//
    //	BreadCrumbs Controller - End
    //----------------------------------------------------------------------//

}