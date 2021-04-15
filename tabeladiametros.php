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
    <style>
   		span{font-weight: bold;}
   	</style>   
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


<br>
<!-- cards -->

    <div class="row justify-content-sm-center">

                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT 20 GR</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 1500 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 42 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 8 cm</li>
                            <li class="list-group-item">Espessura: 3 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT 30 GR</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 750 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 34 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 8 cm</li>
                            <li class="list-group-item">Espessura: 3 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--card 3 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT FIBER</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 500 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 30 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 8 cm</li>
                            <li class="list-group-item">Espessura: 3 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!-- card 4 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT FIBER</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 100 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 18 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 3 cm</li>
                            <li class="list-group-item">Espessura: 2 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 4 -->
                     <!-- card 5 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT FIBER</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 50 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 12 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 3 cm</li>
                            <li class="list-group-item">Espessura: 2 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 5 -->
                     <!-- card 6 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT MEDIO 6</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 350 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 35 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 8 cm</li>
                            <li class="list-group-item">Espessura: 3 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 6 -->

                      <!-- card 6 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT MEDIO 8</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 250 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: Em Atualização</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 8 cm</li>
                            <li class="list-group-item">Espessura: 3 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 6 -->

                <!-- card 4 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT MEDIO 8</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 100 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: Em atualização cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 3 cm</li>
                            <li class="list-group-item">Espessura: 2 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 4 -->
                <!-- card 5 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT MEDIO 8</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 50 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: Em atualização cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 3 cm</li>
                            <li class="list-group-item">Espessura: 2 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 5 -->
                <!-- card 5 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT GROSSO 100</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 200 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 32 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 3 cm</li>
                            <li class="list-group-item">Espessura: 2 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 5 -->
                <!-- card 5 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT GROSSO 120</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 200 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 34 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 3 cm</li>
                            <li class="list-group-item">Espessura: 2 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 5 -->
                <!-- card 5 -->
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                        <!--<img class="card-img top" src="imgs/bobina1.jpg">--> 
                        <div class="card-body">
                            <h4 class="card-title">TNT GROSSO 150</h4>
                            <!--<h6 class="card-subtitle mb-2 text-muted">Ideal para sua família</h6> -->   
                            <p class="card-text"><span>Especificações Bobinas 200 Metros:</span></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Altura: 1,40 cm</li>
                            <li class="list-group-item">Diâmetro: 36 cm</li>
                            <li class="list-group-item">Material: 100% PP</li>
                        </ul>
                        <div class="card-body">
                        <p class="card-text"><span>Especificações Canudo:</span></p>
                         </div>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Diâmetro interno: 3 cm</li>
                            <li class="list-group-item">Espessura: 2 mm</li>
                            
                        </ul>
                        <div class="card-body">     
                            <a href="tabela_pesos.php" class="card-link">
                                Calcular Peso
                            </a>
                            <!--<a href="/reservarLugares.html" class="card-link">Reservar Lugares</a> -->             
                        </div>
                       
                    </div>
                </div>
                <!--fim card 5 -->

<!--fim cards -->
        </div>
    </div>

</body>
</html>