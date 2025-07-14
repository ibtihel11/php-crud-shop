<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php crud</title>
    <style>
        body {

        }
    </style>
</head>
    <body>
    <?php
        require "connect.php";
        session_start();
        $_SESSION['username']="ibtihel";
        if (!empty($_SESSION['message'])){
            echo $_SESSION['message'];
        } elseif(!empty($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        $_SESSION['message']="";
        $_SESSION['error']="";
        $req="select * from crud";
        $prep=$pdo->prepare($req);
        $prep->execute();
        $crud=$prep->fetchAll(PDO::FETCH_ASSOC);
    ?>
        <table class="table">
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> PRODUIT </th>
                <th scope="col"> PRIX </th>
                <th scope="col"> NOMBRE </th>
                <th scope="col"> ACTIONS </th>
            </tr>
            <?php
                if ($crud){
                    foreach($crud as $line){
            ?>
                <tr>
                    <td scope="row"><?= $line["id"]?></td>
                    <td><?= $line["produit"]?></td>
                    <td><?= $line["prix"]?></td>
                    <td><?= $line["nombre"]?></td>
                    <td>
                        <a href="details.php?id=<?= $line["id"] ?>"><button class="btn btn-primary">Voir</button></a>
                        <a href="edit.php?id=<?= $line["id"] ?>"><button class="btn btn-warning">Modifier</button></a>
                        <a href="delete.php?id=<?= $line["id"] ?>" onclick="return confirm('Are you sure you want to delete?')"><button class="btn btn-danger">Supprimer</button></a>
                    </td>
                </tr>
            <?php
                    }
                }
            ?>
        </table>
        <form action="add.php">
            <button class="btn btn-primary">Ajouter un produit</button>
        </form>
    </body>
</html>