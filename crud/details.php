<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Details</title>
    <style>
        body {
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Détails du produit pc</h1>
    <?php 
        require "connect.php";
        $id=$_GET["id"];
        $produit="select * from crud where id=$id";
        $crud=$pdo->query($produit);
        if ($crud){
            foreach($crud as $line){
    ?>
    <p>ID : <?= $line[0]?> </p>
    <p>Produit : <?= $line[1]?> </p>
    <p>Prix : <?= $line[2]?> </p>
    <p>Nombre : <?= $line[3]?> </p>
    <a href="index.php"><button class="btn btn-primary">Retour</button></a>
    <a href="edit.php?id=<?= $line[0] ?>"><button class="btn btn-warning">Modifier</button></a>
    <?php
            }
        }
    ?>
</body>
</html>