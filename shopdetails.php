<?php include("includes/products.php"); 

$section = "shop";
$pageTitle = $product["name"];
include("includes/header.php"); ?>


        <div class="section page">
            <div class="wrapper2">
                <div class="breadcrumb"><a href="shop.php">Shop> </a><?php echo $product["name"]; ?></div>
                
                <div class="shop-picture">
                    <span>    
                        <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>">
                    </span>
                    
                </div>
                
                <div class="shop-details">
                    
                    <h1><span class="price">$<?php echo $product["price"]; ?></span><?php echo $product["name"]; ?></h1>
                    
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