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

		<!--menu
		<div class="sidebar">
			<a class="active" href="index.php">Principal</a>
			<a href="produtos.php">Produtos</a>
			<a href="fornecedores.php">Fornecedores</a>
			<a href="vendedores.php">Vendedores</a>
		  	<a href="estoque_ent.php">Estoque Entradas</a>	    
		  	<a href="estoque_said.php">Estoque Saídas</a>	    
	 		<a href="consulta.php">Consulta</a>
	 		
	  		<a href="coletas.php">Coletas</a>
		</div>-->

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
                    <a class="nav-link text-dark font-weight-bold" href="comprovantes.php">Envio de Comprovantes</a>
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
                        <a class="nav-link text-dark font-weight-bold" href="consulta_coletas.php">Coletas</a>
                    </li> 

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catálogos
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://192.168.1.105/catalogos/Catalogo_TNT.pdf" target="_blank">FiberTNT</a>
              <a class="dropdown-item" href="http://192.168.1.105/catalogos/Catalogo_Capacho.pdf" target="_blank">Capacho</a>
              <a class="dropdown-item" href="http://192.168.1.105/catalogos/Catalogo_Toalhas_Termicas.pdf" target="_blank">Toalhas Térmicas</a>
            <!--</div> -->
            </li>

            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-dark font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ficha Técnica
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_20.pdf" target="_blank">TNT 20 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_30.pdf" target="_blank">TNT 30 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_35.pdf" target="_blank">TNT 35 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_40.pdf" target="_blank">TNT 40 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_50.pdf" target="_blank">TNT 50 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_60.pdf" target="_blank">TNT 60 GR</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/TNT_80.pdf" target="_blank">TNT 80 GR</a>
             
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_50_Branco.pdf" target="_blank">PE Laminado 50 Branco</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_50_Azul.pdf" target="_blank">PE Laminado 50 Azul</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_60_Branco.pdf" target="_blank">PE Laminado 60 Branco</a>
              <a class="dropdown-item" href="http://192.168.1.105/laudos/PE_Laminado_60_Azul.pdf" target="_blank">PE Laminado 60 Azul</a>  

            
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark font-weight-bold" href="cartas.php">Cartas de Cessão</a>
             </li>
                

            </ul>

              
        </div>

    </div>  

   	</nav>
   <!--fim menu-->

   <div id="carouselSite" class="carousel slide d-md-block d-none" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li> 
        </ol>


        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="./imgs/slide-04.png" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                    <h1>A nossa Intranet</h1> 
                   <!-- <p class="lead">A cidade conta com um belo parque municipal, o qual contém um cinema movido á energia renovável, um teatro, pista de Kart e praça de alimentação.</p> -->
                </div>
            </div>

            <div class="carousel-item">
                <img src="./imgs/slide-07.png" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                      <!--  <h1>Conheça São Lourenço-MG</h1>
                        <p class="lead">A cidade conta com um belo parque das águas, fazendas, um conglomerado de hotéis e grandes plantações de café nos arredores.</p> -->
                    </div>
            </div> 

           <div class="carousel-item">
                <img src="./imgs/slide-06.png" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                       

                        <h3><a href="https://coronavirus.saude.gov.br/" target="_blank" class="text-white btn btn-primary btn-lg">Clique aqui!!! </a></h3> 

                        <!--<p class="lead">A cidade conta com belas paisagens naturais, cervejarias artesanais e opções de estadia em hotéis fazenda.</p> -->
                    </div>
            </div>    

        </div>

        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>

        
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>

    </div>	


	</body>
</html>