<?php 

class product{

private $product_id;
private $product_name;
private $product_details_url;	


public function SetProductId($product_id){
	$this->product_id=$product_id;
}
public function getProductId(){
	return $this->product_id;

}


public function SetProductName($product_name){
	$this->product_name=$product_name;
}
public function getProductName(){
	return $this->product_name;
}


public function SetProductDetailsUrl($product_details_url){
	$this->product_details_url=$product_details_url;
}
public function GetProductDetailsUrl(){
	return $this->product_details_url;
}
	




}

?>