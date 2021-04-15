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
   <br>

<!-- Page content -->
<div class="content">

	

	<h3>Tabelas de Preços - Referência Novembro 2020</h3>
	<br>

	<legend><h5>Tabela válida a partir de: 03/11/2020 </h5></legend>
	<legend><h5><span><text>Observações: </h5></text></span></legend>
	<legend><h5>Preços sujeito a alterações a qualquer momento. Valores em vermelho até o momento será para todos os estados. </h5></legend> <br>
	<legend><h5>Preços para rebobinagem: </h5></legend>
	<legend><h5>Bobinas de 50 metros: R$ 0,03 </h5></legend>
	<legend><h5>Bobinas de 100 metros: R$ 0,02 </h5></legend>
	<br>

	<legend><h5>Estados Atendidos para tabela de 7%: </h5></legend>
	<legend><h5>AC, AL, AM, AP, BA, CE, DF, ES, GO, MA, MT, MS, PA, PB, PE, PI, RN, RO, RR, SE E TO. </h5></legend>

	<br>

	<legend><h5>Estados Atendidos para tabela de 12% (GERAR): </h5></legend>
	<legend><h5>MG, PR, RS, RJ, SC E SP. </h5></legend>

	<br>

	<legend><h5 class="font-weight-bold text-danger text-left">DIFAL - (Diferencial de Alíquota de ICMS):</h5>

	<h5>Na MAT gera imposto nas seguintes condições: Pessoa Física e CNPJ Isento de inscrição estadual fora do estado de SP.</h5></legend>

	<br>


	<table class="table table-hover" border="1">
		
	<thead>	
	<tr>
		<th scope="col" class="table-primary text-center" style="width: 320px">Produtos</th> <!--coluna 1 -->
		<th scope="col" class="table-primary text-center" style="width: 250px">Simples Nacional (Gerar)</th> <!--coluna 2 -->
		<th scope="col" class="table-primary text-center" style="width: 250px">7% (MAT)</th> <!--coluna 3 -->
		<th scope="col" class="table-primary text-center" style="width: 200px">12% (MAT)</th> <!--coluna 4 -->
	</tr>
	 </thead>
	  <tbody>
	<tr>
		<th scope="row">TNT FIBER 20 PTO/BCO</th> <!--linha 1 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 0,67</td> <!--linha 1 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 0,67</td> <!--linha 1 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 0,67</td> <!--linha 1 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT FIBER 30 BCO</th> <!--linha 2 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,06</td> <!--linha 2 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,05</td> <!--linha 2 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,05</td> <!--linha 2 da coluna 4 -->
	</tr>

	
	<tr>
		<th scope="row">TNT FIBER BCO</th> <!--linha 3 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,24</td> <!--linha 3 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,23</td> <!--linha 3 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,23</td> <!--linha 3 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">NT FIBER PTO </th> <!--linha 3 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,27</td> <!--linha 3 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,26</td> <!--linha 3 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,26</td> <!--linha 3 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT FIBER COLORIDO</th> <!--linha 4 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,36</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,35</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,35</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT 40 GR PTO/BCO</th> <!--linha 4 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,41</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,40</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,40</td> <!--linha 4 da coluna 4 -->
	</tr>

	<!--<tr>
		<th scope="row">TNT 45 GR PTO/BCO</th> 
		<td class="font-weight-bold text-danger text-center">R$ 1,59</td>
		<td class="font-weight-bold text-danger text-center">R$ 1,58</td>
		<td class="font-weight-bold text-danger text-center">R$ 1,58</td>
	</tr> -->

	<tr>
		<th scope="row">TNT MEDIO 6 BCO</th> <!--linha 7 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,76</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,75</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,75</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">NT MEDIO 6 PTO</th> <!--linha 8 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,95</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,93</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,93</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT 60 GR BCO</th> <!--linha 8 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,12</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,10</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,10</td> <!--linha 4 da coluna 4 -->
	</tr>

	

	<tr>
		<th scope="row">TNT MEDIO 8 BCO</th> <!--linha 9 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,47</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,45</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,45</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">NT MEDIO 8 PTO</th> <!--linha 11 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,80</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,78</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,78</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT MEDIO 8 COLORIDO</th> <!--linha 10 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,72</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,70</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,70</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT 80 GR BCO</th> <!--linha 11 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,82</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,80</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,80</td> <!--linha 4 da coluna 4 -->
	</tr>

	
	<tr>
		<th scope="row">TNT GROSSO 100 PTO/BCO</th> <!--linha 12 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,18</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,15</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,15</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT 100 GR PTO/BCO</th> <!--linha 12 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,53</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,50</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,50</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT GROSSO 120 PTO/BCO</th> <!--linha 13 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,24</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,21</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,21</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT GROSSO 150 PTO/BCO</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,29</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,26</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,26</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">PE LAMINADO 50 GR BRANCO E AZUL</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,70</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,70</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,70</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">PE LAMINADO 60 GR BRANCO E AZUL</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,90</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,90</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,90</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">BASTÃO DE COLA FINA E GROSSA</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">NÃO VENDE</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 17,92</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 19,17</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">EVA LISO 40X47</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 6,06</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 6,23</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 6,67</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">EVA LISO 40X60</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 7,76</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 7,99</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 8,54</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">EVA GLITTER 40X60</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 10,35</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 10.65</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 11,39</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT METALIZADO</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,21</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,74</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,13</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TNT ESTAMPADO</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">NÃO VENDE</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,13</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,30</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">TOALHAS DE MESA</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">NÃO VENDE</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,44</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,89</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<th scope="row">CAPACHO PVC (METROS LINEAR)</th> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">NÃO VENDE</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 75,21</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 75,21</td> <!--linha 4 da coluna 4 -->
	</tr>
	</tbody>



