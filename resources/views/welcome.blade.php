<!DOCTYPE html>
<html>
<head>
    <title>Hosie</title>
    <link rel="icon" type="img/png" href="img/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--Icons-->
    <script src="https://kit.fontawesome.com/d6210754d0.js" crossorigin="anonymous"></script>

        <!-- Toastr -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script type="text/javascript">
        function slide1() {
            document.getElementById('id').src = "img/img1.jpg";
            setTimeout("slide2()", 2000)
        }
        function slide2() {
            document.getElementById('id').src = "img/img2.jpg";
            setTimeout("slide3()", 2000)
        }
        function slide3() {
            document.getElementById('id').src = "img/img3.jpg";
            setTimeout("slide1()", 2000)
        }
    </script>


</head>
<body onLoad="slide1()">
   <div class="content">
        <div class="row">
          <div class="col-md-12">
        <nav class="navbar navbar-light" width="100%">
         <img src="img/logo.png" width="165">
         </nav>
       </div>
     </div>

<div class="row">
    <div class="col-md-12 first-div">
      <br>
    </div>
</div>

<div class="row">
    <div class="col-md-12 titulo">
        <img id="id" width="100%">
    </div>
</div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 first-div">
            <br>
        </div>
    </div>

    <div class="row">
        <div class='col-md-12'>
            <h1 align="center">Hosie</h1>
            <h5 align="center">Automatização residencial moderna</h5>
            <p align="center">Deixe sua casa mais inteligente, com muito conforto, práticiadade, econômia de tempo e segurança.
              Realizando todos os comandos através da sua voz e podendo controlar sua casa mesmo fora dela usando seu smartphone.
            </p>
        </div>

    </div>

    <div class="row">
      <div class="col-md-6">
        <img src="img/googlehome.png" width="500">
        <p align="center">Smart Speaker - Google Home</p>
      </div>
      <div class="col-md-6">
        <img src="img/alexa.png" width="500">
        <p align="center">Smart Speaker - Alexa </p>
      </div>
    </div>
      <br>
       <div class="row">
        <div class='col-md-12'>
            <h1 align="center">O que pode ser automatizado?</h1>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
         <div class="media">
          <div class="media-body">
            <h5 class="mt-0 mb-1">Iluminação</h5>
            <p>Tenha a iluminação perfeita para cada momento, controle a luz de cada comôdo pela voz. Você
            pode ajustar a intensidade de luz, deixando-a mais intensa ou menos intensa sempre que precisar,
            modificar a cor da luz, apagar e desligar.</p>
        </div>
        <img src="img/iluminação.jpg" class="ml-3" alt="..." width="30%">
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="media">
          <img src="img/clima.jpg" class="align-self-start mr-3" alt="..." width="30%">
          <div class="media-body">
            <h5 class="mt-0">Climatização</h5>
            <p>Tenha o clima ideal para sua casa, você pode controlar seu ar condicionado como desejar e acompanhar a temperatura de sua casa usando os sensores de umidade e temperatura.</p>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
     <div class="media">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Segurança</h5>
        Não tenha mais medo de sair de casa com a sensação de que deixou algo ligado ou janelas abertas,
        através do seu smartphone você poderá verificar se deixou o ferro ligado na tomada ou se a janela 
        do seu quarto ficou aberta e o melhor podendo desligar o ferro e fechar a janela mesmo estando 
        fora de casa.
    </div>
    <img src="img/janela.jpg" class="ml-3" alt="..." width="30%">
</div>
</div>

</div>
<div class="row">
    <div class="col-md-12">
        <div class="media">
          <img src="img/tv.jpg" class="align-self-start mr-3" alt="..." width="30%">
          <div class="media-body">
            <h5 class="mt-0">Dispostivos</h5>
            <p>Você poderá controlar dispositivos da sua casa que estão conectados através da Rede 
              WI-FI, como: televisão, cafeteira, ferro de passar, panela de arroz, entro outros. 
              Com sua televisão conectada você poderá assitir uma série na Netflix, ouvir uma
              música no Spotify, ver um vídeo do seu Youtuber favorito ou até mesmo ouvir sua 
            rádio preferida.</p>
            <div class="row">
              <div class="col-md-4">
                <img src="img/youtube.svg" width="70%">
            </div>
             <div class="col-md-4">
                <img src="img/spotify.png" width="80%">
            </div>
             <div class="col-md-4">
                <img src="img/netflix.png" width="80%">
            </div>

        </div>
    </div>
</div>
</div>
</div>
<br>
 <div class="row">
        <div class="col-md-12 first-div">
            <br>
        </div>
    </div>
     <div class="row">
  <div class="col-md-12">
    <br>
      <h1 align="center">Tenha um assistente pessoal</h1>
      <h5 align="center">Organize sua agenda, lista de compras, lembretes e alarmes tudo pela voz</h5>

    </div>
  </div>
  <br>
  <div class="row" align="center">
    <div class="col-md-3">
      <img src="img/vovo.jpg" width="100%">
      <i class="fas fa-capsules i-pequeno"></i>
      <p align="center">Ok, Google lembre-me de tomar meu remédio as 15h00</p>
    </div>
    <div class="col-md-3">
      <img src="img/mulher.jpg" width="100%">
      <i class="fas fa-shopping-basket i-pequeno"></i>
      <p align="center">Ok, Google adicione leite na minha lista de compras</p>
    </div>
    <div class="col-md-3">
      <img src="img/dormindo.jpg" width="100%">
     <i class="far fa-clock i-pequeno"></i>
      <p align="center">Ok, Google adicione acorde-me as 06h00</p>

    </div>
    <div class="col-md-3">
      <img src="img/estudando.jpg" width="100%">
      <i class="fas fa-graduation-cap i-pequeno"></i>
       <p align="center">Ok, lembre-me da prova de Inglês, segunda ás 13h00</p>
    </div>
  </div>

