<?
	print_r($_POST);
  
	$to = "charles@mfdc.biz";
	$subject = "Test mail";
	$message = $_POST['comment'];;
	$from = $_POST['email'];
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
	echo "Mail Sent.";
?>