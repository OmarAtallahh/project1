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
                        @if(auth('web')->check())
                        <li><a href="/main/UserMain">الصفحة الشخصية</a></li>
                 
                        @else
                        <a class="navbar-brand" href="/doctor">الشخصية</a>
                 
                        @endif
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
      <h1 class="page-title">
        الصفحة الشخصية
      </h1>
      <!-- END PAGE TITLE-->
      <!-- END PAGE HEADER-->
      <div class="profile">
          <div class="tabbable-line tabbable-full-width">
              <ul class="nav nav-tabs">
                  <li class="active">
                      <a href="#tab_1_1" data-toggle="tab"> عام </a>
                  </li>
                  <li>
                      <a href="#tab_1_3" data-toggle="tab"> البيانات </a>
                  </li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane active" id="tab_1_1">
                      <div class="row">
                          <div class="col-md-3">
                              <ul class="list-unstyled profile-nav">
                                  <li>
                                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjDrqZoRn7rR7xfHVFC2yY1CRgJGjsEFQwQBqqNCW8fakBZ-iE2Q" class="img-responsive pic-bordered" alt="" />
                                      <a href="javascript:;" class="profile-edit"> edit </a>
                                  </li>
                                  @if(auth('web')->check())
                                            <li>
                                                <a href="javascript:;"> عدد المنشورات
                                                    <span> 3 </span>
                                                </a>
                                            </li>
                                    @else
                                            <li>
                                                <a href="javascript:;"> عدد المقالات
                                                    <span> 3 </span>
                                                </a>

                                            </li>
                                    @endif
                                 
                              </ul>
                          </div>
                          <div class="col-md-9">
                              <div class="row">
                                  <div class="col-md-8 profile-info">
                                      <h1 class="font-green sbold uppercase">John Doe</h1>
                                      <textarea id="textareaID" disabled rows="6" class="form-control textareaCss">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat</textarea>
                                      <button class="btn btn-primary" id="editID">
                                        <i class="fa faEdit fa-edit fa-2x"></i>
                                        <i class="fa faCheck fa-check fa-2x"></i>
                                      </button>
                                      <p>
                                          <a href="javascript:;"> www.mywebsite.com </a>
                                      </p>

                                  </div>
                                  <!--end col-md-8-->
                              </div>
                              <!--end row-->
                          </div>
                          <script>

                            var button = document.getElementById("editID");
                            var input = document.getElementById("textareaID");

                            button.addEventListener("click", function(){
                              input.toggleAttribute("disabled");
                            });

                            function classToggle() {
                              input.classList.toggle('disabled');
                              input.classList.toggle('disabled');
                            }

                            button.addEventListener('click', classToggle);

                          </script>
                      </div>
                  </div>
                  <!--tab_1_2-->
                  <div class="tab-pane" id="tab_1_3">
                      <div class="row profile-account">
                          <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                  <li class="active">
                                      <a data-toggle="tab" href="#tab_1-1">
                                          <i class="fa fa-cog"></i> المعلومات الشخصية  </a>
                                      <span class="after"> </span>
                                  </li>

                                  <li>
                                      <a data-toggle="tab" href="#tab_3-3">
                                          <i class="fa fa-lock"></i> تغيير كلمة المرور</a>
                                  </li>

                              </ul>
                          </div>
                          <div class="col-md-9">
                              <div class="tab-content">
                                  <div id="tab_1-1" class="tab-pane active">
                                      <form enctype="multipart/form-data" role="form" action="{{ route('update_data') }}" method="POST">

                                        @csrf
                                        @method('PUT')

                                        @if(auth('doctor')->check())

                                          <div class="form-group">
                                              <label class="control-label">الاسم الاول  </label>
                                              <input type="text" value="{{ $user->first_name }}" name="first_name" placeholder="John" class="form-control" />
                                            </div>


                                          <div class="form-group">
                                              <label class="control-label">الاسم  الثانى</label>
                                              <input type="text" value="{{ $user->last_name }}" name="last_name" placeholder="John" class="form-control" />
                                            </div>


                                          <div class="form-group">
                                              <label class="control-label">رقم الهاتف</label>
                                              <input value="{{ $user->phone_number }}" name="phone_number" type="text" placeholder="+1 646 580 DEMO (6284)" class="form-control" />
                                            </div>

                                          <div class="form-group">
                                              <label class="control-label">التخصص</label>
                                              <input type="text" name="section" value="{{ $user->section }}" placeholder="Web Developer" class="form-control" /> </div>
                                          <div class="form-group">
                                              <label class="control-label">نبذة</label>
                                              <textarea class="form-control" name="about" rows="3" placeholder="We are KeenThemes!!!">{{ $user->about }}</textarea>
                                          </div>

                                          @else

                                            <div class="form-group">
                                                <label class="control-label">الاسم  </label>
                                                <input type="text" value="{{ $user->name }}" name="name" placeholder="John" class="form-control" />
                                              </div>

                                          @endif

                                          <div class="form-group">
                                              <label class="control-label"> الصورة</label>
                                              <input type="file" name="image" class="form-control" />
                                          </div>

                                          <div class="margiv-top-10">
                                              <button type="submit" class="btn green"> حفظ التعديلات </button>
                                              <button href="javascript:;" class="btn default"> إالغاء </button>
                                          </div>
                                      </form>
                                  </div>





                                  <div id="tab_3-3" class="tab-pane">
                                      <form action="{{ route('update_password') }}" method="POST">
                                          @csrf
                                          @method('PUT')

                                          <div class="form-group">
                                              <label class="control-label">كلمة المرور الحالية</label>
                                              <input type="password" name="current_password" class="form-control" /> </div>
                                          <div class="form-group">
                                              <label class="control-label">كلمة المرور الجديد</label>
                                              <input type="password" name="new_password" class="form-control" /> </div>
                                          <div class="form-group">
                                              <label class="control-label">اعادة كتابة كلمة المرور الجديدة</label>
                                              <input type="password" name="confirmation_password" class="form-control" /> </div>
                                          <div class="margin-top-10">
                                              <button type="submit" class="btn green"> حفظ التعديلات </button>
                                              <button href="javascript:;" class="btn default"> إالغاء </button>
                                          </div>
                                      </form>
                                  </div>
                                  <div id="tab_4-4" class="tab-pane">

                                  </div>
                              </div>
                          </div>
                          <!--end col-md-9-->
                      </div>
                  </div>
                  <!--end tab-pane-->
              </div>
          </div>
      </div>
  </div>
  <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler">
  <i class="icon-login"></i>
