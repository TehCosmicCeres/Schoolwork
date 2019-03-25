<?php
// --------------
// Programmer:  Ashton Armstrong
// Course:      ITSE-1306 (Intro to PHP)
// Instructor:  Cesar "Coach" Marrero
// Assignment:  Password Strength Checker
// Description: Prompt user for a password and output it's strength
// --------------

function passwordCheck($password, &$passwordlevel)
    {
        $passwordlevel = 10;
        $ifdigit = ctype_digit($password);
        $ifalpha = ctype_alpha($password);
        $containsLetter  = preg_match('/[a-zA-Z]/',    $password);
        $containsDigit   = preg_match('/\d/',          $password);
        $containsSpecial = preg_match('/[^a-zA-Z\d]/', $password);


        if(strlen($password) < 8){
            $passwordlevel = $passwordlevel - 4;
        }

        if( $ifdigit = TRUE)
        {
            $passwordlevel = $passwordlevel - 4;
        }

        if( $ifalpha = TRUE)
        {
            $passwordlevel = $passwordlevel - 3;
        }

        if ($containsLetter = TRUE && $containsDigit = TRUE && $containsSpecial = TRUE)
            {
                $passwordlevel = $passwordlevel + 4;
            }

        elseif($containsLetter = TRUE && $containsDigit = TRUE)
        {
            $passwordlevel = $passwordlevel + 3;
        }
        return $passwordlevel;
    }
    

if (isset ($_GET['submit']))
{
    $password = $_GET['string1'];
}
$passwordlevel = 0;


echo passwordCheck($password, $passwordlevel);

?>