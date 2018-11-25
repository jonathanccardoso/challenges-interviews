const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');
const requireDir = require('require-dir');

const app = express(); //executar a função

//possibilita enviar dados json
app.use(express.json());
app.use(cors()); //dar acesso a todos os dominios

//iniciando o DB
mongoose.conect(
	"mongodb://localhost:27017/nodeapi", 
	{ useNewUrlParser: true }
);
//registrar os models
requireDir('./src/models');

//rotas - tudo apartir do /api/
app.use('/api', require("./src/routes"));

app.listen(3001);

