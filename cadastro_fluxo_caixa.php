<?php

include("conexao.php");

        $tipo = $_POST['tipo'];
        $valor= $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];
        $data= $_POST['data'];
   
        echo "<h1>Dados do usuário</h1>";
        echo "Data: $data<br>";
        echo "Tipo: $tipo <br>";
        echo "Valor: $valor <br>";
        echo "Historico: $historico <br>";
        echo "Cheque: $cheque <br>";




        $sql = "INSERT INTO fluxo_caixa (data, tipo, valor,
                                        historico, cheque)";


        $sql .= "VALUES ('".$data."','".$tipo."','".$valor."','".
                            $historico."','".$cheque."')";
        
        $result = mysqli_query($con,$sql);
        if($result)
                echo "Dados cadastrados com sucesso!<br>";
        else
                echo "Erro ao alterar dados: $msqli_erro($con)!";

        
        

?>
 <a href="index.php">Voltar</a>