from django.urls import path, re_path
from . import views


app_name = 'accounts'

urlpatterns = [
	re_path(r'^signup/$', views.signUpView, name="signup"),
	re_path(r'^login/$', views.logInView, name="login"),
	re_path(r'^logout/$', views.logOutView, name="logout"),
]
