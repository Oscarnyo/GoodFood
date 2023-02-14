<?php
session_start();

//clear user's credential information
unset($_SESSION["username"]);

header("Location: home_page.php");

?>