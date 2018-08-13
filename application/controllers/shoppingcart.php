<?php


class shoppingcart extends CI_Controller {

public function buy($id){

	$product= $this->mproduct->find($id);
	$data= array (

		'id' => $product->id,
		'qty' => 1,
		'price' => $product->price,
		'name' => $product->name

	);

	$this->cart->insert($data);
	$this->load->view('cart');

}