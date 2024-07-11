<?php session_start(); ?>
<?php require("controller/function.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/usuario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Área administrativa</title>
</head>

<body id="container">
    <?php if (isset($_SESSION['active'])) { ?>
        <?php $bebidas = dadosDasTabelas("bebida", "nome_bebida"); ?>

        <section class="menu">
            <?php include "layout/menu.php" ?>
        </section>

        <section class="content">
            <div class="div1">
                <div class="div2 back-bebida">
                    <h2 class="content-title"><ion-icon name="document-text"></ion-icon>Cadastre, exclua ou altere uma bebida</h2>
                </div>
                <div class="div3">
                    <div class="content-link-cadastro"><a href="criar_usuario.php" class="bn5">Cadastrar usuário</a></div>
                    <div class="caixa-tabela">
                        <table class="tabela table table-bordered table-striped table-hover">
                            <thead class="tabela-cabecalho">
                                <tr>
                                    <th>Foto</th>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody class="tabela-body">
                                <?php foreach ($bebidas as $bebida) : ?>
                                    <tr class="tabela-body-coluna">
                                        <?php if (!empty($bebida['foto_bebida'])) { ?>
                                            <td><img width="80px" src="controller/uploads/<?php echo $bebida['foto_bebida']; ?>" alt=""></td>
                                        <?php } else { ?>
                                            <td><img width="px" src="css/img/avtar.png" alt=""></td>
                                        <?php } ?>
                                        <td><?php echo $bebida['id'] ?></td>
                                        <td><?php echo $bebida['nome_bebida'] ?></td>
                                        <td><?php echo $bebida['descricao_bebida'] ?></td>
                                        <td><?php echo "R$ " . $bebida['preco_bebida'] ?></td>
                                        <td class="tabela-body-editar">
                                            <a href="#" target="_blank" class="tabela-body-coluna__update"><ion-icon name="sync-circle"></ion-icon></a>
                                            <a href="#" target="_blank" class="tabela-body-coluna__delete"><ion-icon name="trash"></ion-icon></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
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