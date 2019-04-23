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

<h2>Login</h2>
        <p>Enter Username and password</p>
        <form method="GET">
    <input type="text" name="username"
    placeholder="Username" />

    <input type="text" name="password"
    placeholder="password" />
</form>
<?php
echo $templates->render('footer');

if (isset ($_GET['submit']))
{
    $username = $_GET['username'];
    $password= $_GET['password'];

}
?>