<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área administrativa</title>
</head>
<body>
    <?php if (isset($_SESSION['active'])) {?>
    <h2>Bem vindo <?= $_SESSION['nome'] ?></h2>


    <?php } else {
        header("location: index.php");
    } ?>
</body>
</html>