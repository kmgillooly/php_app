<?php include("includes/products.php");

$products = get_product($db, $_GET['id']);
$section = "shop";
$pageTitle = $products["name"];
include("includes/header.php"); ?>



        <div class="section page">
            <div class="wrapper2">
                <div class="breadcrumb"><a href="shop.php">Click Here to Go Back to the Shop> </a><?php echo $products["name"]; ?></div>
                 
                <div class="shop-picture">
                    <span>    
                       <img src="<?php echo $products["img"]; ?>" alt="<?php echo $products["name"]; ?>"> 
                    </span>
                    
                </div>
                
                <div class="shop-details">
                    
                    <h2><span class="price">$<?php echo $products["price"]; ?></span><?php echo $products["name"]; ?></h2>
                    
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
                            <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
                            <input type="submit" value="Add to Cart" name="submit">
                        </form>

                    <p class="note-designer">* All Paintings are done by Kristina!</p>
                </div>
                
                
            </div>
            
        </div>
  
<?php include("includes/footer.php"); ?>