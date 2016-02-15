<?php 
class Product
{
	public $product_id;
	public $product_details_url;


	public function MakeProduct($product_id,$product_details_url)
	{
		$this->product_id = $product_id;	
		$this->product_details_url = $product_details_url;
	}

};

class ProductDetails
{
	public $product_details_id;
	public $product_name;
	public $product_code;
	public $product_spec_value;
	public $price;
	public $discounted_price;
	public $discount_per;
	public $img_url;
	public $product_id;


	function MakeProductDetails($product_details_id,$product_name,$product_code,$product_spec_value,$price,$discounted_price,$discount_per,$img_url,$product_id)
	{
		$this->product_details_id = $product_details_id;
		$this->product_name = $product_name;
		$this->product_code = $product_code;
		$this->product_spec_value = $product_spec_value;
		$this->price = $price;
		$this->discounted_price = $discounted_price;
		$this->discount_per = $discount_per;
		$this->img_url = $img_url;
		$this->product_id = $product_id;
	}

};

class ProductTheoriticalDetails
{
	public $product_theoritical_specs_id;
	public $item_name;
	public $item_value;
	public $product_id;

	function MakeProductTheoriticalDetails($product_theoritical_specs_id, $item_name, $item_value,$product_id)
	{
		$this->product_theoritical_specs_id=$product_theoritical_specs_id;
		$this->item_name=$item_name;
		$this->item_value=$item_value;
		$this->product_id=$product_id;
	}
};

?>