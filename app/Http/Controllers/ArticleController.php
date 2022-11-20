<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\StoreRequest;
use App\Http\Requests\Article\UpdateRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return ArticleResource::collection($articles);
    }

    public function show(Article $article)
    {
        return new ArticleResource($article);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return response(['deletee success'], 200);
    }

    public function store(StoreRequest $request)
    {

        $data = $request->validated();
        $images = $data['images'];
        unset($data['images']);
        $article = Article::firstOrCreate($data);

        foreach ($images as $image) {
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);
            $fileSize = filesize($image);
            $previewName = 'prev_' . $name;


            $img = Image::create([
                'path' => $filePath,
                'url' => url('/storage/' . $filePath),
                'size' => $fileSize,
                'article_id' => $article->id,
                'preview_image' => url( '/storage/images/' . $previewName),
            ]);

             \Intervention\Image\Facades\Image::make($image)->resize(100, 100)->save( storage_path('app/public/images/') . $previewName);



        }

        return response([], 200);
    }

    public function update(UpdateRequest $request, Article $article)
    {
        $data = $request->validated();
        $newArticle = $article->update($data);
        return $newArticle;
    }

}
