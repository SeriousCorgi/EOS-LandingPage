{% extends 'base_layout.php' %}
{% block title %}Login{% endblock %}

{% block content %}
	<div class="wrapper login">
		<h2>Log In</h2>
		<form action="{% url 'accounts:login' %}" class="site-form" method="post">
			{% csrf_token %}		<!-- token to verify data authenticity -->
			{{ form }}
			{% if request.GET.next %}
				<input type="hidden" name="next" value="{{ request.GET.next }}">
			{% endif %}
			<input type="submit" value="Login">
		</form>
	</div>
{% endblock %}
