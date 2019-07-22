@extends("_layouts.main_layout")

@section("title")
    {{ $post->title }}
@endsection

@section('content')

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- this route take u to /main/patients -->
       <a class="navbar-brand" href="/doctor">الرئيسية</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/posts"> المجتمع </a></li>
            <li><a href="/articles"> المقالات </a></li>
          <li><a href="#about"> الاحصائيات </a></li>
          <li><a href="/main/TestData"> شخص نفسك</a></li>
          <li><a href="/main/about"> حول </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المزيد <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <div class="container">
          <div class="row">
           <div class="col-md-offset-11 ">
      
               <ul class="nav navbar-nav navbar-right">
           <li class="active"><a href="/">تسجيل خروج <span class="sr-only">(current)</span></a></li>
      </ul>
    </div>
  </div>
  </div>
  
  
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <br>
  

 <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"> {{ $post->title }}</h1>

        <!-- Author -->
        
        </p>

        <hr>

        <!-- Date/Time -->
        
        <p> تم النشر بتاريخ {{ $post->created_at }}</p>
        <p class="lead">
          بواسطة 

          <a href="#">{{ $post->user->name  }}</a>

        <hr>

        <!-- Preview Image -->

        @if($post->image)

          <img class="img-fluid rounded" src="{{ asset($post->image) }}" alt="">
        @else
        <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/500x300" alt="">
        @endif

        <hr>

        <!-- Post Content -->
        <p class="lead">{!! $post->body !!}</p>


        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">اترك تعليقا :</h5>
          <div class="card-body">
            <form action="{{ route('post-comments.store' , $post) }}" method="POST">
            	@csrf
              <div class="form-group">
                <textarea name="body" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">نشر التعليق </button>
            </form>
          </div>
        </div>

        @forelse($post->comments()->take(3) as $comment)
	        <div class="media mb-4">
	          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
	          <div class="media-body">
	            <h5 class="mt-0">{{ $comment->user()->first_name . ' ' . $comment->user()->last_name }}
	            	<form method="POST" style="display: inline-block" action="{{ route('post-comments.destroy' , $comment) }}">
	            		@csrf
	            		@method('DELETE')
	            		<button type="submit" class="btn btn-warning"><i class="fa fa-trash"></i></button>
	            	</form>

	            </h5>
	            {{ $comment->body }}
	          </div>
	        </div>
	    @empty

        @endforelse


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@stop