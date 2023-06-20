<?php 
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "select *from fluxo_caixa where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de fluxo de caixa</h1>
    <form action="altera_fluxo_caixa_exe.php" method="POST"
    enctype="multipart/form-data" >

        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" placeholder="ano/mês/dia">
            
        </div>
    
        <div>
            <label>Tipo:</label>
            <input type="radio" name="tipo" id="entrada" value="entrada">
            <label for="entrada">entrada</label>
            <input type="radio" name="tipo" id="saida" value="saida">
            <label for="saida">saida</label>
        </div>

        

        <div>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor">
        </div>

        <div>
            <label for="historico">Histórico:</label>
            <input type="text" name="historico" id="historico">
        </div>

        <div>
            <label for="cheque">Cheque:</label>
       
        <select name="cheque" id="cheque">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>

        </div>


        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>
    
</body>
</html>