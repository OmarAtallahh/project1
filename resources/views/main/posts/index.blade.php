@extends("_layouts.main_layout")

@section("title")
Posts
@endsection

@section("js")
<script type="text/javascript">
   CKEDITOR.replace('body')
   $('.textarea').wysihtml5();
</script>
@endsection
 

@section('content')
<!-- Page Content -->

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
  

  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->

      @if(auth('web')->check())
      <div class="col-md-8">
        <span> أضف منشور </span>
        <br>
        <br>
       

        <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
          {{ csrf_field() }}
            <div class="form-group">

              <input type="text" class="form-control" name="title">

            </div>

            <div class="form-group">


              <textarea name="body" class="form-control"></textarea>

            </div>

            <div class="form-group">

              <input type="file" class="form-control" name="image">

            </div>


            <input type="submit" class="btn btn-primary" value="نشر">
        </form>

      </div>

      @endif

      <div class="col-md-8">

        <h3 class="my-4">
          آخر المنشورات
        </h3>
        <hr>

        @forelse($posts as $post)
        <!-- Blog Post -->
          <div class="card mb-4">
            @if($post->image)
            <img class="card-img-top" src="{{ asset('image/' . $post->image) }}" alt="Card image cap" width="500" height="400">
            @else
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            @endif
            <div class="card-body">
              <h2 class="card-title">{{ $post->title }}</h2>
              <p class="card-text">{!! $post->body !!}</p>
              <a href="{{ route('posts.show' , $post->id) }}" class="btn btn-primary"> تفاصيل المنشور  &lAarr;</a>
            </div>
            <br>
            <div class="card-footer text-muted">
              {{ $post->created_at }}
            </div>
          </div>
            <hr><hr><hr>
        @empty
          <div class="alert alert-warning">لا يوجد منشورات </div>
        @endforelse

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          {{ $posts->links() }}
        </ul>

      </div>


    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  @stop