<?php

if (empty($_REQUEST['name']) || empty($_REQUEST['email']) || empty($_REQUEST['message']) )
{
	?>
	<script language="javascript" type="text/javascript">
		alert('All fields are required.');
		window.location = 'contact.html' ;
	</script>
	<?php
}
else
{
	$field_name = $_REQUEST['name'];
	$field_email = $_REQUEST['email'];
  	$field_message = $_REQUEST['message'];

	$mail_to = 'kasra.darvish@yahoo.com';
	$subject = 'Message from a website visitor '.$field_name;
	$from = $field_email;

	$bodymsg = "From: $field_name\n E-Mail: $field_email\n Message:\n $field_message";

	$mail_status = mail($mail_to, $subject, $bodymsg, $from);

	if ($mail_status) { ?>
		<script language="javascript" type="text/javascript">
			alert('Thank you for your message. I will contact you shortly.');
			window.location = 'contact.html';
		</script>
	<?php
	}
	else { ?>
		<script language="javascript" type="text/javascript">
			alert('Message failed. Please try again or send an email to ksr.darvish@gmail.com');
			window.location = 'contact.html';
		</script>
	<?php
	}

}
?>