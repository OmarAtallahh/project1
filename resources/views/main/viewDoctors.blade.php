
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
  <br>
  <br>

<div class="contaner">
  <div class="row">
      
              <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="..." alt="...">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Thumbnail labelThumbnail labelThumbnail labelThumbnail labelThumbnail labelThumbnail label</p>
                    <p><a href="#" class="btn btn-primary" role="button">مراسلة</a> </p>
                  </div>
                </div>
              </div>
            

      
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Thumbnail labelThumbnail labelThumbnail labelThumbnail labelThumbnail labelThumbnail label</p>
              <p><a href="#" class="btn btn-primary" role="button">مراسلة</a> </p>
            </div>
          </div>
        </div>
      
      
         
        

  </div>
</div>