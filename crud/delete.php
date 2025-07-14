<?php
    require "connect.php";
    session_start();
    $id=$_GET["id"];
    $sql="delete from crud where id=$id"
    header("Location: index.php");
?>