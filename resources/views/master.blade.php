<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{action('HomeController@index')}}">Home</a></li>
      <li><a href="{{action('BlogController@index')}}">Blog</a></li>
      <li><a href="{{action('BlogController@create')}}">New Post</a></li>
    </ul>
  </div>
</nav>

        <div class="jumbotron">
         <h2>@yield('heading')</h2>
         <p>@yield('desc')</p>    
        </div>
        @yield('content')
    </div>

</body>
</html>