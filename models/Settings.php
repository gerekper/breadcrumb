<?php namespace Devnull\Breadcrumb\Models;

use Model, DB;

class Settings extends Model
{
	public $implement               =   ['System.Behaviors.SettingsModel'];
	public $settingsCode            =   'devnull_main_settings';
	public $settingsFields          =   'fields.yaml';

	public static $_table           =   'system_settings';
	public static $_system_plugin   =   'system_plugin_versions';
	public static $_code_main       =   'Devnull.Main';

	//----------------------------------------------------------------------//
	//	__construct Functions - Start
	//----------------------------------------------------------------------//

	function __construct(){parent::__construct();}

	//----------------------------------------------------------------------//
	//	Main Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Shared Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
    //	Overridden Functions - Start
    //----------------------------------------------------------------------//

	public function afterUpdate()
	{
		((Settings::get('use_plugin') == FALSE)? $this->update_plugin_versions(TRUE) : $this->update_plugin_versions(FALSE));
	}

	//----------------------------------------------------------------------//
    //	Shared Functions - Start
    //----------------------------------------------------------------------//

	private function update_plugin_versions($_value)
	{
		DB::table(Settings::$_system_plugin)->where('code', Settings::$_code_main)->update(['is_disabled' => $_value]);
	}

	//----------------------------------------------------------------------//
    //	Settings Functions - End
    //----------------------------------------------------------------------//

}