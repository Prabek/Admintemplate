@extends('layouts.user')
@section('user_content')
    

       
 
        	<div class="col-md-9">
            	

        	@foreach($cat as $c)

        	<center>
           <div class="col-md-9">
             <center><h6><font color="black">{{str_limit($c->news_title,30)}}</font></h6></center>
              <div class="card mb-4 box-shadow">
                <CENTER><a href="{{route('user.showdetail',$c->id)}}"><img src="{{asset('storage/news/'.$c->image)}}"   style="width:100%; height: 40%;"></a></CENTER>
                <div class="card-body">
                  <p class="card-text">{{str_limit($c->description,90)}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <center><a href="{{route('user.showdetail',$c->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">View More</button></a></center>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> 
          </center>
          
           @endforeach
         
        </div>
      
  @endsection