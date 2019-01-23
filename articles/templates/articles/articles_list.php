{% extends 'base_layout.php' %}
{% block title %}Home{% endblock %}

{% block content %}
	<div class="wrapper articles-list">
		<div class="articles">
			{% for article in articles reversed %}
				<div class="article">
					<h2 class="title"><a href="{% url 'articles:detail' slug=article.slug %}">{{ article.title }}</a></h2>
					<p class="description">{{ article.snippet }}</p>
					<p class="date">{{ article.date }}</p>
					<p class="author">Posted by <span>{{ article.author }}</span></p>
				</div>
			{% endfor %}
		</div>
	</div>
{% endblock %}
