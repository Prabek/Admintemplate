@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Catagory</h1>
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

        <p><a class="btn btn-primary" href="{{ url('admin/catagory/create') }}">Add Catagory</a></p>


        <table class="table table-bordered table-striped">

          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Action</th>

          </tr>

          
          @foreach($catagories as $c)

          <tr>
            <td>{{$c->id}}</td>
            <td>{{ $c->cat_title }}</td>
            <td>
              <a class="btn btn-info" href="{{ route('admin.catagory.edit',$c->id) }}">Edit</a>
              <a  class="btn btn-danger" href="javascript:void(0)" onclick="$(this).parent().find('form').submit()">Delete</a>
              <form method="post" action="{{ route('admin.catagory.destroy',$c->id) }}">
                @method('DELETE')
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          
                
              </form>
            </td>
          </tr>

          @endforeach
          


        </table>
        

      </div>

      
    </section>

@endsection