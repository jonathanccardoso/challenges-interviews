from django.shortcuts import render
import re

import requests, json, locale
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

  city_values = []


  def cityData(city):
    city_data = []
    
    for item in city:
      # convert and read in json
      item = json.dumps(item)
      item = json.loads(item)
      
      name = item['name']
      state = item['state']

      url_request = requests.get("https://www.ibge.gov.br/cidades-e-estados/"+ state +"/"+ name +".html")
      div_select = BeautifulSoup(url_request.content, 'html.parser')

      ul = div_select.find(class_='resultados-padrao')  
      city_label = ul.findAll("p", {"class": "ind-label"})
      city_value = ul.findAll("p", {"class": "ind-value"})
      
      data = []
      for label, value in zip(city_label, city_value):
        text_label = label.text
        text_value = value.text
        if text_label.split()[0] == fields[0] or text_label.split()[0] == fields[1]:
          data.append([text_label, text_value])
          city_values.append(text_value.split()[0])

      data.append([name, state])
      city_data.append(data)
    return city_data


  data = cityData(city)
  
  # to set values with ','
  locale.setlocale(locale.LC_ALL, 'pt_BR.UTF-8')
  sumPopulations = float(city_values[0]) + float(city_values[2])
  averageIDHM = (locale.atof(city_values[1]) + locale.atof(city_values[3])) / 2

  context = {
    "data": data,
    "sumPopulations": sumPopulations,
    "averageIDHM": averageIDHM
  } 

  return render(request, 'ibge/index.html', context)
