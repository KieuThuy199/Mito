<?php

namespace App\Transformers;

use App\Models\News;
use League\Fractal\TransformerAbstract;

class NewsTransformer extends TransformerAbstract
{
    public function transform(News $news)
    {
        return [
            'id'      => $news->id,
            'img'     => $news->img,
            'title'   => $news->title,
            'summary' => $news->summary,
            'detail'  => $news->detail,
        ];
    }
}
