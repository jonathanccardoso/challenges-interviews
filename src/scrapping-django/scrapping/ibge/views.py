from django.shortcuts import render
import re

import requests
from bs4 import BeautifulSoup


def index(request):
  city = [
    {'state': 'rn', 'name': 'natal'}, 
    {'state': 'rn', 'name': 'mossoro'}
  ]

  fields = [
    'População',
    'IDHM'
  ]

  natal_request = requests.get("https://www.ibge.gov.br/cidades-e-estados/rn/natal.html")
  natal_select = BeautifulSoup(natal_request.content, 'html.parser')

  natal_ul = natal_select.find(class_='resultados-padrao')  
  natal_label = natal_ul.findAll("p", {"class": "ind-label"})
  natal_value = natal_ul.findAll("p", {"class": "ind-value"})

  natal_data = []
  for label, value in zip(natal_label, natal_value):
    text_label = label.text
    text_value = value.text
    if text_label.split()[0] == fields[0] or text_label.split()[0] == fields[1]:
      natal_data.append([text_label, text_value])

  context = { 
    "natal_data" : natal_data, 
  } 

  return render(request, 'ibge/index.html', context)
