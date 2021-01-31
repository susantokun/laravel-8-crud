<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $articles   = Article::orderBy('created_at', 'desc')->paginate($pagination);

        return view('articles.index', [
            'title'    => 'Articles',
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create', [
            'title'   => 'Create Article',
            'submit'  => 'Create',
            'article' => new Article(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:255|unique:articles,title',
            'content'  => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'body'  => $request->content,
        ]);

        return redirect()->back()->with('success', 'Article <span class="italic font-medium">created</span> successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', [
            'title'   => 'Detail Article',
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', [
            'title'   => 'Update Article',
            'submit'  => 'Update',
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'    => 'required|string|max:255|unique:articles,title,' . $id,
            'content'  => 'required',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'title' => $request->title,
            'body'  => $request->content,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article <span class="italic font-medium">updated</span> successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->back()->with('success', 'Article <span class="italic font-medium">deleted</span> successfully.');
    }
}
