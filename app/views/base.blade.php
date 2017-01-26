<!doctype HTML>
<html>
<head>
    @section("title")
        <title>Wally's Widgets</title>
    @show
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Wally's Widgets</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            </ul>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="/setup">Add/Edit Packages</a></li>
                </ul>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <div class="row">
        @yield("content")
    </div>
</div>

<script src="/bootstrap/js/jquery-3.1.1.min.js"></script>
<script src="/bootstrap/js/jquery-3.1.1.min.map"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
