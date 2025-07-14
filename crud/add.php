<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ajout</title>
    <style>
        body {
            margin: 10px;
        }
        input {
            max-width: 500px
        }
    </style>
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form method="post" action="addpage.php">  
        <label class="form-label" for="produit"> Produit </label>
        <br>
        <input class="form-control" type="text" name="produit" id="produit">
        <br>
        <label class="form-label" for="prix"> Prix </label>
        <br>
        <input class="form-control" type="number" name="prix" id="prix">
        <br>
        <label class="form-label" for="nombre"> Nombre </label>
        <br>
        <input class="form-control" type="number" step="0.1" name="nombre" id="nombre">
        <br><br>
        <button class="btn btn-primary"> Envoyer </button>
    </form>
</body>
</html>