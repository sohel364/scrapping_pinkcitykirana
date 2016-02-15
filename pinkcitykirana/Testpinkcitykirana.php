<?php
set_time_limit(0);

include_once 'simple_html_dom.php';
include_once 'objects/clsProduct.php';
include_once 'clsProductsManager.php';


$url="http://www.pinkcitykirana.com/personal-care/beauty-and-makeup-for-women";
$pageData = file_get_html($url);


foreach($pageData->find('div[class=product-list] div[class=one-product-box]') as $singleProduct)
{
	//echo $singleProduct."</br></hr>";	
	/*foreach($singleProduct->find('div[class=name] a') as $nameAndURL)
	foreach($singleProduct->find('div[class=image] a') as $Imageurl)
	{
			echo $nameAndURL->innertext.">> ".$nameAndURL->href;
			echo "Image URL :".$Imageurl->href;
			echo "</br>";
	}
	foreach($singleProduct->find('div[class=image] a') as $Imageurl)
	*/
	foreach($singleProduct->find('div[class=name] a') as $nameAndURL)
	{
			//echo "Image URL :".$Imageurl->href;
			$productObj = new Product();
			$productObj->MakeProduct("",$nameAndURL->href);

			$productid = clsProductsManager::InsertProducts($productObj);
			echo "inserted to id : ".$productid."->>>>".$nameAndURL->innertext.">> ".$nameAndURL->href;
			echo "</br>";
			GetProductDetails($nameAndURL->href,$productid);			
	}

	break;
	echo "<hr>";
}




function GetProductDetails($URL,$productID)
{
	$productDetailsObj = new ProductDetails();
	$productDetails = file_get_html($URL);
	//echo $productDetails;
	foreach($productDetails->find('div[class=product-info]') as $productINFO)
	{

			//echo $productINFO;
			foreach($productINFO->find('div[class=left] div[class=image] a img[id=image]') as $leftData)
			{
				//echo $leftData;
				 echo $leftData->src;
				 $productDetailsObj->img_url = $leftData->src;
			}			
			foreach($productINFO->find('div[class=right] div[class=description] h2') as $rightData)
			{
				echo "<br>".$rightData->plaintext;
				$productDetailsObj->product_name = $rightData->plaintext;		
			}
			foreach($productINFO->find('div[class=right] div[class=description]') as $massData)
			{
				//echo "<br>".$massData->plaintext;
				//$whatIWant = substr($massData->plaintext, strpos($massData->plaintext, "Write a review") + 1);   
				//echo $whatIWant;

				$arr = explode('review', $massData->plaintext);
				$important = $arr[2];
				echo $important;
				//$productDetailsObj->product_name = $rightData->plaintext;		
			}
	}

	return;
	echo "<hr>";
	
	foreach($productDetails->find('div[class=view-tabs box] div[id=tab-description]') as $theory)
	{
				$itr = 0;
				//echo $theory.'</br>';
				//view-tabs box>>tab-description p
				foreach($theory->find("p span") as $inneritem)
				{
					if($itr == 0)
					{
						echo "Description : <br>";
					}
					echo $inneritem->plaintext."</br>";
				}
	}
}

//GetProductDetails('http://www.pinkcitykirana.com/personal-care/beauty-and-makeup-for-women/himalaya-herbal-eye-kajal-1-gm.html');


$productObj = new Product();

echo "<pre>";
$productObj->MakeProduct("101","102");
print_r($productObj);


$productDetailsObject = new ProductDetails();
$productDetailsObject->MakeProductDetails("1","Sampoo","1234#","Brand : asdasdalkdjalskdjaslkdjalksdjaskd","500","450","10%","www.localhost/img.png",$productObj->product_id);
print_r($productDetailsObject);

$productTheoriticalDetails = new ProductTheoriticalDetails();
$productTheoriticalDetails->MakeProductTheoriticalDetails("1","Description", "asdasdasdasdasdsads", $productObj->product_id);
$productTheoriticalDetails->MakeProductTheoriticalDetails("2","Ingredients", "asdasdasdasdasdsads", $productObj->product_id);
$productTheoriticalDetails->MakeProductTheoriticalDetails("3","Manual", "asdasdasdasdasdsads", $productObj->product_id);
print_r($productTheoriticalDetails);
echo "</pre>";
?>