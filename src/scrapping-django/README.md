## Problem ##

Esperamos que seja desenvolvido um app/página que apresente as informações solicitadas de modo automático (scrapping) e sempre atualizadas, ou seja, é necessário que caso o IBGE altere os números no seu site, o app apresente prontamente os números atualizados.

1) Escreva um app/página django que exiba:
   1.1) A população estimada da cidade de Natal/RN
   1.2) População estimada da cidade de Mossoró/RN
   1.3) Soma das populações de Natal e Mossoró
   1.4) Índice de desenvolvimento humano municipal (IDHM) da cidade de Natal/RN
   1.5) Índice de desenvolvimento humano municipal (IDHM) da cidade de Mossoró/RN
   1.6) A média dos IDHM de Natal e Mossoró

## Steps ##
- web-scrapping.py
- cmd
	- django-admin startproject 'name-project'
	- cd 'name-project'/ python manage.py startapp 'blog (ou qualquer outro nome)'
- 'name-project'/
	- em installed_apps adcionar 'blog'
- cmd 'cd 'name-project'/'
	- python manage.py runserver (rodar o servidor)	
	- python manage.py migrate
	- python manage.py createsuperuser (criar o adm)	
- em views.py
	- def ola(request):
		return HttpResponse("Olá")
- em urls.py do 'name-project'
	- from blog import views
	- url(r'^saludos/', views.ola),
	- criar urls.py em 'blog'
	- url(r'^blog/', include('blog.urls')),
	- from django.conf.urls import url, include	
- em urls.py do 'blog'
	- from django.conf.urls import url, include
	- urlpatterns=[
		url(r'^saludos/', views.ola),
	]
- em views
	- def perro(request):
		  return HttpResponse("Hola perro :( ")
- em urls.py do 'blog'
	- from django.conf.urls import url, include
	- from . import views
	- urlpatterns=[
		url(r'^saludos/', views.perro),
	]
	- [server]/'blog'/saludos
- em models.py
	- class Perguntas(models.Model):
		pergunta = models.CharField(max_legth=140)
		valor = models.CharField(max_legth=2)
		date_reg = models.DateTimeField('fecha publicacao')
- cmd
	- python manage.py makemigrations
	- python manage.py migrate
- em admin
	- from .models import Perguntas
	- admin.site.register(Perguntas)