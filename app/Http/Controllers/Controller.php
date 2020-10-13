<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// use Illuminate\Support\Facades\Config;
// use GuzzleHttp\Client;
// use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function getClient()
    // {
    //     return new Client([
    //         'base_uri'        => 'http://127.0.0.1:8000',
    //         'timeout'         => 0,
    //         'allow_redirects' => false,
    //         'proxy'           => '127.0.0.1:8000',
    //     ]);
    // }

    // public function getBaseUrl($request, $api_name){
    //     $base_uri = Session::get(Config::get('constants.cache_session.KEY_BASE_URL')). $api_name;
    //     return $base_uri;
    // }
}
