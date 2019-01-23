{% load static from staticfiles %}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{% block title %}{% endblock %}</title>
	<link rel="stylesheet" href="{% static 'Stylesheets/style.css' %}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	{% block script %}
	{% endblock %}
</head>
<body>
	<div class="site-content">
		<header class="header">
			<div class="wrapper">
				<div class="header-logo"><a href="{% url 'home' %}"><img src="{% static 'Images/EOSLogo.png' %}"></a></div>
				<div class="header-name"><h1>Volcano Petrology Group - Web Application</h1></div>
			</div>
			<nav class="wrapper main-menu-container">
				<ul class="main-menu">
					<li class="menu-item"><a href="{% url 'home' %}">Home</a></li>
					<li class="menu-item sub-menu-column1">
						<a>+ Application</a>
						<div class="sub-menu application">
							<ul>
								<li class="menu-item"><a href="https://petro.wovodat.org:4444">Petrology Workspace & Database</a></li>
								<li class="menu-item"><a href="https://petro.wovodat.org/cemin.php">Lilu’s web interface</a></li>
								<li class="menu-item"><a href="https://petro.wovodat.org/apthermo.php">Alex’ ApThermo webpage</a></li>
							</ul>
						</div>
					</li>
					{% if user.is_authenticated %}
					<li class="menu-item"><a href="{% url 'articles:create' %}">New Article</a></li>
					<li class="menu-item">
						<form action="{% url 'accounts:logout' %}" class="logout-link" method='POST'>
							{% csrf_token %}
							<a href="javascript:$('form').submit()">Log out from {{ user }}</a>
						</form>
					</li>
					{% else %}
					<li class="menu-item"><a href="{% url 'accounts:login' %}">Log in</a></li>
					<li class="menu-item"><a href="{% url 'accounts:signup' %}">Sign up</a></li>
					{% endif %}
				</ul>
			</nav>
			<div class="wrapper banner-container">
				<div class="header-banner"><img src="{% static 'Images/Picture1.png' %}" alt=""></div>
			</div>
		</header>
		{% block content %}
		{% endblock %}
	</div>
</body>
</html>
