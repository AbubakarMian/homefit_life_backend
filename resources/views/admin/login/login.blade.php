<!doctype html>
<html class="signin no-js" lang="">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->
    <title>Login</title>
    <!-- page level plugin styles -->
    <!-- /page level plugin styles -->
    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{{asset('theme/vendor/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/styles/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('theme/styles/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('theme/styles/animate.css')}}">
    <link rel="stylesheet" href="{{asset('theme/styles/sublime.css')}}">
    <!-- endbuild -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- load modernizer -->
    <script src="{{asset('theme/vendor/modernizr.js')}}"></script>
</head>
<body class="bg-primary">

<div class="cover" style="background-image: url({{asset('theme/images/cover3.jpg')}})"></div>

<div class="overlay bg-primary"></div>


<div class="container box">
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6">


    <h3 align="center">HOME FIT LIFE LOG IN</h3><br />


    @if(isset(Auth::user()->email))
        <script>window.location='dashboard';</script>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('admin/checklogin') }}">
        {{ csrf_field() }}
       
        {!!  Form::hidden('timezone_offset','',array('id' => 'timezone_offset') )  !!}
        <div class="form-group">
            <label>Enter Email</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-default" value="Login" />
        </div>



    </form>
            </div>
        </div>
</div>
<script type="text/javascript">
    var el = document.getElementById("year"),
        year = (new Date().getFullYear());
    el.innerHTML = year;

    var myDate = new Date();
    var localTimeZone = myDate.getTimezoneOffset();
    var timezone = document.getElementById("timezone_offset");
    timezone.value = localTimeZone;

</script>
</body>

</html>

