<?php session_start(); ?>
<?php require("model/function.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="stylesheet" href="css/form_cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Área administrativa</title>
</head>

<body id="container">
    <?php if (isset($_SESSION['active'])) { ?>


        <section class="menu">
            <?php include "layout/menu.php" ?>
        </section>

        <section class="content">
            <div class="div1">
                <div class="div2">
                    <h2 class="content-title"><ion-icon name="document-text"></ion-icon>Cadastro de porções</h2>
                </div>
                <div class="div3">
                    <form action="" method="post" enctype="multipart/form-data" class="w-75">
                        <div class="input-group input-group-sm mb-3 w-50">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" name="nome" placeholder="Nome do produto" class="form-control" aria-label="Sizing example input" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group input-group-sm mb-3 w-75">
                            <span class="input-group-text" id="basic-addon1">Descrição</span>
                            <input type="text" name="descricao" placeholder="Descrição" class="form-control" aria-label="Sizing example input" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group input-group-sm mb-3 w-25">
                            <span class="input-group-text" id="basic-addon1">Preço</span>
                            <span class="input-group-text" id="basic-addon1">R$</span>
                            <input type="text" name="preco" placeholder="Preço" class="form-control" aria-label="Sizing example input" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group input-group-sm mb-3 w-50">
                            <input type="file" name="imagem" class="form-control" aria-label="Sizing example input" aria-describedby="basic-addon1">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <input type="submit" name="cadastrar" class="btn btn-outline-secondary" value="Cadastrar">
                    </form>
                    <?php criarPorcao(); ?>
                    <a href="porcao.php" class="bn5"><ion-icon name="arrow-undo"></ion-icon>Voltar</a>
                </div>
            </div>
        </section>
    <?php } else {
        header("location: index.php");
    } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>