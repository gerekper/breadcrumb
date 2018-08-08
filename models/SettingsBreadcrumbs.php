<?php namespace Devnull\Breadcrumb\Models;

use Model, DB, BackendMenu;

class SettingsBreadcrumbs extends Model
{
	public $implement               =   ['System.Behaviors.SettingsModel'];
	public $settingsCode            =   'devnull_main_breadcrumbs';
	public $settingsFields          =   'fields.yaml';

	public static $_table           =   'system_settings';
	public static $_system_plugin   =   'system_plugin_versions';

	//----------------------------------------------------------------------//
	//	__construct Functions - Start
	//----------------------------------------------------------------------//

	function __construct(){parent::__construct();}

	//----------------------------------------------------------------------//
	//	Main Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Overridden Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Shared Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	SettingsBreadcrumbs Functions - End
	//----------------------------------------------------------------------//
}