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

	    <header>
	    	<h1>Bread Crumbs<h1>
	    	<span class="label label-default">Vragen</span>
	    	<span class="label label-default">Tags</span>
	    	<span class="label label-default">Gebruikers</span>
	    	<span class="label label-danger pull-right">Nieuwe vraag</span>
	    </header>
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#">Topvragen</a></li>
		  <li><a href="#">In de kijker</a></li>
		  <li><a href="#">Populair</a></li>
		  <li><a href="#">Deze week</a></li>
		  <li><a href="#">Deze maand</a></li>
		</ul>
		
	    @yield('content')
	</div>

    <footer>
        Bread Crumbs by RM RF
    </footer>
</body>
</html>
