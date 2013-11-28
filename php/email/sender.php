<?php

$from    = $_POST['name'];

$to      = 'cxm6467@gmail.com';

$subject = "Comments from:  $from";

$fEmail  = $_POST['email'];

$comments=$_POST['message'];

$message = "$from said \"$comments\" reply to:  $fEmail";

$headers = "From: info@christophermarasco.com\r\nReply-To: cxm6467@gmail.com";



//To Me

if(isset($_POST['submit'])){

mail($to, $subject, $message,$headers);



//To Them

mail($_POST['email'],"Thank you from Chris Marasco",genMessage(),$headers);



$rMessage = "";

$rMessage .= genHead();

$rMessage .= ("<meta http-equiv=\"REFRESH\" content=\"0;url=http://christophermarasco.com\">");

$rMessage .= genFoot();

echo($rMessage);

}

function genHead(){

$message=<<<END

<!DOCTYPE html>

<html><head></head><body>

END;

return $message;

}



function genFoot(){

    return "</body></html>";

}



function genMessage(){

 return"Thank you for your comments on my page!";

}

?>