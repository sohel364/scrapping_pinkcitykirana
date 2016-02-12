<?php
set_time_limit(0);

include_once 'simple_html_dom.php';
include_once ('objects/clsProduct.php');
include_once 'clsProductsManager.php';


$url="http://www.pinkcitykirana.com/personal-care/beauty-and-makeup-for-women";
$pageData = file_get_html($url);

//product-list
//one-product-box
//name //href


/*
foreach($pageData->find('div[class=product-list] div[class=one-product-box]') as $singleProduct)
{
	//echo $singleProduct."</br></hr>";
	
	foreach($singleProduct->find('div[class=image] a') as $Imageurl)
	{
			echo "Image URL :".$Imageurl->href;
			echo "</br>";
	}
	
	foreach($singleProduct->find('div[class=name] a') as $nameAndURL)
	{
			echo $nameAndURL->innertext.">> ".$nameAndURL->href;
			echo "</br>";
			GetProductDetails($nameAndURL->href);
			
			break;
	}
	
	echo "<hr>";
}
*/

function GetProductDetails($URL)
{
	$productDetails = file_get_html($URL);
	//echo $productDetails;
	foreach($productDetails->find('div[class=product-info]') as $productINFO)
	{
			foreach($productINFO->find('div[class=left]') as $leftData)
			{
				 echo $leftData->find('a div[class=image]')->src;
			}			
			foreach($productINFO->find('div[class=right]') as $rightData)
			{
				foreach($rightData->find('div[class=description]') as $attributeSection)
				{
					echo $attributeSection->find('span')->innertext."-->".$attributeSection->find('a')->href;
				}	
				foreach($rightData->find('div[class=price]') as $Price)
				{
					foreach($Price->find('div[id=mainprice]') as $mainPrice)
					{
					     $oldprice=$mainPrice->find('span[class=price-old]')->plaintext;
						 echo $oldprice;
						 
						 $disprice=$mainPrice->find('span[class=price-new]')->plaintext;
						 echo $disprice;
					
					}			

					
				}			

				
				
			}
		
	echo "<hr>";
		
	}
	
	foreach($productDetails->find("div[class=view-tabs box] div[class=tab-description]") as $theory)
	{
		foreach($theory->find("p") as $inneritem)
		{
			echo $inneritem.'</br>';
		}
	}
	
}


GetProductDetails('http://www.pinkcitykirana.com/personal-care/beauty-and-makeup-for-women/himalaya-herbal-eye-kajal-1-gm.html');


//echo $pageData;


?>