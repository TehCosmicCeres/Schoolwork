<?php
if (isset ($_GET['submit']))
{
    $gender = $_GET['gender'];
    $ratio = "blah";
    $weight = $_GET['weight'];
    $number_of_drinks = $_GET['number_of_drinks'];
    $amount_of_alcohol = $_GET['amount_of_alcohol'];
    $hours = $_GET['hours'];

    if($gender == 'male')
    {
        $ratio = 0.73; 
    }

    if ($gender == 'female')
    {
        $ratio = 0.66;
    }  
    $BAC = ($amount_of_alcohol * 5.14 / $weight * $ratio) - .015 * $hours;

    echo '<h3> Chapter 5 Thing</h3>';
    if($BAC >= 0.08)
    {
        echo 'You cannot drive, as you are above the legal limit';
    }
    else
    {
        echo 'You can drive, as you are under the legal limit';
    }







exit;
}






?>
