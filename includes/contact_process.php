<?php include("includes/database.php"); ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Get values from form 
  $contact_id=$_POST['contact_id'];
  $contact_name=$_POST['contact_name'];
  $contact_email=$_POST['contact_email'];
  $contact_message=$_POST['contact_message'];
  
  
  // Insert data into mysql 
  try {
    $sql = $db->prepare("INSERT INTO form(contact_id, contact_name, contact_email, contact_message)VALUES(:contact_name, :contact_email, :contact_message)");
    $sql->bindParam(':contact_name', $contact_name, PDO::PARAM_STR, 200);
    $sql->bindParam(':contact_email', $contact_email, PDO::PARAM_STR, 200);
    $sql->bindParam(':contact_message', $contact_message, PDO::PARAM_STR, 400);
    $sql->execute();
    header("Location: contact.php?status=thanks");
  }
  
     catch (Exception $e) { 
      echo "data couldnt be entered from the database";
        return;
    }
    
  // if successfully insert data into database, displays message "Successful". 
  if($result){
    echo "Successful";
    echo "<BR>";
    echo "<a href='contact.php'>Back to main page</a>";
  }
  else {
    echo "ERROR";
  }
}
?>

