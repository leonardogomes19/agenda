<div align= "center">
<header>
    <h3>Excluir Contato</h3>
</header>
<?php
$idcontatos = mysqli_real_escape_string($conexao,$_GET["idcontatos"]);
$sql = "DELETE FROM tblcontatos WHERE idcontatos = '{$idcontatos}'";

mysqli_query($conexao,$sql) or die("Erro ao excluir o registro. " . mysqli_error($conexao));
echo "Registro excluido com sucesso!";
?>
</div>