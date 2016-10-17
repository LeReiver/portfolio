<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 5/12/16
 * Time: 8:43 PM
 */

$EmailFrom = trim(stripslashes($_POST['email']));
$EmailTo = "info@lereiver.com";
$Subject = "Contact LeReiver";
$Name = trim(stripslashes($_POST['name']));
$Questions = trim(stripslashes($_POST['questions']));
$current_date = date("Y-m-d"); // This date is created when the form is submitted.


$validationOK=true;
if ($EmailFrom=="") $validationOK=false;
if ($Name=="") $validationOK=false;
if (!$validationOK) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.php\">";
    exit;
}


$myFilePath = "includes/contacts/";
$myFileName = "form-data.csv";
$myPointer = fopen ($myFilePath.$myFileName, "a+");
$form_data = $current_date . "," . $EmailFrom . "," . $Name . "," . $Questions . "\n";
fputs ($myPointer, $form_data);
fclose ($myPointer);



$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= $Questions;
$Body .= "\n";



$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");



if ($success){
    print "<meta http-equiv=\"refresh\" content=\"0;URL=../success.php\">";
}
else{
    print "<meta http-equiv=\"refresh\" content=\"0;URL=../error.php\">";
}
