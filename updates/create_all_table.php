<?php namespace Devnull\Main\Updates;

use DB, Schema;
use Devnull\Main\Classes\InstallMain;
use October\Rain\Database\Updates\Migration;
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
 * @package    Devnull.updates| Octobercms
 * @author     devnull <www.gerekper.asia>
 * @copyright  2012-2019 Gerekper Inc
 * @license    http://www.gerekper.asia/license/modules.txt
 * @version    1.0.0
 * @link       http://www.gerekper.asia/package/toolbox
 * @see        http://www.github.com/gerekper/toolbox
 * @since      File available since Release 1.0.0
 * @deprecated -
 */

class CreateAllTable extends Migration

    //----------------------------------------------------------------------//
    //	Constant Functions - Start
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Constant Functions - End
    //----------------------------------------------------------------------//
{
    //----------------------------------------------------------------------//
    //	Construct Functions - Start
    //----------------------------------------------------------------------//

    function __construct()
    {
        $this->_table_engine        =   'InnoDB';
        $this->_main_breadcrumbs    =   Breadcrumb::$_table;
        $this->_main_testing        =   'gp_main_testing';

        $this->_down =  [$this->_main_breadcrumbs];

        $this->installations          =   new InstallMain();
    }

    //----------------------------------------------------------------------//
    //	Construct Functions - End
    //----------------------------------------------------------------------//

    //----------------------------------------------------------------------//
    //	Main Functions - Start
    //----------------------------------------------------------------------//

    public function up()
    {
        $this->down($this->_down);
        $this->install_main_breadcrumb();
    }

    public function down() {foreach($this->_down as $_downing){$this->installations->remove_table($_downing);}}

    //----------------------------------------------------------------------//
    //	Schema Table - Start
    //----------------------------------------------------------------------//

    private function install_main_breadcrumb()
    {
        $this->installations->remove_table($this->_main_breadcrumbs);
        Schema::create($this->_main_breadcrumbs, function ($table)
        {
            $table->engine = $this->_table_engine;
            $table->increments('id')->index();
            $table->string('page_name', 100);
            $table->string('page_child', 100);
            $table->string('page_baseFileName', 200);
            $table->string('class', 50)->default('pg pg-home');
            $table->string('href', 100);
            $table->enum('type', array('_blank', '_parent', '_self', '_top'));
            $table->tinyInteger('hide')->default(0);
            $table->tinyInteger('disabled')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
        $this->install_main_breadcrumb_set();
    }

    private function install_main_breadcrumb_set()
    {
        DB::Statement("ALTER TABLE `". $this->_main_breadcrumbs . "` CHANGE `type` `type` SET('_blank','_parent', '_self', '_top') CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT '_self';");
    }

    //----------------------------------------------------------------------//
    //	Main Functions - End
    //----------------------------------------------------------------------//
}
