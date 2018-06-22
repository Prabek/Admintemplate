<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['news'] = News::all();
        return view('admin.news.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, News $news)
    {
        //
        if($request->image->getClientOriginalName()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,999999).'.'.$ext;
            $request->image->storeAs('public/news',$file);

                         }

         $news->news_title = $request->news_title;
         $news->author = $request->author;
         $news->description = $request->description;
         $news->image = $file;
        $news->save();

         return redirect('admin/news');
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
    public function edit(News $news)
    {
        //
        $arr['news'] = $news;
        return view('admin.news.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
        if($request->image->getClientOriginalName()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,999999).'.'.$ext;
            $request->image->storeAs('public/news',$file);

                         }
        $news->news_title = $request->news_title;
        $news->author = $request->author;
         $news->description = $request->description;
         $news->image = $file;
        $news->save();

         return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        News::destroy($id);
        return redirect()->route('admin.news.index');
    }
}
