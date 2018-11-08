php_check_syntax

<!-- // Hi there! these two php files are some try-ups codes I wrote for the registration part ("join us")  -->
<!-- // if any of you succeed to make it ACRUALLY work, i'll eb really happy.
of course you shall install PHP to work this code up!! INSTALLATION DOWN BELOW
https://secure.php.net/manual/en/function.mail.php 
https://secure.php.net/downloads.php-->

<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">

  Email: <input name="email" type="text" />

  Subject: <input name="subject" type="text" />

  Message:

  <textarea name="comment" rows="15" cols="40"></textarea>

  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>