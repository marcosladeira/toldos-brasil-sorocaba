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
<title>SOBRE - TOLDOS BRASIL SOROCABA - TOLDO ARTICULADO ITALIANO, CORTINA GEÓRGIA, TOLDO CURVO, TOLDO FIXO, TELHA TERMOACÚSTICA, TOLDOS E COBERTURA, TOLDOS ARTICULADOS, TOLDO RETO, TOLDO PERGOLADO, TOLDO ABRE E FECHA, CORTINA TOLDO MANUAL E AUTOMATIZADA, COBERTURA DE POLICARBONATO ALVEOLAR, COBERTURA DE POLICARBONATO COMPACTO, TOLDO POLICARBONATO, TOLDOS EM LONA, EM SOROCABA</title>
    </head>
    <body>
    <?php
    include "reutilizaveis/cabecalho.html";
    if (isset($_GET['r'])) {
        echo ("<script>alert('" . $_GET['r'] . "');</script>");
    }
    ?>
    <script>
        document.getElementById("sobre").classList.add("active")
    </script>
     <div class="jumbotron2 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4">
            
            <div></br>
              <h1><b>SOBRE<font color="#A5792E"> A TOLDOS BRASIL</font><br></b></h1> <h2><b>CONHEÇA NOSSA HISTÓRIA</b></h2>
              </div>
                </div>
               
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
  </div>
    
            </br></br></br>
            <?php include "reutilizaveis/rodape.html" ?>
          </body>
</html>