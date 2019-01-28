{% extends 'base_layout.php' %}
{% block title %}Home{% endblock %}

{% block content %}
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

			<!-- Displayed article sorted by date -->
			{% for article in articles reversed %}
				<div class="article-preview">
					<a href="{% url 'articles:detail' slug=article.slug %}">
						<h2 class="title">{{ article.title }}</h2>
						<h3 class="description">{{ article.snippet }}</h3>
					</a>
					<p class="meta">Posted by <a class="author" href="#">{{ article.author }}</a> on {{ article.date }}</p>
				</div>
			 	<hr>
			{% endfor %}

			</div>
		</div>
	</div>
{% endblock %}
