<!DOCTYPE HTML>
<html lang="pt-br">  
 	<head>
		<meta charset="utf-8">
        <title>Intranet - FIBERTNT</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	 	 
	</head>
    
    <body>

    		<!--menu-->
  	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B9D3EE;">
  	<div class="container">
   		<img src="/imgs/logo.png"><a class="navbar-brand h1 mb-0" href="index.php">Principal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

    	<div class="collapse navbar-collapse" id="navbarSite">
        	<ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="noticias.php">Avisos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="#comprovantes.php">Envio de Comprovantes</a>
                </li>
                <li class="nav-item dropdown ">
        		<a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tabelas
        		</a>
       			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
         			<a class="dropdown-item" href="tabelaprecos.php">Preços</a>
         			<a class="dropdown-item" href="tabela_pesos.php">Pesos</a>
          		<!--<div class="dropdown-divider"></div> -->
         			<a class="dropdown-item" href="tabeladiametros.php">Diâmetro Bobinas</a>
       			<!--</div> -->
      			</li>
                    <li class="nav-item ">
                        <a class="nav-link text-dark font-weight-bold" href="consulta_coletas.php">Coletas Realizadas</a>
                    </li> 
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                	</li> -->

            </ul>

              
        </div>

    </div>  

   	</nav>
   <!--fim menu-->
<br>
		<div class="container">
			<h2>Coletas Realizadas</h2>
                        <span id="conteudo"></span><br><br><br>
		</div>
		
		<div id="visulUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="visulUsuarioModalLabel">Detalhes da Coleta</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<span id="visul_usuario"></span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			var qnt_result_pg = 5; //quantidade de registro por página
			var pagina = 1; //página inicial
			$(document).ready(function () {
				listar_usuario(pagina, qnt_result_pg); //Chamar a função para listar os registros
			});
			
			function listar_usuario(pagina, qnt_result_pg){
				var dados = {
					pagina: pagina,
					qnt_result_pg: qnt_result_pg
				}
				$.post('listar_coletas.php', dados , function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			}
			
			$(document).ready(function(){
				$(document).on('click','.view_data', function(){
					var coletas_id = $(this).attr("id");
					//alert(user_id);
					//Verificar se há valor na variável "user_id".
					if(coletas_id !== ''){
						var dados = {
							coletas_id: coletas_id
						};
						$.post('visualizar_coletas.php', dados, function(retorna){
							//Carregar o conteúdo para o usuário
							$("#visul_usuario").html(retorna);
							$('#visulUsuarioModal').modal('show'); 
						});
					}
				});
			});
		</script>
    </body>
</html>
