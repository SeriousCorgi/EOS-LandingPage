from django.shortcuts import render, redirect
from .models import Article
from django.http import HttpResponse
from django.contrib.auth.decorators import login_required
from . import forms


def articleList(request):
	articles = Article.objects.all().order_by('date')
	return render(request, 'articles/articles_list.php', {'articles': articles})
# end def

def articleDetail(request, slug):
	article = Article.objects.get(slug=slug)
	return render(request, 'articles/articles_detail.php', {'article': article})
# end def

@login_required(login_url="/accounts/login/")
def articleCreate(request):
	if request.method == 'POST':
		form = forms.CreateArticle(request.POST, request.FILES)
		if form.is_valid():
			instance = form.save(commit=False)
			instance.author = request.user
			instance.save()
			return redirect('home')
	else:
		form = forms.CreateArticle()
	# end if

	return render(request, 'articles/articles_create.php', {'form': form})
# end def
