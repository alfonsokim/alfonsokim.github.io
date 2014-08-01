<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Page title</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/reset.css" rel="stylesheet" media="screen" type="text/css" />
<link href="css/master.css" rel="stylesheet" media="screen" type="text/css" />
   <!-- form validation scripts (for contact page) -->
   <script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#contactform").validate();
});
</script>
<!--[if IE 6]>
        <link href="css/ie6.css" rel="stylesheet" media="screen" type="text/css" />
<![endif]-->
</head>

<body style="background:#eaeae9; margin:20px; ">
<?php
							if (!count($_POST)){
						?>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  id="contactform" >
 <div style="margin-right:50px" class="column">
 <p> <label class="title_contact">Name</label><input name="name" type="text" class="required"/></p>
   <p><label class="title_contact">Email</label><input name="email" type="text" class="required email"/></p>
   <p><label class="title_contact">Telephone</label><input name="telephone" type="text" /></p></div>
   <div class="column"><p><label class="title_contact">Message</label><textarea name="message" cols="" rows="8" class="required"></textarea></p> </div>
   <div class="clear"></div><div>  <hr />
							<button type="submit" class="btn" name="submit" ><span>SEND MESSAGE</span></button>
							</div></form>
                            			<?php
						}else{
						?>
                            <!-- START SEND MAIL SCRIPT -->

						<div align="center"><img src="img/ok.png" alt="" width="128" height="128" /><br /><br /><p><strong>Email Successfully Sent!</strong></p>
							<p>Thank you for contacting me!</p>
						</div>
						
						<?php
						$mail = $_POST['email'];

						/*$subject = "".$_POST['subject'];*/
						$to = "info@ansonika.com";
						$subject = "Message from YourName";
						$headers = "From: YourName <noreply@yourdomain.com>";
						$message = "Message from YourName\n";
						$message .= "\nName: " . $_POST['name'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelephone: " . $_POST['telephone'];
						/*$message .= "\nURL: " . $_POST['contacturl'];*/

						$message .= "\nMessage: " . $_POST['message'];

						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						}
						?>
						
						<!-- END SEND MAIL SCRIPT -->
</body>
</html>
