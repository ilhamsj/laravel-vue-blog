<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ArticleCollection;

class ArticleController extends Controller
{
    public function index()
    {
        $items = Article::all();
        return new ArticleCollection($items);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return $article;
    }

    public function show($id)
    {
        return Article::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $article =  Article::findOrFail($id);
        $article->update($request->all());
        return $article;
    }

    public function destroy($id)
    {
        $article =  Article::findOrFail($id);
        $article->delete();
        return response()->json('data berhasil dihapus');
    }
}
