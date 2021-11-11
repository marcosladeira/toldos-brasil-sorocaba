<!doctype html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8"> <!-- tag para o navegador identificar vários caracteres diferentes -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">  
<link rel="stylesheet" href="https://getbootstrap.com.br/docs/3.3/components/"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="assets/style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
  crossorigin="anonymous" />
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
crossorigin="anonymous"></script>
<title>TOLDOS BRASIL SOROCABA - TOLDO ARTICULADO ITALIANO, CORTINA GEÓRGIA, TOLDO CURVO, TOLDO FIXO, TELHA TERMOACÚSTICA, TOLDOS E COBERTURA, TOLDOS ARTICULADOS, TOLDO RETO, TOLDO PERGOLADO, TOLDO ABRE E FECHA, CORTINA TOLDO MANUAL E AUTOMATIZADA, COBERTURA DE POLICARBONATO ALVEOLAR, COBERTURA DE POLICARBONATO COMPACTO, TOLDO POLICARBONATO, TOLDOS EM LONA, EM SOROCABA</title>
    </head>
    <body>
    <?php
    include "reutilizaveis/cabecalho.html";
    if (isset($_GET['r'])) {
        echo ("<script>alert('" . $_GET['r'] . "');</script>");
    }
    ?>
    <script>
        document.getElementById("home").classList.add("active")
    </script>
            <div class="jumbotron text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4">
              <h5>TOLDOS BRASIL SOROCABA</h5>
            <div></br>
              <h1><b>SOLUÇÕES<font color="#A5792E"> EM TOLDOS</font><br></b></h1> <h2><b>COMÉRCIO E RESIDÊNCIA</b></h2>
              </div>
                <div class="row">
                  <div class="col-sm-12 text-center p-5">
                    <a href="contato.php">
                      <button class="btn btn-warning"><font color="#FFFFFF">ORÇAMENTO</font></button>
                    </a>
                  </div>
                </div>
                </div>
               
            </div>   
            
            <div class="texto text-center p-4">
              <h3><font color="#2C2C2C"><b>A Toldos Brasil</b></font></h3>
              <hr>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">   
                </br></br>
                <font color="#2C2C2C"> <h5><b>Conheça nossa empresa</b></h5></font></br>
                  <font color="#2C2C2C"><h6>A Toldos Brasil Sorocaba é uma empresa especializada na fabricação e instalação de uma<br> ampla linha de toldos.<br>

                    Trabalhamos com toldos e coberturas desde os mais simples e convencionais modelos como<br> retráteis, lona e reto até os mais sofisticados como cortinas e coberturas retráteis, pergolados,<br> cortinas manuais e motorizadas, entre outros.<br>
                    
                    Todos os projetos são analisados e desenvolvidos de acordo com a estrutura do local a ser<br> instalado e a necessidade do cliente,para uma ampla proteção solar, chuva e vento.<br>
                    
                    Nossa linha de produtos tem como objetivo oferecer aos nossos clientes o que há de mais novo,<br> moderno e tecnológico que existe no mercado atualmente.<br>
                    
                    Confira todos os produtos disponíveis e entre em contato para solicitar uma visita técnica, sem<br> compromisso, de um de nossos representantes.</h6></font>
                    <a href="sobre.php">
                    <button class="btn btn-warning"><font color="#FFFFFF">Saiba Mais</font></button>
  </a>
                  </br>
                </div>
                
                <div class="col-lg-4 ml-auto">
                </br></br>
                <div class="container">
                  <div class="row">
                      <div class="col-lg-7 mx-auto">
        
                          <div class="card-body p-0">
                            
                            <img src="assets/image/logo-nova.png" class="img-fluid" alt="">
                          </div> 
                        
                      </div>
                  </div>
              </div>
              </div>
          
            </div>          
            <div class="texto text-center p-4" id="orçamento"></br></br></br></br>
              <h3><font color="#2C2C2C"><b>Nossos Produtos</b></font></h3>
              <hr>
            </div>

            <div class="container">
  <div class="row no-gutters text-center">
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/toldo+articulado+italiano.jpg);">
                <a class="nostyle" href="toldoArticuladoItaliano.php" >
              </br></br>TOLDO ARTICULADO<br> ITALIANO
              </a>
            </div>
          <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/CORTINA-GEORGIA.jpg);">
                <a class="nostyle" href="cortinaGeorgia.php" >
              </br></br></br>CORTINA GEÓRGIA
              </a>
            </div>
          <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/full-0d1627f2e229a826420ad1572fbe0daa.jpg);">
              <a class="nostyle" href="toldoCurvo.php" >
              </br></br></br>TOLDO CURVO
              </a>
            </div>  
  
           <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDO-FIXO+\(5\).jpg);">
                <a class="nostyle" href="toldoFixo.php" >
              </br></br></br>TOLDO FIXO
            </div>   
          </a>
              </div>
              <div class="row no-gutters text-center">
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/telha+termoacustica+\(1\).jpg);">
                <a class="nostyle" href="telhaTermoacustica.php" >
              </br></br>TELHA<br>TERMOACÚSTICA
              </a>
            </div>
          <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDOS+E+COBERTURAS+\(2\).jpg);">
                <a class="nostyle" href="toldosCobertura.php" >
              </br></br></br>TOLDOS E COBERTURA
              </a>
            </div>
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDOS+ARTICULADOS+\(9\).jpg);">
                <a class="nostyle" href="toldosArticulados.php" >
              </br></br></br>TOLDOS ARTICULADOS
              </a>
            </div>  
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDO+RETO+\(7\).jpg);">
                <a class="nostyle" href="toldoReto.php" >
              </br></br></br>TOLDO RETO</div>
            </a>
              </div>
              <div class="row no-gutters text-center">
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDO+PERGOLADO+\(7\).jpg);">
                <a class="nostyle" href="toldoPergolado.php" >
              </br></br></br>TOLDO PERGOLADO
              </a>
            </div>
          <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDO+ABRE+E+FECHA+\(8\).jpg);">
                <a class="nostyle" href="toldoAbreFecha.php" >
              </br></br></br>TOLDO ABRE E FECHA
              </a>
            </div>
          <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/toldo+cortina+manual+e+automatizada+\(7\).jpg);">
                <a class="nostyle" href="cortinaToldoManualAutomatizada.php" >
              </br></br>CORTINA TOLDO<br>MANUAL E<br>AUTOMATIZADA
              </a>
            </div>    
            <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/COBERTURA+POLICARBONATO+ALVEOLAR+\(13\).jpg);">
                <a class="nostyle" href="coberturaPolicarbonatoAlveolar.php" >
              </br></br>COBERTURA DE<br>POLICARBONATO<br>ALVEOLAR
              </a>
            </div>
              </div>
              <div class="row no-gutters text-center">
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/COBERTURA+POLICARBONATO+COMPACTO+\(7\).jpg);">
                <a class="nostyle" href="coberturaPolicarbonatoCompacto.php" >
              </br></br>COBERTURA DE<br>POLICARBONATO<br>COMPACTO
              </a>
            </div>
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDO+POLICARBONATO+\(2\).jpg);">
                <a class="nostyle" href="toldoPolicarbonato.php" > 
              </br></br>TOLDO<br>POLICARBONATO
              </a>
            </div>
                <div class="col-sm mx-auto" id="galeria-cover" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(assets/image/TOLDOS+EM+LONA+\(5\).jpg);">
                <a class="nostyle" href="toldosLona.php" >
              </br></br></br>TOLDOS EM LONA
              </a>
            </div>
                <div class="col-sm mx-auto" id="galeria-cover" ></div>
              </div>
  </div>
            <div class="col-sm-12 text-center p-5">
              <a href="produtos.php">
                <button class="btn btn-warning"><font color="#FFFFFF">VER TODOS OS PRODUTOS</font></button>
              </a>
            </div>
            <div class="container">
              <div class="row">
            <div class="coluna5"></br>
            <header>
              <!-- Background image -->
                <div
                  class="p-1 text-center bg-image"
                  style="
                    background-image: url('assets/image/black-thread-light.png');
                    width: 620px;
                    height: 250px;
                  "
                >
                  <div class="mask">
                      <div class="text-black"><br>
                        <h1 class="mb-3">EM ATÉ 5X</h1>
                      </div>
                    
                  </div>
                </div>
              </header>      
              </div> 
              <div class="coluna6">  
                  <div class="banner__img17 banner__img--cover"></br>
                    <div class="texto text-center">
                      <i class="bi bi-credit-card-fill"><h3>ACEITAMOS TODOS<br> OS CARTÕES</h3></i>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
