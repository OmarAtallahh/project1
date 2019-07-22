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
        <li class="active"><a href="/admin/logout">تسجيل خروج <span class="sr-only">(current)</span></a></li>
      </ul>
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
                    <span class="section-heading-upper">لوحة تحكم المدير </span>
                        <hr>
                  </h2>
                  <p>
                تحديث بيانات الطبيب </p>
              </div>
            </div>
          </div>
        </div>
        <br><br>
      </section>

      <form action="/admin/admin/{{$doctor->id}}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put" />

          <div class="container">
              <div class="row">
                <div class="col-md-5 col-md-push-1">
                  <div class="form-body">
                      <div class="form-group">
                        <label class="form_controls">الاسم الاول </label>
                          <input type="text" class="form-control" value="{{$doctor->first_name}}"
                           name="first_name" id="first_name" placeholder="first_name">
                      </div>

                      <div class="form-group">
                        <label class="form_controls">الاسم الاخير </label>
                          <input type="text" class="form-control" value="{{$doctor->last_name}}"
                           name="last_name" id="last_name" placeholder="last_name">
                      </div>

                      <div class="form-group">
                        <label class="form_controls">البريد الالكتروني </label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-envelope"></i>
                              </span>
                              <input type="email" class="form-control" value="{{$doctor->email}}" name="email" id="email"
                              placeholder="Email Address"> </div>
                      </div>
                      <div class="form-group">
                        <label class="form_controls">كلمة المرور </label>
                          <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                              <input type="text" class="form-control" value="{{$doctor->password}}" name="password" id="password"
                              placeholder="Password">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="form_controls">الدولة</label>
                          <select class="form-control" name="country_id" id="country_id"
                          placeholder="country_id">
                            <option> إختيار الدولة </option>
                            @foreach($countries as $c)
                                <option  {{$c->id == $doctor->country_id ?"selected":""}} value="{{$c->id}}">{{$c->country_name}}</option>
                            @endforeach $c->id == $doctor->country_id
                          </select>
                      </div>

                      <div class="form-group">
                        <label class="form_controls">الهاتف </label>
                          <input type="text" class="form-control" value="{{$doctor->phone_number}}"
                           name="phone_number" id="phone_number" placeholder="phone_number">
                      </div>

                      <div class="form-group">
                        <label class="form_controls">رقم المهنة </label>
                          <input type="text" class="form-control" value="{{$doctor->job_id}}"
                           name="job_id" id="job_id" placeholder="job_id">
                      </div>
                      <div class="form-group">
                        <label class="form_controls">إسم المشفى </label>
                          <input type="text" class="form-control" value="{{$doctor->hospital_name}}"
                           name="hospital_name" id="hospital_name"  placeholder="hospital_name">
                      </div>


                    <br>  <br>
                  <div class="form-actions">
                      <button type="submit" class="btn green">تحديث البيانات </button>
                    <a href="/admin/admin">  <button  type="button" class="btn default">إلغاء</button> </a>
                  </div>

                      <hr>

                </div>

              </div>
            </div>
          </form>
              <!-- END FORM-->
        </section>
        <br>
        <br>
        <br>



@endsection
