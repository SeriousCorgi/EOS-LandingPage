from django.contrib import admin
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.conf.urls.static import static
from django.conf import settings
from django.urls import path, re_path, include
from articles import views as article_views


urlpatterns = [
    path('admin/', admin.site.urls),
    re_path(r'^articles/', include('articles.urls')),
    re_path(r'^accounts/', include('accounts.urls')),
    # re_path(r'', include()),
    re_path(r'^$', article_views.articleList, name="home"),
]

urlpatterns += staticfiles_urlpatterns()                                                # Tell url where to find static assets files #

urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)            # Tell url where to find media files #
