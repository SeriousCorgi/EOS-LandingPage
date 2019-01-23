{% extends 'base_layout.php' %}
{% block title %}Article{% endblock %}

{% block content %}
	<div class="wrapper article-detail">
		<div class="article">
			<div class="image"><img src="{{ article.image.url }}"></div>
			<h2 class="title">{{ article.title }}</h2>
			<p class="body">{{ article.body }}</p>
			<p class="date">{{ article.date }}</p>
			<p class="author">Posted by <span>{{ article.author }}</span></p>
		</div>
	</div>
{% endblock %}
