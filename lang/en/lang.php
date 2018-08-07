<?php

return [

    'plugin' => [
        'label'         =>  'Gerekper Asia',
        'name'          =>  'Gerekper Main',
        'description'   =>  'Gerekper Main Application Module for Gerekper Modules',
        'author'        =>  'devnull',
        'homepage'      =>  'http://www.gerekper.asia',
    ],

    'settings' => [
        'label'                         =>  'Gerekper Main Functions Page',
        'description'                   =>  'Manage Gerekper.asia Main Configs',
        'name'                          =>  'Gerekper Main Functions Page',
        'category'                      =>  'Gerekper Main',
        'use_plugin_label'              =>  'Enable Devnull.Main ?',
        'use_plugin_comment'            =>  'Enable/Disable Main Functions Page',
        'use_plugin_breadcrumbs_label'  =>  'Enable Devnull.Main.Breadcrumbs',
        'use_plugin_breadcrumbs_comment'=>  'Enable/Disable Breadcrumbs Functions',
    ],

    'dashboard' => [
        'label_dashboard'   =>  'Dashboard',
    ],

    'breadcrumbs' => [
        'components_name'           =>  'Gerekper::Breadcrumbs',
        'components_description'    =>  'Apply Breadcrumbs to page in jumbotron',
    ],
];