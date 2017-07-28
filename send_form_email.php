<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<h1>Confirmation d'adresse électronique</h1>

<p>Un email a été envoyé à l'adresse <?php echo $_REQUEST['email'] ?>. Veuillez cliquer sur le lien qui s'y trouve.</p>

<?php
  $headers = 'From: noreply@epfl.ch' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  mail($_REQUEST['email'], "valider votre email", "blabla click me", $headers);
?>
</html>
