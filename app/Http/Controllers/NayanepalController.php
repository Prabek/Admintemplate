<?php

namespace App\Http\Controllers;
use App\Catagory;
use App\News;

use Illuminate\Http\Request;

class NayanepalController extends Controller
{
    
    public function index()
    {
    	$arr['ct'] = Catagory::all();
        $arr['news'] = News::orderBy('created_at', 'desc')->take(7)->get();
        return view('user.index')->with($arr);

        }


    public function showdetail($id)
    {
    	$ct = Catagory::all();
    	$news = News::findOrFail($id);

    	return view("user.showdetail",compact(['news','ct']));
    }

    public function show($id){

      
    	$cat = Catagory::find($id)->news;
    	$ct = Catagory::all(); 
    	
    	return view("user.show",compact(['cat','ct']));

    }
}
