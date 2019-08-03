<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Name title Bar</title>
    <link rel="stylesheet" href="/interface/css/bootstrap.min.css">
    <link rel="stylesheet" href="/interface/css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <nav id="global-nav" class="nav">
        <div class="container">
            <div class="pull-right">
                @if(auth('web')->check())


                    <a class="nav-link" style="color:#fff;text-decoration: none" href="">
                      {{ auth('web')->user()->first_name . ' '.auth('web')->user()->last_name }}
                    </a>
                @elseif(auth('doctor')->check())
                    <a class="nav-link" style="color:#fff;text-decoration: none" href="">
                      {{ auth('doctor')->user()->first_name . ' '.auth('doctor')->user()->last_name }}
                    </a>
                @endif
            </div>
            <div class="pull-right">
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                <!--  <li><a href="/main/statistics"> BCR Statistics </a></li>
                    <li><a href="/main/TestData"> Predict BCR </a></li>
                    <li><a href="/main/about"> about Predict me</a></li>
                -->
                <li><a href="/login" class="btn btn-secondary"> تسجيل دخول</a></li>

                <li><a href="/doctor/register" class="btn btn-secondary"> إنشاء حساب طبيب </a></li>
                <li><a href="/register" class="btn btn-secondary"> إنشاء حساب مستخدم  </a></li>
                </ul>

                @if(auth('web')->check())

                    <ul class="nav navbar-nav">

                        <li><a href="/posts" class="btn btn-secondary"> المجتمع </a></li>
                        <li><a href="/articles" class="btn btn-secondary"> المقالات </a></li>

                        <li><a href="/logout" class="btn btn-secondary"> تسجيل خروج </a></li>

                    </ul>

                @elseif(auth('doctor')->check())

                <ul class="nav navbar-nav">
                 <!--   <li><a href="/admin/login" class="btn btn-secondary"> Login As Admin </a></li>-->

                    <li><a href="/login" class="btn btn-secondary"> تسجيل دخول</a></li>

                    <li><a href="/doctor/register" class="btn btn-secondary"> أنشاءحساب طبيب </a></li>
                    <li><a href="/register" class="btn btn-secondary"> إنشاء حساب مستخدم  </a></li>

                </ul>

                @else


                @endif
            </div>
          </div>
        </div>
    </nav>
    <br><br><br>

    <div class="container">
  </div>

    <div class="hero-section">
        <div class="container">
            <div class="hero-text">
                <h1>BCR Statistics</h1>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                   there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                    the Semantics, a large language ocean.</p>
            </div>
        </div>
    </div>

    <div class="content-section">
        <div class="container">
            <div class="content-text">
                <h1>Predict BCR</h1>
                <p>A small river named Duden flows by their place and supplies it with the necessary
                   regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                   into your mouth. Even the all-powerful Pointing has no control about the blind texts
                   it is an almost unorthographic life.</p>
            </div>
        </div>
    </div>



    <script src="/interface/js/jquery.min.js"></script>
    <script src="/interface/js/bootstrap.min.js"></script>
    <script src="/interface/js/main.js"></script>

</body>



</html>
