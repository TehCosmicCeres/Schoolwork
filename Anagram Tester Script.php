<?php
// --------------
// Programmer:  Ashton Armstrong
// Course:      ITSE-1306 (Intro to PHP)
// Instructor:  Cesar "Coach" Marrero
// Assignment:  Anagram Tester
// Description: Prompt user for two words and test if they are anagrams.
// --------------


if (isset ($_GET['submit']))
{
    $posAnagram1 = $_GET['string1'];
    $posAnagram2 = $_GET['string2'];
}
$file = 'newpage.html';

function anagramTest($posAnagram1, $posAnagram2, &$file)
    { 
        if(strlen($posAnagram1) == strlen($posAnagram2))
        {
            if (count_chars($posAnagram1, 1) == count_chars($posAnagram2, 1)) 
            {
                $file = "newpage.html"; 
                $run = fopen($file, 'w+');
                $outputData = "<!doctype html>
                <p>These two words are anagrams.</p>";   
                fwrite($run, $outputData);
                fclose($run);
            }
            else 
            {
                $file = "newpage.html"; 
                $run = fopen($file, 'w+');
                $outputData = "<!doctype html>
                <p>These two words are not anagrams.</p>";   
                fwrite($run, $outputData);
                fclose($run);
            }
        }
        else
        {
            $file = "newpage.html"; 
            $run = fopen($file, 'w+');
            $outputData = "<!doctype html>
            <p>These two words cannot be compared.</p>";   
            fwrite($run, $outputData);
            fclose($run);
        }
    }

anagramTest($posAnagram1, $posAnagram2, $file);   
readfile($file);
?>