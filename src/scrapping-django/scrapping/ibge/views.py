from django.shortcuts import render

def index(request):
  context = {'text': "oi"}
  return render(request, 'ibge/index.html', context)