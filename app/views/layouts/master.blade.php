<html>
<head>
	<title>Bread Crumbs</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='//fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css') }}">
</head>
<body>

    <div class="bar">
        <div class="container">
            <div class="region">Regio Gent</div>
            <div class="search">
                <input type="text" class="form-control" placeholder="Zoeken">
            </div>
        </div>
    </div>

	<div class='container'>

	    <div class="header">
            <div class="ask pull-right">
                <a href="{{ URL::to('ask') }}" class="btn btn-primary">Nieuwe vraag</a>
            </div>

            <div class="logo">
                <img src="{{ URL::asset('img/logo.png') }}">
            </div>
	    </div>

	    @yield('content')
	</div>

</body>
</html>
