{% extends 'base_layout.php' %}
{% block title %}New Article{% endblock %}
{% load static from staticfiles %}
{% block script %}
	<script src="{% static 'Scripts/slugify.js' %}"></script>
{% endblock %}

{% block content %}
	<div class="wrapper create-article">
		<h2>Create new article</h2>
		<form action="{% url 'articles:create' %}" class="site_form" method="post" enctype="multipart/form-data">
			{% csrf_token %}
			{{ form }}
			<input type="submit" value="create">
		</form>
	</div>
{% endblock %}
