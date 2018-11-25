//Schema - adcionanr campo e seus valores

const mongoose = require('mongoose');
const mongoosePaginate = require('mongoose-paginate');

//objeto
const ProductSchema = new mongoose.Schema({
	title: {
		type: String,
		required: true,
	},
	description: {
		type: String,
		required: true,
	},
	url: {
		type: String,
		required: true,
	},
	//data de criacao de cada produto
	createdAt: {
		type: Date,
		dafault: Date.now,
	},
});

ProductSchema.plugin(mongoosePaginate);

//registrar um model
mongoose.model('Product', ProductSchema);
