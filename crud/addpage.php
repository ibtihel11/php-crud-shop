<?php
    require "connect.php";
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["produit"])) $prod=$_POST["produit"];
        if (isset($_POST["prix"])) $prix=$_POST["prix"];
        if (isset($_POST["nombre"])) $nb=$_POST["nombre"];
        if ($prod !== '' && is_numeric($prix) && is_numeric($nb)) {
            $add="insert into crud (produit,prix,nombre) values(?,?,?)";
            $res=$pdo->prepare($add);
            $res->bindParam(1,$prod,PDO::PARAM_STR);
            $res->bindParam(2,$prix,PDO::PARAM_STR);
            $res->bindParam(3,$nb,PDO::PARAM_STR);
            $res->execute();
            $_SESSION['message']="<div class='alert alert-success mt-3'>Produit ajouté avec succès !</div>";
            $_SESSION['error']="";
        } else {
            $_SESSION['message']="";
            $_SESSION['error']="<div class='alert alert-danger mt-3'>Veuillez remplir correctement tous les champs !</div>";
        }
        header("Location: index.php");
    }
?>