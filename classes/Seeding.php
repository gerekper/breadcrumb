<?php namespace Devnull\Breadcrumb\Classes;

class Seeding
{
	//----------------------------------------------------------------------//
	//	Construct Functions - Start
	//----------------------------------------------------------------------//

	function __construct()
	{
		$this->_schema          =   [];
	}

	//----------------------------------------------------------------------//
	//	Seeding Functions - Start
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

	public static function get_schema_meta_directive()
	{
		$get_schema_directive = [
			['meta_id' => '1',   'type' => 'http-equiv',    'property' => 'Expires',                                'category' => 'html',          'content' => '0',                                                        'status' => TRUE],
			['meta_id' => '1',   'type' => 'http-equiv',    'property' => 'Pragma',                                 'category' => 'html',          'content' => 'no-cache',                                                 'status' => TRUE],
			['meta_id' => '1',   'type' => 'http-equiv',    'property' => 'Cache-Control',                          'category' => 'html',          'content' => 'no-cache',                                                 'status' => TRUE],
			['meta_id' => '1',   'type' => 'http-equiv',    'property' => 'Cache-Control',                          'category' => 'html',          'content' => 'no',                                                       'status' => TRUE],
			['meta_id' => '1',   'type' => 'http-equiv',    'property' => 'x-dns-prefetch-control',                 'category' => 'html',          'content' => 'off',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'http-equiv',    'property' => 'content-type',                           'category' => 'html',          'content' => 'text/html;charset=UTF-8',                                  'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'description',                            'category' => 'html',          'content' => 'this is the description',                                  'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'subject',                                'category' => 'html',          'content' => 'this is the subject',                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'author',                                 'category' => 'html',          'content' => 'this page is the author',                                  'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'keywords',                               'category' => 'html',          'content' => 'keywords for this page',                                   'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'google',                                 'category' => 'html',          'content' => 'translate',                                                'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'revisit-after',                          'category' => 'html',          'content' => 'period',                                                   'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'copyright',                              'category' => 'html',          'content' => 'text',                                                     'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'application-name',                       'category' => 'html',          'content' => 'text',                                                     'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'googlebot',                              'category' => 'html',          'content' => 'noodp',                                                    'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'abstract',                               'category' => 'html',          'content' => 'text',                                                     'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'viewport',                               'category' => 'html',          'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no',    'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'distribution',                           'category' => 'html',          'content' => 'Global',                                                   'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'rating',                                 'category' => 'html',          'content' => 'General',                                                  'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'target',                                 'category' => 'html',          'content' => 'All',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'HandheldFriendly',                       'category' => 'html',          'content' => 'True',                                                     'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'MobileOptimized',                        'category' => 'html',          'content' => '320',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'apple-mobile-web-app-capable',           'category' => 'html',          'content' => 'yes',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'apple-touch-fullscreen',                 'category' => 'html',          'content' => 'yes',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'apple-mobile-web-app-status-bar-style',  'category' => 'html',          'content' => 'yes',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'url',                                    'category' => 'html',          'content' => 'http://www.gerekper.asia',                                 'status' => TRUE],
			['meta_id' => '1',   'type' => 'rel',           'property' => 'author',                                 'category' => 'html',          'content' => 'https://plus.google.com/',                                 'status' => TRUE],
			['meta_id' => '1',   'type' => 'rel',           'property' => 'publisher',                              'category' => 'html',          'content' => 'https://plus.google.com/',                                 'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'og:title',                               'category' => 'facebook',      'content' => 'title of page',                                            'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'og:type',                                'category' => 'facebook',      'content' => 'article',                                                  'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'og:image',                               'category' => 'facebook',      'content' => 'http://www.iacquire.com/some-thumbnail.jpg',               'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'og:locale',                              'category' => 'facebook',      'content' => 'en_US',                                                    'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'og:url',                                 'category' => 'facebook',      'content' => 'http://blog.iacquire.com',                                 'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'og:description',                         'category' => 'facebook',      'content' => 'description',                                              'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'fb:app_id',                              'category' => 'facebook',      'content' => 'APPID',                                                    'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'fb:admins',                              'category' => 'facebook',      'content' => 'USER_ID',                                                  'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'og:site_name',                           'category' => 'facebook',      'content' => 'Imdb',                                                     'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'al:ios:url',                             'category' => 'facebook',      'content' => 'example://applinks',                                       'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'al:ios:app_store_id',                    'category' => 'facebook',      'content' => '12345',                                                    'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'al:ios:app_name',                        'category' => 'facebook',      'content' => 'AppName',                                                  'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'al:android:url',                         'category' => 'facebook',      'content' => 'sharesample://story/1234',                                 'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'al:android:package',                     'category' => 'facebook',      'content' => 'com.facebook.samples.sharesample',                         'status' => TRUE],
			['meta_id' => '1',   'type' => 'property',      'property' => 'al:android:app_name',                    'category' => 'facebook',      'content' => 'ShareSample',                                              'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:card',                           'category' => 'twitter',       'content' => 'summary, photo, gallery, app etc.',                        'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:site',                           'category' => 'twitter',       'content' => 'Twitter @username',                                        'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:url',                            'category' => 'twitter',       'content' => 'URL',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:title',                          'category' => 'twitter',       'content' => 'text',                                                     'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:description',                    'category' => 'twitter',       'content' => 'description',                                              'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:image',                          'category' => 'twitter',       'content' => 'url',                                                      'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:country',                    'category' => 'twitter',       'content' => 'SG',                                                       'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:name:iphone',                'category' => 'twitter',       'content' => 'Cannonball',                                               'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:id:iphone',                  'category' => 'twitter',       'content' => '929750075',                                                'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:url:iphone',                 'category' => 'twitter',       'content' => 'cannonball://poem/5149e249222f9e600a7540ef',               'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:id:ipad',                    'category' => 'twitter',       'content' => 'Cannonball',                                               'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:url:ipad',                   'category' => 'twitter',       'content' => '929750075',                                                'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:name:googleplay',            'category' => 'twitter',       'content' => 'Cannonball',                                               'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:id:googleplay',              'category' => 'twitter',       'content' => 'cannonball://poem/5149e249222f9e600a7540ef',               'status' => TRUE],
			['meta_id' => '1',   'type' => 'name',          'property' => 'twitter:app:url:googleplay',             'category' => 'twitter',       'content' => 'http://cannonball.fabric.io/poem/5149e249222f9e600a7540ef','status' => TRUE],

		];
		return $get_schema_directive;
	}

	public static function get_schema_meta_ldirective()
	{
		$_get_schema_meta_ldirective = [
			['type' => 'http-equiv',    'property' => 'Expires',                                'category' => 'html',          'content' => '0',                                                        'status' => TRUE],
			['type' => 'http-equiv',    'property' => 'Pragma',                                 'category' => 'html',          'content' => 'no-cache',                                                 'status' => TRUE],
			['type' => 'http-equiv',    'property' => 'Cache-Control',                          'category' => 'html',          'content' => 'no-cache',                                                 'status' => TRUE],
			['type' => 'http-equiv',    'property' => 'Cache-Control',                          'category' => 'html',          'content' => 'no',                                                       'status' => TRUE],
			['type' => 'http-equiv',    'property' => 'x-dns-prefetch-control',                 'category' => 'html',          'content' => 'off',                                                      'status' => TRUE],
			['type' => 'http-equiv',    'property' => 'content-type',                           'category' => 'html',          'content' => 'text/html;charset=UTF-8',                                  'status' => TRUE],
			['type' => 'name',          'property' => 'description',                            'category' => 'html',          'content' => 'this is the description',                                  'status' => TRUE],
			['type' => 'name',          'property' => 'subject',                                'category' => 'html',          'content' => 'this is the subject',                                      'status' => TRUE],
			['type' => 'name',          'property' => 'author',                                 'category' => 'html',          'content' => 'this page is the author',                                  'status' => TRUE],
			['type' => 'name',          'property' => 'keywords',                               'category' => 'html',          'content' => 'keywords for this page',                                   'status' => TRUE],
			['type' => 'name',          'property' => 'google',                                 'category' => 'html',          'content' => 'translate',                                                'status' => TRUE],
			['type' => 'name',          'property' => 'revisit-after',                          'category' => 'html',          'content' => 'period',                                                   'status' => TRUE],
			['type' => 'name',          'property' => 'copyright',                              'category' => 'html',          'content' => 'text',                                                     'status' => TRUE],
			['type' => 'name',          'property' => 'application-name',                       'category' => 'html',          'content' => 'text',                                                     'status' => TRUE],
			['type' => 'name',          'property' => 'googlebot',                              'category' => 'html',          'content' => 'noodp',                                                    'status' => TRUE],
			['type' => 'name',          'property' => 'abstract',                               'category' => 'html',          'content' => 'text',                                                     'status' => TRUE],
			['type' => 'name',          'property' => 'viewport',                               'category' => 'html',          'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no',    'status' => TRUE],
			['type' => 'name',          'property' => 'distribution',                           'category' => 'html',          'content' => 'Global',                                                   'status' => TRUE],
			['type' => 'name',          'property' => 'rating',                                 'category' => 'html',          'content' => 'General',                                                  'status' => TRUE],
			['type' => 'name',          'property' => 'target',                                 'category' => 'html',          'content' => 'All',                                                      'status' => TRUE],
			['type' => 'name',          'property' => 'HandheldFriendly',                       'category' => 'html',          'content' => 'True',                                                     'status' => TRUE],
			['type' => 'name',          'property' => 'MobileOptimized',                        'category' => 'html',          'content' => '320',                                                      'status' => TRUE],
			['type' => 'name',          'property' => 'apple-mobile-web-app-capable',           'category' => 'html',          'content' => 'yes',                                                      'status' => TRUE],
			['type' => 'name',          'property' => 'apple-touch-fullscreen',                 'category' => 'html',          'content' => 'yes',                                                      'status' => TRUE],
			['type' => 'name',          'property' => 'apple-mobile-web-app-status-bar-style',  'category' => 'html',          'content' => 'yes',                                                      'status' => TRUE],
			['type' => 'name',          'property' => 'url',                                    'category' => 'html',          'content' => 'http://www.gerekper.asia',                                 'status' => TRUE],
			['type' => 'rel',           'property' => 'author',                                 'category' => 'html',          'content' => 'https://plus.google.com/',                                 'status' => TRUE],
			['type' => 'rel',           'property' => 'publisher',                              'category' => 'html',          'content' => 'https://plus.google.com/',                                 'status' => TRUE],
			['type' => 'property',      'property' => 'og:title',                               'category' => 'facebook',      'content' => 'title of page',                                            'status' => TRUE],
			['type' => 'property',      'property' => 'og:type',                                'category' => 'facebook',      'content' => 'article',                                                  'status' => TRUE],
			['type' => 'property',      'property' => 'og:image',                               'category' => 'facebook',      'content' => 'http://www.iacquire.com/some-thumbnail.jpg',               'status' => TRUE],
			['type' => 'property',      'property' => 'og:locale',                              'category' => 'facebook',      'content' => 'en_US',                                                    'status' => TRUE],
			['type' => 'property',      'property' => 'og:url',                                 'category' => 'facebook',      'content' => 'http://blog.iacquire.com',                                 'status' => TRUE],
			['type' => 'property',      'property' => 'og:description',                         'category' => 'facebook',      'content' => 'description',                                              'status' => TRUE],
			['type' => 'property',      'property' => 'fb:app_id',                              'category' => 'facebook',      'content' => 'APPID',                                                    'status' => TRUE],
			['type' => 'property',      'property' => 'fb:admins',                              'category' => 'facebook',      'content' => 'USER_ID',                                                  'status' => TRUE],
			['type' => 'property',      'property' => 'og:site_name',                           'category' => 'facebook',      'content' => 'Imdb',                                                     'status' => TRUE],
			['type' => 'property',      'property' => 'al:ios:url',                             'category' => 'facebook',      'content' => 'example://applinks',                                       'status' => TRUE],
			['type' => 'property',      'property' => 'al:ios:app_store_id',                    'category' => 'facebook',      'content' => '12345',                                                    'status' => TRUE],
			['type' => 'property',      'property' => 'al:ios:app_name',                        'category' => 'facebook',      'content' => 'AppName',                                                  'status' => TRUE],
			['type' => 'property',      'property' => 'al:android:url',                         'category' => 'facebook',      'content' => 'sharesample://story/1234',                                 'status' => TRUE],
			['type' => 'property',      'property' => 'al:android:package',                     'category' => 'facebook',      'content' => 'com.facebook.samples.sharesample',                         'status' => TRUE],
			['type' => 'property',      'property' => 'al:android:app_name',                    'category' => 'facebook',      'content' => 'ShareSample',                                              'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:card',                           'category' => 'twitter',       'content' => 'summary, photo, gallery, app etc.',                        'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:site',                           'category' => 'twitter',       'content' => 'Twitter @username',                                        'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:url',                            'category' => 'twitter',       'content' => 'URL',                                                      'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:title',                          'category' => 'twitter',       'content' => 'text',                                                     'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:description',                    'category' => 'twitter',       'content' => 'description',                                              'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:image',                          'category' => 'twitter',       'content' => 'url',                                                      'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:country',                    'category' => 'twitter',       'content' => 'SG',                                                       'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:name:iphone',                'category' => 'twitter',       'content' => 'Cannonball',                                               'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:id:iphone',                  'category' => 'twitter',       'content' => '929750075',                                                'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:url:iphone',                 'category' => 'twitter',       'content' => 'cannonball://poem/5149e249222f9e600a7540ef',               'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:id:ipad',                    'category' => 'twitter',       'content' => 'Cannonball',                                               'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:url:ipad',                   'category' => 'twitter',       'content' => '929750075',                                                'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:name:googleplay',            'category' => 'twitter',       'content' => 'Cannonball',                                               'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:id:googleplay',              'category' => 'twitter',       'content' => 'cannonball://poem/5149e249222f9e600a7540ef',               'status' => TRUE],
			['type' => 'name',          'property' => 'twitter:app:url:googleplay',             'category' => 'twitter',       'content' => 'http://cannonball.fabric.io/poem/5149e249222f9e600a7540ef','status' => TRUE],

		];
		return $_get_schema_meta_ldirective;
	}

	public static function get_schema_meta()
	{
		$_get_schema_meta = [
			['page' =>  'home',  'status'    =>  TRUE],
			['page' =>  'error', 'status'    =>  TRUE],
			['page' =>  '400',   'status'    =>  TRUE],
			['page' =>  '404',   'status'    =>  TRUE],
		];
		return $_get_schema_meta;
	}

	public static function get_schema_robot()
	{
		$_get_schema_robot = [
			['agent'    =>  '*',        'status' => TRUE],
			['agent'    =>  'googlebot', 'status' => TRUE]
		];

		return $_get_schema_robot;
	}

	public static function get_schema_robot_agent()
	{
		$_get_schema_robot_agent = [
			['nameId'        =>  '*',
				'name'          =>  '*',
				'details_url'   =>  Null,
				'cover_url'     =>  Null,
				'owner_name'    =>  Null,
				'owner_url'     =>  Null,
				'owner_email'   =>  Null,
				'ostatus'       =>  Null,
				'purpose'       =>  Null,
				'type'          =>  Null,
				'platform'      =>  Null,
				'avail'         =>  Null,
				'excl_agent'    =>  Null,
				'noindex'       =>  Null,
				'nofollow'      =>  Null,
				'host'          =>  Null,
				'from'          =>  Null,
				'user_agent'    =>  Null,
				'lang'          =>  Null,
				'desc'          =>  "All",
				'history'       =>  Null,
				'env'           =>  Null,
				'status'        =>  True],

			['nameId'        =>  'googlebot',
				'name'          =>  'Googlebot',
				'details_url'   =>  "http://www.googlebot.com/bot.html",
				'cover_url'     =>  "http://www.googlebt.com/",
				'owner_name'    =>   'Google Inc.',
				'owner_url'     =>  "http://www.google.com",
				'owner_email'   =>  'googlebot@google.com',
				'ostatus'       =>  'active',
				'purpose'       =>  'indexing',
				'type'          =>  'standalone',
				'platform'      =>  'Linux',
				'avail'         =>  'none', 'agt_excl' => 'yes',
				'excl_agent'    =>  'googlebot',
				'noindex'       =>  'yes',
				'nofollow'      =>  'yes',
				'host'          =>  'googlebot.com',
				'from'          =>  'yes',
				'user_agent'    =>  'Googlebot/2.X (+http://www.googlebot.com/bot.html)',
				'lang'          =>  'C++',
				'desc'          =>  "Google's Crawler",
				'history'       =>  'Developed by Google Inc',
				'env'           =>  'commercial',
				'status'        =>   True],

			['nameId'        =>  'askjeeves',
				'name'          =>  'AskJeeves',
				'details_url'   =>  "http://www.ask.com/",
				'cover_url'     =>  "http://www.ask.com/",
				'owner_name'    =>  'Ask Jeeves, Inc.',
				'owner_url'     =>  "http://www.ask.com/",
				'owner_email'   =>  'postmaster@ask.com',
				'ostatus'       =>  'active',
				'purpose'       =>  'indexing, maintenance',
				'type'          =>  'standalone',
				'platform'      =>  'Linux',
				'avail'         =>  'none', 'agt_excl' => 'yes',
				'excl_agent'    =>  'Teoma or Ask Jeeves or Jeeves',
				'noindex'       =>  'yes',
				'nofollow'      =>  'yes',
				'host'          =>  'ez*.directhit.com',
				'from'          =>  'no',
				'user_agent'    =>  'Mozilla/2.0 (compatible; Ask Jeeves/Teoma)',
				'lang'          =>  'C++',
				'desc'          =>  "Ask Jeeves / Teoma spider",
				'history'       =>  'Developed by Direct Hit Technologies which was aquired by Ask Jeeves in 2000.',
				'env'           =>  'service',
				'status'        =>   True],
		];

		return $_get_schema_robot_agent;
	}

	public static function get_schema_robot_directive()
	{
		$_get_schema_robot_directive = [
			['robot_id' => '1', 'position' => '0', 'type' => 'Disallow', 'data' => '/sex'],
			['robot_id' => '1', 'position' => '1', 'type' => 'Disallow', 'data' => '/lanjiao'],
			['robot_id' => '2', 'position' => '0', 'type' => 'Disallow', 'data' => '/pukimak'],
			['robot_id' => '2', 'position' => '1', 'type' => 'Disallow', 'data' => '/babi'],
			['robot_id' => '2', 'position' => '2', 'type' => 'Disallow', 'data' => '/kkpl'],
		];

		return $_get_schema_robot_directive;
	}

	public static function get_schema_robot_logs() {}

	public static function get_schema_human()
	{
		$_get_schema_human = [
			['attribution' =>   'TEAM',         'status' => true],
			['attribution' =>   'THANKS',       'status' => true],
			['attribution' =>   'SITE',         'status' => true],
			['attribution' =>   'TECHNOLOGY',   'status' => true],
		];

		return $_get_schema_human;
	}

	public static function get_schema_human_config()
	{
		$_get_schema_human_config = [
			['title' => 'robots.txt',
				'desc'  => 'This is the sample of syntax that is needed to be in the robots.txt',
				'value' =>
					'# www.robotstxt.org/
# www.google.com/support/webmasters/bin/answer.py?hl=en&answer=156449
# To block the entire site, use a forward slash.
# User-agent: *
# Disallow: /
# To block a directory and everything in it, follow the directory name with a forward slash.
# Disallow: /junk-directory/
# To remove a specific image from Google Images, add the following:
# User-agent: Googlebot-Image
# Disallow: /images/dogs.jpg
# To remove all images on your site from Google Images:
# User-agent: Googlebot-Image
# Disallow: /
# To block files of a specific file type (for example, .gif), use the following:
# User-agent: Googlebot
# Disallow: /*.gif$', 'status' => true, 'url' => 'http://localhost/sitemap.xml'],
			['title'    =>  'humans.info',
				'desc'      =>  'This is the sample of Default headers in the humans.txt',
				'value'     =>  "Team, Thanks, Site, Technology",
				'status'    =>  true,
				'url'       =>  "http://localhost/humans.info",
			],
			['title'    =>  'humans2.info',
				'desc'      =>  'This is the sample of Default subheaders in the humans.txt',
				'value'     =>  "Developer, Doctype, Site, Facebook, Location, Source, Language, Components, Tools, IDE, PHP, MySQL, SQLite, FastCGI, MemCache, Others",
				'status'    =>  true,
				'url'       =>  "http://localhost/humans2.info",
			],
			['title'    =>  'robots.url',
				'desc'  =>  'This is the sample of the default URLs for download of Agents',
				'value' =>  "https://www.aqtronix.com/downloads/WebKnight/Robots/Robots.xml",
				'status'=>  True,
				'url'   =>  "http://localhost/robots.url",
			],
		];

		Return $_get_schema_human_config;
	}

	public static function get_schema_human_info()
	{
		$_get_schema_human_info = [
			['human_id' => '1', 'position' => '0', 'field' => 'Developer',          'value' => 'Richard Irwan Shah / devnull'               ],
			['human_id' => '1', 'position' => '1', 'field' => 'Site',               'value' => 'http://www.gerekper.asia'                   ],
			['human_id' => '1', 'position' => '2', 'field' => 'Facebook',           'value' => 'http://www.facebook.com/richard.irwanshah'  ],
			['human_id' => '1', 'position' => '3', 'field' => 'Location',           'value' => 'Singapore',                                 ],
			['human_id' => '2', 'position' => '0', 'field' => 'Source',             'value' => 'OctoberCMS, Laravel 5'                      ],
			['human_id' => '3', 'position' => '0', 'field' => 'Last Update',        'value' => '2015/08/03'                                 ],
			['human_id' => '3', 'position' => '1', 'field' => 'Language',           'value' => 'English'                                    ],
			['human_id' => '3', 'position' => '2', 'field' => 'Doctype',            'value' => 'HTML5, CSS3'                               ],
			['human_id' => '3', 'position' => '3', 'field' => 'Components',         'value' => 'Laravel 5, Packagist, OctoberCMS'           ],
			['human_id' => '3', 'position' => '4', 'field' => 'Tools',              'value' => 'PHP & MySQL',                               ],
			['human_id' => '3', 'position' => '5', 'field' => 'IDE',                'value' => 'PHPStorm'                                   ],
			['human_id' => '4', 'position' => '0', 'field' => 'Nginx',              'value' => 'http://www.nginx.org'                     ],
			['human_id' => '4', 'position' => '1', 'field' => 'PHP',                'value' => 'http://www.php.net'                       ],
			['human_id' => '4', 'position' => '2', 'field' => 'MySQL',              'value' => 'http://www.mysql.com'                     ],
			['human_id' => '4', 'position' => '3', 'field' => 'SQLite',             'value' => 'http://www.sqlite.org'                    ],
			['human_id' => '4', 'position' => '4', 'field' => 'FastCGI',            'value' => 'http://www.fastcgi.com'                   ],
			['human_id' => '4', 'position' => '5', 'field' => 'MemCache',           'value' => 'http://www.memcached.org'                 ],
		];

		return $_get_schema_human_info;
	}

	public static function get_schema_human_ascii()
	{
		$_get_schema_human_ascii = [
			['title' => 'signature',
				'desc' => 'This is the sample of signature that is not needed to be in humans.txt',
				'value' => <<<EOT
,---,---,---,---,---,---,---,---,---,---,---,---,---,-------,
| ~ | 1 | 2 | 3 | 4 | 5 | 6 | 6 | 6 | 9 | 0 | [ | ] | <-    |
|---'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-----|
| ->| | " | , | . | D | E | V | N | U | L | L | / | = |  \  |
|-----',--',--',--',--',--',--',--',--',--',--',--',--'-----|
| Caps | G | E | R | E | K | . | P | E | R | ! | ! |  Enter |
|------'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'-,-'--------|
|     | I | N | C | . | N | E | T | W | O | R | K |         |
|------,-',--'--,'---'---'---'---'---'---'-,-'---',--,------|
| ctrl |  | alt |                          | alt  |  | ctrl |
'------'  '-----'--------------------------'------'  '------'
EOT
				,'url' => 'http://localhost/humans.txt', 'status' => TRUE]];
				return $_get_schema_human_ascii;
	}

	public static function get_schema_human_sig()
	{
		$_get_schema_human_sig = [
			[   'title' => 'humans.txt',
				'desc'  => 'This is the sample of syntax that is needed to be in the humans.txt',
				'value' => "
                     _                             _
  __ _  ___ _ __ ___| | ___ __   ___ _ __ __ _ ___(_) __ _
 / _` |/ _ \ '__/ _ \ |/ / '_ \ / _ \ '__/ _` / __| |/ _` |
| (_| |  __/ | |  __/   <| |_) |  __/ | | (_| \__ \ | (_| |
 \__, |\___|_|  \___|_|\_\ .__/ \___|_|(_)__,_|___/_|\__,_|
 |___/                   |_|
    ",
				'url' => 'http://localhost/humans.txt', 'status' => TRUE]];

		return $_get_schema_human_sig;
	}

	public function get_schema_bakery()
	{
		$get_schema_bakery = [

		];

		return $get_schema_bakery;
	}

	public function get_schema_bakery_category()
	{
		$_get_schema_bakery_category = [
			['category' => 'Bagel',     'position' => '0', 'status' => true, 'alt' => 'Food, Bakery, Bagel',        'url' => 'food/bakery/bagel',       'target' => '_self'],
			['category' => 'Bars',      'position' => '1', 'status' => true, 'alt' => 'Food, Bakery, Bars',         'url' => 'food/bakery/bars',        'target' => '_self'],
			['category' => 'Bread',     'position' => '2', 'status' => true, 'alt' => 'Food, Bakery, Bread',        'url' => 'food/bakery/bread',       'target' => '_self'],
			['category' => 'Brownie',   'position' => '3', 'status' => true, 'alt' => 'Food, Bakery, Brownie',      'url' => 'food/bakery/brownie',     'target' => '_self'],
			['category' => 'Cake',      'position' => '4', 'status' => true, 'alt' => 'Food, Bakery, Cake',         'url' => 'food/bakery/cake',        'target' => '_self'],
			['category' => 'Cake Jars', 'position' => '5', 'status' => true, 'alt' => 'Food, Bakery, Cake Jars',    'url' => 'food/bakery/cake-jars',   'target' => '_self'],
			['category' => 'Candy',     'position' => '4', 'status' => true, 'alt' => 'Food, Bakery, Candy',        'url' => 'food/bakery/candy',       'target' => '_self'],
			['category' => 'Chips',     'position' => '6', 'status' => true, 'alt' => 'Food, Bakery, Chips',        'url' => 'food/bakery/chips',       'target' => '_self'],
			['category' => 'Cobbler',   'position' => '7', 'status' => true, 'alt' => 'Food, Bakery, Cobbler',      'url' => 'food/bakery/cobbler',     'target' => '_self'],
			['category' => 'Croissant', 'position' => '8', 'status' => true, 'alt' => 'Food, Bakery, Croissant',    'url' => 'food/bakery/croissant',   'target' => '_self'],
			['category' => 'Cupcakes',  'position' => '9', 'status' => true, 'alt' => 'Food, Bakery, Cupcakes',     'url' => 'food/bakery/cupcakes',    'target' => '_self'],
			['category' => 'Custard',   'position' => '10', 'status' => true, 'alt' => 'Food, Bakery, Custard',     'url' => 'food/bakery/custard',     'target' => '_self'],
			['category' => 'Donut',     'position' => '11', 'status' => true, 'alt' => 'Food, Bakery, Donut',       'url' => 'food/bakery/donut',       'target' => '_self'],
			['category' => 'Frostings', 'position' => '12', 'status' => true, 'alt' => 'Food, Bakery, Frostings',   'url' => 'food/bakery/frostings',   'target' => '_self'],
			['category' => 'Frozen',    'position' => '13', 'status' => true, 'alt' => 'Food, Bakery, Frozen',      'url' => 'food/bakery/frozen',      'target' => '_self'],
			['category' => 'Fruits',    'position' => '14', 'status' => true, 'alt' => 'Food, Bakery, Fruits',      'url' => 'food/bakery/fruits',      'target' => '_self'],
			['category' => 'Granola',   'position' => '15', 'status' => true, 'alt' => 'Food, Bakery, Granola',     'url' => 'food/bakery/granola',     'target' => '_self'],
			['category' => 'Kueh Mueh', 'position' => '16', 'status' => true, 'alt' => 'Food, Bakery, Kueh Mueh',   'url' => 'food/bakery/kueh-mueh',   'target' => '_self'],
			['category' => 'Kueh Raya', 'position' => '17', 'status' => true, 'alt' => 'Food, Bakery, Kueh Raya',   'url' => 'food/bakery/kueh-raya',   'target' => '_self'],
			['category' => 'Macaron',   'position' => '18', 'status' => true, 'alt' => 'Food, Bakery, Macaron',     'url' => 'food/bakery/macaron',     'target' => '_self'],
			['category' => 'Muffins',   'position' => '19', 'status' => true, 'alt' => 'Food, Bakery, Muffins',     'url' => 'food/bakery/muffins',     'target' => '_self'],
			['category' => 'Pasties',   'position' => '20', 'status' => true, 'alt' => 'Food, Bakery, Pasties',     'url' => 'food/bakery/pasties',     'target' => '_self'],
			['category' => 'Pastry',    'position' => '21', 'status' => true, 'alt' => 'Food, Bakery, Pastry',      'url' => 'food/bakery/pastry',      'target' => '_self'],
			['category' => 'Pavlova',   'position' => '22', 'status' => true, 'alt' => 'Food, Bakery, Pavlova',     'url' => 'food/bakery/pavalova',    'target' => '_self'],
			['category' => 'Pie',       'position' => '23', 'status' => true, 'alt' => 'Food, Bakery, Pie',         'url' => 'food/bakery/pie',         'target' => '_self'],
			['category' => 'Puffs',     'position' => '24', 'status' => true, 'alt' => 'Food, Bakery, Puffs',       'url' => 'food/bakery/puffs',       'target' => '_self'],
			['category' => 'Rolls',     'position' => '25', 'status' => true, 'alt' => 'Food, Bakery, Rolls',       'url' => 'food/bakery/rolls',       'target' => '_self'],
			['category' => 'Roti',      'position' => '26', 'status' => true, 'alt' => 'Food, Bakery, Roti',        'url' => 'food/bakery/roti',        'target' => '_self'],
			['category' => 'Tarts',     'position' => '27', 'status' => true, 'alt' => 'Food, Bakery, Tarts',       'url' => 'food/bakery/tarts',       'target' => '_self'],
			['category' => 'Wedding',   'position' => '28', 'status' => true, 'alt' => 'Food, Bakery, Wedding',     'url' => 'food/bakery/wedding',     'target' => '_self'],
			['category' => 'Workshop',  'position' => '29', 'status' => true, 'alt' => 'Food, Bakery, Workshop',    'url' => 'food/bakery/Workshop',    'target' => '_self'],
		];
		return $_get_schema_bakery_category;
	}

	//----------------------------------------------------------------------//
	//	Seeding Functions - Start
	//----------------------------------------------------------------------//

}