<?php
if (isset ($_GET['submit']))
{
    $noun = $_GET['noun'];
    $verb = "verb";
    $adverb = $_GET['adverb'];
    $adjective = $_GET['adjective'];
}
    echo '<h1>Chapter 6 Thing</h1>';
	echo 'why do you ' . $verb . ' the ' . $adjective . ' ' . $noun . ' ' . $adverb . '? That\'s weird';
	
	
exit;
?>