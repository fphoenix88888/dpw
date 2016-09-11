<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'已傳送您的意見。'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'service@dpw-tw.lionfree.net';

    $body = '名字: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . '主旨: ' . $subject . "\n\n" . '內容: ' . $message;

    $headers = "Content-Type: text/html; charset=UTF-8";

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>', $headers);

    echo json_encode($status);
    die;