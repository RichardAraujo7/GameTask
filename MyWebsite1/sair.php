<?php
session_start();

session_destroy();
header("Location: pgprincipal.php");
?>