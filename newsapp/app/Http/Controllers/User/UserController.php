<?php

namespace App\Http\Controllers\User;

use App\Ad;
use App\Article;
use App\Tag;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $carousel_news = Article::select('id', 'title', 'page_image')
            ->where('is_checked', true)
            ->where('is_carousel', true)
            ->published()
            ->get();
        $latest_news = Article::select('id', 'title', 'intro', 'page_image')
            ->where('is_checked', true)
            ->published()
            ->orderBy('published_at', 'desc')
            ->take(4)->get();
        $ads = Ad::select('url', 'name', 'image_path')
            ->orderBy('created_at', 'desc')
            ->take(2)->get();
        // get the index article
        $tags = Tag::select('id', 'name')
            ->where('show_index', true)
            ->get();
        $topics = Article::select('id', 'title', 'page_image','intro','is_topics')
            ->where('is_checked', true)
            ->where('is_topics', true)
            ->published()
            ->orderBy('updated_at','desc')
            ->get();
        $hotevens = Article::select('id', 'title', 'page_image')
            ->where('is_checked', true)
            ->where('is_hotevens', true)
            ->published()
            ->orderBy('updated_at','desc')
            ->get();
        $index_articles = array();
        foreach ($tags as $tag) {
              $istag = $tag->id;
              if($istag == '2'||$istag == '4'||$istag == '8'||$istag == '10'){
                $tag['articles'] = $tag->articles()
                ->select('article_id', 'title', 'intro', 'page_image','published_at')
                ->where('is_checked', true)
                ->published()
                ->orderBy('published_at', 'desc')
                ->take(2)->get();
              $index_articles[] = $tag;
              }
              else if($istag == '6'){
                $tag['articles'] = $tag->articles()
                ->select('article_id', 'title', 'intro', 'page_image','published_at')
                ->where('is_checked', true)
                ->published()
                ->orderBy('published_at', 'desc')
                ->take(6)->get();
              $index_articles[] = $tag;
              }
              else{
              $tag['articles'] = $tag->articles()
                ->select('article_id', 'title', 'intro', 'page_image','published_at')
                ->where('is_checked', true)
                ->published()
                ->orderBy('published_at', 'desc')
                ->take(1)->get();
              $index_articles[] = $tag;  
              }
            
        }
        return view('front.index')
            ->with('carousel_news', $carousel_news)
            ->with('latest_news', $latest_news)
            ->with('ads', $ads)
            ->with('index_articles', $index_articles)
            ->with('topics', $topics)
            ->with('hotevens',$hotevens);
    }

    /**
     * Display the home page.
     *
     * @param int $id category's id
     *
     */
    public function subject($id)
    {
        $tag = Tag::findorfail($id);
        $articles = $tag->articles()->select('article_id', 'title', 'intro', 'page_image')
            ->where('is_checked', true)
            ->published()
            ->orderBy('published_at', 'desc')
            ->paginate(10);
        $latest_news = Article::select('id', 'title', 'intro', 'page_image','published_at')
            ->where('is_checked', true)
            ->published()
            ->orderBy('published_at', 'desc')
            ->take(4)->get();
        return view('front.category')->with('articles', $articles)->with('latest_news',$latest_news);
    }

    /**
     * Display the home page.
     *
     * @param int $id article's id
     *
     */
    public function showArticle($id)
    {
        $article = Article::findorfail($id);
        if ($article->is_checked == false) {
            abort(404);
        }
        $hotevens = Article::select('id', 'title', 'page_image')
            ->where('is_checked', true)
            ->where('is_hotevens', true)
            ->published()
            ->orderBy('updated_at','desc')
            ->get();
        $hotimgs = Article::select('id', 'title', 'page_image','intro')
            ->where('is_checked', true)
            ->where('is_hotimgs', true)
            ->published()
            ->orderBy('updated_at','desc')
            ->get();  
        $ranks = Article::select('id', 'title', 'is_ranks')
            ->where('is_checked', true)
            ->where('is_ranks','!=','0')
            ->published()
            ->orderBy('is_ranks','asc')
            ->get();
        $latest_news = Article::select('id', 'title', 'intro', 'page_image','published_at')
            ->where('is_checked', true)
            ->published()
            ->orderBy('published_at', 'desc')
            ->take(4)->get();
        return view('front.article')
              ->with('article', $article)
              ->with('hotevens',$hotevens)
              ->with('hotimgs',$hotimgs)
              ->with('ranks',$ranks)
              ->with('latest_news',$latest_news);

    }

    /**
     * Display the home page.
     *
     * @param Request $requests
     *
     */
    public function scopeSearch(Request $requests)
    {
        $keyword = $requests->get('q');
        $results = null;
        $latest_news = Article::select('id', 'title', 'intro', 'page_image','published_at')
            ->where('is_checked', true)
            ->published()
            ->orderBy('published_at', 'desc')
            ->take(4)->get();
        if (empty($keyword)) {
            return redirect('/');
        }
        if (isset($keyword) && trim($keyword) != "") {
            $results = Article::select('id', 'title', 'intro', 'page_image')
                ->where('title', 'LIKE', '%' . $keyword . '%')
                ->where('is_checked', true)
                ->published()
                ->paginate(10);
        }
        return view('front.search')->with('articles', $results)->with('latest_news',$latest_news);
    }
}
