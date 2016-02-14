<?php
error_reporting(0);
include_once('../objects/clsProduct.php');
include_once('databaseHelper.php');

class clsProductsManager{
	public $DataBaseHelper=NULL;
	public static function InsertProducts($ProductsObject){         
                 
		$DataBaseHelper=new DataAccessHelper();
		$sql="INSERT INTO `product` (`product_id`,`product_details_url`) VALUES ('".NULL ."','".safe($ProductsObject->GetProductDetailsUrl())."')";  		
		//echo $sql."<br/>";
		return $DataBaseHelper->ExecuteInsertReturnID($sql);
	}	
}
function safe($value){
	return mysql_real_escape_string($value);
}
?>