<?php
//Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
$password = $_GET['password'];
if ($password == Boolean) {
  $class = 'green';
  $message = 'Hai indovinato';
}
else {
  $class = 'red';
  $message = 'Devi riprovare';
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <style media="screen">
       .green {
         color: green;
       }
       .red{
         color: red;
       }
     </style>
     <title>Php-get-params</title>
   </head>
   <body>
     <h1 class="<?php echo $class; ?>"> <?php echo $message; ?></h1>

   </body>
 </html>
