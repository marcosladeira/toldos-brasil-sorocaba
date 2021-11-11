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
<title>CONTATO - TOLDOS BRASIL SOROCABA - TOLDO ARTICULADO ITALIANO, CORTINA GEÓRGIA, TOLDO CURVO, TOLDO FIXO, TELHA TERMOACÚSTICA, TOLDOS E COBERTURA, TOLDOS ARTICULADOS, TOLDO RETO, TOLDO PERGOLADO, TOLDO ABRE E FECHA, CORTINA TOLDO MANUAL E AUTOMATIZADA, COBERTURA DE POLICARBONATO ALVEOLAR, COBERTURA DE POLICARBONATO COMPACTO, TOLDO POLICARBONATO, TOLDOS EM LONA, EM SOROCABA</title>
    </head>
    <body>
    <?php
    include "reutilizaveis/cabecalho.html";
    if (isset($_GET['r'])) {
        echo ("<script>alert('" . $_GET['r'] . "');</script>");
    }
    ?>
    <script>
        document.getElementById("contato").classList.add("active")
    </script>
    <div class="jumbotron4 text-center align-item-center d-flex flex-column justify-content-center pt-3">  
                  <div class="texto text-center p-4">
                    <hr>
            <div></br>
              <h1><b>ENTRE EM<font color="#A5792E"> CONTATO</font><br></b></h1> <h2><b>FALE CONOSCO</b></h2>
              </div>
                </div>
               
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
            </div>
  </br></br>
            <div class="container-fluid pt-2 " id="form">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12 ml-auto bg-white mb-4">
                            
                    <div class="container">
                    <h5 class="text-center"><b>Se preferir, preencha o formulário e aguarde nosso contato</b></h5>
            <form name="formulario" class="needs-validation" method="post" action="enviaEmail.php" enctype="multipart/form-data">
            <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="Nome"><h6>Nome*</h6></label>
                <input type="text" class="form-control" name="nome" id="Nome" required>
              </div>
              </div>
              <div class="col">
              <div class="form-group">
                <label for="fone"><h6>Telefone*</h6></label>
                <input type="tel" class="form-control" name="fone" id="fone" required>
              </div>
              </div>
              <div class="col">
              <div class="form-group" id="caixaEmail">
                <label for="Email"><h6>E-mail*</h6></label>
                <input type="mail" class="form-control" name="email" id="email" required onfocusout="validaEmail()">
              </div>
              </div>
              </div>
            
              <div class="form-group ">
                <label for="corpo"><h6>Mensagem*</h6></label>
                <textarea class="form-control" name="corpo" id="corpo" required rows="3" ></textarea>
              </div>         
              
              <button type="submit" id="btn" class="btn btn-warning"><b><font color="#FFFFFF">Solicitar contato</font></b></button>
              <input type="hidden" name="retorno" id="retorno" value="contato.php">
            </form></br> 
            </div>
         
        </div>
      </div>
  </div>
</div>
            </br></br></br>
            <?php include "reutilizaveis/rodape.html" ?>
          </body>
</html>