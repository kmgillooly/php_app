<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message . "\n";

	//TODO: Send email

	header("Location: contact.php?status=thanks");
	exit;
	}
	
?>



<?php 
$pageTitle = "Contact Kristina";
$section = "contact";
include('includes/header.php'); ?>
  	

  <div id="imageGallery">
	<div id="wrapper2">
		<section>  
			<h3>Contact Form</h3>
			
			
		<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>	
			<p>Thanks for the email! I will be in touch soon.</p>
		<?php } else { ?>
		
			<p>Feel free to fill out this form to send me an email!</p>

		<form class="form-inline">
		<div class="form-group form-group-sm">
				
				
				<form method="post" action="contact.php">
		
					<div id="form">
					<table>
						<tr>
							<th>
								<label for="name">Name</label>
							</th>
							<td>
								<input type="text" name="name" id="username">
							</td>
						</tr>
						<tr>
							<th>
								<label for="email">Email</label>
							</th>
							<td>
								<input type="text" name="email" id="email">
							</td>
						</tr>
						<tr>
							<th>
								<label for="message">Message</label>
							</th>
							<td>
								<textarea name="message" id="message"></textarea>
							</td>
						</tr>
  					</table>
					<input type="submit" value="send">
				
				</form>
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






