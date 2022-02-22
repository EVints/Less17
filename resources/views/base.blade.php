@extends($content->getPageName())

@section('mainMenu')

<nav class="navbar navbar-default navbar-sticky">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>

        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
                <li class="active"><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-left">Left Sidebar</a></li>
                        <li><a href="sidebar-right">Right Sidebar</a></li>
                        <li><a href="single">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="blog">Blog</a></li>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

@endsection





@section('cssStyle')

<!-- Bootstrap -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
<!-- Icon font -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
<!-- Custom styles -->
<link rel="stylesheet" href="assets/css/styles.css">

<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->

@endsection




@section('jScript')
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>

@endsection