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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B9D3EE;">
    <div class="container">
      <img src="imgs/logo.png"><a class="navbar-brand h1 mb-0" href="index.php">Principal</a>
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
                        <a class="nav-link text-dark font-weight-bold" href="#">Coletas Realizadas</a>
                    </li> 
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                  </li> -->

            </ul>

              
        </div>

    </div>  

    </nav>
   <!--fim menu-->

<!-- Page content -->
<div class="content">
  
  <div class="container theme-showcase" role="main">
         
      <div class="page-header">
        
        <h2>Produtos</h2>
        
      </div>

            <form method="POST" action="processa.php" enctype="multipart/form-data">
              
              <div class="row">
                <div >  
                 
                <div >
                  <label class="col-sm-2 control-label">Produto: </label>
                  <input type="text" name="produto"><br><br>
                </div>

                

                <div > 
                  <label class="col-sm-2 control-label">Estoque Mínimo: </label>
                  <input type="text" name="nf"><br><br>
                </div>

                <div > 
                  <label class="col-sm-2 control-label">Unidade de Medida: </label>
                  <input type="text" name="quantidade"><br><br>
                </div>

              

                  

              </div>

               <input class="btn btn-primary" type="submit" value="Cadastrar">
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