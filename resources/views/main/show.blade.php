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
         <a class="navbar-brand" href="/doctor">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/main/statistics"> View Statistics </a></li>
            <li><a href="/main/TestData"> Test Data </a></li>
            <li><a href="/main/about"> About BCRP</a></li>
            <li><a href="/main/createReport">sent Report</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
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
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/main/index">Log Out<span class="sr-only">(current)</span></a></li>
          </ul>
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
                    <span class="section-heading-upper">patient info</span>
                  </h2>
              </div>
            </div>
          </div>
        </div>
        <br><br>
      </section>

      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img class="img-responsive" src="/image/{{$patient->image}}" />
          </div>

        <div class="container">
          <div class="row">
            <div class="col-md-9">
             <dl class="dl-horizontal">
               <br><br><br><br><br>
                <dt>ID</dt>
                <dd>{{$patient->id}}</dd>
                <dt>first name</dt>
                <dd>{{$patient->Name}}</dd>
                <dt>phone number</dt>
                <dd>{{$patient->phone_number}}</dd>
                <dt>age</dt>
                <dd>{{$patient->age}}</dd>
                <dt>email</dt>
                <dd>{{$patient->email}}</dd>
                <dt>adress</dt>
                <dd>{{$patient->adress}}</dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-push-6">
          <a href="/doctor" class="btn btn-default">Cancel</a>
         </div>
        </div>
      </div>


   </div>
 </div>



@endsection
