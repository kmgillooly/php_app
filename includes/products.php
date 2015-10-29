<?php

function get_products_recent(){
    $recent = array();
    $all = get_products_all();
    
    $total_products = count($all);
    $position = 0;
    
    foreach($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 4) {
            $recent[] = $product;
        }
    }
    return $recent;
    
function get_products_search($s) {
    $results = array();
    $all = get_products_all();
    
    foreach($all as $product) {
        if (stripose($product["name"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}
    
function get_products_all(){
    return count(get_products_all());    
}

function get_products_subset($positionStart, $positionEnd) {
    $subset = array ();
    $all = get_products_all();
    
    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $proudct;
        }
    }
    return $subset;
}

function get_products_all() {
/*
$products = array();
$products[101] = array(
    "name" => "Pink, Acrylic on Canvas",
    "price" => 50,
    "image" => "img/pink44.jpg",
    "paypal" => "926V753RGY8XA",
);
$products[102] = array(
    "name" => "Red, Acrylic on Canvas",
    "price" => 75,
    "image" => "img/red24.jpg",
    "paypal" => "HTDKHVUV9RE2G",
);
$products[103] = array(
    "name" => "Sun, Acrylic on Glass",
    "price" => 30,
    "image" => "img/sun.jpg",
    "paypal" => "KYZ9F6DJT78KU",
);
$products[104] = array(
    "name" => "Orange Blue, Acrylic on Canvas",
    "price" => 50,
    "image" => "img/orangeblue.jpg",
    "paypal" => "VLEN22VKUE95U",
);
*/

    require(ROOT_PATH . "includes/database.php");

    try {
        $results = $db->query("SELECT name,  price, img, sku, paypal FROM products ORDER BY sku ASC");
    } catch (Exception $e) {
        echo "data couldnt be retrieved from the database";
        exit;
    }

    $products = $results->fetchALL(PDO::FETCH_ASSOC);

        return products;    
}
?>