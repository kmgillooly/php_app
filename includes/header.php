<?DOCTYPE html>
<html>

  
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $pageTitle; ?></title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/main.css">
   </head>

<body> 	 
 
 	 <header>
   	    <a href="index.php" id="logo">
      		<span id="kg"><img src="img/kglogo.jpg" alt="kg letter logo"><img src="img/developments.jpg" alt="developments"></span>
        </a>
        <nav class="navbar navbar-default">
       	    <li class= "Paintings <?php if ($section == "paintings") { echo "on"; } ?>"><a href="index.php" >Paintings</a></li>
       	    <li class= "shop <?php if ($section == "shop") { echo "on"; } ?>"><a href="shop.php">Shop</a></li>
   	        <li class= "about <?php if ($section == "about") { echo "on"; } ?>"><a href="about.php">About</a></li>
   	        <li class= "family <?php if ($section == "family") { echo "on"; } ?>"><a href="Family.php">Family</a></li>
            <li class= "contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
        </nav>
   	</header>
   	
</html>