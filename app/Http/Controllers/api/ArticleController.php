<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(Request $request) {
     $slug = $request->get('slug');

//        $article = Article::with('comments','tags','state')->first();
        $article = Article::findByslug($slug);
return new ArticleResource($article);
    }
}
