<?php
session_start();
if(session_destroy()) // Menghapus Sessions
{
header("Location: index.php"); // Langsung mengarah ke Home index.php
}
?>
Login.html
<?php
include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
