<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(){
        return view('admin.newsadd');
    }

    public function add(CreateNewsRequest $request){
        // $this->authorize('store', News::class);
        // DB::beginTransaction();
        // try {
        //     $news = new News();
        //     $news->fill( $request->only(['title', 'link', 'summary', 'detail']));
        //     $news = News::query()->create($request->except('img'));
        //     if ($request->img){
        //         $destinationPath = 'images/news/';
        //         $newsImage = $news->id. "." . $request->img->getClientOriginalExtension();
        //         $request->img->move($destinationPath, $newsImage);
        //         $news->img = $newsImage;
        //     }
        //     $news->link = Str::slug('title');
        //     $news->save();
        //     DB::commit();
        //     return response()->json([
        //         'status' => 'success'
        //     ],201);
        // }
        // catch (\Exception $exception){
        //     DB::rollBack();
        //     return response()->json([
        //         'status'    => 'fails',
        //         'message'   => $exception->getMessage()
        //     ],422);
        // }

        return view('admin.newsadd');
    }
}
