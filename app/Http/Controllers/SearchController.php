<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Catagory;

class SearchController extends Controller
{
    //

    public function search(Request $request)
    {
    	$ct = Catagory::all();	
    	$q = $request->input('search');
    	$news = News::where('news_title','LIKE','%'.$q.'%')->get();
    	return view('search.result',['news'=> $news, 'ct'=>$ct]);
    	
    	
    }


 
}
