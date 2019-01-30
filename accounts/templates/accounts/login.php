{% extends 'base_layout.php' %}
{% block title %}Login{% endblock %}

{% block content %}
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

				<div class="login">
					<h2>Log In</h2>
					<form action="{% url 'accounts:login' %}" class="site-form" method="post">
						<!-- token to verify data authenticity -->
						{% csrf_token %}

						<!-- default login form -->
						{{ form }}

						<!-- redirect to current page if any -->
						{% if request.GET.next %}
							<input type="hidden" name="next" value="{{ request.GET.next }}">
						{% endif %}
						<input type="submit" value="Login">
					</form>
				</div>

			</div>
		</div>
	</div>
{% endblock %}
