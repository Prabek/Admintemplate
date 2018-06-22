@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">NEWS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="get" href="{{ url('/admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">

        <p><a class="btn btn-primary" href="{{ route('admin.news.create') }}">Add News</a></p>


        <table class="table table-bordered table-striped">

          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>image</th>
            <th>catagory</th>
            <th>Action</th>


          </tr>

          @if(count($news))
          @foreach($news as $n)

          <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->news_title }}</td>
            <td>{{$n->description }}</td>
            <td>{{$n->author }}</td>
            <td><img src="{{asset('storage/news/'.$n->image)}}" style="width:100px; height: 100px;"></td>
            <td>{{$n->catagory->cat_title }}</td>
            <td>
              <a class="btn btn-info" href="{{ route('admin.news.edit',$n->id) }}">Edit</a>
              <a  class="btn btn-danger" href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">Delete</a>
              <form method="post" action="{{ route('admin.news.destroy',$n->id) }}">
                @method('DELETE')
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          
                
              </form>
            </td>
          </tr>

          @endforeach

        @else

        <tr>
          <td colspan="6"> No news found</td>
        </tr>

        @endif
          


        </table>
        

      </div>

      
    </section>

@endsection