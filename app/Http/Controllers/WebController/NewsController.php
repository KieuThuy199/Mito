<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    public function index(){
        return view('admin.newsadd');
    }
    public function data(Request $request)
    {
        $client = new Client();
        $request = $client->get('http://127.0.0.1:8000'.'/'.sprintf(Config::get('constants.api.API_GET_NEWS')));
        $db = $request->getBody();
        // $client = $this->getClient($request);
        // $response = $client->request('GET', $request.sprintf(Config::get('constants.api.API_GET_NEWS')));

        // $db = $response->getBody();

        $config = json_decode($db, true);
        dd($config);

        // return Datatables::of($config['data'])
        //     ->addIndexColumn()
        //     ->addColumn('action', function ($user) {
        //         return '<button type="button"
        //                         class="tabledit-edit-button btn btn-warning btn-icon">
        //                     <span class="fas fa-edit"></span>
        //                 </button>
        //                 <button type="button"
        //                         class="tabledit-delete-button btn btn-primary btn-icon">
        //                     <span class="fas fa-trash-alt"></span>
        //                 </button>';
        //     })
        //     ->rawColumns(['action'])
        //     ->make(true);
    }
}
