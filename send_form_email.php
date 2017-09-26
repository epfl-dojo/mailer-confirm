<?php
  require_once('init.php');

?>
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
  $confirmkey = "mysupersecrectconfirmkey"; // See hash salt secrect
  $headers = 'From: noreply@epfl.ch' . "\r\n" .
  'To: ' . $_REQUEST['email'] . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  $confirmlink = 'http://' . $_SERVER['SERVER_NAME'] . "/mailer/confirmaccount.php" . "?confirmkey=" . $confirmkey;
  mail($_REQUEST['email'], "valider votre email", $confirmlink, $headers);
  var_dump(mail($_REQUEST['email'], "valider votre email", $confirmlink, $headers));

  print_r ($_SERVER);
  $logger->addInfo('Send_form_email REQUEST = ', $_REQUEST);
  $logger->addInfo('... confirm link = ', array($confirmlink));



?>
</html>
