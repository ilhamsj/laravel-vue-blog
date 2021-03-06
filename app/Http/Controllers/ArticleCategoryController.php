<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleCategoryCollection;


class ArticleCategoryController extends Controller
{
    public function index()
    {
        $items = ArticleCategory::paginate();
        return new ArticleCategoryCollection($items);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $id)
    {
        //
    }

    public function edit(Request $id)
    {
        //
    }

    public function update(Request $request, Request $id)
    {
        //
    }

    public function destroy(Request $id)
    {
        //
    }
}
