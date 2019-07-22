@extends("_layouts.main_layout")

@section("title")
Article {{ $article->title }}
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
        <h3 class="mt-4">{{ $article->title }}</h3>

        <!-- Author -->
        <p class="lead">
          بواسطة
          <a href="#">{{ $article->doctor->first_name . ' ' . $article->doctor->last_name  }}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>  نشر بتاريخ {{ $article->created_at }}</p>

        <hr>

<<<<<<< HEAD
        <!-- Preview Image -->
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
=======
        @if($article->image)
>>>>>>> b7c8c6ae24cc77bf1909fb434ee45b5dd48e9088

          <img class="img-fluid rounded" src="{{ asset($article->image) }}" alt="">
        @else
        <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/500x300" alt="">
        @endif
        <hr>

        <!-- Post Content -->
        <p class="lead">{!! $article->body !!}</p>


        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">اترك تعليقا :</h5>
          <div class="card-body">
            <form action="{{ route('article-comments.store' , $article) }}" method="POST">
            	@csrf
              <div class="form-group">
                <textarea name="body" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">نشر التعليق </button>
            </form>
          </div>
        </div>

        @forelse($article->comments()->take(3) as $comment)
	        <div class="media mb-4">
	          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
	          <div class="media-body">
	            <h5 class="mt-0">{{ $comment->user()->first_name . ' ' . $comment->user()->last_name }}
	            	<form method="POST" style="display: inline-block" action="{{ route('article-comments.destroy' , $comment) }}">
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

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">البحث </h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="إبحث هنا ">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">بحث !</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        <div class="row">
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@stop