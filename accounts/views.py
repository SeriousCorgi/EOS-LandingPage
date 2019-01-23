from django.shortcuts import render, redirect
from django.contrib.auth.forms import UserCreationForm, AuthenticationForm
from django.contrib.auth import login, logout


def signUpView(request):
	if request.method == 'POST':
		form = UserCreationForm(request.POST)
		if form.is_valid():
			user = form.save()
			login(request, user)
			return redirect('home')
	else:
		form = UserCreationForm()
	# end if

	return render(request, 'accounts/signup.php', {'form': form})
# end def

def logInView(request):
	if request.method == 'POST':
		form = AuthenticationForm(data=request.POST)
		if form.is_valid():
			user = form.get_user()
			login(request, user)
			if 'next' in request.POST:
				return redirect(request.POST.get('next'))		# return to previous protected page #
			else:
				return redirect('home')				# return to homepage #
	else:
		form = AuthenticationForm()
	# end if

	return render(request, 'accounts/login.php', {'form': form})
# end def

def logOutView(request):
	if request.method == 'POST':
		logout(request)
		return redirect('home')
	# end if
# end def
