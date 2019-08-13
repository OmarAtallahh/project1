<!DOCTYPE html>
<html lang="ar">

    <head>
        <title>main</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/interface/neww/Untitled/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/interface/neww/Untitled/css/bootstrap-rtl.css" />
        <link rel="stylesheet" href="/interface/neww/Untitled/css/main.css" />
    </head>

    <body>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img
                        src="/interface/neww/Untitled/img/logo.png"
                        width="100">
                </a>
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                          

                            
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">حول</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> سياسة الخصوصوية  </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" a href="#">شروط الاستخدام</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-warning nav-link" href="/login">
                                    الانضمام لنا 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

        <div class="container conAll">
            <div class="row">
                <div class="offset-lg-7 col-lg-5 formFather py-lg-5 py-2">
                        <form class="form1" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                        <div class="form-group">
                            <input autocomplete="off" name="email" type="email"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailH"
                                placeholder="البريد الإلكتروني">
                        </div>
                        <div class="form-group">
                            <input autocomplete="off" name="password" type="password"
                                class="form-control"
                                id="exampleInputPassword1"
                                placeholder="كلمة المرور">
                        </div>
                        <div class="form-group">
                            <a href="">هل نسيت كلمة المرور ؟</a>
                        </div>
                        <button type="submit" value="Sign in" class="btn btn-primary">تسجيل دخول </button>
                    </form>
                </div>
            </div>
        </div>

        <script src="/interface/neww/Untitled/js/jquery.min.js"></script>
        <script src="/interface/neww/Untitled/js/popper.min.js"></script>
        <script src="/interface/neww/Untitled/js/bootstrap.min.js"></script>
        <script src="/interface/neww/Untitled/js/main.js"></script>
    </body>

</html>