<?php

if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])){
  if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])){
    $destinataire = "contact@t2isoft.com";
    $sujet = "Demande de client T2isoft.com";
    $message = "Nom : ".$_POST['nom']."\n";
    $message .= "Adresse email : ".$_POST['email']."\n";
    $message .= "Message : ".$_POST['message']."\n";
    $entete = 'From: '.$_POST['email']."\r\n".
          'Reply-To: '.$_POST['email']."\r\n".
    'X-Mailer: PHP/'.phpversion();
    if (mail($destinataire,$sujet,$message,$entete)){
      echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    } else {
      echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    }
  }
}
echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
