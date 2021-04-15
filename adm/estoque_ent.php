<!DOCTYPE html>
<html>
<head>
	<title>Intranet - FIBERTNT</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="css/style.css" rel="stylesheet">

	

  <!--BOOTSTRAP / JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/usuario_ajax.js"></script>

    <!--jQuery-->
    <script type="text/javascript" src="js/ jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/jquery.filer.min.js"></script>
</head>
<body>
	<!--menu-->
  <div class="sidebar">
  <a class="active" href="index.php">Principal</a>
    <!--<a href="produtos.php">Produtos</a>-->
    <!--<a href="fornecedores.php">Fornecedores</a>-->
    <!--<a href="vendedores.php">Vendedores</a>-->  
      <!--<a href="estoque_ent.php">Estoque Entradas</a>-->     
      <!--<a href="estoque_said.php">Estoque Saídas</a>-->      
    <!--<a href="consulta.php">Consulta</a>-->
    <a href="tabelaprecos.php">Tabela de Preços</a>
      <a href="tabela_pesos.php">Tabela de Pesos</a>
      <!--<a href="#diametros.php">Diâmetros das Bobinas</a>-->
      <!--<a href="coletas.php">Coletas</a>-->
  </div>

<!-- Page content -->
<div class="content">
  
  <div class="container theme-showcase" role="main">
         
      <div class="page-header">
        
        <h2>Estoque Entrada</h2>
        
      </div>

            <form method="POST" action="processa.php" enctype="multipart/form-data">
              
              <div class="row">
                <div >  
                  <label class="col-sm-2 control-label">Data da compra:</label>
                  <input type="text" name="data_compra"><br><br>
                </div>

                <div >
                  <label class="col-sm-2 control-label">Produto: </label>
                  <input type="text" name="produto"><br><br>
                </div>

                 <div > 
                   <label class="col-sm-2 control-label">Fornecedor: </label>
                   <input type="text" name="fornecedor"><br><br>
                </div>

                <div > 
                  <label class="col-sm-2 control-label">NF: </label>
                  <input type="text" name="nf"><br><br>
                </div>

                <div > 
                  <label class="col-sm-2 control-label">Quantidade: </label>
                  <input type="text" name="quantidade"><br><br>
                </div>

                <div > 
                  <label class="col-sm-2 control-label">Custo Unitário: </label>
                  <input type="text" name="custo_unitario"><br><br>
                </div>

                  

              </div>

               <input type="submit" value="Cadastrar">
            </form>

              
            
      
    </div>
    <br>


   <div class="container theme-showcase" role="main">
         
      <div class="page-header">
        
        <h2>Lista</h2>
        
      </div>


  </div>
</div>


</div>





</body>
</html>