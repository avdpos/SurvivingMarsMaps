<?php
session_start();
$_SESSION['active_search'] = false;
header ("Location: index.php");

