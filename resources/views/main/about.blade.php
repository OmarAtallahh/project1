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







<br><br>
      <section class="page-section about-heading">
        <div class="container">
          <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/casual/img/about.jpg" alt="">
          <div class="about-heading-content">
            <div class="row">
              <div class="col-xl-9 col-lg-10 mx-auto">
                <div class="bg-faded rounded p-5">
                  <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">About BCRP</span>
                  </h2>
                  <p>

  About BCRD The Breast Cancer recurrence detection is a nonprofit dashboard designed to provide services to doctors and researchers interested in being supplied with the results of breast cancer recurrence.

              </p>
              <p>
              The classification-based models were constructed by using the selected
              attributes embedding the correlation based feature selection. The outcome
              of this evaluation was to obtain the best-fit features selected from the dataset.
              By using the arbitrary cut-off of 0.15, the results showed that out of 34 attributes,
              three attributes were found to be the best fit features namely, Tumor Size, Lymph Nodes
              Cap  and Time (Recurrence)    The classification-based models were constructed by using the selected
              attributes embedding the correlation based feature selection. The outcome
              of this evaluation was to obtain the best-fit features selected from the dataset.
              By using the arbitrary cut-off of 0.15, the results showed that out of 34 attributes,
              three attributes were found to be the best fit features namely, Tumor Size, Lymph Nodes
              Cap  and TimeTesting Data is the goal of this website, the user can test if a new patient
              record is predicted to be a recurrence or not when the physician enters the patient’s data
              and clicks on the predict button. This page has hyperlink that allow user (doctor) go to the
              homepage and start over to enter another data if they want to. .
               </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection