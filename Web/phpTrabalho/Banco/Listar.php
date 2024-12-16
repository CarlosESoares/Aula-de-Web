<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse; /* Faz com que as bordas se juntem */
        }
        th, td {
            border: 1px solid black; /* Borda preta */
            text-align: center; /* Centraliza o texto */
            padding: 10px; /* Espaço interno nas células */
        }
        th {
            background-color: #f2f2f2; /* Cor de fundo das células de cabeçalho */
        }
        td {
            height: 50px; /* Altura fixa para as células */
        }
    </style>
</head>
<body>
<?php
    include_once("Database.php");
    include_once("PessoaDAO");

    $listaPessoa = getUsuarios();
    
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        for($i=0; $i <count($listaPessoa); $i++){
            ?>
            <tr>
                <td><a href="editPessoa.php?pessoa_id=<?php echo $listaPessoa[$i]["idusuario"] ?>"><?php echo $listaPessoa[$i]["idusuario"]?></a></td>
                <td><?php echo $listaPessoa[$i]["nome"] ?></td>
                <td><?php echo $listaPessoa[$i]["email"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>
