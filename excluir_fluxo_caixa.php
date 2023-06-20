<?php 
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "delete from fluxo_caixa where id=$id";
    $result = mysqli_query($con,$sql);

    if($result)
    echo "Dados deletados com sucesso!<br>";
else
    echo "Erro ao deletar dados: $msqli_erro($con)!";



?>
<a href="index.php">Voltar</a>