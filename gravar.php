<?php 

include_once "conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$ponto_da_carne = $_POST["ponto_carne"];
$pao = $_POST["pao"];
$queijo = $_POST["queijo"];
$observacoes = $_POST["observacoes"];

$sql = "INSERT INTO pedidos VALUES ('null','$nome','$telefone','$ponto_da_carne','$pao','$queijo','$observacoes')";

$result = mysqli_query($con,$sql);

if ($result) {
	echo "Dados gravados com sucesso";
}

else{
	echo "Erro ao gravar dados";
}
mysqli_close($con);

 ?>
