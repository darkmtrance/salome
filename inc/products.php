<?php

function get_list_view_html($product_id, $product) {
    
    $output = "";
    $valor = '\'["all", "' . $product["name4"] . '"]\'';
	   
    $output = $output . '<div data-groups=' . $valor . ' class="portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered animated" style="margin:0; padding:0;">';
    $output = $output . '<div class="portfolio"><figure class="effect-julia">';
    $output = $output . '<img src="' . $product["img2"] . '" alt="' . $product["name"] . '"></a>';
    $output = $output . '<figcaption>';
	$output = $output . '<div class="socials">';
    $output = $output . '<a data-toggle="modal" data-target="#myModal1" href=""><i class="fa fa-expand"></i></a>';
	$output = $output . '<a href="montura.php?id=' . $product_id . '"><i class="fa fa-share animated"></i></a>';
	$output = $output . '</div>' ;
	$output = $output . '<div class="scoial-heading">';
	$output = $output . '<p>' . $product["name2"]  . '</p><strong>' . $product["name3"]  . '</strong>';
    $output = $output . '</div>';
	$output = $output . '</figcaption>' ;
	$output = $output . '</figure>';
    $output = $output . "</div></div>";
	
    return $output;
}

$products = array();
/*$products[101] = array(
	"name" => "Converse",
  "name2" => "Lentes Oftalmicos",
  "name3" => "245.00",
  "name4" => "converse",
	"img" => "img/monturas/montura-101.jpg",
	"img2" => "img/monturas/portafolio01.jpg",
	"price" => 199.00,
	"paypal" => "9P7DLECFD4LKE",
    "sizes" => array("Negro","Verde","Marron","Plateado")
);
$products[102] = array(
	"name" => "Oakley",
  "name2" => "Lentes Oakley",
  "name3" => "500.00",
  "name4" => "oakley",
    "img" => "img/monturas/montura-102.jpg",
	"img2" => "img/monturas/portafolio02.jpg",
    "price" => 199.00,
    "paypal" => "SXKPTHN2EES3J",
    "sizes" => array("Negro","Verde","Marron","Plateado")
);  */
/*$products[103] = array(
    "name" => "English Laundry",
    "name2" => "Durutti",
	"name3" => "300.00",
  "name4" => "english",
    "img" => "img/monturas/montura-103.jpg",
	"img2" => "img/monturas/portafolio03.jpg",    
    "price" => 239.00,
    "paypal" => "7T8LK5WXT5Q9J",
    "sizes" => array("Negro","Verde","Marron","Plateado")
);  */
/*$products[104] = array(
    "name" => "Oakley",
    "name2" => "Lentes Oakley",
	"name3" => "500.00",
  "name4" => "oakley",
    "img" => "img/monturas/montura-104.jpg", 
	"img2" => "img/monturas/portafolio04.jpg",   
    "price" => 199.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Negro","Verde","Marron","Plateado")
);  */
$products[105] = array(
    "name" => "Infinit",
    "name2" => "Lentes Infinit",
	"name3" => "449.00",
  "name4" => "infinit",
    "img" => "img/monturas/montura-110.jpg", 
	"img2" => "img/monturas/portafolio101.jpg",   
    "price" => 449.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Marron")
);
$products[106] = array(
    "name" => "Infinit",
    "name2" => "Lentes Infinit",
	"name3" => "499.00",
  "name4" => "infinit",
    "img" => "img/monturas/montura-111.jpg", 
	"img2" => "img/monturas/portafolio11.jpg",   
    "price" => 499.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Blanco")
);
/*$products[107] = array(
    "name" => "Infinit",
    "name2" => "Lentes Infinit",
	"name3" => "470.00",
  "name4" => "infinit",
    "img" => "img/monturas/montura-112.jpg", 
	"img2" => "img/monturas/portafolio12.jpg",   
    "price" => 470.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Plateado")
);            */
$products[108] = array(
    "name" => "Infinit",
    "name2" => "Lentes Infinit",
	"name3" => "460.00",
  "name4" => "infinit",
    "img" => "img/monturas/montura-113.jpg", 
	"img2" => "img/monturas/portafolio13.jpg",   
    "price" => 460.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Marron")
);
$products[109] = array(
    "name" => "Infinit",
    "name2" => "Lentes Infinit",
	"name3" => "499.00",
  "name4" => "infinit",
    "img" => "img/monturas/montura-114.jpg", 
	"img2" => "img/monturas/portafolio14.jpg",   
    "price" => 499.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Marron")
);
$products[110] = array(
    "name" => "Infinit",
    "name2" => "Lentes Infinit",
	"name3" => "499.00",
  "name4" => "infinit",
    "img" => "img/monturas/montura-115.jpg", 
	"img2" => "img/monturas/portafolio15.jpg",   
    "price" => 499.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Marron")
);
$products[111] = array(
    "name" => "Spy",
    "name2" => "Lentes Spy",
	"name3" => "199.00",
  "name4" => "spy",
    "img" => "img/monturas/montura-116.jpg", 
	"img2" => "img/monturas/montura-116.jpg",   
    "price" => 199.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Negro")
);
$products[112] = array(
    "name" => "Spy",
    "name2" => "Lentes Spy",
	"name3" => "199.00",
  "name4" => "spy",
    "img" => "img/monturas/montura-117.jpg", 
	"img2" => "img/monturas/montura-117.jpg",   
    "price" => 199.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Marron")
);
$products[113] = array(
    "name" => "Spy",
    "name2" => "Lentes Spy",
	"name3" => "199.00",
  "name4" => "spy",
    "img" => "img/monturas/montura-118.jpg", 
	"img2" => "img/monturas/montura-118.jpg",   
    "price" => 199.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Marron")
);
$products[114] = array(
    "name" => "Spy",
    "name2" => "Lentes Spy",
	"name3" => "199.00",
  "name4" => "spy",
    "img" => "img/monturas/montura-119.jpg", 
	"img2" => "img/monturas/montura-119.jpg",   
    "price" => 199.00,
    "paypal" => "YKVL5F87E8PCS",
    "sizes" => array("Negro")
);


?>