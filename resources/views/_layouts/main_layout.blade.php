<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>@yield("titel")</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/metronic/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/metronic/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="/metronic/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="/metronic/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

        @if(app()->getLocale() == 'ar')
            <link rel="stylesheet" href="{{ asset('/') }}css/AdminLTE.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}css//bootstrap-rtl.min.css">
            <link rel="stylesheet" href="{{ asset('/') }}css/rtl.css">
            <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600&amp;subset=arabic,latin-ext" rel="stylesheet">
        @endif


      <link rel="stylesheet" href="{{ url('/jstree/themes/default/style.css') }}">

      <link rel="stylesheet" href="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">





        @yield("css")
      </head>
    <!-- END HEAD -->
<body>
  <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-10">
     @include("msg")
   </div>
 </div>
</div>

     @yield("content")

  <!-- BEGIN CORE PLUGINS -->
        <script src="/metronic/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/metronic/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="/metronic/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>

        <script src="{{ url('bower_components/fastclick/lib/fastclick.js')}}"></script>

        <script src="{{ url('bower_components/ckeditor/ckeditor.js') }}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>

        @yield("js")
    </body>

</html>
