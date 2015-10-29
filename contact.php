<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);
	
	if ($name == "" OR $email == "" OR $messagae == "") {
		echo "You must specify a value for name, email address and message.";
		exit;
	}
	
	foreach( $_POST as $value ){
		 if( stripos($value,'Content-Type:') !== FALSE ){
		     echo "There was a problem with the information you enetered.";
		     exit;
  }
}

	if ($_POST["address"] !=="") {
		echo "Your form submission has an error";
		exit;
	}
	
	require_once("includes/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	
	if (!$mail->ValidateAddress($email)){
		echo "You must specify a valid email address.";
		exit;
	}
	
	
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Message: " . $message;

	//TODO: Send email

	$mail->SetFrom($email, $name);
	$address = "kmgillooly@gmail.com";
	$mail->AddAddress($address, "Kristina Gillooly");
	$mail->Subject = "Contact Form Submission for Kristina | . $name";
	$mail->MsgHTML($email_body);
	
	if(!$mail->Send()) {
		echo "There was a problem sending the email: " . $mail->ErrorInfo;
		exit;
	}

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






