<?php
	include_once("conexao.php");
	//$id_coletas=$_POST['id_coletas'];
	$n_pedido=$_POST['n_pedido'];
	$n_nf=$_POST['n_nf'];
	$data_coleta=$_POST['data_coleta'];
	$status_coleta=$_POST['status_coleta'];
	$arquivo1 = $_FILES['arquivo1']['name'];
	
	//echo "Numero do ID: $id_coletas";
	//echo "Numero do pedido: $n_pedido <br>";
	//echo "NF: $n_nf <br>";
	//echo "Imagem nota coletada: $arquivo1 <br>";
	
	
	//Salvar no banco de dados
	$result_produto = "INSERT INTO coletas (n_pedido, n_nf, data_coleta, status_coleta, arquivo1) VALUES ('$n_pedido','$n_nf', '$data_coleta', '$status_coleta', '$arquivo1')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id_pedido = mysqli_insert_id($conn);
	//echo "Ultimo Id Inserido: $ultimo_id_pedido <br>";
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'coletas/nf/2020/novembro/'.$n_pedido.'/';
	//$_UP['pasta'] = 'coletas/nf/2020/teste/'.$n_pedido.'/';
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	//Verificar se é possive mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['arquivo1']['tmp_name'],$_UP['pasta'].$arquivo1)){
		
	}else{
		echo "Arquivo já inserido!!!";
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
	  <h4 class="alert-heading">Coleta enviada com sucesso!!!</h4>
	 
	  <hr>
	  <!--<p class="mb-1"><h5>A confirmação do pagamento irá ocorrer em até 48 horas.</p></h5> -->
	  
	  <a href="coletas.php" class="text-white btn btn-dark btn-md font-weight-bold">Voltar</a>
	</div>

	
	<!--<input class="btn btn-primary" type="button" value="Voltar" onClick="history.go(-1)"> -->

</body>
</html>

