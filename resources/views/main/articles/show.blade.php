@extends("_layouts.main_layout")

@section("title")
Article {{ $article->title }}
@endsection

@section('content')<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- this route take u to /main/patients -->
        @if(auth('web')->check())
       <a class="navbar-brand" href="/main/UserMain">الرئيسية</a>
  
       @else
       <a class="navbar-brand" href="/doctor">الرئيسية</a>
       
       @endif
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/posts"> المجتمع </a></li>
            <li><a href="/articles"> المقالات </a></li>
            <li><a href="#about"> الاحصائيات </a></li>
            <li><a href="/main/TestData"> الأبحاث</a></li>
            <li><a href="/main/about"> حول </a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المزيد <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">أمراض </a></li>
                <li><a href="#">أطباء</a></li>
                <li><a href="/main/createReport">مراسلة إدارة الموقع</a></li>
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
              <div class="dropdown">
                  <button class="dropDownCss btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      @if(auth('web')->check())
                      
                      <a class="nav-link" style="color:#000;text-decoration: none" href="">
                        {{ auth('web')->user()->name }}
                      </a>
                      @elseif(auth('doctor')->check())
                      <a class="nav-link" style="color:#000;text-decoration: none" href="">
                        {{ auth('doctor')->user()->first_name}}
                      </a>
                      @endif
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">الصفحة الشخصية</a></li>
                    <li>
                      <a href="/logout">تسجيل خروج <span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                </div>
      
               
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

        <div class="row">
          <!-- Title -->
          <h3 class="col-md-8 text-right my-2">{{ $article->title }}</h3>
          <!-- Date/Time -->
          <p class="col-md-4 text-left">  نشر بتاريخ {{ $article->created_at }}</p>
        </div>

        <!-- Author -->
        <p class="lead">
          بواسطة
          <a href="#">{{ $article->doctor->first_name . ' ' . $article->doctor->last_name  }}</a>
        </p>

        <hr>

        @if($article->image)

          <img src="{{ asset($article->image) }}" alt="" width="100%" height="400">
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
	        <div class="media commentCss mb-4">
            <img class="imgUserCss d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <span class="nameCss">
                123456س
            </span>
            <span class="comCss">
                {{ $comment->body }}
            </span>
	          <div class="media-body">
	            <h5>{{ $comment->user()->first_name . ' ' . $comment->user()->last_name }}
	            	<form method="POST" style="display: inline-block" action="{{ route('article-comments.destroy' , $comment) }}">
	            		@csrf
	            		@method('DELETE')
	            		<button type="submit" class="btn btnDeletCss btn-warning"><i class="fa fa-trash"></i></button>
	            	</form>

	            </h5>
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