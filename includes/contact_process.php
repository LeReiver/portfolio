<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 5/12/16
 * Time: 8:43 PM
 */


//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

      //Email information
      $admin_email = "info@lereiver.com";
      $email = $_REQUEST['email'];
      $subject = $_REQUEST['subject'];
      $Name = $_REQUEST['name'];
      $Question = $_REQUEST['questions'];

      //send email
      mail($admin_email, $subject, $Question, "From:" . $email);

      //Email response success
      print "<meta http-equiv='refresh' content='0;URL=../success.php'>";
  }
  else  {
      // Email response not success
      ?>
      print "<meta http-equiv='refresh' content='0;URL=../error.php'>";
      <?php
  }
?>
