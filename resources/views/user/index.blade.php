@extends('layouts.user')
@section('user_content')
<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        @foreach($news as $n)
        <div class="container">
          <center><h1 class="display-3">{{$n->news_title}}</h1></center>
          <img src="{{asset('storage/news/'.$n->image)}}" style="width:1200px; height: 427px;">
          <p>{{$n->description}}</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
        @endforeach
      </div>

      <div class="container">
        <!-- Example row of columns -->
        @foreach($cat as $c)
        <h1>{{$c->cat_title}}</h1>
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

        <div class="album py-5 bg-light">
          <div class="row">
            @foreach($c->news as $n)
            <div class="col-md-4">
              <h2>{{$n->news_title}}</h2>
              <div class="card mb-4 box-shadow">
                <img src="{{asset('storage/news/'.$n->image)}}" style="width:350px; height: 170px;">
                <div class="card-body">
                  <p class="card-text">{{$n->description}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <center><button type="button" class="btn btn-sm btn-outline-secondary">View More</button></center>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>

        @endforeach
        <hr>


      </div> <!-- /container -->


    </main>
    @endsection