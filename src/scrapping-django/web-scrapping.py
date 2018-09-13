import requests
from bs4 import BeutifulSuop
import urllib.request

link = ""

ptc = requests.get(link)
html = ptc.content

sp = BeutifulSuop(html, "html.parser")
for img in sp.find_all('img'):
	print(img.get("src"))


'''
	https://cidades.ibge.gov.br/brasil/rn/natal/panorama
'''
'''
	print(ptc) tempo de resposta
	print(html) todo conteudo html do site
	print(sp) somente o contudo html do site

	i = sp.find_all('link') mostra todo os links ou qualquer marcação que desejar
	print(i)
'''