<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\News;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    public function index(){
        return view('admin.news');
    }
    public function data()
    {
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
    }
    public function add(){
        return view('admin.newsadd');
    }
}
