@extends('layouts.user')
@section('user_content')
@if(count($news)>0)
<div class="container">
	<div class="text-center">
		<h1>Search items</h1>
		@foreach($news->all() as $n)
		<center>
		
		<div class="col-md-4">
             <center><h6><font color="black">{{str_limit($n->news_title,30)}}</font></h6></center>
              <div class="card mb-4 box-shadow">
                <CENTER><a href="{{route('user.showdetail',$n->id)}}"><img src="{{asset('storage/news/'.$n->image)}}"   style="width:240px; height: 170px;"></a></CENTER>
                <div class="card-body">
                  <p class="card-text">{{str_limit($n->description,50)}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <center><a href="{{route('user.showdetail',$n->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">View More</button></a></center>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>	

		</center>

		
		@endforeach
		
	</div>
	
</div>
@else

<div class="container" >
	<div class="text-center" style="margin-bottom: 40%;">
		<h1>Search items not found -__-</h1>

		
	</div>

@endif
@endsection