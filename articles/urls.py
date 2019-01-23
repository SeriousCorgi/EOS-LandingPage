from django.urls import path, re_path
from . import views


app_name = 'articles'

urlpatterns = [
    re_path(r'^$', views.articleList, name="list"),
    re_path(r'^create/$', views.articleCreate, name="create"),
    re_path(r'^(?P<slug>[\w-]+)\/$', views.articleDetail, name="detail"),
]
