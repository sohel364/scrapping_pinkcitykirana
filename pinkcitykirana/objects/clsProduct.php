<?php 
include_once 'clsProductDetails.php'


class product{

	private $product_id;
	private $product_name;
	private $product_details_url;

	private $productDetailsObject=null;	


	public function SetProductId($product_id){
		$this->product_id=$product_id;
	}
	public function getProductId(){
		return $this->product_id;

	}


	public function SetProductDetailsUrl($product_details_url){
		$this->product_details_url=$product_details_url;
	}
	public function GetProductDetailsUrl(){
		return $this->product_details_url;
	}

	function __construct()
	{
		if($productDetailsObject=null)
		{
			$productDetailsObject = new clsProductDetails();
		}
	}

};


class productDetails
{

	private $product_details_id;
	private $product_details_id;
	private $product_name;
	private $product_code;
	private $product_spec_value;
	private $price;
	private $discounted_price;
	private $discount_per;
	private $img_url;
	private $product_id;

	public function ProductDetailsID($value)
	{
		$this->product_details_id=$value;
	}
	public function ProductDetailsID()
	{
		return $this->product_details_id;
	}

};

class productTheoriticalDetails
{
	private $product_theoritical_specs_id;
	private $spec_item_name;
	private $spec_item_value;
	private $product_id;
}

?>