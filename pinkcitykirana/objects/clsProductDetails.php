<?php 

class product{

private $product_details_id;
private $price;
private $discount_price;	
private $discount_per;
private $img_url;
private $attribute_name_value;
private $product_id;


public function SetProductDetailsId($product_details_id){
	$this->product_details_id=$product_details_id;
}
public function getProductDetailsId(){
	return $this->product_details_id;

}


public function SetPrice($price){
	$this->price=$price;
}
public function getPrice(){
	return $this->price;
}


public function SetDiscountPrice($discount_price){
	$this->discount_price=$discount_price;
}
public function GetDiscountPrice(){
	return $this->discount_price;
}

public function SetDiscountPer($discount_per){
	$this->discount_per=$discount_per;
}
public function GetDiscountPer(){
	return $this->discount_per;
}

public function SetImageURL($img_url){
	$this->img_url=$img_url;
}
public function GetImageURL(){
	return $this->img_url;
}

public function SetAttributeNameValue($attribute_name_value){
	$this->attribute_name_value=$attribute_name_value;
}
public function GetAttributeNameValue(){
	return $this->attribute_name_value;
}

public function SetProductId($product_id){
	$this->product_id=$product_id;
}
public function getProductId(){
	return $this->product_id;

}



	




}

?>