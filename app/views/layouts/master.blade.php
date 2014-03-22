<html>
<head>
	<title>Bread Crumbs</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='//fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}">Bread Crumbs</a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inloggen</a></li>
            <li><a href="#about">Registreren</a></li>
            <li><a href="#contact">Help</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class='container'>
	    @yield('content')
	</div>

    <footer>
        Bread Crumbs by RM RF
    </footer>
</body>
</html>
