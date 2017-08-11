<?php
  require_once('init.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <title>Document</title>
</head>
<body>
  <form name="contactform" id="registerForm" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label id="labelFirstName" for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input id="firstName" type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label id="labelName" for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input id="name" type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email" id="labelEmail">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" id="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input class="submit" type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 </td>
</tr>
</table>
</form>

<script type="text/javascript">
  $(function() {
    let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})$/;
    $( "#registerForm" ).submit(function( event ) {
      let email = $('#email').val();
      let name = $('#name').val();
      let firstName = $('#firstName').val();
      if(! emailReg.test(email)){
        $("label#labelEmail").css('color', 'red');
        event.preventDefault();
      }
      if(! /./.test(name)){
        $("label#labelName").css('color', 'red');
        event.preventDefault();
      }
      if(! /./.test(firstName)){
        $("label#labelFirstName").css('color', 'red');
        event.preventDefault();
      }
    });
    console.log(email);
  });
</script>
</body>
</html>
