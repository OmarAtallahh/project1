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
<!-- Page Content --><nav class="navbar navbar-default navbar-fixed-top">
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
            <hr>
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