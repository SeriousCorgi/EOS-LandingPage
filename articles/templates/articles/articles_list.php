{% extends 'base_layout.php' %}
{% block title %}Home{% endblock %}

{% block content %}
	<div class="container">
		<div class="row">

			<!-- Page informations Wrapper -->
			<div class="col-lg-9 col-md-9 mx-auto">
				<div class="page-information">
					<p>The aim of the Volcanic Petrology group is to conduct fundamental research on magmatic processes and rocks from active volcanoes, toward better understanding and forecasting of volcanic eruptions.</p>

					<p>Some of our underlying research questions include</p>
					<ul>
						<li>Triggering mechanisms of eruptions</li>
						<li>Storage conditions (P, T, fO2, fH2O, fS2, fCO2) of magmas prior to eruption</li>
						<li>Unraveling the processes that occur in the reservoir and volcanic conduit</li>
						<li>Time scales for all these processes</li>
						<li>Integration of topics #1-4 with monitoring signals (seismicity, deformation, gas chemistry) of active volcanoes</li>
						<li>Numerical modeling of magmatic, and volcanic processes, plus monitoring signals towards predictability of volcanic phenomena</li>
					</ul>

					<p>The signature and strength that distinguishes this group from others worldwide is that we focus our research on deciphering the time scales for all of these processes</p>

					<p>Some of our research tools include:</p>
					<ul>
						<li>Mineralogical and geochemical analyses, in-situ and bulk (techniques: electron microprobe, ion probe, FTIR, XRF, TEM, LA-ICP-MS: These mainly take place at EOS and NTU facilities: We also utilize facilities of our international collaborators.</li>
						<li>High P and T experiments (phase equilibria and kinetics: in collaboration with colleagues from France and Germany)</li>
						<li>Dating and geochronology (in collaboration with colleagues from France and USA)</li>
						<li>Field mapping and stratigraphic studies of eruption sequences (other EOS Volcano group members and colleagues from PHIVOLCS and CVI)</li>
						<li>Numerical modeling (FD, FEM; EOS and in collaboration with colleagues from Spain and USA)</li>
					</ul>

					<p>Web applications currently on development:</p>
					<ul>
						<li><a href="https://pwd.wovodat.org/">Petrology Workspace & Database (PWD)</a></li>
						<li><a href="https://statpetro.wovodat.org/">Statistical Petrology</a></li>
						<li><a href="https://apthermo.wovodat.org/">Apetite Thermodynamic Model (ApTherMo)</a></li>
					</ul>
				</div>
			</div>
			<!-- /.Page-informations-wrapper -->

			<!-- Article list wrapper -->
			<div class="col-lg-3 col-md-3 mx-auto">

				<!-- Contact Toggle Button -->
				<button class="contact btn btn-info btn-block" data-toggle="modal" data-target="#contactForm"><span class="glyphicon glyphicon-envelope"></span> Contact Us!</button>

				<!-- Bootstrap Contact Modal -->
				<div class="modal fade" id="contactForm" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content -->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h2 class="text-center"><span class="glyphicon glyphicon-envelope"></span> Contact Us!</h2>
							</div>
							<div class="modal-body">

								<!-- Contact Form -->
								<form role="form" method="post" class="contact-form">
									{% csrf_token %}
									<div class="form-group">
										<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
									</div>
									<div class="form-group">
										<input class="form-control" id="institution" type="text" placeholder="Institution">
									</div>
									<div class="form-group">
										<textarea class="form-control" id="comments" name="comments" placeholder="Comments" rows="5" required></textarea>
									</div>
									<div class="form-group">
										<button type="submit" id="submit" class="btn btn-primary btn-block"><i class="glyphicon glyphicon-ok"></i> Submit</button>
									</div>
								</form>
								<!-- ./Contact Form -->

							</div>
						</div>
					</div>
				</div>

				<!-- Displayed article sorted by date -->
				<div class="article-list">
				{% for article in articles reversed %}
					<div class="article-preview">
						<a href="{% url 'articles:detail' slug=article.slug %}">
							<h2 class="title">{{ article.title }}</h2>
							<h3 class="description">{{ article.snippet }}</h3>
						</a>
						<p class="meta">Posted on {{ article.date }}</p>
					</div>
				 	{% if not forloop.last %}<hr>{% endif %}
				{% endfor %}
				</div>

			</div>
			<!-- /.Articles-list-wrapper -->
		</div>
		<!-- /.row -->
	</div>
{% endblock %}

{% block script %}
<script type="text/javascript">
	$('.thank-message').css({visibility: 'hidden'});
	$(document).on('submit', '.contact-form', function(e) {
		e.preventDefault();

		$.ajax({
			type: 'POST',
			url: '{% url "articles:contact" %}',
			data: {
				name: $('#name').val(),
				email: $('#email').val(),
				institution: $('#institution').val(),
				comments: $('#comments').val(),
				csrfmiddlewaretoken: $('input[name=csrfmiddlewaretoken]').val(),
			},
			beforeSend: function() {
				$('#submit').html('<i class="fa fa-spinner fa-spin" style="font-size:20px"></i>');
				$('#submit').addClass('disabled');
			},
			success:function() {
				$('.modal').modal('toggle');
				$('.contact-form')[0].reset();
				$('#submit').html('<i class="glyphicon glyphicon-ok"></i> Submit');
				$('#submit').removeClass('disabled');
			}
		});
	})
</script>
{% endblock %}
