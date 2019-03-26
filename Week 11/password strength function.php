<?php
// --------------
// Programmer:  Ashton Armstrong
// Course:      ITSE-1306 (Intro to PHP)
// Instructor:  Cesar "Coach" Marrero
// Assignment:  Password Strength Checker
// Description: Prompt user for a password and output it's strength
// --------------

function passwordCheck($password, &$passwordlevel, &$judge)
    {
        $nNum = 0;
        $nAlpha = 0;
        $nSpecial = 0;

        $length = strlen($password);

        for ($i = 0; $i < $length; ++$i) {
			$ch   = $password[$i];
			$code = ord($ch);
            if($code >= 48 && $code <= 57)
            {
                $nNum++;
            }

            elseif($code >= 65 && $code <= 90 || $code >= 97 && $code <= 122)
            {
                $nAlpha++;
            }

            else
            {
                $nSpecial++;}
            }

            if($length < 8)
            {
                $passwordlevel = $passwordlevel - 4;
            }

            if($length == $nNum)
            {
                $passwordlevel = $passwordlevel - 3;
            }

            if($length == $nAlpha)
            {
                $passwordlevel = $passwordlevel - 3;
            }

            if($nAlpha > 0 && $nNum >= 2)
            {
                $passwordlevel = $passwordlevel + 3;
            }

            if($nNum > 0 && ($nAlpha >= 2 || $nSpecial > 0))
            {
                $passwordlevel = $passwordlevel + 3;
            }

            if($nNum > 0 && $nAlpha > 0 && $nSpecial > 0)
            {
                $passwordlevel = $passwordlevel + 4;
            }

            if($passwordlevel < 10)
            {
                $judge = "weak";
            }

            if($passwordlevel >= 10 && $passwordlevel <= 12)
            {
                $judge = "questionable";
            }

            if($passwordlevel >= 13)
            {
                $judge = "strong";
            }
        return $passwordlevel;
    }
    ?>