<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\News;
// use GuzzleHttp\Client;
// use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    public function index(){
        return view('admin.newsadd');
    }
    public function data()
    {
        // $client = new Client();
        // $res = $client->get('http://127.0.0.1:8000/api/news');
        // $db = $res->getBody();

        // $config = json_decode($db, true);
        // dd($config);
        // dd($db['data']);

        $model = News::query();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function ($news) {
                return '<div class="btn-group-sm btn-func">
                            <button type="button" class="btn btn-warning">
                            <span class="fas fa-edit"></span>
                            </button>
                            <button type="button" class="btn btn-primary">
                                <span class="fas fa-trash-alt"></span>
                            </button>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);

        // return Datatables::of($db['data'])
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
