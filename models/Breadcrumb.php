<?php namespace Devnull\Breadcrumb\Models;

use Model;
use Devnull\Main\Classes\InstallMain;
use Devnull\Main\Classes\Seeding;

class Breadcrumb extends Model
{
	public $table           =   'gp_breadcrumb_breadcrumbs';
	public static $_table   =   'gp_breadcrumb_breadcrumbs';

	protected $primaryKey   =   'id';
	public $timestamps      =   true;
	public $exists          =   true;
	protected $dates        =   [];
	protected $jsonable     =   [];
	protected $visible      =   [];
	protected $hidden       =   [];

	protected $guarded      = ['href', 'status', 'disabled'];
	public $fillable        = ['page_name', 'page_child', 'page_baseFileName', '_self', 'hide', ];

	use \October\Rain\Database\Traits\Validation;
	public $rules = [

	];

	public $customMessages = [
		'required'  =>  'devnull.main::lang.customMessages.required',
		'between'   =>  'devnull.main::lang.customMessages.between',
		'boolean'   =>  'devnull.main::lang.customMessages.boolean'
	];

	//----------------------------------------------------------------------//
	//	Main Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Events Functions - Start
	//----------------------------------------------------------------------//

	public function beforeCreate(){}
	public function afterCreate(){}
	public function beforeSave(){}
	public function afterSave(){}
	public function beforeValidate(){}
	public function afterValidate(){}
	public function beforeUpdate(){}
	public function afterUpdate(){}
	public function beforeDelete(){}
	public function afterDelete(){}
	public function beforeRestore(){}
	public function afterRestore(){}
	public function beforeFetch(){}
	public function afterFetch(){}

	//----------------------------------------------------------------------//
	//	Overridden Functions - Start
	//----------------------------------------------------------------------//

	//----------------------------------------------------------------------//
	//	Shared Functions - Start
	//----------------------------------------------------------------------//

	private static function clean_array($_value)
	{
		return array_values(array_filter($_value));
	}

	public static function drawings($_pageBaseFileName)
	{
		$_level = ['level1' => true];

		$find_last = Breadcrumb::where('page_baseFileName', $_pageBaseFileName)->first();

		if (!is_null($find_last))
		{
			$find_pointer = $find_last['page_child'];
			$find_counter = 1;
			$find_cunt = 0;

			$_breadcrumb = [$find_last];

			while ($find_pointer != '0') {
				$find_counter++;
				$find_cunt++;
				$_level['level' . $find_counter] = true;
				$_data = Breadcrumb::where('page_baseFilename', $find_pointer)->first();
				array_push($_breadcrumb, $_data);
				$find_pointer = $_data['page_child'];
			}

			array_push($_breadcrumb, $_level);
			return Breadcrumb::clean_array(array_reverse($_breadcrumb));
		}
		else
		{
			$_level['level1'] = true;
			$find_last = Breadcrumb::where('page_baseFileName', 'home')->first();
			$_breadcrumb = [$_level, $find_last];
			return $_breadcrumb;
		}
	}

	//----------------------------------------------------------------------//
	//	OnAjax Functions - Start
	//----------------------------------------------------------------------//

	public static function DoTruncate()
	{
		InstallMain::truncate(Breadcrumb::$_table);
		return TRUE;
	}

	public static function DoDefault()
	{
		InstallMain::check_existing(Breadcrumb::$_table);

		$_schema_breadcrumbs = Seeding::get_schema_breadcrumbs();
		foreach ($_schema_breadcrumbs as $_schema)
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
		InstallMain::optimize_table(Breadcrumb::$_table);
		return true;
	}

	//----------------------------------------------------------------------//
	//	Deprecated Functions - Start
	//----------------------------------------------------------------------//

	public static function drawBreadcrumbs($_pageBaseFileName)
	{
		$find_last = []; $find_last1 = []; $find_last2 = []; $find_last3 = [];
		$_level = ['level1' => true, 'level2' => false, 'level3' => false, 'level4' => false];

		$find_last = Breadcrumb::where('page_baseFileName', $_pageBaseFileName)->first();
		if ($find_last['page_child'] != '0')
		{
			$_level['level2'] = true;
			$find_last1 = Breadcrumb::where('page_baseFileName', $find_last['page_child'])->first();

			if ($find_last1['page_child'] != '0')
			{
				$_level['level3'] = true;
				$find_last2 = Breadcrumb::where('page_baseFileName', $find_last1['page_child'])->first();

				if ($find_last2['page_child'] != '0')
				{
					$_level['level4'] = true;
					$find_last3 = Breadcrumb::where('page_baseFileName', $find_last2['page_child'])->first();
				}
				else
				{ $find_last3 = Breadcrumb::where('page_baseFileName', $find_last2['page_child'])->first();}
			}
			else { $find_last2 = Breadcrumb::where('page_baseFileName', $find_last1['page_child'])->first();}
		}
		else
		{
			$_level['level1'] = true;
			$find_last1 = [];
			$find_last2 = [];
			$find_last3 = [];
		}

		$_breadcrumb = [
			$_level, $find_last3, $find_last2, $find_last1, $find_last
		];

		return (self::clean_array($_breadcrumb));
	}

	//----------------------------------------------------------------------//
	//	Breadcrumbs Functions - End
	//----------------------------------------------------------------------//
}