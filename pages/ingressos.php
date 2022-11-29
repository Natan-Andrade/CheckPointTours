<?php
	$servicos = Painel::selectAll('tb_site.servicos');
    $depoimentos = Painel::selectAll('tb_site.depoimentos');
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./home/favico.jpg" />
    <title>Check Point Tours</title>

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/home.css">

    <!--<style>
        table{
            width: 90% !important;
            table-layout: unset !important;
            margin: 20px auto !important;
        }
    </style>-->

    </head>
    <body>
    <header>
        <div class="container">
            <input type="checkbox" name="" id="check">

            <div class="logo-container">

            <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo"><img style="width: 70%;" class="logo" src="<?php echo INCLUDE_PATH; ?>/logos/logo.png"></a>

               <!-- <img  style="width: 55%;" class="logo" src="./logo2.jpg">-->
            </div>

            <div class="nav-btn">
                <div class="nav-links">

                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo">Home</a>
                        </li>

                        <li class="nav-link" style="--i: .6s">
                            <a href="#">São Paulo<i class="fas fa-caret-down"></i></a>
                            

                            <div class="dropdown">
                                
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="#">Home</a>
                                    </li>
        
                                   

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">Tour De Meio Dia</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                         <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">Tour de Dia Inteiro</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="#">City Tour Gastronômico</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida Noturna</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="#">Eventos da Cidade</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="#">Parques Temáticos</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>transfers">Traslados</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="#">Porto de Santos</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Visitas de Negócios</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="#">mais<i class="fas fa-caret-down"></i></a>

                                        <div class="dropdown second">
                                            <ul>

                                                <li class="dropdown-link">
                                                    <a href="#">Hospedagem</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="#">Transportes</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="#">Ecoturismo</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="#">Agroturismo</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="#">Tours Natalinos</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>tours">Carnaval SP</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>tours">Campos do Jordão</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-pacote-romantico">Pacote Romântico</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>F1">GP São Paulo F1</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>tours">Teatro</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>tours">TurisMetrô</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </li>
                                    <div class="arrow"></div>

                                    
                                </ul>
                            </div>
                            
                        </li>

                        <li class="nav-link" style="--i: 1.1s">
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Tours</a>
                        </li>

                        <li class="nav-link" style="--i: 1.1s">
                            <a href="<?php echo INCLUDE_PATH; ?>transfers">Transfers</i></a>
                        </li>

                        <li class="nav-link" style="--i: 1.1s">
                            <a href="<?php echo INCLUDE_PATH; ?>F1">GP São Paulo F1</i></a>
                        </li>

                        <li class="nav-link" style="--i: 1.1s">
                            <a href="<?php echo INCLUDE_PATH; ?>shows">Shows</i></a>
                        </li>

                        <li class="nav-link" style="--i: 1.1s">
                        <a><p><i class="fa-solid fa-language"></i></p><i class="fas fa-caret-down"></i></a>
        
                            <div class="dropdown">
                                <ul>
									<li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>F1"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Pt</p></a><!-- pt-BR -->
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>en-US/F1"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>Eng</p></a><!-- eng-US -->
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>es-ES/F1"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Esp</p></a><!-- en-US -->
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>


                <!--<div class="log-sign" style="--i: 1.8s">
                    <a href="#" class="btn transparent">Agendar uma viagem</a>
                </div>-->

            </div>

            <div class="hamburguer-menu-container">
                <div class="hamburguer-menu">
                    <div></div>
                </div>
            </div>

        </div>
    </header>

        <nav class="full-item" style="margin-top: 80px; background-image: url(pages/assets/F1/5.jpg);">
            <div class="button">
                <div class="log-sign" style="--i: 1.8s; display: none;">
                    <a href="#" class="btn transparent">GP São Paulo F1</a>
                </div>
            </div>

            <div class="full-item-content">
                <div class="full-gradiant">
                    <div class="full-ul">
                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH; ?>ingressos">Ingressos</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>transfers">Transfers</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>transfers">Locação de transporte</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section class="F1">

            <div class="box-align">
                <div class="container-title">
                    <h1 class="title-box" id="txtrect">Calendário</h1>
                </div>
            </div>
            
            <div class="itens-wrap" style="flex-direction: column;">

                <div class="run-table">
                <?php foreach ($depoimentos as $key => $value) { ?>
                    <p><?php echo $value['depoimento'] ?></p>
                    <div class="box-align">
                        <div class="container-title">
                            <h2 class="title-box" id="txtrect">Circuito</h2>
                        </div>
                    </div>
                    <div class="img-circuito" style="background-image: url(<?php echo $value['nome'] ?>);"></div>
                <?php } ?>
                </div>

                <div class="box-align">
                    <div class="container-title">
                        <h2 class="title-box" id="txtrect">Ingressos</h2>
                    </div>
                </div>

                <?php
                    foreach ($servicos as $key => $value) {
                ?>

                    <div class="container-tickets">
                        <div class="tickets">
                            <div class="ticket-content">
                                <div class="ticket-title">
                                    <h2><?php echo $value['servico']; ?></h2>
                                </div>
                                <p><?php echo $value['descricao']; ?></p>
                            </div>

                            <div class="date">
                                <h2 style="text-align: center;"><?php echo $value['pt_preco']; ?></h2>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </section>

        <div id="form"></div>

        <section class="transfer-form">

            <div class="form_title">
                <h3>RESERVE SEU INGRESSO</h3>
            </div>

            <form target="_blank" action="https://formsubmit.co/atendimento@checkpointtours.com.br" method="POST">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://localhost/Checkpointtours/enviado">

                <div>
                    <label for="festa">Selecio o Pacote:</label>
                    </br>
                    <select name="veiculo" id="option" class="form-select" form="carform">
                        
                        <option id="option" value="<?php echo $value['servico']; ?>"><?php echo $value['servico']; ?></option>
                        
                    </select>
                </div>

                <div>
                    <label>Quantidade de pessoas:</label>
                    </br>
                    <input type="number" min="1" id="npessoas" required name="numero de pessoas" placeholder="5" class="form-select">
                </div>

                <div>
                    <label>Nome:</label>
                    </br>
                    <input type="text" id="nome" required name="nome" placeholder="Nome" class="form-select">
                </div>

                <div>
                    <label>E-mail para contato:</label>
                    </br>
                    <input type="email" id="email" required name="email" placeholder="Email Address" class="form-select">
                </div>

                <div>
                    <label>Telefone para contato:</label>
                    </br>
                    <input type="number" id="numero" required name="Telefone" placeholder="Número" class="form-select">
                </div>

                <button type="submit" class="submit-button">Reserve antes de pagar</button>

                <a class="button_reservar" href="https://wa.me/551127911316?text="
                    
                    onclick="location.href=this.href
                        +'Ingresso GP São Paulo F1'

                        +'%0a'
                        +'%0a'

                        +'Nome: '
                        +document.getElementById('nome').value

                        +'%0a'
                        +'%0a'

                        +'Ingresso: '
                        +document.getElementById('option').value

                        +'%0a'
                        +'%0a'

                        +'Número de pessoas: '
                        +document.getElementById('npessoas').value

                        +'%0a'
                        +'%0a'

                        +'Telefone para contato: '
                        +document.getElementById('numero').value

                        +'%0a'
                        +'%0a'

                        +'E-mail para contato: '
                        +document.getElementById('email').value
                       
                    return false;" target="_blank" rel="noopener noreferrer">

                    <div class="inside_button">
                        Reservar via WhatsApp <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </a>
            </form>
        </section>

        <footer>
            <div class="footer-content">
                <div class="itens-wrap">
                    <div class="container-content">
                        <ul class="list-unstyled">
                            <h3>São Paulo</h3>

                            <li>
                                <a href="#">A cidade</a>
                            </li>

                            <li>
                                <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">Tour De Meio Dia</a>
                            </li>

                            <li>
                                 <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">Tour de Dia Inteiro</a>
                            </li>

                            <li>
                                <a href="#">City Tour Gastronômico</a>
                            </li>
                            <li>
                                <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida Noturna</a>
                            </li>

                            <li>
                                <a href="#">Eventos da Cidade</a>
                            </li>

                            <li>
                                <a href="#">Parques Temáticos</a>
                            </li>

                            <li>
                                <a href="#">Traslados</a>
                            </li>

                            <li>
                                <a href="#">Porto de Santos</a>
                            </li>

                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Visitas de Negócios</a>
                            </li>

                            <li>
                                <a href="#">Hospedagem</a>
                            </li>

                            <li>
                                <a href="#">Transportes</a>
                            </li>

                            <li>
                                <a href="#">Ecoturismo</a>
                            </li>

                            <li>
                                <a href="#">Agroturismo</a>
                            </li>
                            <li>
                                <a href="#">Tours Natalinos</a>
                            </li>

                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>tours">Carnaval SP</a>
                            </li>

                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>tours">Campos do Jordão</a>
                            </li>

                            <li>
                                <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-pacote-romantico">Pacote Romântico</a>
                            </li>

                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>F1">GP São Paulo F1</a>
                            </li>

                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>tours">Teatro</a>
                            </li>

                            <li>
                                <a href="<?php echo INCLUDE_PATH; ?>tours">TurisMetrô</a>
                            </li>
                        </ul>
                    </div>

                    <div class="container-content">
                        <ul class="list-unstyled">
                        <h3>Outras Cidades</h3>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo">São Paulo/SP</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazerriodejaneiro">Rio de Janeiro/RJ</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>PR">Foz do Iguaçu/PR</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazernatal">Natal/RN</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>SC">Florianópolis/SC</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazersalvador">Salvador/BA</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazermanaus">Manaus/AM</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>CE">Fortaleza/CE</a></li>
                    </ul>
                    </div>
        
        
                    <div class="container-content">
                        <ul class="list-unstyled">
                            <h3>Empresa</h3>
                            <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">Sobre nós</a></li>
                            <li><a class="text-muted" target="_blank" href="">Nossa Equipe</a></li>
                            <li><a class="text-muted" target="_blank" href="">Termos de uso do serviço</a></li>
                            <li><a class="text-muted" target="_blank" href="">Política de privacidade</a></li>
                            <li><a class="text-muted" target="_blank" href="">Política de cancelamento</a></li>
                            <li><a class="text-muted" target="_blank" href="">Blog</a></li>
                            <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                        </ul>
                    </div>

                    <div class="container-content">
                        <ul class="list-unstyled">
                            <h3>Canais</h3>
                            <li><a class="text-muted" target="_blank" href="">Previsão do Tempo</a></li>
                            <li><a class="text-muted" target="_blank" href="">Datas Comemorativas</a></li>
                            <li><a class="text-muted" target="_blank" href="">Dicas e Endereços</a></li>
                            <li><a class="text-muted" target="_blank" href="">Cotação do Dólar</a></li>
                        </ul>
                    </div>
        
                    <div class="container-content">
                        <ul class="list-unstyled">
                            <h3>Formas de Pagamento</h3>
                            <li><a class="text-muted" target="_blank" href="">Boleto</a></li>
                            <li><a class="text-muted" target="_blank" href="">Pix</a></li>
                            <li><a class="text-muted" target="_blank" href="">Pay Pal</a></li>
                        </ul>
                    </div>

                    <div class="container-content">
                        <h3><strong>CHECK POINT Receptive Service</strong></h3>
                            <p>Rua Jacques Du Cerceau, 84 - 03624-120 - São Paulo - SP - BRASIL</p>

                            <p>2ª a 6ª feira das 9hrs às 18hrs</p>
                            
                            <p>PABX: <strong>(11) 2791-1316 </strong> Após esse horário ligar para <strong>(11) 99187-1393</strong></p>
                </div>
                </div>

                
                <div class="imgs-footer">
                    
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_ministerio_turismo.png" />
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_sp_turismo.png" />
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_sp.png" />
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_sindetur.png" />
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_abav.png" />
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_convention_bureau.png" />
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_brasil.png" />
                    <img class="img-footer" src="<?php echo INCLUDE_PATH; ?>/images/footer-images/logo_trip.png" />

                </div>
                
            </div>
            <div class="container-bottom">
                <p>© 2022, Check Point Tours. Todos os direitos reservados.</p>
            </div>
        </footer>

    </body>
</html>