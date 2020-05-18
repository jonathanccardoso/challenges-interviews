from django.shortcuts import render

import requests
from bs4 import BeautifulSoup


def index(request):
  city = [
    {'state': 'rn', 'name': 'natal'}, 
    {'state': 'rn', 'name': 'mossoro'}
  ]

  fields = {
    'População estimada',
    'IDHM'
  }

  natal_request = requests.get("https://www.ibge.gov.br/cidades-e-estados/rn/natal.html")
  natal_select = BeautifulSoup(natal_request.content, 'html.parser')

  natal_ul = natal_select.find(class_='resultados-padrao')
  natal_div = natal_ul.findAll("div", {"class": "indicador"})

  natal_infos = []

  for infos in natal_div:
    # se encontrar um numero, ele cria duas string 'label' e 'value'
    # se tiver valores da varivel field, adciona em natal_infos 
    print(infos.text)
    natal_infos.append(infos.text)

  return render(request, 'ibge/index.html', {'natal_infos': natal_infos})
