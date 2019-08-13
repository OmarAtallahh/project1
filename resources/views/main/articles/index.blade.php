@extends("_layouts.main_layout")

@section("title")
Articles
@endsection
@section("js")
<script type="text/javascript">
   CKEDITOR.replace('body')
   $('.textarea').wysihtml5();
</script>
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
  <div class="container">

    <div class="row">

      @if(auth('doctor')->check())
      <div class="col-md-8">
        <span>عنوان المقالة </span>

        <form action="{{ route('articles.store') }}" enctype="multipart/form-data" method="POST">
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


            <input type="submit" class="btn btn-primary" value="نشر المقالة">
        </form>

      </div>

      @endif

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">
          آخر المقالات
        </h1>

        @forelse($articles as $article)
        <!-- Blog Post -->
          <div class="card mb-4">
            @if($article->image)
            <img class="card-img-top" src="{{ asset('image/' . $article->image) }}" alt="Card image cap" width="700" height="400">
            @else
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            @endif
            <div class="card-body">
              <h2 class="card-title">{{ $article->title }}</h2>
              <p class="card-text postCss">{!! $article->body !!}</p>
              <a href="{{ route('articles.show' , $article->id) }}" class="btn btn-primary"> تفاصيل المقالة &lArr;</a>
            </div>
            <div class="card-footer text-muted">
              {{ $article->created_at }}
            </div>
          </div>
          <hr>
        @empty
          <div class="alert alert-warning">No Data found</div>
        @endforelse

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          {{ $articles->links() }}
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
         
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="البحث عن ...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">ابحث!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">التصنيفات</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">طب عام</a>
                  </li>
                  <li>
                    <a href="#">جلدية</a>
                  </li>
                  <li>
                    <a href="#">باطنة</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">سرطان</a>
                  </li>
                  <li>
                    <a href="#">ادمان</a>
                  </li>
                  <li>
                    <a href="#">عيون</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  @stop