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

<h2>Report Error</h2>
    <p>Describe Error</p>
<form method="GET">
    <input type="text" name="report"
    placeholder="Describe Error" />
</form>

<?php
echo $templates->render('footer');
if (isset ($_GET['submit']))
{
    $report = $_GET['report'];

}
?>