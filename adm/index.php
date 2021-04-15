<!DOCTYPE html>
<html>
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

		
	<!--menu-->
  	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B9D3EE;">
  	<div class="container">
   		<img src="../imgs/logo.png"><a class="navbar-brand h1 mb-0" href="index.php">Principal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

    	<div class="collapse navbar-collapse" id="navbarSite">
        	<ul class="navbar-nav mr-auto">
               <!-- <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="noticias.php">Avisos</a>
                </li> -->

                <!-- -->
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cadastros
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../adm/vendedores.php">Vendedores</a>
                  <a class="dropdown-item" href="comissoes.php">Comissões</a>
              
              <!--<div class="dropdown-divider"></div> -->
               
            <!--</div> -->
                </li>

             
                 <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Comprovantes
                  </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../adm/comprovantes.php">Cadastro</a>
                  <a class="dropdown-item" href="../adm/consulta_comprovantes.php">Consulta</a>
              
                  </li>
                <!--<li class="nav-item dropdown ">
        		      <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Tabelas
        		      </a>
             			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
               			<a class="dropdown-item" href="tabelaprecos.php">Preços</a>
               			<a class="dropdown-item" href="tabela_pesos.php">Pesos</a> -->
                		<!--<div class="dropdown-divider"></div> -->
               			<!--<a class="dropdown-item" href="tabeladiametros.php">Diâmetro Bobinas</a> -->
       			<!--</div> -->
      			   <!--  </li> -->
                  <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Coletas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/coletas.php">Cadastro</a>
                  <a class="dropdown-item" href="/consulta_coletas.php">Consulta</a>
              
                  </li> 
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                	</li> -->

            </ul>

              
        </div>

    </div>  

   	</nav>
   <!--fim menu-->



	</body>
</html>