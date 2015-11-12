<?php include("includes/database.php"); ?>

<?php 
$pageTitle = "Contact Kristina";
$section = "contact";
include('includes/header.php'); ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  // Get values from form 
  $contact_id=$_POST['contact_id'];
  $contact_name=$_POST['contact_name'];
  $contact_email=$_POST['contact_email'];
  $contact_message=$_POST['contact_message'];
  
  
  // Insert data into mysql 
  try {
    $sql = $db->prepare("INSERT INTO form(contact_id, contact_name, contact_email, contact_message)VALUES(':contact_id', ':contact_name', ':contact_email', ':contact_message')");
    $sql->bindParam(':contact_id', $contact_id, PDO::PARAM_INT);
    $sql->bindParam(':contact_name', $contact_name, PDO::PARAM_STR, 200);
    $sql->bindParam(':contact_email', $contact_email, PDO::PARAM_STR, 200);
    $sql->bindParam(':contact_message', $contact_message, PDO::PARAM_STR, 400);
    $sql->execute();
    
  }
  
     catch (Exception $e) { 
      echo "data couldnt be entered into the database" . $e->getMessage();
        return;
    }

}
?>


  <div id="imageGallery">
	<div id="wrapper2">
		<section>  
			<h3>Contact Form</h3>
			
			
			<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>	
				<p>Thanks for the email! I will be in touch soon.</p>
			<?php } else { ?>
			
		
			<p>Feel free to fill out this form to send me an email!</p>

			
				<div class="form-group form-group-sm">
				
					<form class="form-inline" method="post" action="contact.php" method="post">
						<div id="form">
						<table>
							<tr>
								<th>
									<label for="name">Name</label>
								</th>
								<td>
									<input type="text" name="name" id="username" value="<?php if (isset($_POST['contact_name'])) echo $_POST['contact_name']; ?>">
								</td>
							</tr>
							<tr>
								<th>
									<label for="email">Email</label>
								</th>
								<td>
									<input type="text" name="email" id="email" value="<?php if (isset($_POST['contact_email'])) echo $_POST['contact_email']; ?>">
								</td>
							</tr>
							<tr>
								<th>
									<label for="message">Message</label>
								</th>
								<td>
									<textarea name="message" id="message"></textarea>
									<value="<?php if (isset($_POST['contact_message'])) echo $_POST['contact_message']; ?>">
								</td>
							</tr>
								<tr style="display: none;">
								<th>
									<label for="address">Address</label>
								</th>
								<td>
									<input type="text" name="address" id="address">
									<p>Humans: Please leave this field blank!</p>
								</td>
							</tr>
  						</table>
					
					<input type="submit" value="send">
				
					</form>
		
		<?php } ?>
	

			</div>		
			
	</div>
  </div>
        </section>
		<section>
			<h3>Contact Details</h3>
			<ul class="contact-info">
			  <li class="mail"><a href="mailto:kmgillooly@gmail.com">kmgillooly@gmail.com</a></li>
			  <li class="twitter"><a href="http://twitter.com/intent/tweet?screen_name=gillooly_t">@gillooly_t</a></li>
			</ul>
		 </section>
    </div>
   </div>
   
   	</div>

</div>

    
<?php include('includes/footer.php'); ?>