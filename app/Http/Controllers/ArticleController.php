<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
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
        return 'data berhasil dihapus';
    }
}
