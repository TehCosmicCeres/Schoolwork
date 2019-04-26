<?php
// --------------
// Programmer:  Ashton Armstrong
// Course:      ITSE-1306 (Intro to PHP)
// Instructor:  Cesar "Coach" Marrero
// Assignment:  CSV output thing
// Description: Print out a CSV file
// --------------

echo '<table class="mt-5">
    <tr><th>LAST</th><th>FIRST</th><th>SALARY</th></tr>';

$csvfile = fopen("names.csv", "r"); //r stands for read
$data;
$count = 0;
while(!feof($csvfile)):
    $namesline = fgetcsv($csvfile);
    $data[$count++] = $namesline;
    echo "<tr>" . "<td>$namesline[0]</td>" . "<td>$namesline[1]</td>" . "<td>$namesline[2]</td>" . "</tr>";
endwhile;
echo '</table>';
?>