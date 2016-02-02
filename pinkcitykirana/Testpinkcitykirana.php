<?php
set_time_limit(0);


echo "asdasdsad";
include_once 'simple_html_dom.php';
include_once ('objects/clsProduct.php');
include_once 'clsProductsManager.php';


$url="http://www.pinkcitykirana.com/personal-care/beauty-and-makeup-for-women";
$pageData = file_get_html($url);

//product-list
//one-product-box
//name //href

foreach($pageData->find('div[class=product-list] div[class=one-product-box]') as $singleProduct)
{
	//echo $singleProduct."</br></hr>";
	
	foreach($singleProduct->find('div[class=name] a') as $nameAndURL)
	{
			echo $nameAndURL->innertext.">> ".$nameAndURL->href;
			echo "</br>";
	}
	foreach($singleProduct->find('div[class=image] a') as $Imageurl)
	{
			echo "Image URL :".$Imageurl->href;
			echo "</br>";
	}
	
	echo "<hr>";
}

//echo $pageData;


?>