</table>

<br>



<table border="1">
	<legend>Tabela de Preços - Sacos de Presente</legend>

	<tr>
		<td class="table-primary"align="center"><span>Produtos</span></td> <!--coluna 1 -->
		<td class="table-primary"><span>Simples Nacional (Gerar)</span></td> <!--coluna 2 -->
		<td class="table-primary" width="100" align="center"><span>7% (MAT)</span></td> <!--coluna 3 -->
		<td class="table-primary" width="100" align="center"><span>12% (MAT)</span></td> <!--coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">SACO DE PRESENTE 11 X 22 </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,03</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,03</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,03</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">SACO DE PRESENTE 15 X 16 </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,09</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,09</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,09</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">SACO DE PRESENTE 20 X 30 </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,02</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,02</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,02</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">SACO DE PRESENTE 25 X 36 </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,17</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,17</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 5,17</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">SACO DE PRESENTE 30 X 45 </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 6,87</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 6,87</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 6,87</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">SACO DE PRESENTE 35 X 54 </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 7,87</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 7,87</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 7,87</td> <!--linha 4 da coluna 4 -->
	</tr>

</table>

<br>

<table border="1">
	<legend>Tabela de Preços - Fitas</legend>

	<tr>
		<td class="table-primary "align="center">Produtos</td> <!--coluna 1 -->
		<td class="table-primary">Simples Nacional (Gerar)</td> <!--coluna 2 -->
		<td class="table-primary" width="100" align="center">7% (MAT)</td> <!--coluna 3 -->
		<td class="table-primary" width="100" align="center">12% (MAT)</td> <!--coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">FITA TNT 70 GRAMAS 20MM X 50 MTS </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,79</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,79</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 1,79</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">FITA TNT 70 GRAMAS 25MM X 50 MTS</td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,20</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,20</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,20</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">FITA TNT 70 GRAMAS 30MM X 50 MTS </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,63</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,63</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 2,63</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">FITA TNT 70 GRAMAS 40MM X 50 MTS </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,55</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,55</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 3,55</td> <!--linha 4 da coluna 4 -->
	</tr>

	<tr>
		<td class="font-weight-bold">FITA TNT 70 GRAMAS 50MM X 50 MTS </td> <!--linha 14 da coluna 1 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,31</td> <!--linha 4 da coluna 2 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,31</td> <!--linha 4 da coluna 3 -->
		<td class="font-weight-bold text-danger text-center">R$ 4,31</td> <!--linha 4 da coluna 4 -->
	</tr>

	
</table>

<br>


</div>

</body>
</html>