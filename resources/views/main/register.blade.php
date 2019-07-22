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
            <div class="pull-left">
                <a href="">
                  <img height="55px" width="100px" src="/interface/img/logoBCR.png">
                </a>
            </div>
            <div class="pull-right">
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="/main/statistics"> BCR Statistics </a></li>
                    <li><a href="/main/TestData"> Predict BCR </a></li>
                    <li><a href="/main/about"> about Predict me</a></li>
                </ul>

                @if(auth('web')->check() || auth('doctor')->check())

                    <ul class="nav navbar-nav">
                        <li><a href="/posts" class="btn btn-secondary"> Posts </a></li>
                        <li><a href="/Articles" class="btn btn-secondary"> Articles </a></li>
                        <li><a href="/logout" class="btn btn-secondary"> Logout </a></li>

                    </ul>

                @else

                <ul class="nav navbar-nav">
                    <li><a href="/admin/login" class="btn btn-secondary"> Login As Admin </a></li>
                    <li><a href="/login" class="btn btn-secondary"> Login</a></li>

                    <li><a href="/doctor/register" class="btn btn-secondary"> Register As Doctor </a></li>
                    <li><a href="/register" class="btn btn-secondary"> Register</a></li>

                </ul>

                @endif
            </div>
          </div>
        </div>
    </nav>
    <br><br><br>

    <div class="container">
  </div>

<div class="main" style="height: 500px;">
    <p class="sign" align="center">Register</p>

        <form class="form1" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <input class="un" name="name"  type="text" align="center" placeholder="Name">
            <input class="un" name="email"  type="email" align="center" placeholder="Email">
            <input class="pass" name="password" type="password" align="center" placeholder="Password">
            <input class="pass" name="confirmed_password" type="password" align="center" placeholder="Confirmed Password">
            <input type="submit" class="submit" value="Register" align="center">
        </form>

    <p class="forgot" align="center"><a href="">Forgot Password?</p>

</div>


    <script src="/interface/js/jquery.min.js"></script>
    <script src="/interface/js/bootstrap.min.js"></script>
    <script src="/interface/js/main.js"></script>

</body>



</html>
