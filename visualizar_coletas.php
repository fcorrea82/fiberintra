<?php
if(isset($_POST["coletas_id"])){
	include_once "conexao.php";
	
	$resultado = '';
	
	$query_user = "SELECT * FROM coletas WHERE id = '" . $_POST["coletas_id"] . "' LIMIT 1";
	$resultado_user = mysqli_query($conn, $query_user);
	$row_user = mysqli_fetch_assoc($resultado_user);
	
	$resultado .= '<dl class="row">';
	
	$resultado .= '<dt class="col-sm-3">ID</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['id'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">Nº Pedido</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['n_pedido'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">NF</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['n_nf'].'</dd>';

	$resultado .= '<dt class="col-sm-3">Data:</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['data_coleta'].'</dd>';

	$resultado .= '<dt class="col-sm-3">Status:</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['status_coleta'].'</dd>';

	$resultado .= '<dt class="col-sm-3">Arquivo:</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['arquivo1'].' - '.'<a href="http://192.168.1.105/coletas/nf/2020/" target="_blank"> Baixar </a>'.'</dd>';

		
	$resultado .= '</dl>';
	
	echo $resultado;
}