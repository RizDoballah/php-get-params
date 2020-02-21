<?php
//Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

// var_dump($_GET);
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];
  $message = '';
  var_dump($_GET);

  if (empty($name) || empty($mail) || empty($age)) {
    $message = 'Non hai in inserito uno o più campi richiesti';
  } elseif (strlen($name) <= 3) {
    $message = 'Accesso Negato';
  } elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
    $message = 'Accesso Negato';
  } elseif (!is_numeric($age)) {
    $message = 'Accesso Negato';
  } else {
    $message = 'Accesso Riuscito';
  }
  echo $message;

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>snack-1</title>
   </head>
   <body>

   </body>
 </html>
