<?php

include_once 'dbh-inc.php';
function uidExist($mysqli, $email){
    $sql = "SELECT * FROM users WHERE email = ? OR uid = ?;";
    $stmt = mysqli_stmt_init($mysqli);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../php/sign-up.php");
        exit();
    }
}