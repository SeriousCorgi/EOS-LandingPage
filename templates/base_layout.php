{% load static from staticfiles %}

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Hung Pham">


	<title>{% block title %}{% endblock %}</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- Custom Theme -->
	<link rel="stylesheet" href="{% static 'Stylesheets/style.css' %}">

	<!-- Custom Script -->
	{% block script %}
	{% endblock %}

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar">
				<!-- Left Navbar -->
				<ul class="nav navbar-nav navbar-light">
					<li>
						<a href="{% url 'home' %}">Home</a>
					</li>
					<li class="dropdown dropdown-custom">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Application <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="https://petro.wovodat.org:4444">Petrology Workspace & Database</a></li>
							<li><a href="https://petro.wovodat.org/cemin.php">Lilu’s web interface</a></li>
							<li><a href="https://petro.wovodat.org/apthermo.php">Alex’ ApThermo webpage</a></li>
						</ul>
					</li>
				</ul>
				<!-- Right Navbar -->
				<ul class="nav navbar-nav navbar-right">
					<!-- Check for Authentication -->
					{% if user.is_authenticated %}
					<li><a href="{% url 'articles:create' %}">New Article</a></li>
					<li>
						<form action="{% url 'accounts:logout' %}" class="logout-link" method='POST'>
							{% csrf_token %}
							<a href="javascript:$('form').submit()">Log out from {{ user }}</a>
						</form>
					</li>
					{% else %}
					<li><a href="{% url 'accounts:signup' %}"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
					<li><a href="{% url 'accounts:login' %}"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
					{% endif %}
				</ul>
			</div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container -->
	</nav>

	<!-- Page Header -->
	<header class="intro-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({% static 'Images/Picture1.png' %})">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="site-heading">
						<h1><img alt="">Earth Observatory of Singapore</h1>
						<hr class="small">
						<span class="sub-heading">Volcano Petrology Group - Web Application</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content -->
	{% block content %}
	{% endblock %}

</body>

</html>
