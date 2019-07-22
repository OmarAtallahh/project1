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
      <!-- this route take u to /main/patients -->
     <a class="navbar-brand" href="/doctor">الرئيسية</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
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
    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/casual/img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">All Patients</span>
                </h2>
            </div>
          </div>
        </div>
      </div>
      <br><br>
    </section>
    <form class="row">
       <div class="container">
           <div class="col-md-6">
               <input autofocus value="{{$q}}" type="text" class="form-control" name="q" placeholder="Search_ID" />
           </div>
           <div class="col-md-6">
               <input type="submit" value="Go" class="btn btn-primary" />
           </div>
       </div>
    </form>
    <br>
    <section>
      <div class="container">
        <div class="row">
          <table class="table table-hover table-striped">
              <thead>
                  <tr>
                      <th>id</th>
                      <th>image</th>
                      <th>name</th>
                      <th>phone number</th>
                      <th>age</th>
                      <th>email</th>
                      <th>adress</th>
                      <th width="10%"></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($patients as $a)
                  <tr>
                      <td>{{$a->id}}</td>
                      <td>  <img width="50" height="35" src="/image/{{$a->image}}" /></td>
                      <td>{{$a->Name}}</td>
                      <td>{{$a->phone_number}}</td>
                      <td>{{$a->age}}</td>
                      <td>{{$a->email}}</td>
                      <td>{{$a->adress}}</td>
                      <td width="10%">
                    <td>  <a href="/doctor/{{$a->id}}" class="btn btn-xs btn-info">
                          <i class="glyphicon glyphicon-info-sign"></i>
                      </a></td>
                      <td>
                          <a onclick="return confirm('Are you sure dude?')" href="/doctor/{{$a->id}}/delete"
                            class="btn btn-xs btn-danger">
                              <i class="glyphicon glyphicon-trash"></i>

                            </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          {{$patients->links()}}

        </div>
      </section>




@endsection
