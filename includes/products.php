<?php include("includes/database.php"); ?>
<?php
function get_product($db, $sku) {
  //write a function that queries the database for a single product and returns the result.
  try {
    $stmt = $db->prepare("SELECT name, price, img, sku, paypal FROM products WHERE sku = :sku");
    $stmt->bindParam(':sku', $sku, PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) { 
      echo "data couldnt be retrieved from the database";
        return;
    }
    
    return $results;
   
}
function get_products_all($db) {
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
    try {
        $results = $db->query("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");
    } catch (Exception $e) {
        echo "data couldnt be retrieved from the database";
        exit;
    }
    
    $products = $results->fetchALL(PDO::FETCH_ASSOC);

    return $products;    
}
?>