# API NODE JS

A sua criação fornece mais frexibilidade no todo do projeto

## Requisitos

- node 
- npm 

## Passos

### Criação da estrutura

-  mkdir node-api
	- npm init -y //package.json - guarda versoes das dependencias
		- package-lock //cache do package
- npm install express
- npm install -D nodemon //ferramenta de desenvolvimento (utilizado apenas para isso)
	- em 'scripts' por ' "dev": "nodemon server.js" '  //para a cada alteracao ele passar a alteracao pro navegador
	- npm run dev //rodar scrpits

### Banco de dados - Docker e MongoBD

- install docker
	- docker //no terminal	
	- docker pull mongo //intall maquina do mongo
	- docker run --name mongodb -p 27017:27017 -d mongo //subir um container rodando
	- docker ps //saber quais images estaão rodando
	- docker ps -a //saber quais images nao estaão rodando
	- localhost:27017 in brower
	- robomongo.org //para rodar o container docker e configurar coneccao
	- docker start nome-imagem //rodar imagem

- npm install mongoose //transforma tabelas em objetos 

##### Criando model de produto

- npm install require-dir //para automatizar os models
- testar rotas - ultilizando insommia.rest ou uma extensao no chrome, como também fazer testes na api
- npm install mongoose-paginate
- npm install cors //para permitir os dominios que podem ter acesso a ele

## Rodar projeto

- npm install
- npm run dev //com nodemon
