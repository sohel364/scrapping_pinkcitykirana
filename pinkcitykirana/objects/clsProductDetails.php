<?php 

class productDetails{

	private $product_details_id;
	private $product_name;
	private $product_code;
	private $product_spec_value;
	private $price;
	private $discounted_price;
	private $discount_per;
	private $img_url;
	private $product_id;

	public function SetProductId($product_id)
	{
		$this->product_id=$product_id;
	}
	public function getProductId()
	{
		return $this->product_id;
	}

}

?>