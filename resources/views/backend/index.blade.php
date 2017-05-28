<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Xây dựng ứng dụng giải trí" />
    <meta name="author" content="QuocTuan.Info">
    <title>QuocTuan.Info</title>
    <!-- Bootstrap Core CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('stylesheets/bootstrap.min.css')}}" />
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('stylesheets/blog-home.css')}}" />
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">QuocTuan.Info</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">QuocTuan.Info</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
                        <a href="/">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="/dang-bai">Đăng Bài</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/gioi-thieu.html">Giới Thiệu</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/khoa-hoc-lap-trinh.html">Khóa Học</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/lien-he.html">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     <div class="container">        
            @yield('content')
      </div>

    <script type="text/javascript" src="{{asset('javascripts/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{asset('javascripts/bootstrap.min.js')}}"></script>
    <!-- MyScript -->
    <script type="text/javascript" src="{{asset('javascripts/myscript.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascripts/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('javascripts/tinymce/js/tinymce/init-tinymce.js')}}"></script>
</body>
</html>