<?php namespace Devnull\Breadcrumb\Facades;

use October\Rain\Support\Facade;

class Breadcrumbs extends Facade
{
    protected static function getFacadeAccessor(){ return 'breadcrumb.breadcrumbs'; }
}