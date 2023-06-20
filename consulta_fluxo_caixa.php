
<?php
        $tipo = $_POST['tipo'];
        if ($tipo == 'entrada') {
            $sql = "SELECT SUM(valor) AS valor FROM fluxo_caixa WHERE tipo = 'entrada'";
        } else if ($tipo == 'saida') {
            $sql = "SELECT SUM(valor) AS valor FROM fluxo_caixa WHERE tipo = 'saida'";
        } else if ($tipo == 'saldo') {
            $sql = "SELECT SUM(CASE WHEN tipo = 'entrada' THEN valor ELSE 0 END) - SUM(CASE WHEN tipo = 'saida' THEN valor ELSE 0 END) AS valor FROM fluxo_caixa";
        }
        include('conexao.php');

        $result = mysqli_query($con, $sql);

        if ($result) {
            $row = mysqli_fetch_array($result);
            $valor = $row['valor'];

            echo "Valor: $valor";
        } else {
            echo "Erro na consulta: " . mysqli_error($con);
        }

?>
    <br>
     <a href="consulta_fluxo_caixa.html">Voltar</a>