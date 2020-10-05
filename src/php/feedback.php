<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['message'];

		$to='dsc.abesit@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Feedback from website';
		$message="Name :".$name."\n"."Message :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", we will reach you shortly!</h1>";
		}
		else{
			echo "Something went wrong! Check your connection or send the message again!";
		}
	}
?>