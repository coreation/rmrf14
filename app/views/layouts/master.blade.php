<html>
<head>
	<title>Bread Crumbs</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='//fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="region">Regio Gent</div>
            <div class="search">
                <input type="text" class="form-control" placeholder="Zoeken">
            </div>
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
