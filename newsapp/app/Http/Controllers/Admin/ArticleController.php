<?php

namespace App\Http\Controllers\Admin;

use App\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAdmin:1');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index')
            ->withArticles(Article::where('is_draft', false)
                ->select('id', 'user_id', 'title', 'intro', 'is_carousel', 'is_hotevens', 'is_hotimgs', 'is_ranks', 'published_at', 'is_checked','is_topics')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.show')->withArticle($article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if ($request->action === 'approved') {
            $article->is_checked = 1;
        } elseif ($request->action === 'unapproved') {
            $article->is_checked = 2;
        } elseif ($request->action === 'review') {
            $article->is_checked = 0;
        }

        if ($request->carousel == '1') {
            $article->is_carousel = true;
        } elseif ($request->carousel == '0') {
            $article->is_carousel = false;
        }

        if ($request->hoteven == '1') {
            $article->is_hotevens = true;
        } elseif ($request->hoteven == '0') {
            $article->is_hotevens = false;
        }

        if ($request->hotimg == '1') {
            $article->is_hotimgs = true;
        } elseif ($request->hotimg == '0') {
            $article->is_hotimgs = false;
        }

        if ($request->topic == '1') {
            $article->is_topics = true;
        } elseif ($request->topic == '0') {
            $article->is_topics = false;
        }

        if ($request->rank == '1') {
            $article->is_ranks = '1';
        } elseif ($request->rank == '2') {
            $article->is_ranks = '2';
        } elseif ($request->rank == '3') {
            $article->is_ranks = '3';
        } elseif ($request->rank == '4') {
            $article->is_ranks = '4';
        } elseif ($request->rank == '5') {
            $article->is_ranks = '5';
        } elseif ($request->rank == '6') {
            $article->is_ranks = '6';
        } elseif ($request->rank == '7') {
            $article->is_ranks = '7';
        } elseif ($request->rank == '8') {
            $article->is_ranks = '8';
        } elseif ($request->rank == '9') {
            $article->is_ranks = '9';
        } elseif ($request->rank == '10') {
            $article->is_ranks = '10';
        } elseif ($request->rank == '0') {
            $article->is_ranks = '0';
        }

        $article->save();
        return redirect()
            ->route('admin.article.index')
            ->withSuccess($article->title . '已修改');
    }
}
