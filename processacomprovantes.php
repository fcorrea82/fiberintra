<?php
	include_once("conexao.php");
	$n_pedido=$_POST['n_pedido'];
	$arquivo3 = $_FILES['arquivo3']['name'];
	$empresa=$_POST['empresa'];
	$status_deposito=$_POST['status_deposito'];
	$arquivo1 = $_FILES['arquivo1']['name'];
	$arquivo2 = $_FILES['arquivo2']['name'];
	$observacao=$_POST['observacao'];
	
	//echo "NF: $nf <br>";
	//echo "Numero do pedido: $id_pedido <br>";
	//echo "Imagem nota coletada: $nome_imagem1 <br>";
	//echo "Imagem do comprovante: $nome_imagem2 <br>";
	//echo "Observacao: $observacao <br>";
	
	//Salvar no banco de dados
	$result_produto = "INSERT INTO comprovantes (n_pedido, arquivo3, empresa, status_deposito, arquivo1, arquivo2, observacao) VALUES ('$n_pedido','$arquivo3','$empresa','$status_deposito','$arquivo1','$arquivo2','$observacao')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id_pedido = mysqli_insert_id($conn);
	//echo "Ultimo Id Inserido: $ultimo_id_pedido <br>";
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'comprovantes/pedidos/'.$n_pedido.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	//Verificar se é possive mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['arquivo3']['tmp_name'],$_UP['pasta'].$arquivo3)){
		
	}
	if(move_uploaded_file($_FILES['arquivo1']['tmp_name'],$_UP['pasta'].$arquivo1)){
		
	}if(move_uploaded_file($_FILES['arquivo2']['tmp_name'],$_UP['pasta'].$arquivo2)){
		
	}
	//echo "Imagens salvas com sucesso!<br>";


?>

<!DOCTYPE html>
<html>
<head>
	<head>
		<title>Intranet - FIBERTNT</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	 	<link href="../css/style.css" rel="stylesheet">
	 	 
	</head>
<body>

	<div class="alert alert-success" role="alert">
	  <h4 class="alert-heading">Comprovante enviado com sucesso!!!</h4>
	 
	  <hr>
	  <p class="mb-1"><h5>A confirmação do pagamento irá ocorrer em até 2 dias úteis.</p></h5>
	<a href="comprovantes.php" class="text-white btn btn-dark btn-md font-weight-bold">Voltar</a>
	</div>

	
	<!--<input class="btn btn-primary" type="button" value="Voltar" onClick="history.go(-1)"> -->

</body>
</html>

