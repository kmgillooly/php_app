<?php include("includes/database.php"); ?>
<?php
function get_product($db, $sku) {
  //write a function that queries the database for a single product and returns the result.
  try {
    $stmt = $db->prepare("INSERT INTO form contact_id, contact_name, contact_email, contact_message");
    $stmt->bindParam(':sku', $sku, PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) { 
      echo "data couldnt be retrieved from the database";
        return;
    }
    
    return $results;
   
}
?>

<?php
  $sql = "SELECT * FROM mytable WHERE id = " . mysqli_real_escape_string($_GET['id']);
?>


