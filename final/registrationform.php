<?php
if (isset ($_GET['submit']))
{
    $username = $_GET['username'];
    $password= $_GET['password'];

    echo '<h3> Chapter 4 Thing</h3>';
    echo 'Name: ' . $firstName . ' ' . $lastName . ' ';
    echo 'E-mail Address: ' . $emailAddress . ' ';
    echo 'Phone Number: ' . $phoneNumber . ' ';
    echo 'Date of Birth: ' . $birthday . ' ';
exit;
}
?>