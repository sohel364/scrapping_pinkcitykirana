<?php
set_time_limit(0);


echo "asdasdsad";
include_once 'simple_html_dom.php';
include_once ('objects/clsProduct.php');
include_once 'clsProductsManager.php';


$url="http://www.pinkcitykirana.com/personal-care/beauty-and-makeup-for-women";
$pageData = file_get_html($url);

echo $pageData;


?>