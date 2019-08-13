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
                                    <a class="btn btn-primary href=">تسجيل دخول</a>
    
        
                                </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        

        <div class="container conAll">
                <div class="row">
                    <div class="offset-lg-7 col-lg-5 formFather py-lg-5 py-2">
                            <form class="form1" method="POST" action="{{ route('doctor_register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                          لإنشاء حساب طبيب جديد أدخل البيانات التالية 
                                    </div>
                            <div class="form-group">
                                <input autocomplete="off" name="first_name" type="text"
                                    class="form-control"
                                    placeholder="الاسم الاول  ">
                            </div>
                            <div class="form-group">
                                    <input autocomplete="off" name="last_name" type="text"
                                        class="form-control"
                                        placeholder="الاسم الثاني  ">
                                </div>
                            <div class="form-group">
                                <input autocomplete="off" name="email" type="email"
                                    class="form-control"
                                    placeholder="البريد الالكتروني ">
                            </div>
                            <select  class="form-control" name="country">الدولة 
                                    <option value="JO">الأردن</option>
                                    <option value="AE">الامارات العربية المتحدة</option>
                                    <option value="BH">البحرين</option>
                                    <option value="DZ">الجزائر</option>
                                    <option value="SD">السودان</option>
                                    <option value="SO">الصومال</option>
                                    <option value="IQ">العراق</option>
                                    <option value="KW">الكويت</option>
                                    <option value="MA">المغرب</option>
                                    <option value="SA">المملكة العربية السعودية</option>
                                    <option value="YE">اليمن</option>
                                    <option value="TN">تونس</option>
                                    <option value="SY">سوريا</option>
                                    <option value="OM">عمان</option>
                                    <option value="PS">فلسطين</option>
                                    <option value="QA">قطر</option>
                                    <option value="LB">لبنان</option>
                                    <option value="LY">ليبيا</option>
                                    <option value="EG">مصر</option>
                                </select>
                                    <br>


                            <div class="form-group">
                                    <input autocomplete="off" name="phone_number" type="text"
                                        class="form-control"
                                        placeholder="رقم الهاتف  ">
                                </div>
                                <div class="form-group">
                                        <input autocomplete="off" name="hospital_name" type="text"
                                            class="form-control"
                                            placeholder="اسم المشفى   ">
                                    </div>
                                    <div class="form-group">
                                            <input autocomplete="off" name="job_id" type="text"
                                                class="form-control"
                                                placeholder="التخصص">
                                        </div>
                            <div class="form-group">
                              <input autocomplete="off" name="password" type="password"
                                  class="form-control"
                                  placeholder="كلمة المرور">
                          </div>
                          <div class="form-group">
                            <input autocomplete="off" name="confirmed_password" type="password"
                                class="form-control"
                                placeholder="تاكيد كلمة المرور ">
                        </div>
      
      
                         <!--   <div class="form-group">
                                <a href="">هل نسيت كلمة المرور ؟</a>
                            </div>  -->
                            <button type="submit" value="Register" class="btn btn-primary">إنشاء الحساب </button>
                           
                        </form>

                        <div class="form-group">
                                <a href="/"> هل لديك حساب بالفعل ؟ سجل دخولك من هنا</a>
                            </div>
                    </div>
                </div>
            </div>
                        

        <script src="/interface/neww/Untitled/js/jquery.min.js"></script>
        <script src="/interface/neww/Untitled/js/popper.min.js"></script>
        <script src="/interface/neww/Untitled/js/bootstrap.min.js"></script>
        <script src="/interface/neww/Untitled/js/main.js"></script>
    </body>

</html>