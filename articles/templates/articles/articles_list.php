{% extends 'base_layout.php' %}
{% block title %}Home{% endblock %}

{% block content %}
	<div class="wrapper articles-list">
		<div class="articles">
			{% for article in articles reversed %}
				<div class="article">
					<a href="{% url 'articles:detail' slug=article.slug %}">
						<h2 class="title">{{ article.title }}</h2>
						<h3 class="description">{{ article.snippet }}</h3>
					</a>
					<p class="meta">Posted by {{ article.author }} on {{ article.date }}</p>
				</div>
				<hr>
			{% endfor %}
		</div>
	</div>
{% endblock %}
