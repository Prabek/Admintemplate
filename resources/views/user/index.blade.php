@extends('layouts.user')
@section('user_content')
<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <!-- <div class="jumbotron">
        @foreach($news as $n)
        <div class="container">
          <center><h1 class="display-3">{{$n->news_title}}</h1></center>
          <img src="{{asset('storage/news/'.$n->image)}}" style="width:1000px; height: 427px;">
          <p>{{$n->description}}</p>
          <p><a class="btn btn-primary btn-lg" href="{{route('user.showdetail',$n->id)}}" role="button">Learn more &raquo;</a></p>
        </div>
        @endforeach
      </div> -->
      <div class="jumbotron">
      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
     <center><img src="{{asset('storage/news/'.$n->image)}}" alt="Los Angeles" style="width: 100%; height: 70%;"> </center> 
     <div class="carousel-caption">
        <h3>{{$n->news_title}}</h3>
        <p><a class="btn btn-primary btn-lg" href="{{route('user.showdetail',$n->id)}}" role="button">Learn more &raquo;</a></p>
      </div> 
    </div>
    @foreach($news as $n)
    <div class="carousel-item">
      <center><img src="{{asset('storage/news/'.$n->image)}}" alt="Los Angeles" style="width: 100%; height: 70%;"></center>

      <div class="carousel-caption">
        <h3>{{$n->news_title}}</h3>
        <p><a class="btn btn-primary btn-lg" href="{{route('user.showdetail',$n->id)}}" role="button">Learn more &raquo;</a></p>
      </div>   
    </div>
    @endforeach
    
    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>


</main>

      <div class="row container-fluid" >
      <div class="col-md-9 col-lg-9 col-sm-9 pull-left" style="background-color:LightGray;">
        <!-- Example row of columns -->
        @foreach($ct as $c)
        <CENTER><h1><a href="{{route('user.show',$c->id)}}">{{$c->cat_title}}</a></h1></CENTER>
        <!-- <div class="row">
          @foreach($c->news as $n)
          <div class="col-md-4">
            <h2>{{$n->news_title}}</h2>
            <img src="{{asset('storage/news/'.$n->image)}}" style="width:300px; height: 150px;">
            <p>{{$n->description}}</p>
           <center><p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p></center> 
          </div>
          @endforeach
        </div> -->

        <div class="album py-5 bg-light" >
          <div class="row" style="background-color:hsl(0, 100%, 25%);" >
            @foreach($c->news as $n)
            <div class="col-md-4">
             <center><h6><font color="white">{{str_limit($n->news_title,30)}}</font></h6></center>
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
            @endforeach

          </div>
        </div>
 @endforeach
</div>


<div class="col-md-3 pull-right" >
  
  <div class="tab sitebar">
          <ul class="nav nav-tabs">
            <li><h3><a data-toggle="tab">Latest News</a></h3></li>
          
          </ul>

          <div class="tab-content">
            
               @foreach($news as $n)
              
              <div class="media"> 

                <div class="media-left">
                  <a href="{{route('user.showdetail',$n->id)}}"><img class="media-object"  src="{{asset('storage/news/'.$n->image)}}" style="width:130px; height:70px;"></a>
                </div><!--media-left-->
                <div class="media-body">
                  <a href="{{route('user.showdetail',$n->id)}}">{{$n->news_title}}</a>
                  <br/>
                  {{$n->created_at->diffForHumans()}}
                  <br/>
                  <span class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-full"></i>
                  </span>
                </div><!--media-body-->
              </div><!--media-->  
            
            <br/>
             @endforeach
             <ul class="nav nav-tabs">
            <li class="active"><h3><a data-toggle="tab">Popular News</a></h3></li>
          
          </ul>
          @foreach($popular as $p)
              
              <div class="media"> 

                <div class="media-left">
                  <a href="{{route('user.showdetail',$p->id)}}"><img class="media-object"  src="{{asset('storage/news/'.$p->image)}}" style="width:130px; height:70px;"></a>
                </div><!--media-left-->
                <div class="media-body">
                  <a href="{{route('user.showdetail',$p->id)}}">{{$p->news_title}}</a>
                  <br/>

                  <span class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-full"></i>
                  </span>
                </div><!--media-body-->
              </div><!--media-->  
            
            <br/>
             @endforeach

           </div>

             
            

</div>



</div>


      

    
    @endsection