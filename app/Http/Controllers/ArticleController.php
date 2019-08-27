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
        $article = Article::find($id);
        return $article;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $article =  Article::findOrFail($id);
        $article->update($request->all());
        return response()->json('data berhasil diupdate');
    }

    public function destroy($id)
    {
        $article =  Article::findOrFail($id);
        $article->delete();
        return response()->json('data berhasil dihapus');
    }
}
