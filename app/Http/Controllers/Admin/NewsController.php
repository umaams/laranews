<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStore;
use App\Http\Requests\NewsUpdate;
use App\NewsCategory;
use App\News;
use App\User;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news_categories = NewsCategory::orderBy('name')->get();
        $query = News::with(['news_category'])->orderBy('created_at', 'desc');
        if ($request->has('news_category_id')) $query->where('news_category_id', $request->get('news_category_id'));
        $news = $query->paginate();
        $news_category_id = $request->get('news_category_id');
        return view('admin.news.view', compact('news', 'news_categories', 'news_category_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_categories = NewsCategory::orderBy('name')->get();
        $users = User::orderBy('name')->get();
        return view('admin.news.create', compact('news_categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStore $request)
    {
        $request->slug = str_slug($request->slug, '-');
        News::create($request->all());
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $news_categories = NewsCategory::orderBy('name')->get();
        $users = User::orderBy('name')->get();
        return view('admin.news.edit', compact('news', 'news_categories', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdate $request, $id)
    {
        $request->slug = str_slug($request->slug, '-');
        News::findOrFail($id)->update($request->all());
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect()->route('news.index');
    }
}
