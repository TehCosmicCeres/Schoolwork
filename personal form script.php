<?php
if (isset ($_GET['submit']))
{
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $emailAddress = $_GET['emailAddress'];
    $phoneNumber = $_GET['phoneNumber'];
    $birthday = $_GET['birthday'];



    echo '<h3> Chapter 4 Thing</h3>';
    echo 'Name: ' . $firstName . ' ' . $lastName . ' ';
    echo 'E-mail Address: ' . $emailAddress . ' ';
    echo 'Phone Number: ' . $phoneNumber . ' ';
    echo 'Date of Birth: ' . $birthday . ' ';

exit;
}






?>