<br>
</div>

<div class="row roxo">
  <div class="container">
    <div class="row">
  <div class="col-md-12">
    <br>
      <h1 align="center">Pré-requisitos</h1>

    </div>
  </div>

    <div class="row" align="center">
      <div class="col-md-12">
      <i class="fas fa-wifi i-roxo"></i>
      <p align="center">Internet banda larga e Wi-Fi com sinal na casa inteira.​</p>
      <p>Realizamos um teste para verificar a qualidade do sinal da sua internet.</p>


  </div>

</div>
  <div class="row" align="center">
    <div class="col-md-12">
      <img src="img/roteador.png" width="10%">
    </div>

  </div>
   <div class="row" align="center">
    <div class="col-md-12">
      <p>Melhoramos a qualidade do sinal da sua internet</p>
    </div>

  </div>
</div>
</div>
<br>
<div class="container">
   <div class="row">
        <div class='col-md-12'>
            <h1 align="center">Por que a Hosie?</h1>
            <h5 align="center">Somos apaixonados por tecnologia</h5>
        </div>

    </div>
      <br>
    <div class="row" align="center">
      <div class="col-md-3">
        <i class="fas fa-phone-volume"></i>
        <p>Atendimento Especial</p>
      </div>
       <div class="col-md-3">
        <i class="fas fa-user-friends"></i>
        <p>Equipe especializada</p>
      </div>
       <div class="col-md-3">
        <i class="fas fa-wrench"></i>
        <p>Pré configuração dos equipamentos</p>
        <span>Econômia de tempo</span>
      </div>
       <div class="col-md-3">
          <i class="fas fa-search"></i>
        <p>Pesquisa e inovação</p>
      </div>
    </div>
<br>

<div class="row" align="center">
    <div class="col-md-12">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/img1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="img/img2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="img/img3.png" class="d-block w-100" alt="...">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
</div>

<div class="row">
    <div class="col-md-12 first-div">
        <br>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
</div>
<div class="roxo">
   <div class="container">
    <br>
<h5>Orçamento do Projeto</h5>
    <p>Faça uma consulta</p>
    <div class="row">
    <div class="col-md-6">
        <form action="{{route('enviado')}}" method="POST">
          @csrf

  <div class="form-group">
    <i class="fas fa-envelope i-branco"></i>
    <label for="exampleFormControlInput1">E-mail</label>
    <input type="email" class="form-control" name="mail" id="exampleFormControlInput1" placeholder="Digite seu E-mail">
  </div>
    <div class="form-group">
      <i class="fas fa-home i-branco"></i>
    <label for="exampleFormControlSelect1">Tipo de imóvel?</label>
    <select class="form-control" name="type" id="exampleFormControlSelect1">
      <option>Casa terréa</option>
      <option>Sobrado</option>
      <option>Studio</option>
      <option>Apartamento</option>
    </select>
  </div>
  <div class="form-group">
    <i class="fas fa-ruler i-branco"></i>
    <label for="exampleFormControlInput1">Quantos mêtros?</label>
    <input type="text" class="form-control" name="meters" id="exampleFormControlInput1" placeholder="Digite a metragem">
  </div>
  <div class="form-group">
        <i class="fas fa-home i-branco"></i>
    <label for="exampleFormControlSelect1">Quantos comôdos você quer automatizar?</label>
    <select class="form-control" name="quant" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>+6</option>
    </select>
  </div>
    </div>
    <div class="col-md-6">
      <img src="img/sala.jpg" width="100%">
    </div>

  <br>
  <div class="row">
    <div class="col-md-12">
  <button type="submit" class="btn btn-gray">Enviar</button>
</div>
</div>
<br>

</form>
  <br>
    </div>

</div>
</div>

<footer>
    <div class="container">
        <div class='row'>
          <div class="col-md-12">
            <br>
            <img src="img/logo.png" width="150">
          </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <br>
               <i class="fas fa-phone-volume i-branco"> Contato</i>
             
                <p>(11) 5555-0260</p>

                </div>
                <div class="col-md-4">
                  <br>
                  <i class="fas fa-envelope i-branco"> E-mail</i>
                  <p>contato@hosie.com.br</p>

                  </div>
                  <div class="col-md-4">
                      <br>
                      <i class="fas fa-globe-americas i-branco"> Redes Socias</i>
                      <br>

                      <i class="fab fa-facebook i-branco"> Facebook</i>
                      
                      <i class="fab fa-instagram i-branco"> Instagram</i>
                    
                      <i class="fab fa-twitter i-branco"> Twitter</i>

                      </div>
                  </div>
              </div>

          </footer>

 <script type="text/javascript" src="js/app.js"></script>
    {!! toastr()->render() !!}
      </body>
      </html>