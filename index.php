<?php
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <title>Agenda de Contatos</title>
</head>
<body>
    <header align= "center">
    <h1>Agenda de Contatos</h1>
    <nav>
    <a href="index.php?menuop=cadastrarContato">Home</a>
    <a href="index.php?menuop=agendaContatos">Contatos</a>
    </nav>
    </header>
    <hr>

    <?php
    
        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"cadastrarProduto";
        switch ($menuop) {
            case 'cadastrarContato';
                include("pagina/cadastrarContato.php");
                break;
            case 'agendaContatos';
                include("pagina/agendaContatos.php");
                break;
            case 'contatoCadastrado';
                include("pagina/contatoCadastrado.php");
                break;
            case 'editarContato';
                include("pagina/editarContato.php");
                break;
            case 'atualizarContato';
                include("pagina/atualizarContato.php");
                break;
            case 'excluirContato';
                include("pagina/excluirContato.php");
                break;
          
        }
    ?>

</body>
</html>