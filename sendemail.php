<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Gracias por contactarnos. Estaremos respondiendo tu inquietud tan pronto sea posible.'
	);
        
    $email = ($_POST['email']); 
    $subject = "Barcamp Santiago"; 
    $message = ($_POST['message']); 

    $email_from = $email;
    $email_to = 'barcamprd@gmail.com';

    $body = 'Email: ' . $email . "\n\n" . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;
