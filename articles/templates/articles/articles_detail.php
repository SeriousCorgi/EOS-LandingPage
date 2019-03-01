{% extends 'base_layout.php' %}
{% block title %}Article{% endblock %}

{% block content %}
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

				<!-- Article Content-->
				<div class="article-detail">
					<div class="image"><img src="{{ article.image.url }}" class="img-thumbnail"></div>
					<h2 class="title">{{ article.title }}</h2>
					<p class="body">{{ article.body }}</p>
					<p class="meta">Posted on {{ article.date }}</p>
				</div>

			</div>
		</div>
	</div>
{% endblock %}
