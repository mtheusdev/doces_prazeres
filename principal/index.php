<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../login/index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Doces Prazeres</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styless.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Encomendar</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Nossa Empresa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contato</a></li>
                    </ul> 
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bem vindo a confeitaria Doces Prazeres!</div>
                <div class="masthead-heading text-uppercase">SEU PEDIDO EM APENAS ALGUNS CLICKS</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Mostrar Produtos</a>
            </div>
        </header>
        <!-- Portfolio BOLO Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">BOLOS</h2>
                    <h3 class="section-subheading text-muted">Feitos com paixão e dedicação.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Choco Cake</div>
                                <div class="portfolio-caption-subheading text-muted">Chocolate</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ChocoBerry Cake</div>
                                <div class="portfolio-caption-subheading text-muted">Chocolate com Morango</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Rainbow Cake</div>
                                <div class="portfolio-caption-subheading text-muted">TutiFrut</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Princes Cake</div>
                                <div class="portfolio-caption-subheading text-muted">Chocolate Branco e Morango</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Galaxy Cake</div>
                                <div class="portfolio-caption-subheading text-muted">TutiFrut</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Red Valvet Cake</div>
                                <div class="portfolio-caption-subheading text-muted">Frutas Vermelhas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- Portfolio A MAIS Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">COMPLEMENTOS</h2>
                    <h3 class="section-subheading text-muted">Deixe o bolo do jeito que quiser adicionando</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/7.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Docinhos</div>
                                <div class="portfolio-caption-subheading text-muted">Brigadeiros, beijinho</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/8.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Bom Bom</div>
                                <div class="portfolio-caption-subheading text-muted">Trufas, bombomns</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/9.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Frutas</div>
                                <div class="portfolio-caption-subheading text-muted">De todos os tipos e sabores</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/10.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Confete</div>
                                <div class="portfolio-caption-subheading text-muted">De todas as cores, chocolate</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/11.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Marshmallow</div>
                                <div class="portfolio-caption-subheading text-muted">De todas as cores</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluids" src="assets/img/portfolio/12.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Artes</div>
                                <div class="portfolio-caption-subheading text-muted">Artes, mensagens em chocolate+</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pedido</h2>
                    <h3 class="section-subheading text-muted">Passo a passo para ter seu pedido incrível.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><a href="#portfolio"><img class="rounded-circle img-fluid" src="assets/img/about/bolo.jpg" alt=""/></a></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1°</h4>
                                <h4 class="subheading">Bolo</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Faça o planejamento de quantas pessoas irão consumir, qualsão os ingredientes preferidos. Escolha então qual bolo de sua preferencia e a quantidade desejada. Entre em contato conosco caso queira mudar alguma coisa no bolo!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/topo.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2°</h4>
                                <h4 class="subheading">Topo</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Deixe seu momento com a sua cara, adicione doces, mensagens, faça um bolo indesquecível e delicioso!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/comprar.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>3°</h4>
                                <h4 class="subheading">Pagamento</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Para comprar você precisa ser cadastrado e estar logado! Após logar, será redirecionado para uma pagina de compra, após isso precisamos que deposite o valor do pedido para que o pedido entre em preparo e em seguida entregue!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/entrega.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>4°</h4>
                                <h4 class="subheading">Entrega</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Agende conosco um horário de sua preferencia no intervalo de trabalho dos nossos entregadores ou venha até nós buscar seu produto!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                <br />
                                Aproveite
                                <br />
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- PEDIDO-->
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nosso time</h2>
                    
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/eu.jpg" alt="" />
                            <h4>Matheus Henrique</h4>
                            <p class="text-muted"></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=5547991936552"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/maisa.jpg" alt="" />
                            <h4>Maisa Gomes</h4>
                            <p class="text-muted"></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/voce.png" alt="" />
                            <h4>Você</h4>
                            <p class="text-muted"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </section>
        
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Peça agora</h2>
                    <h3 class="section-subheading text-muted">De qualquer lugar a qualquer momento.</h3>
                </div>
                <form method="POST" action="../src/index.php" name="sentMessage" novalidate="novalidate">
                <select name="selectbolo" id="bolos" >
                    <option value="0" selected="selected" disabled="disabled">Bolos</option>
                    <option value="chocoCake">Choco Cake</option> 
                    <option value="chocoberry">ChocoBerry Cake</option>
                    <option value="rainbow">Rainbow Cake</option>
                    <option value="princes">Princes Cake</option>
                    <option value="galaxy">Galaxy Cake</option>
                    <option value="redvalvet">Red Valvet Cake</option>
                </select>
                <input name="qtdbol" type="text" id="qtdbol" placeholder="Quantidade em Kg">
                <select name="selecttopo" id="topos">
                    <option value="0" selected="selected" disabled="disabled">Decorações</option>
                    <option value="docinhos">Docinhos</option> 
                    <option value="bombom">Bom Bom</option>
                    <option value="frutas">Frutas</option>
                    <option value="confete">Confete</option>
                    <option value="marshmallow">Marshmallow</option>
                    <option value="artes">Artes</option>
                </select>
                <input name="qtddoc" class="inpt" type="text" id="qtddoc" placeholder="Quantidade Docinhos">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Nome *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name='email' id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Mensagem *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <input class="btn btn-primary btn-xl text-uppercase"  type="submit">Enviar</input>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Doces Prazeres 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=5547991936552"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals 1-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Choco Cake</h2>
                                    <p class="item-intro text-muted">Chocolate preto e branco.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>Ideal para presentear os amantes de chocolate, uma combinação deliciosa de Chocolate Preto na cobertura e corpo e Chocolate Branco no interior!</p>
                                    <ul class="list-inline">
                                        <li>R$48,00 Kg</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">ChocoBerry Cake</h2>
                                    <p class="item-intro text-muted">Chocolate com Morango.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Que sensação essa mistura! Chocolate com Morango. Chocolate preto meio amargo e chocolate branco com morangos e creme no recheio</p>
                                    <ul class="list-inline">
                                        <li>R$52,00 Kg</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Rainbow Cake</h2>
                                    <p class="item-intro text-muted">TutiFrut</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>TutiFrut: Do Italiano, TODAS AS FRUTAS, uma explosão de sabores indesquecível, ótimo para festas infantis!</p>
                                    <ul class="list-inline">
                                        <li>R$50,00 Kg</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Princes Cake</h2>
                                    <p class="item-intro text-muted">Chocolate Branco e Morango</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>Que tal surpreender sua princesa com este lindo bolo?!</p>
                                    <ul class="list-inline">
                                        <li>R$52,00 Kg</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Galaxy Cake</h2>
                                    <p class="item-intro text-muted">TutiFrut</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>Explore as sensações universo com uma garfada! Este bolo será uma viajem inesquecível?!</p>
                                    <ul class="list-inline">
                                        <li>R$56,00 Kg</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                       Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Red Valvet Cake</h2>
                                    <p class="item-intro text-muted">Frutas Vermelhas.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>Para os apaixonados: Todas as frutas vermelhas em um só lugar!</p>
                                    <ul class="list-inline">
                                        <li>R$60,00 Kg</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modals 2 -->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Docinhos</h2>
                                    <p class="item-intro text-muted">Brigadeiros, beijinho.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/7.jpg" alt="" />
                                    <p>A decisão é sua, contate-nos e peça docinhos do seu gosto, qualquer sabor e cor à disposição!</p>
                                    <ul class="list-inline">
                                        <li>R$1,00 Und.</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Bom Bom</h2>
                                    <p class="item-intro text-muted">Trufas, bombomns.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/8.jpg" alt="" />
                                    <p>Chocolate nunca é demais, peça a quantidade e nos informe os sabores!</p>
                                    <ul class="list-inline">
                                        <li>R$1,50 Und.</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Frutas</h2>
                                    <p class="item-intro text-muted">De todos os tipos e sabores.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/9.jpg" alt="" />
                                    <p>Que tal uma festa Leve, saudavel e tropical? Adicione Frutas ao seu bolo!</p>
                                    <ul class="list-inline">
                                        <li>R$0,50 Und.</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Confete</h2>
                                    <p class="item-intro text-muted">De todas as cores, chocolate preto ou branco.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/10.jpg" alt="" />
                                    <p>Deixe sua festa mais divertida e doce adicionando confetes!</p>
                                    <ul class="list-inline">
                                        <li>R$0,05 Und.</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Marshmallow</h2>
                                    <p class="item-intro text-muted">De todas as cores.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/11.jpg" alt="" />
                                    <p>Um ingrediente irresistível aos olhos, deixa tudo mais divertido!</p>
                                    <ul class="list-inline">
                                        <li>R$0,25 Und.</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Artes</h2>
                                    <p class="item-intro text-muted">Artes, mensagens em chocolate preto ou branco.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/12.png" alt="" />
                                    <p>Deixe uma mensagem carinhosa para alguém, um pedido de namoro, casamento, a criatividade e escolha são suas!</p>
                                    <ul class="list-inline">
                                        <li>R$10,00 Und.</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
