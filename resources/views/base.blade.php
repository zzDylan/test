<!DOCTYPE html>
<html>
    <head>
         <!-- 新 Bootstrap 核心 CSS 文件 -->
         <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

         <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
         <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

         <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
         <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
         
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap-table.min.js"></script>

        <!-- Latest compiled and minified Locales -->
        <script src="js/bootstrap-table-zh-CN.min.js"></script>
        <script src="js/bootstrap-table-mobile.min.js"></script>
        <script src="js/Validform_v5.3.2_min.js"></script>
        <script src="js/jquery-form.js"></script>
        <script src="js/layer/layer.js"></script>
    </head>
    <body>
        @yield('content')
        @yield('otherjs')
    </body>
</html>