</a>
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
  <div class="page-quick-sidebar">
      <ul class="nav nav-tabs">
          <li class="active">
              <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                  <span class="badge badge-danger">2</span>
              </a>
          </li>
          <li>
              <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                  <span class="badge badge-success">7</span>
              </a>
          </li>
          <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                  <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu pull-right">
                  <li>
                      <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                          <i class="icon-bell"></i> Alerts </a>
                  </li>
                  <li>
                      <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                          <i class="icon-info"></i> Notifications </a>
                  </li>
                  <li>
                      <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                          <i class="icon-speech"></i> Activities </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                      <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                          <i class="icon-settings"></i> Settings </a>
                  </li>
              </ul>
          </li>
      </ul>
      <div class="tab-content">
          <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
              <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                  <h3 class="list-heading">Staff</h3>
                  <ul class="media-list list-items">
                      <li class="media">
                          <div class="media-status">
                              <span class="badge badge-success">8</span>
                          </div>
                          <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Bob Nilson</h4>
                              <div class="media-heading-sub"> Project Manager </div>
                          </div>
                      </li>
                      <li class="media">
                          <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Nick Larson</h4>
                              <div class="media-heading-sub"> Art Director </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-status">
                              <span class="badge badge-danger">3</span>
                          </div>
                          <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Deon Hubert</h4>
                              <div class="media-heading-sub"> CTO </div>
                          </div>
                      </li>
                      <li class="media">
                          <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Ella Wong</h4>
                              <div class="media-heading-sub"> CEO </div>
                          </div>
                      </li>
                  </ul>
                  <h3 class="list-heading">Customers</h3>
                  <ul class="media-list list-items">
                      <li class="media">
                          <div class="media-status">
                              <span class="badge badge-warning">2</span>
                          </div>
                          <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Lara Kunis</h4>
                              <div class="media-heading-sub"> CEO, Loop Inc </div>
                              <div class="media-heading-small"> Last seen 03:10 AM </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-status">
                              <span class="label label-sm label-success">new</span>
                          </div>
                          <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Ernie Kyllonen</h4>
                              <div class="media-heading-sub"> Project Manager,
                                  <br> SmartBizz PTL </div>
                          </div>
                      </li>
                      <li class="media">
                          <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Lisa Stone</h4>
                              <div class="media-heading-sub"> CTO, Keort Inc </div>
                              <div class="media-heading-small"> Last seen 13:10 PM </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-status">
                              <span class="badge badge-success">7</span>
                          </div>
                          <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Deon Portalatin</h4>
                              <div class="media-heading-sub"> CFO, H&D LTD </div>
                          </div>
                      </li>
                      <li class="media">
                          <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Irina Savikova</h4>
                              <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-status">
                              <span class="badge badge-danger">4</span>
                          </div>
                          <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                          <div class="media-body">
                              <h4 class="media-heading">Maria Gomez</h4>
                              <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                              <div class="media-heading-small"> Last seen 03:10 AM </div>
                          </div>
                      </li>
                  </ul>
              </div>
              <div class="page-quick-sidebar-item">
                  <div class="page-quick-sidebar-chat-user">
                      <div class="page-quick-sidebar-nav">
                          <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                              <i class="icon-arrow-left"></i>Back</a>
                      </div>
                      <div class="page-quick-sidebar-chat-user-messages">
                          <div class="post out">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Bob Nilson</a>
                                  <span class="datetime">20:15</span>
                                  <span class="body"> When could you send me the report ? </span>
                              </div>
                          </div>
                          <div class="post in">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Ella Wong</a>
                                  <span class="datetime">20:15</span>
                                  <span class="body"> Its almost done. I will be sending it shortly </span>
                              </div>
                          </div>
                          <div class="post out">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Bob Nilson</a>
                                  <span class="datetime">20:15</span>
                                  <span class="body"> Alright. Thanks! :) </span>
                              </div>
                          </div>
                          <div class="post in">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Ella Wong</a>
                                  <span class="datetime">20:16</span>
                                  <span class="body"> You are most welcome. Sorry for the delay. </span>
                              </div>
                          </div>
                          <div class="post out">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Bob Nilson</a>
                                  <span class="datetime">20:17</span>
                                  <span class="body"> No probs. Just take your time :) </span>
                              </div>
                          </div>
                          <div class="post in">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Ella Wong</a>
                                  <span class="datetime">20:40</span>
                                  <span class="body"> Alright. I just emailed it to you. </span>
                              </div>
                          </div>
                          <div class="post out">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Bob Nilson</a>
                                  <span class="datetime">20:17</span>
                                  <span class="body"> Great! Thanks. Will check it right away. </span>
                              </div>
                          </div>
                          <div class="post in">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Ella Wong</a>
                                  <span class="datetime">20:40</span>
                                  <span class="body"> Please let me know if you have any comment. </span>
                              </div>
                          </div>
                          <div class="post out">
                              <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                              <div class="message">
                                  <span class="arrow"></span>
                                  <a href="javascript:;" class="name">Bob Nilson</a>
                                  <span class="datetime">20:17</span>
                                  <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                              </div>
                          </div>
                      </div>
                      <div class="page-quick-sidebar-chat-user-form">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Type a message here...">
                              <div class="input-group-btn">
                                  <button type="button" class="btn green">
                                      <i class="icon-paper-clip"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
              <div class="page-quick-sidebar-alerts-list">
                  <h3 class="list-heading">General</h3>
                  <ul class="feeds list-items">
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-check"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 4 pending tasks.
                                          <span class="label label-sm label-warning "> Take action
                                              <i class="fa fa-share"></i>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> Just now </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-success">
                                              <i class="fa fa-bar-chart-o"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> Finance Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-danger">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-shopping-cart"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> New order received with
                                          <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 30 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-success">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-bell-o"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> Web server hardware needs to be upgraded.
                                          <span class="label label-sm label-warning"> Overdue </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 2 hours </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-default">
                                              <i class="fa fa-briefcase"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> IPO Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                  </ul>
                  <h3 class="list-heading">System</h3>
                  <ul class="feeds list-items">
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-check"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 4 pending tasks.
                                          <span class="label label-sm label-warning "> Take action
                                              <i class="fa fa-share"></i>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> Just now </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-danger">
                                              <i class="fa fa-bar-chart-o"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> Finance Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-default">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-info">
                                          <i class="fa fa-shopping-cart"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> New order received with
                                          <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 30 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-success">
                                          <i class="fa fa-user"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 24 mins </div>
                          </div>
                      </li>
                      <li>
                          <div class="col1">
                              <div class="cont">
                                  <div class="cont-col1">
                                      <div class="label label-sm label-warning">
                                          <i class="fa fa-bell-o"></i>
                                      </div>
                                  </div>
                                  <div class="cont-col2">
                                      <div class="desc"> Web server hardware needs to be upgraded.
                                          <span class="label label-sm label-default "> Overdue </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col2">
                              <div class="date"> 2 hours </div>
                          </div>
                      </li>
                      <li>
                          <a href="javascript:;">
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-briefcase"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc"> IPO Report for year 2013 has been released. </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date"> 20 mins </div>
                              </div>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
              <div class="page-quick-sidebar-settings-list">
                  <h3 class="list-heading">General Settings</h3>
                  <ul class="list-items borderless">
                      <li> Enable Notifications
                          <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                      <li> Allow Tracking
                          <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                      <li> Log Errors
                          <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                      <li> Auto Sumbit Issues
                          <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                      <li> Enable SMS Alerts
                          <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                  </ul>
                  <h3 class="list-heading">System Settings</h3>
                  <ul class="list-items borderless">
                      <li> Security Level
                          <select class="form-control input-inline input-sm input-small">
                              <option value="1">Normal</option>
                              <option value="2" selected>Medium</option>
                              <option value="e">High</option>
                          </select>
                      </li>
                      <li> Failed Email Attempts
                          <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                      <li> Secondary SMTP Port
                          <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                      <li> Notify On System Error
                          <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                      <li> Notify On SMTP Error
                          <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                  </ul>
                  <div class="inner-content">
                      <button class="btn btn-success">
                          <i class="icon-settings"></i> Save Changes</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- END QUICK SIDEBAR -->
  </div>
</section>
@endsection
