<?php
// --------------
// -- Programmer:  Ashton Armstrong
// -- Description: Caleb Bleeker's Special Effects Makeup Portfolio
// ---------------
// Loading and rendering plates templates
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('templates/');
echo $templates->render('header');
?>

<h2>Check Error</h2>
<p>Display error reports and status here.</p>


<?php
echo $templates->render('footer');
?>