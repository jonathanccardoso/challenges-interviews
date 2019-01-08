const express = require('express');
const routes = express.Router();

const ProductController = require('./controllers/ProductController');

//rotas

//mostra todos
routes.get('/products', ProductController.index);
//pesquisa por um
routes.post('/products/:id', ProductController.show);
//criacao
routes.post('/products', ProductController.store);
//atualizacao
routes.put('/products/:id', ProductController.update);
//delete
routes.delet('/products/:id', ProductController.destroy);

//para utilizar no server.js
module.exports = routes; 
