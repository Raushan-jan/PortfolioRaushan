<?php
$recepient="raushansydykova@gmail.com";
$sitename="MeetMe";
$name=trim($_POST["username"]);
$subject=trim($_POST["subject"]);
$message=trim($_POST["message"]);
$mes="Name: $name \nSubject: $subject \nText: $message";
$pagetitle="New application: \"$sitename\"";
mail($recepient, $pagetitle,$mes, "Content-type: text/plain; chaerset-\"utf-8\"\n From: $recepient");

?>
