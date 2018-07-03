
          @extends('layouts.user')
          @section('user_content')
        
 
      

      <div class="container">
        	
            <div class="col-md-12">
              <div class="detail">
              
              <center><h1 class="handle">{{$news->news_title}}</h1></center>
            </div>
            
            <div class="avatar_show"><img src="{{asset('storage/news/'.$news->image)}}" style="width: 100%; height: auto;"></div>

          
          
            
          
          <div class="asker-meta">
            <span> {{ date('F d,Y', strtotime($news->created_at))}}</span>
            <span>by</span>
            <span><a href="">{{$news->author}}</a></span>
          </div>

          <div class="share pull-right">
            <label>share</label>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-reddit"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-yahoo"></i>
            
          </div>
          <div class="tags">
            <span class="btn btn-success"># Nayanepal</span>
          </div>

          <div class="kategori pull-right">
            <span class="label label-default">{{$news->catagory->cat_title}}</span>
          </div>
          
          <br/>
          <div class="post-content">
            <p>{{$news->description}}</p>
          </div>

            </div>
            </div>
      
        	
          
        
        
          
        </br>
        
                
          
        
      </div>

      </div>

      {{--<div id="fbCommentCount">
        <span class="fb-comments-count" data-href="{{ Request::url() }}"></span>
      </div>--}}

     {{--<!-- <form action="{{ route('user.update', ['id'=>$news->id]) }}" method="POST">

        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="commentCount" id="fbFormCommentCount">
        
      </form> -->--}} 

      


                
<div class="container">
  <div class="fb-comments" data-href="http://localhost:8000/nayanepal/{{$news->id}}" data-numposts="10"></div>
</div>



                            



      <script>
        
        let fbCommentCount = document.getElementById('fbCommentCount').getElementsByClassName('fb_comments_count');

       {{-- /*setTimeout(function() {

            document.getElementById('fbFormCommentCount').value = fbCommentCount[0].innerHTML;

            let $formVar = $('form');

            $.ajax({

              url: $formVar.prop("{{ route('user.update', ['id'=>$news->id]) }}"),
              method: 'PUT',
              data: $formVar.serialize()

            });

          },1000);*/ --}} 
        

      </script>
  @endsection


          
      
