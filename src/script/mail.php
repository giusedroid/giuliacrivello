<?php 

  if (isset($_POST['email'])){
    $email = $_POST["email"] ;
    $subject = $_POST["subject"] ;
    $message = $_POST["message"];
    $to = "hello@giuliacrivello.com";
    $name = $_POST["name"];
    $header = "From: giuliacrivello.com <hello@giuliacrivello.com>\r\nSender: ".$email."\r\nReply-To: ".$name." <".$email.">\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n";
    $risultato = mail("$to", "$subject", "$message", $header);
    if($risultato){
      echo "OK";
    }else{
      echo "NO";
    }
  }
  else{
      echo "BAD REQUEST";
  }

?>