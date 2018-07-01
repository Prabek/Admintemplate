@extends('layouts.user')
@section('user_content')
<div class="jumbotron">
        

       
 
        	<div class="col-md-9">
        		

        	@foreach($cat as $c)
        	
          <center><h1 class="display-3">{{$c->news_title}}</h1></center>
          <img src="{{asset('storage/news/'.$c->image)}}" style="width:1200px; height: 427px;">
          <p>{{$c->description}}</p>
           @endforeach
         
        </div>
      </div>
  @endsection