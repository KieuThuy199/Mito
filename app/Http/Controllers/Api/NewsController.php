<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use App\Transformers\NewsTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all();
        // return response()->json($news);
        $result = [];
        foreach ($news as $news){
            array_push($result, (new NewsTransformer)->transform($news)); // chỉ hiển thị những cột được định nghĩa bên transformer
            // array_push($result, $news); hiển thị tất cả các cột trong DB
        }

        return response()->json([
            'data' => $result,
            'message'   => 'success'
        ],200);
    }

    public function store(CreateNewsRequest $request)
    {
        try{
            $news = new News();
            $news->title   = $request->input('title');
            $news->summary = $request->input('summary');
            $news->detail  = $request->input('content-news');
            if ($request->hasFile('imgnews')) {
                $news->img = $request->file('imgnews');
                foreach($news->img as $news->img){
                    // $filename = $news->img->getClientOriginalName();
                    $extension = $news->img->getClientOriginalExtension();
                    $fileName = $news->title."-".date('his').".".$extension;
                    $destinationPath = 'images/news'.'/';
                    $news->img->move($destinationPath, $fileName);
                }
            }
            $news->save();
            DB::commit();
            return response()->json([
                'status' => 'success'
            ],201);
        }
        catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'status'    => 'fails',
                'message'   => $exception->getMessage()
            ],422);
        }
    }

    // public function show(News $news)
    // {
    //     return $news;
    // }

    // public function update(Request $request, News $news)
    // {
    //     return $news->update($request->all());
    // }

    // public function destroy(News $news)
    // {
    //     $news->delete();
    // }
    // public function store(CreateNewsRequest $request){
    //     $this->authorize('store', News::class);
    //     DB::beginTransaction();
    //     try {
    //         $news = new News();
    //         $news->fill( $request->only(['title', 'link', 'summary', 'detail']));
    //         $news = News::query()->create($request->except('img'));
    //         if ($request->img){
    //             $destinationPath = 'images/news/';
    //             $newsImage = $news->id. "." . $request->img->getClientOriginalExtension();
    //             $request->img->move($destinationPath, $newsImage);
    //             $news->img = $newsImage;
    //         }
    //         $news->link = Str::slug('title');
    //         $news->save();
    //         DB::commit();
    //         return response()->json([
    //             'status' => 'success'
    //         ],201);
    //     }
    //     catch (\Exception $exception){
    //         DB::rollBack();
    //         return response()->json([
    //             'status'    => 'fails',
    //             'message'   => $exception->getMessage()
    //         ],422);
    //     }
    // }
}
