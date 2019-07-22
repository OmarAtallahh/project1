@extends("_layouts.main_layout")

@section("title")
About BCR
@endsection

@section("content")
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin/admin">الرئيسية </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="/admin/admin/create"> إضافة طبيب</a></li>
          <li><a href="/admin/admin">عرض الأطباء</a></li>
          <li><a href="/admin/admin/reports">التقارير </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المزيد  <span class="caret"></span></a>
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
          <li class="active"><a href="/main/index">تسجيل خروج <span class="sr-only">(current)</span></a></li>
        </ul>
      </div>
    </div>
  </div>


      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <br>
      <section class="page-section about-heading">
        <div class="container">
          <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/casual/img/about.jpg" alt="">
          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">التقارير الواردة من الأطباء</span>
                  </h2>
              </div>
            </div>
          </div>
        </div>
        <br><br>
      </section>
      <section>
        <div class="container">
            <table class="table table-hover table-striped">   
                <thead>
                    <tr>
                        <th>#</th>
                        <th>التقارير </th>
                        <th>التاريخ</th>
                        <th width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $r)
                    <tr>
                       <td>{{$r->id}}</td>
                        <td>{{$r->report}}</td>
                        <td>{{$r->created_at}}</td>
                        <td width="10%">
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </section>



@endsection
