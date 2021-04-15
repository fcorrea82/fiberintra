<?php
	include_once("conexao.php");
	$id_pedido=$_POST['id_pedido'];
	$nome=$_POST['nome'];
	$nome_imagem1 = $_FILES['arquivo1']['name'];
	$nome_imagem2 = $_FILES['arquivo2']['name'];
	echo "Numero do pedido: $id_pedido <br>";
	echo "Nome do cliente: $nome <br>";
	echo "Imagem do orçamento pedido: $nome_imagem1 <br>";
	echo "Imagem do comprovante: $nome_imagem2 <br>";
	
	//Salvar no banco de dados
	$result_produto = "INSERT INTO produtos (id_pedido, nome, imagem1, imagem2) VALUES ('$id_pedido','$nome', '$nome_imagem1', '$nome_imagem2')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id_pedido = mysqli_insert_id($conn);
	//echo "Ultimo Id Inserido: $ultimo_id_pedido <br>";
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'imagens/produtos/'.$id_pedido.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	//Verificar se é possive mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['arquivo1']['tmp_name'],$_UP['pasta'].$nome_imagem1)){
		
	}if(move_uploaded_file($_FILES['arquivo2']['tmp_name'],$_UP['pasta'].$nome_imagem2)){
		
	}
	echo "Imagens salvas com sucesso!<br>";


?>

<li><a href="documentos.php">Voltar</a></li>