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

<div class="main" style="height: 750px;">
    <p class="sign" align="center">Doctor Register</p>
        <form class="form1" method="POST" action="{{ route('doctor_register') }}">
            {{ csrf_field() }}
            <input class="un" name="first_name"  type="text" align="center" placeholder="First Name">
            <input class="un" name="last_name"  type="text" align="center" placeholder="Last Name">
            <input class="un" name="email"  type="email" align="center" placeholder="Email">
            <input class="un" name="phone_number"  type="text" align="center" placeholder="Phone Number">
            <input class="un" name="hospital_name"  type="text" align="center" placeholder="Hospital Name">
            <input class="un" name="job_id"  type="text" align="center" placeholder="Job Id">
            <input class="pass" name="password" type="password" align="center" placeholder="Password">
            <input class="pass" name="confirmed_password" type="password" align="center" placeholder="Confirmed Password">
            <input type="submit" class="submit" value="Register" align="center">
        </form>


</div>


    <script src="/interface/js/jquery.min.js"></script>
    <script src="/interface/js/bootstrap.min.js"></script>
    <script src="/interface/js/main.js"></script>

</body>



</html>
