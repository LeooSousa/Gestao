<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="freelancer.css">
    <link rel = "shortcut icon" type = "img/profile.png" href ="/home/aluno/Downloads/startbootstrap-freelancer-gh-pages/img/profile.png"/imagens/icone_ie.ico"/>
    <title>Gestão Empresarial</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
  <script src="//code.jivosite.com/widget.js" jv-id="cyQnu00MZT" async></script>

  </head>

  <body id="page-top">


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="startbootstrap-scrolling-nav-gh-pages/index.html">Saiba Mais</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Em Relação</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Curiosidades</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Desenvolvedores</a>
            </li>
            <p>
              
            <?php

                 if (isset($_COOKIE["usuario"])) {
                echo $_COOKIE["usuario"];


            }
            ?>
            </p>
            <div>   
                <input style="width: 70px; padding: 3px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #18bc9c; color: #ffffff; border-radius: 6px; border: 1px solid #999; font-size: 100%;" id="s" type="button" value="Perfil" onclick="window.location.href='cale/perfil.php'" />
            </div>    
            <div>   
                <input style="width: 70px; padding: 3px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #18bc9c; color: #ffffff; border-radius: 6px; border: 1px solid #999; font-size: 100%;" id="s" type="button" value="sair" onclick="window.location.href='logout.php'" />
            </div>    
                
          </ul>
        </div>
      </div>
    </nav>


    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="logo1.png" height="354" width="352" >
        <h1 class="text-uppercase mb-0">Sistema de Gestão Empresarial do IFPI</h1>
        <hr class="star-light">

        <h2 class="font-weight-light mb-0">Fazer uma análise do meu emprendimento</h2>
      </div>
    
 <form>
<input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #007FFF; color: #ffffff; border-radius: 10px; border: 1px solid #999; font-size: 150%;" type="button" value="Comece Aqui" onclick="window.location.href='gene.html'" />
</form> 
<hr class="star-light">

        <h2 class="font-weight-light mb-0">Atendimento online</p></h2>
      </div>
    
 <form>
