<!--#Lakshmi Roja-->
<!-- Logout Code-->
<?php
session_start();
unset($_SESSION["email"]);
header("Location:index.html#features");
?>