<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\StoreRequest;
use App\Http\Requests\Article\UpdateRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return ArticleResource::collection($articles);
    }

    public function show(Article $article) {
        return new ArticleResource($article);
    }

    public function destroy(Article $article) {
        $article->delete();
        return response(['deletee success'], 200);
    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        $article = Article::firstOrCreate($data);
        return $article;
    }

    public function update(UpdateRequest $request, Article $article) {
        $data = $request->validated();
        $newArticle = $article->update($data);
        return $newArticle;
    }

}
