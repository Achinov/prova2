<?php 
    include('conexao.php');
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $valor= $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    $data= $_POST['data'];


    echo "<h1>Alteração de dados </h1>";
    $sql = "UPDATE fluxo_caixa SET 
                data='$data'
             tipo='$tipo',
             valor='$valor',
             historico='$historico',
             cheque='$cheque'
           
             where id=$id";
    
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
            echo "Dados alterados com sucesso!<br>";
    else
            echo "Erro ao alterar dados: $msqli_erro($con)!";


?>