</div>
                <div class="texto text-center p-4" id="orçamento"></br></br></br></br>
                  <h3><font color="#2C2C2C"><b>Orçamento</b></font></h3>
                  <hr>
                </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-15 col-lg-6 text-center" style="background-color: #F9F9F9;">   
                  <font color="#2C2C2C"><h4><b> CONTATO</b><h1 class="bi bi-telephone"></h1></h4></font>
                  <font color="#2C2C2C"><h5>  Whatsapp</h5></font>
                  <a href="https://api.whatsapp.com/send?phone=551599745-1938" target="_blank" class="nostyle">
                  <div  >
                  <h5 style="border: solid 2px #A5792E; " class="fab fa-whatsapp p-2"><font color="#2C2C2C"> (15) 99745-1938</font></h5>
                </div>
  </a>
                </br>
                </div>
                </br></br>
                      <div class="col-sm-12 col-lg-6 text-center" style="background-color: #F6F6F6;">
                        <font color="#2C2C2C"><h4 ><b>HORÁRIO DE ATENDIMENTO</b><h1 class="bi bi-clock"></h1></h4></font></br>
                        <div class="container">
                        <div class="row">
                        <div class="col-sm-12 col-lg-6 text-center">
                          <h5>Seg-Sáb</h5>
                          <h5>Domingo</h5>
                        </div>
                        <div class="col-sm-12 col-lg-6 text-center">
                          <h5>9:00 - 18:00</h5>
                          <h5>Fechado</h5>
                        </div>
                        </div>
                        </div>
                      </div>
          </div>
            </div></br></br></br>
            <?php include "reutilizaveis/rodape.html" ?>
          </body>
</html>