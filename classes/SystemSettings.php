<?php namespace Devnull\Breadcrumb\Classes;

use Devnull\Main\Models\Breadcrumb;
use Devnull\Main\Models\Seo;
use Devnull\Main\Models\Cookies;

class SystemSettings
{
	//----------------------------------------------------------------------//
	//	__construct Functions - Start
	//----------------------------------------------------------------------//

	function __construct(){}

	//----------------------------------------------------------------------//
	//	Main Functions - Start
	//----------------------------------------------------------------------//

	public static function get_config_default()
	{
		$_get_config_default    = "{\"use_plugin\":\"1\",\"use_redirect\":\"1\",\"use_plugin_logo\":\"1\"}";

		return array(['item' => SystemSettings::get_main_code(), 'value' => $_get_config_default]);
	}

	public static function get_config_footerList()
	{
		$_get_config_footerList = "{\"use_plugin_footer\":\"1\",\"footer_list\":\"6\",\"use_footerList\":\"1\",\"use_footerList_page\":\"1\", \"use_footerList_list\":\"1\",\"use_footerList_connect\":\"1\",\"use_footerList_subscribe\":\"1\",\"use_footerList_links\":\"1\",\"use_footerList_invert_on_buttons\":\"1\"}";

		return array(['item' => SystemSettings::get_footerList_code(), 'value' => $_get_config_footerList]);
	}

	public static function get_config_meta()
	{
		$_get_config_meta = "{\"use_plugin_meta\":\"1\",\"use_meta_html\":\"1\",\"use_meta_twi\":\"1\", \"use_meta_fb\":\"1\",\"use_meta_app\":\"1\",\"use_meta_api\":\"1\"}";

		return array(['item' => SystemSettings::get_meta_code(), 'value' => $_get_config_meta]);
	}

	public static function get_config_breadcrumbs()
	{
		$_get_config_breadcrumbs = "{\"use_plugin_breadcrumbs\":\"1\"}";

		return array(['item' => SystemSettings::get_breadcrumbs_code(), 'value' => $_get_config_breadcrumbs]);
	}

	public static function get_config_cookies()
	{
		$_get_config_cookies = "{\"use_plugin_cookies\":\"1\",\"use_popup\":\"1\",\"use_redirect\":\"1\",\"use_frontpage\":\"1\",\"use_which\":\"circle\",\"use_horizontal\":\"right\",\"use_vertical\":\"bottom\", \"use_text\":\"Cookies Notification\", \"use_text_more\":\"Gerekper.asia Uses Cookies\"}";

		return array(['item' => SystemSettings::get_cookies_code(), 'value' => $_get_config_cookies]);
	}

	public static function get_config_bakery()
	{
		$_get_config_bakery = "{\"use_plugin_bakery\":\"1\",\"footer_list\":\"6\",\"use_footerList\":\"1\",\"use_footerList_page\":\"1\", \"use_footerList_list\":\"1\",\"use_footerList_connect\":\"1\",\"use_footerList_subscribe\":\"1\",\"use_footerList_links\":\"1\",\"use_footerList_invert_on_buttons\":\"1\"}";

		return array(['item' => SystemSettings::get_bakery_code(), 'value' => $_get_config_bakery]);
	}

	public static function get_config_disqus()
	{
		$_get_config_disqus = "{\"use_plugin_disqus\":\"1\",\"use_disqus_count\":1:,\"disqus_count\":\"gerekper.disqus.com\"}";

		return array(['item' => SystemSettings::get_disqus_code(), 'value' => $_get_config_disqus]);
	}

	public static function get_config_tagm()
	{
		$_get_config_tagm = "{\"use_plugin_tagm\":\"1\",\"tagm_gid\":\"GTM-PRM4S3\"}";

		return array(['item' => SystemSettings::get_tagm_code(), 'value' => $_get_config_tagm]);
	}

	public static function get_config_robot()
	{
		$_get_config_robot = "{\"use_plugin_robot\":\"1\",\"redirectpage\":\"404\",\"use_robots\":\"1\",\"use_robottrap\":\"1\",\"use_forward_robot\":\"1\",\"use_invert_on_buttons\":\"1\"}";

		return array(['item' => SystemSettings::get_robot_code(), 'value' => $_get_config_robot]);
	}

	public static function get_config_robot_log()
	{
		$_get_config_robot_log = "{\"use_plugin_robot_log\":\"1\",\"use_plugin_human_log\":\"1\"}";

		return array(['item' => SystemSettings::get_robot_log_code(), 'value' => $_get_config_robot_log]);
	}

	public static function get_config_human()
	{
		$_get_config_human = "{\"use_plugin_human\":\"1\",\"redirectpage\":\"404\"}";

		return array(['item' => SystemSettings::get_human_code(), 'value' => $_get_config_human]);
	}

	public static function get_config_clearcache()
	{
		$_get_config_cache = "{\"use_plugin_cache\":\"1\",\"cms_cache_path\":\"/cms/cache\",\"cms_combiner_path\":\"/cms/combiner\",\"cms_twig_path\":\"/cms/twig\",\"framework_cache_path\":\"/framework/cache\",\"thumbnails_path\":\"/app/uploads/public\",\"cache_force_new_row\":\"1\",\"cache_chart_size\":\"200\",\"cache_chart_nochart\":\"0\",\"cache_delete_thumbs\":\"1\"}";

		return array(['item' => SystemSettings::get_clearcache_code(), 'value' => $_get_config_cache]);
	}

	//----------------------------------------------------------------------//
	//	Private Functions - Start
	//----------------------------------------------------------------------//

	public static function get_main_code()
	{
		return 'devnull_main_settings';
	}

	public static function get_human_code()
	{
		return 'devnull_main_humans';
	}

	public static function get_meta_code()
	{
		return 'devnull_main_meta';
	}

	public static function get_breadcrumbs_code()
	{
		return 'devnull_breadcrumb_breadcrumbs';
	}

	public static function get_cookies_code()
	{
		return 'devnull_main_cookies';
	}

	public static function get_bakery_code()
	{
		return 'devnull_main_bakery';
	}

	public static function get_disqus_code()
	{
		return 'devnull_main_disqus';
	}

	public static function get_tagm_code()
	{
		return 'devnull_main_tagm';
	}

	public static function get_robot_code()
	{
		return 'devnull_main_robot';
	}

	public static function get_robot_log_code()
	{
		return 'devnull_main_robot_log';
	}

	public static function get_clearcache_code()
	{
		return 'devnull_main_clearcache';
	}


	//----------------------------------------------------------------------//
	//	Overridden Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Shared Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Directive Functions - Ends
	//----------------------------------------------------------------------//

}
