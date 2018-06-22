@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Catagory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="get" href="{{ url('/admin')}}">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <form method="post" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          <div class="form-group">
            <div class="row">
              <label class="col-sm-3">Title</label>
              <div class="col-sm-6"><input type="text" name="news_title"></div>
              <div class="clearfix"></div>
              
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <label class="col-sm-3">Author</label>
              <div class="col-sm-6"><input type="text" name="author"></div>
              <div class="clearfix"></div>
              
            </div>
          </div>

         <div class="form-group">
            <div class="row">
              <label class="col-sm-3">Description</label>
              <div class="col-sm-6"><textarea class="form-control" name="description"></textarea>
              <div class="clearfix"></div>
              <br/>
              
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <label class="col-sm-3">Upload image</label>
              <div class="col-sm-6"><input type="file" name="image"></div>
              <div class="clearfix"></div>
              
            </div>
          </div>

            




                

          </div>
          <div class="form-group">

            <input type="submit" value="Submit" class="btn btn-success">
            
          </div>
          
        </form>

      </div>

      
    </section>

@endsection