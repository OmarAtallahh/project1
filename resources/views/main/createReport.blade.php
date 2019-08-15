@extends("_layouts.main_layout")

@section("title")
About BCR
@endsection

@section("content")
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
        @if(auth('web')->check())
       <a class="navbar-brand" href="/main/UserMain">الشخصية</a>

       @else
       <a class="navbar-brand" href="/doctor">الشخصية</a>

       @endif
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="/posts"> المجتمع </a></li>
            <li><a href="/articles"> المقالات </a></li>
            <li><a href="/statistics"> الاحصائيات </a></li>
            <li><a href="/main/about"> حول </a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المزيد <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/view_doctors">أطباء</a></li>
                <li><a href="/main/createReport">مراسلة إدارة الموقع</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">سياسات</li>
                <li><a href="/privacy">سياسة الخصوصية</a></li>
                <li><a href="/terms">شروط الاستخدام</a></li>
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
      <section class="page-section about-heading">
        <div class="container">
          <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/casual/img/about.jpg" alt="">
          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">مراسلة إدارة الموقع</span>
                  </h2>
              </div>
            </div>
          </div>
        </div>
        <br><br>
      </section>
      <section>
        <form action="/main/createReport" method="post" class="form-horizontal">
          {{csrf_field()}}
        <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  <p> يمكنك كتاية الرسالة بحدود 500 حرف  </p>
                </div>
             </div>
             
           </div>
             <div class="col-md-8">
                    <textarea class="form-control" value="{{old('report')}}"name="report" id="report"
                    placeholder="الرسالة " rows="4"></textarea>
              </div>
        </div>
        <br>
        <div class="container">
        <div class="row">
        <div class="col-md-2 col-md- push-8">
        <div class="form-actions">
            <button ?"selected":"" type="submit" class="btn green">إرسال </button>
          <a href="/main/createReport">  <button  type="button" class="btn default">إالغاء</button> </a>
        </div>
      </div>
    </div>
  </div>
</form>
        </section>



@endsection
