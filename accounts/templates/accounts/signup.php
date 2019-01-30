{% extends 'base_layout.php' %}
{% block title %}Signup{% endblock %}

{% block content %}
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

				<div class="signup">
					<h2>Sign Up</h2>
					<form action="{% url 'accounts:signup' %}" class="site-form" method="post">
						<!-- token to verify data authenticity -->
						{% csrf_token %}

						<!-- default signin form -->
						{{ form }}

						<input type="submit" value="Signup">
					</form>
				</div>

			</div>
		</div>
	</div>
{% endblock %}
