<?php

$products = array();
$products[101] = array(
    "name" => "Pink, Acrylic on Canvas",
    "price" => 50,
    "image" => "img/pink44.jpg",
);
$products[102] = array(
    "name" => "Red, Acrylic on Canvas",
    "price" => 75,
    "image" => "img/red24.jpg",
);
$products[103] = array(
    "name" => "Sun, Acrylic on Glass",
    "price" => 30,
);
$products[104] = array(
    "name" => "Orange&Blue, Acrylic on Canvas",
    "price" => 50,
    "image" => "img/orangeblue.jpg",
);
?>

<?php 
$pageTitle = "Purchase Mixed Media";
$section = "shop";
include('includes/header.php'); ?>

        <div class = "wrapper2">
        
            <h3>Mixed Media Art For Sale</h3>
                
                <div class = "shop"> 
                 
                        <?php foreach($products as $product) {
                        ?>
                        <li>
                            <a href="#">
                                <p>View Details</p>
                                <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>" class="img-responsive" alt="Responsive image" class="img-thumbnail">
                            </a>
                        
                        </li>
                        <?php } ?>
        </div>
        
    </div>
    
<?php include('includes/footer.php'); ?>