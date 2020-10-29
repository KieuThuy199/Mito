<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Transformers\NewsTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // $this->authorize('index', News::class);
        // if ($request->ajax){
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
        // }
    }

    public function store(Request $request)
    {
        try{
            $news = new News();
            $news->title   = $request->input('title');
            $news->summary = $request->input('summary');
            $news->detail  = $request->input('content-news');
            if ($request->hasFile('imgnews')) {
                $news->img = $request->file('imgnews');
                foreach($news->img as $news->img){
                    // $filename = $news->img->getClientOriginalName(); lấy ra tên hình
                    $extension = $news->img->getClientOriginalExtension(); // lấy đuôi . của hình
                    $fileName = $news->title."-".date('his').".".$extension;
                    $destinationPath = 'images/news'.'/';
                    $news->img->move($destinationPath, $fileName);
                }
            }
            $news->save();
            // DB::commit();
            // return response()->json([
            //     'status' => 'success'
            // ],201);
            // return redirect('news.add');
            return redirect('news/add')->with('success', 'Thanh cong!');
        }
        catch (\Exception $exception){
            // DB::rollBack();
            // return response()->json([
            //     'status'    => 'fails',
            //     'message'   => $exception->getMessage()
            // ],422);
            return redirect('news.fail');
        }
    }

    public function show(News $news)
    {
        $this->authorize('show', News::class);
        return response()->json([
            'news'  => (new NewsTransformer)->transform($news),
        ], 200);
    }

    public function update(Request $request, News $news)
    {
        $news->title   = $request->title;
        $news->summary = $request->summary;
        $news->detail  = $request->detail;
        if ($request->hasFile('imgnews')) {
            $news->img = $request->img;
            foreach($news->img as $news->img){
                // $filename = $news->img->getClientOriginalName(); lấy ra tên hình
                $extension = $news->img->getClientOriginalExtension(); // lấy đuôi . của hình
                $fileName = $news->title."-".date('his').".".$extension;
                $destinationPath = 'images/news'.'/';
                $news->img->move($destinationPath, $fileName);
            }
        }
        $news->save();
        return $news->update($request->all());
    }

    public function destroy(News $news)
    {
        $news->delete();
    }

}
