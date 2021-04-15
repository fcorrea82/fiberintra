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

<!-- Page content -->
<div class="content">
  
  <div class="container theme-showcase" role="main">
         
      <div class="page-header">
        
        <h2>Tabela de Pesos - TNT Lisos</h2>
        
      </div>

            <form method="POST" action="processapeso.php" enctype="multipart/form-data">
              
              <div class="row">
          
                 
                <div class="col-sm-3">
                  <label class="font-weight-bold">Gramatura: </label> 
                  <select class="form-control" name="gramatura" id="gramatura">
                    <option value="0.008">08 GR</option>
                    <option value="0.012">12 GR</option>
                    <option value="0.015">15 GR</option>
                    <option value="0.020">20 GR</option>
                    <option value="0.025">25 GR</option>
                    <option value="0.030">30 GR</option>
                    <option value="0.035">35 GR</option>
                    <option value="0.040">40 GR</option>
                    <option value="0.045">45 GR</option>
                    <option value="0.050">50 GR</option>
                    <option value="0.060">60 GR</option>
                    <option value="0.065">65 GR</option>
                    <option value="0.070">70 GR</option>
                    <option value="0.080">80 GR</option>
                    <option value="0.090">90 GR</option>
                    <option value="0.100">100 GR</option>
                    <option value="0.120">120 GR</option>
                    <option value="0.150">150 GR</option>
                  </select>
                </div>
                <br>

                <div class="col-sm-3">
                  <label class="font-weight-bold">Altura: </label> 
                  <select class="form-control" name="altura" id="altura">
                    <option value="1.4">1,40 LG</option>
                    <option value="1.37">1,37 LG</option>
                    <option value="1.6">1,60 LG</option>
                    <option value="2.0">2,00 LG</option>
                    <option value="2.10">2,10 LG</option>
                  </select>
                </div>

              <br>

               <div class="col-sm-3">
                  <label class="font-weight-bold" >Tipo de Bobina: </label> 
                  <select class="form-control" name="bobinas" id="bobinas">
                    <option value="50">25 Metros</option>
                    <option value="50">50 Metros</option>
                    <option value="100">100 Metros</option>
                    <option value="200">200 Metros</option>
                    <option value="250">250 Metros</option>
                    <option value="350">350 Metros</option>
                    <option value="500">500 Metros</option>
                    <option value="750">750 Metros</option>
                    <option value="1000">1000 Metros</option>
                    <option value="1500">1500 Metros</option>
                    <option value="2000">2000 Metros </option>
                    
                  </select>
                </div>

                <br>

               <div class="col-sm-3">  
                  <label class="col-sm-4 control-label font-weight-bold">Quantidade:</label>
                  <input type="text" name="quantidade" required name="quantidade"><br><br>
                </div>

          


              </div>
              <br>

               <!--<input type="submit" value="Gerar"> -->

               <button type="submit" class="btn btn-primary font-weight-bold btn-md">Gerar</button>
            </form>

               <br>

           
      
    </div>
    <br>

   <div class="container theme-showcase" role="main">
         
      <div class="page-header">
        
       <!-- <h2>Diâmetros das Bobinas</h2> -->

        <br>


        
      </div>


  </div>


</div>





</body>
</html>