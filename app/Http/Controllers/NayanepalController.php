<?php

namespace App\Http\Controllers;
use App\Catagory;
use App\News;
use DB;

use Illuminate\Http\Request;

class NayanepalController extends Controller
{
    
    public function index()
    {
    	$arr['ct'] = Catagory::all();
        $arr['news'] = News::orderBy('created_at', 'desc')->take(7)->get();
        $arr['popular'] = DB::table('news')
                           ->join('views','news.id','=','views.viewable_id')
                           ->select(DB::raw('count(viewable_id) as count'),'news.id','news.news_title','news.image','news.description','news.catagory_id','news.author')
                           ->groupBy('id','news_title','description')
                           ->orderBy('count','desc')
                           ->take(7)
                           ->get();
        return view('user.index')->with($arr);

        }


    public function showdetail($id)
    {
    	$ct = Catagory::all();
    	$news = News::findOrFail($id);
        $news->addView();

    	return view("user.showdetail",compact(['news','ct']));
    }

    public function show($id){

      
    	$cat = Catagory::find($id)->news;
    	$ct = Catagory::all(); 

    	
    	return view("user.show",compact(['cat','ct']));

    }


     
}
