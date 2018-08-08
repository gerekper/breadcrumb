<?php namespace Devnull\Breadcrumb\Components;

use Cms\Classes\ComponentBase;
use Devnull\Main\Models\Breadcrumb;
use Devnull\Main\Models\SettingsBreadcrumbs;
use Illuminate\Support\Facades\Request;

class Breadcrumbs extends ComponentBase
{
	//----------------------------------------------------------------------//
	//	__construct Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Main Functions - Start
	//----------------------------------------------------------------------//

	public function componentDetails()
	{
		return [
			'name'          =>  'devnull.main::lang.components.breadcrumbs_components_name',
			'description'   =>  'devnull.main::lang.components.breadcrumbs_components_description'
		];
	}

	public function onRun()
	{
		$this->page['use_plugin_breadcrumbs']   =   SettingsBreadcrumbs::get('use_plugin_breadcrumbs');
		$this->page['domain']                   =   Request::root();
		$this->page['breadcrumbs']              =   Breadcrumb::drawings($this->page->baseFileName);
	}

	public function init(){}
	public function onInit(){}
	public function onStart(){}
	public function onBeforePageStart(){}
	public function onEnd(){}
	protected function loadItem() {}

	//----------------------------------------------------------------------//
	//	Breadcrumbs Functions - End
	//----------------------------------------------------------------------//
}