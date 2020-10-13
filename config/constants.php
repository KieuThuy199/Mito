<?php
namespace constants;

#Define api function
return [
    // 'api_auth' => [
    //     'API_GET_SETTING' => '/api/employees/settings',
    //     'API_LOGIN' =>'/api/employees/login',
    //     'API_GET_CONFIG' => '/api/configs?restaurant_name=%s&project_id=%s',
    // ],

    // 'cache_session'=>[
    //     'KEY_SESSION_ACCOUNT'=>'KEY_SESSION_ACCOUNT',
    //     'KEY_ACCESS_TOKEN' => 'KEY_ACCESS_TOKEN',
    //     'KEY_DOMAIN_URL' => 'KEY_DOMAIN_URL',
    //     'KEY_BASE_URL' => 'KEY_BASE_URL',
    //     'BRANCH_ID'=>'BRANCH_ID',
    //     'Menu'=>'Menu',
    //     'BRANCH_ID_CHANGE' => 'BRANCH_ID_CHANGE',
    //     'PERMISSION' => 'PERMISSION',
    //     'KEY_LEVEL' => 'KEY_LEVEL',
    //     'RESTAURANT' => 'RESTAURANT',
    //     'KEY_TMS' => 'KEY_TMS',
    // ],
    'api'=> [
        // 'API_GET_BRANCH' => '/application/branches',
        // 'API_GET_IN_INVENTORY' => '/general/warehouse/warehouse-session?page=%s&branch_id=%s&type=%s&paid_status=%s&is_take_canceled=%s&restaurant_supplier_id=%s&from=%s&to=%s&is_liabilities=%s&limit=%s',
        // 'API_GET_IN_CHART' => '/application/reports/synthesis-report?report_type=%s&branch_id=%s&time=%s',
        // 'API_GET_IN_SELECT' => '/application/restaurants/1/materials?category_id=%s&status=%s'

        //tạo tên để gọi api, giá trị truyền vào để %s
        //key API, change "char" after "=" as "%s"
        'API_GET_NEWS' => '/api/news',
    ]
];
