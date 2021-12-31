<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'><link rel="stylesheet" href="./style.css">

@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ADMIN') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    @stack('css')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style media="screen">
    body{
        	color : gray;
        	padding : 0;
        	margin : 0;
        	background-color: #EDEDED;
        }
        header{
        	width : 100%;
        	height : 100px;
        	background : magenta;
        	text-align : center;
        	padding : 10px;
        	border-bottom : 5px solid #fff;
        }
        header h1 a:hover{
        	color : cyan;
        }
        aside{
        	float : left;
        	background : #FFFFFF;
        	width : 180px;
        	height : 100%;
        	border-right : 5px solid #ddd;
        	text-align : center;
        }
        aside a:link, a:visited{
        	color : blue;
        	font-family : comic sans MS;
        	text-decoration : none;
        }
        aside a:hover{
        	color : red;
        	/*background : blue;*/
        }
        aside h2{
        	font-size : 14px;
        }

    .main {
      margin-left: 180px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    /*@media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }*/
    </style>
</head>
<body>

<!--<nav class="navbar navbar-expand-lg navbar-dark bg-success" style="margin-left:170px;">
<div class="container-fluid ">

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/ourteam">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/logout">Logout</a>
    </li>





  </ul>
</div>
</div>
</nav>-->
    <div class="container-fluid" style="width:100%;">
            <header>
      			<h1><a href = "index.php">Welcome to Admin Page</a></h1>
      		</header>
      		<aside>
      			Welcome : Admin
      			<font color = "green" size = "2"><h2>Manage Content</h2></font><br><hr><hr>
      			<!--<h2><a href = "logout.php">Logout</a></h2>-->
      			<h2><a href="#"><i class='zmdi zmdi-view-dashboard'></i>&nbsp;All Course</a></h2><hr>
      			<h2><a href = "#"><i class='zmdi zmdi-widgets'></i>&nbsp;All Student</a></h2><hr>
            <h2><a href = "#"> <i class="zmdi zmdi-link"></i>&nbsp;All Inquiry Student</a></h2><hr>
            <h2><a href = "#"><i class="zmdi zmdi-widgets"></i>&nbsp;All Abroad Study Inquiry Student</a></h2><hr>
            <h2><a href = "#"><i class="zmdi zmdi-calendar"></i>&nbsp;Course Add</a></h2><hr>
            <h2><a href = "#"><i class="zmdi zmdi-info-outline"></i>&nbsp;Student Add</a></h2><hr>
            <h2><a href = "#"> <i class="zmdi zmdi-settings"></i>&nbsp;Inquiry Student Add</a></h2><hr>
            <h2><a href = "#"> <i class="zmdi zmdi-comment-more"></i>&nbsp;Abroad Study Inquity Student Add</a></h2><hr>
            <h2><a href = "#"><i class="zmdi zmdi-link"></i>&nbsp;Exam Topic/Subject Detail Add</a></h2><hr>
            <h2><a href = "#"><i class="zmdi zmdi-calendar"></i>&nbsp;Give Exam and Show all</a></h2><hr>
      		</aside>

      		<center>
      			<h1 style = "color : green; font-weight : bold;">This is The Admin Page</h1>
      				<p style = "color : blue; font-weight : bold;">You can manage all of your websites content from here...</p>
      		</center>
      
          <hr><hr>
      		<!--<form action="search.php" method="get">
      			<h2 style="color: black; font-weight: bold; font-family: comic sans MS;"><span style="color: red;">S</span>earch <span style="color: blue;">A </span>Recor<span style="color: green;">d</span>:</h2><input type="text" name="search" placeholder="Enter a Date">
      			<input type="submit" name="submit" value="Find Now">
      		</form>-->
           <main class="py-4">
               @yield('content')
           </main>
   </div>










     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>
@endsection
