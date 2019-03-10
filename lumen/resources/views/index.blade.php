<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Summit</title>
    <link rel="stylesheet" href="js/app.css" />
</head>
<body>
	<div id="app">
	    <ul>
	        <li><router-link to="/">Home</router-link></li>
	        <li><router-link to="/page-1">Page 1</router-link></li>
	        <li><router-link to="/page-2">Page 2</router-link></li>
	    </ul>
	    <router-view></router-view>
	</div>
	<script src="{{ url('js/app.js') }}"></script>
</body>
</html>