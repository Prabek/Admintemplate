
          @extends('layouts.user')
          @section('user_content')
        
 
      <div class="jumbotron">
        	<div class="col-md-9">
      
        	
      
          <center><h1>{{$news->news_title}}</h1></center>
          <center><img src="{{asset('storage/news/'.$news->image)}}" style="width:1200px; height: 427px;"></center>
          
        </br>
        
                 Created at: {{ date('F d,Y', strtotime($news->created_at))}}
          <br/>
          -Author: @ {{$news->author}}
          <p style="font-family:courier;">{{$news->description}}</p>
          
        
      </div>
      </div>
  @endsection


          
      
  