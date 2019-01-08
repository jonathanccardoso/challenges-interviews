const mongoose = require('mongoose');

const Product = mongoose.model('Product');

// /api/products
module.exports = {
	//funcao async await
	//metodo
	async index(req, res){
		//fazer - /product?page=2
		const { page = 1 } = req.query;
		//paginacao
		const products = await Product.paginate({},{ page, limit: 10});

		return res.json(products);
	},

	async show(req, res){
		const product = await Product.findById(req.params.id);		

		return res.json(product);
	},
	//criar
	async store(req, res){
		const product = await Product.create(req.body);

		return res.json(product);
	},
	//new para voltar o novo resultado
	async update(req, res){
		const product = await Product.findByIdAndUpdate(req.params.id, req.body, { new: true });

		return res.json(product);
	},
	
	async destroy(req, res){
		await Product.findByIdAndRemove(req.params.id);		

		return res.send();
	}
};