<input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #007FFF; color: #ffffff; border-radius: 10px; border: 1px solid #999; font-size: 150%;" type="button" value="Começar" onclick="window.location.href='planos.html'" />
</form> 
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Em relação</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin.png" width="900" height="800" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" width="900" height="650" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus.png" width="900" height="650" alt="">
            </a>
          </div>
          
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Curiosidades</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Nesse site você pode ver seu rendimento, se precisa melhorar em algo e etc.	Se por acaso você se considerar bom, ou seja, que gostou do resultado (de sua nota), você pode tentar fazer cursos publicos ou até mesmo entrevista de emprego	

	é raro receber uma oferta de emprego logo na primeira entrevista, em multinacionais esse processo pode ser mais longo. Em empresas pequenas, nas quais o poder decisório está nas mãos do patrão, pode ser mais rápido. No livro Como Conquistar um Ótimo Emprego, o consultor Thomas Case faz uma série de recomendações para a hora da entrevista.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">
	Tente ser o mais sincero possível quando for responder os questionarios, caso não seja alem de você não descobrir sua capacidade verdadeira, você irá se basear em um resultado que te faça pesquisar por empresas que necessita de um requisito que para você é inesgistente.

	Você pode não acreditar que esse irá te ajudar o bastante para conseguir um emprego, se pensou nisso você está muito enganado. Esse site vai definir que tipo de profissional você pode ser, então não vacile.
	BOA SORTE!</p>
	<b><p>Veja o Video Abaixo e desculbra mais</p></b>
          </div>
        
      </div>
    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/OG6T6Rl7mD8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Desenvolvedores</h2>
        <hr class="star-dark mb-5">
        <!--
        <center><img src="/home/aluno/Área de Trabalho/Vai dar certo/startbootstrap-freelancer-gh-pages/img/mygod.png"><img src="/home/aluno/Área de Trabalho/Vai dar certo/startbootstrap-freelancer-gh-pages/img/loucura.png"></center>
        <center><h3>Contatos/E-mails</h3></center>
        <center><h4 style="color: #999999">Henrique dos Santos</h4></center>
        <center><p>(89) 9 99657498</p></center>
        <center><p>henrique123@gmail.com</p></center>
        <center><h4 style="color: #999999">Leomar Sousa</h4></center>
        <center><p>(89) 9 94256484</p></center>
        <center><p>leoleo321@gmail.com</p></center>
        <center><h4 style="color: #999999">Cassia Nascimento</h4></center>
        <center><p>(89) 9 88456558</p></center>
        <center><p>nascimentocassia456@gamil.com</p></center>
        <center><h4 style="color: #999999">Lidiane Gonsalves</h4></center>
        <center><p>(89) 9 99123245</p></center>
        <center><p>lili1560@gmail.com</p></center>
        <center><h4 style="color: #999999">Edimael Damascena</h4></center>
        <center><p>(89) 9 94586723</p></center>
        <center><p>bel321@gmail.com</p></center>
      </div>  
      </div>
    </section>
     -->
     <section id="team" class="pb-5">
    <div class="container">
        <center><b><h5 class="section-title h1">Técnicos</h5></b></center>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/henrique.jpg" alt="card image"></p>
                                    <h4 class="card-title">Henrique dos Santos</h4>
                                    <p class="card-text">henrique34@gmail.com</p>
                                    <p class="card-text">(89) 9 99252348</p>
                                     <div class="card-body">
                                    <h4 class="card-title">Estudate</h4>
                                    <p class="card-text">Concursa Tecnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/leo.jpg" alt="card image"></p>
                                    <h4 class="card-title">Leomar Sousa</h4>
                                    <p class="card-text">leobalanamente@gmail.com</p>
                                    <p class="card-text">(89) 9 94256453</p>
                                     <div class="card">
                                    <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Estudante</h4>
                                    <p class="card-text">Concursa Tecnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/cassia12.jpg" alt="card image"></p>
                                    <h4 class="card-title">Cassia Nascimento</h4>
                                    <p class="card-text">cassia321@gmail.com.</p>
                                    <p class="card-text">(89) 9 88254983</p>
                                     <div class="card-body">
                                    <h4 class="card-title">Estudate</h4>
                                    <p class="card-text">Concursa Tecnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                               
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="lili.jpg" alt="card image"></p>
                                    <h4 class="card-title">Lidiane Gonsalves</h4>
                                    <p class="card-text">lili345@gmail.com</p>
                                    <p class="card-text">(89) 9 94587621</p>
                                    <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Estudante</h4>
                                    <p class="card-text">Concursa Tecnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="bel.jpg" alt="card image"></p>
                                    <h4 class="card-title">Edimael Damascena</h4>
                                    <p class="card-text">bel2019@gamil.com</p>
                                    <p class="card-text">(89) 9 88008922</p>
                                    <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Estudate</h4>
                                    <p class="card-text">Concursa Tecnico em Informática na Instituição Federal do Piauí(IFPI).</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://pt-br.facebook.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/login?lang=pt">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/pt-br/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.google.com.br/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            

        </div>
    </div>
</section>
<!-- Team -->
    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Localizção</h4>
            <p class="lead mb-0">IFPI Campus Oeiras
              <br>O Campus Oeiras fica localizado na Rua Projetada, s/n, Bairro Uberaba II, Oeiras (PI) - CEP: 64.500-000</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Ao redor da web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://plus.google.com/+googleplus">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/login?lang=pt">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              
            </ul>
          </div>
          
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <center><footer>&copy Página da AGIFPI, todos os direitos reservados.</footer></center>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Avalie seu desenpenho</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5">Você pode não receber uma nota que irá te agradar, mais você pode se autovaliar e melhorar naqueles pontos de necessidade.</p>
              <p class="mb-5">Não tenha vergonha de reconhecer o quanto você é bom. Se preciso, pergunte para alguém de muita confiança.</p>
              <p class="mb-5">Tente usar exemplos profissionais (ou acadêmicos), mas de preferência a empresa atual.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Faça entrevistas</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5">A entrevista individual é a parte mais importante do processo seletivo, pois é nela que você terá chance de vender seu talento realmente. É uma conversa com o entrevistador sobre os pontos relevantes de seu currículo. O objetivo da entrevista individual é obter do candidato informações complementares que não foram reveladas por ele nos momentos anteriores (nas dinâmicas, baterias de testes, etc). O entrevistador visa obter fatos relacionados com o histórico profissional, educacional e sócio-econômico do candidato. A entrevista também serve para confirmar ou não os dados constantes do currículo e as demais fontes de informações.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
               Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Assine contratos</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5">O artigo 442 da CLT define o conceito de contrato de trabalho: “contrato individual de trabalho é o acordo tácito ou expresso, correspondente à relação de emprego”. Faça um bom cordo e seja o mais conpetente possível pois por qual seja seu emprego seja bom nele pois, você vai se tornar uma pessoa mais agio e inteligente. O mais comum é que o candidato seja submetido a duas ou três entrevistas, com profissionais de diferentes níveis de hierarquia na empresa</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
