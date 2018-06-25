<?php
    include 'dbconnection.php';
    session_start();
    $_SESSION["active_search"]  =   TRUE;
    $_SESSION["terrain"]        =   mysqli_real_escape_string($conn, $_POST['terrain']);
    $_SESSION["metals"]         =   mysqli_real_escape_string($conn, $_POST['metals']);
    $_SESSION["concrete"]       =   mysqli_real_escape_string($conn, $_POST['concrete']);
    $_SESSION["water"]          =   mysqli_real_escape_string($conn, $_POST['water']);
    $_SESSION["dust_devils"]    =   mysqli_real_escape_string($conn, $_POST['dust_devils']);
    $_SESSION["dust_storms"]    =   mysqli_real_escape_string($conn, $_POST['dust_storms']);
    $_SESSION["meteors"]        =   mysqli_real_escape_string($conn, $_POST['meteors']);
    $_SESSION["cold_waves"]     =   mysqli_real_escape_string($conn, $_POST['cold_waves']);
    $_SESSION["resource_min"]   =   mysqli_real_escape_string($conn, $_POST['resource_min']);
    $_SESSION["resource_max"]   =   mysqli_real_escape_string($conn, $_POST['resource_max']);
    $_SESSION["threat_min"]     =   mysqli_real_escape_string($conn, $_POST['threat_min']);
    $_SESSION["threat_max"]     =   mysqli_real_escape_string($conn, $_POST['threat_max']);

    header("Location: ../../index.php");
?>