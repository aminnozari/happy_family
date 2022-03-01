<?php
// $_POST moteghayer nist
    include "database.php";
    $esm = $_POST["name"];
    $matn = $_POST["text"];
    mysqli_query($connection,"INSERT INTO messages(name , text) VALUES('$esm','$matn')");
    //redirect
    header("Location: index.php");
?>