<?php
// --------------
// Programmer:  Ashton Armstrong
// Course:      ITSE-1306 (Intro to PHP)
// Instructor:  Cesar "Coach" Marrero
// Assignment:  Password Strength Checker
// Description: Prompt user for a password and output it's strength
// --------------

include 'password strength function.php';
    

if (isset ($_GET['submit']))
{
    $password = $_GET['string1'];
}
$passwordlevel = 10;
$judge = "weak";


echo "With a strength level of ";
echo passwordCheck($password, $passwordlevel, $judge);
echo " the password you entered is ";
echo $judge;
echo ".";
?>