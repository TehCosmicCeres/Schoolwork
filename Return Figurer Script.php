<?php
// --------------
// Programmer:  Ashton Armstrong
// Course:      ITSE-1306 (Intro to PHP)
// Instructor:  Cesar "Coach" Marrero
// Assignment:  Rule of 72
// Description: Prompt user for the rate of return on an investment and calculate double time
// --------------


if (isset ($_GET['submit']))
{
    $r = $_GET['r'];
}
$years = 1;
$choice = 0;

switch($r)
{
    case 0:
    $choice ++;
    break;

    default:
    $years = 72 / $r;
}

if( $choice == 1)
{
    echo 'Cannot divide by zero, please try again';
}

else
{
    echo 'It will take ' . $years . ' years to double the return on your investment.';
}

exit;
?>