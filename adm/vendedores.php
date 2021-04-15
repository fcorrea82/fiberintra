<!DOCTYPE html>
<html>
<head>
	<title>Intranet - FIBERTNT</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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

                <!-- -->


                <li class="nav-item">
                    <a class="nav-link text-dark font-weight-bold" href="#comprovantes.php">Consulta Comprovantes</a>
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
                    <li class="nav-item ">
                        <a class="nav-link text-dark font-weight-bold" href="../adm/coletas.php">Coletas Realizadas</a>
                    </li> 
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Contatos</a>
                    </li> -->

            </ul>

              
        </div>

    </div>  

    </nav>
   <!--fim menu-->

<!-- Formulary -->
<div class="container">
  <div class="row">
      <div class="col-md-12 col-10 text-center my-md-4 mb-4 mt-2 ml-4">
          <h3 class="display-5"><i class="fas fa-envelope text-primary col-12 col-md-1" aria-hidden="true"></i>
                    Cadastro de Vendedores / Representantes
          </h3>
      </div>
  </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome" class="font-weight-bold">Nome:</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite aqui seu nome">
                        </div>
                        <div class="form-group col-sm-6">
                                <label for="inputSobrenome"class="font-weight-bold">Telefone:</label>
                                <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite aqui telefone fixo">
                        </div>
                        <div class="form-group col-sm-6">
                                <label for="inputSobrenome"class="font-weight-bold">Celular:</label>
                                <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite aqui o celular">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-12">
                                <label for="inputEnd"class="font-weight-bold">E-mail</label>
                                <input type="text" class="form-control" id="inputEnd" placeholder="Digite aqui seu e-mail">
    
                        </div>
                    </div>    

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                                <label for="inputCidade"class="font-weight-bold">Sua cidade</label>
                                <input type="text" class="form-control" id="inputCidade" placeholder="Digite aqui sua cidade">
                        </div>
                        <div class="form-group col-sm-4">
                                <label for="inputEst"class="font-weight-bold">Seu estado</label>
                                <select id="inputEst" class="form-control">
                                    <option selected>Selecione...</option>
                                    <option>AC</option>
                                    <option>AL</option>
                                    <option>AM</option>
                                    <option>AP</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MG</option>
                                    <option>MT</option>
                                    <option>MS</option>
                                    <option>PA</option>
                                    <option>PB</option>
                                    <option>PE</option>
                                    <option>PI</option>
                                    <option>PR</option>
                                    <option>RJ</option>
                                    <option>RO</option>
                                    <option>RN</option>
                                    <option>RS</option>
                                    <option>SC</option>
                                    <option>SE</option>
                                    <option>SP</option>
                                    <option>TO</option>
                                </select>
                        </div>

                       
                    </div>
                    
                   

                      <div class="form-row">
                        <div class="form-group col-sm-12">
                                <label for="inputEnd"class="font-weight-bold">Ramo de atuação</label>
                                <input type="text" class="form-control" id="inputEnd" placeholder="Digite aqui seu e-mail">
    
                        </div>
                    </div> 

                    <div class="form-row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <!--<a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
                            title="Pintou alguma dúvida?!" data-content="Fale conosco: help@rotaryViagens.com">Ajuda</a> -->
                        </div>
                    </div>

                </div>

            </form>

        </div>
</div>



</body>
</html>