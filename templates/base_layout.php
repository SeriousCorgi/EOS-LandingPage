{% load static from staticfiles %}

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Hung Pham">


	<title>Volcanic Petrology Group | {% block title %}{% endblock %}</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!-- Custom Font -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custom Theme -->
	<link rel="stylesheet" href="{% static 'css/style.css' %}">

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
		<div class="container">
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
							<li><a href="https://pwd.wovodat.org/">Petrology Workspace & Database (PWD)</a></li>
							<li><a href="https://statpetro.wovodat.org/">Statistical Petrology</a></li>
							<li><a href="https://apthermo.wovodat.org/">Apetite Thermodynamic Model (ApTherMo)</a></li>
						</ul>
					</li>
				</ul>
				<!-- Right Navbar -->
				<!-- <ul class="nav navbar-nav navbar-right">
					{% if user.is_authenticated %}
					<li><a href="{% url 'articles:create' %}"><span class="glyphicon glyphicon-edit"></span> New Article</a></li>
					<li>
						<form action="{% url 'accounts:logout' %}" class="logout-link" method='POST'>
							{% csrf_token %}
							<button type="submit" class="submit btn btn-link"><a><span class="glyphicon glyphicon-log-out"></span> Log out from {{ user }}</a></button>
						</form>
					</li>
					{% else %}
					<li><a href="{% url 'accounts:signup' %}"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
					<li><a href="{% url 'accounts:login' %}"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
					{% endif %}
				</ul> -->
			</div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container -->
	</nav>

	<!-- Page Header -->
	<header class="intro-header carousell-custom" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({% static 'img/Carousell/pic1.png' %})">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="site-heading">
						<h1><img alt="">Volcanic Petrology Group<br>Web Application</h1>
						<h2>Earth Observatory of Singapore</h2>
						<hr class="small">
						<h2 class="sub-heading">PI: Fidel Costa</h2>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Page Main Content -->
	{% block content %}
	{% endblock %}

	<!-- Page Footer -->
	<footer>
		<div class="container-fluid">
			<div class="row upper-footer">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 mx-auto">
					<ul class="list-inline text-center">
						<li class="list-inline-item">
							<a href="http://www.facebook.com/pages/Earth-Observatory-of-Singapore/128583073890784" class="fa fa-facebook"></a>
						</li>
						<li class="list-inline-item">
							<a href="https://twitter.com/eos_sg" class="fa fa-twitter"></a>
						</li>
						<li class="list-inline-item">
							<a href="https://instagram.com/earthobservatorysg" class="fa fa-instagram"></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.youtube.com/EarthObservatoryOfSG" class="fa fa-youtube"></a>
						</li>
						<li class="list-inline-item">
							<a href="https://vimeo.com/eosvideos" class="fa fa-vimeo"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row lower-footer">
				<div class="col-lg-5 col-lg-offset-2">
					<h3>Website hosted by <a href="http://earthobservatory.sg">EOS (Earth Observatory of Singapore)</a></h3>
					<p>You are visitor number:</p>
				</div>
				<div class="footer-logo col-lg-5">
					<a href="http://earthobservatory.sg">
						<img src="{% static 'img/EOS-logo.jpg' %}" class="EOS-logo rounded float-right">
					</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- Custom Script -->
	<script src="{% static 'js/carousell.js' %}"></script>
	{% block script %}{% endblock %}
</body>

</html>
