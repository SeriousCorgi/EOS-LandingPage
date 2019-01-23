{% extends 'base_layout.php' %}
{% block title %}Signup{% endblock %}

{% block content %}
	<div class="wrapper signup">
		<h1>Sign Up</h1>
		<form action="{% url 'accounts:signup' %}" class="site-form" method="post">
			{% csrf_token %}		<!-- token to verify data authenticity -->
			{{ form }}
			<input type="submit" value="Signup">
		</form>
	</div>
{% endblock %}
