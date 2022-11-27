<?php error_reporting(E_ERROR | E_PARSE); ?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

	<script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>


    <link rel="shortcut icon" href="./home/favico.jpg" />
	
    <title>Check Point Tours</title>

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/single_tour.css">
    
    <style>
        .goog-te-banner-frame{
        	display:none !important;	
        }
    </style>
</head>

<body>

<?php
	$url = explode('/',$_GET['url']);
	

	$verifica_categoria = MySql::conectar()->prepare("SELECT * FROM `tb_site.categorias` WHERE slug = ?");
	$verifica_categoria->execute(array($url[1]));
	if($verifica_categoria->rowCount() == 0){
		Painel::redirect(INCLUDE_PATH.'tours');
	}
	$categoria_info = $verifica_categoria->fetch();

	$post = MySql::conectar()->prepare("SELECT * FROM `tb_site.tours` WHERE slug = ? AND categoria_id = ?");
	$post->execute(array($url[2],$categoria_info['id']));
	if($post->rowCount() == 0){
		Painel::redirect(INCLUDE_PATH.'tour');
	}

	//É POR QUE MINHA NOTICIA EXISTE
	$post = $post->fetch();

?>

<?php
		foreach(@$tours as $key=>$value){
		$sql = MySql::conectar()->prepare("SELECT `slug` FROM `tb_site.categorias` WHERE id = ?");
		$sql->execute(array($value['categoria_id']));
		$categoriaNome = $sql->fetch()['slug'];
?>
<?php } ?>


    <header id="header">
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
                                        <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo">Home</a>
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
                                        <a href="#">Traslados</a>
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
										<button class="l-button" onclick="pt()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Português</p></button><!-- pt-BR -->
									</li>

									<li class="dropdown-link">
										<button class="l-button" onclick="en()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>English</p></button><!-- eng-US -->
									</li>
		
									<li class="dropdown-link">
										<button class="l-button" onclick="es()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Espanõl</p></button><!-- en-US -->
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

        <div class="bg-banner" style="background-image: url(' <?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $post['capa']; ?>')">
                <div class="bg-filter"> 
                    <div class="bg-logo">
                    </div>
                </div>
        </div>

        <section class="noticia-single">
            <div class="center-single">

                <div class="w-60">
                    <article>
                        
                        <div id="google_translate_element"></div>
                
                        <h1 id="titulo"><?php echo $post['titulo']; ?></h1>
                        <h2 class="duracao"><?php echo substr(strip_tags($post['duracao']),0,2).'h';?></h2>

                            <div id="conteudo"><?php echo $post['conteudo']; ?></div>
                            <div id="intinerario"><?php echo $post['intinerario']; ?></div>
                            <div id="recolha"><?php echo $post['recolha']; ?></div>

                            <!--<iframe 
                                src="<?php echo $post['mapa']; ?>",
                                width="100%" height="350px" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>-->

        
                        <div class="double-itens">
                            <div class="w-50">

                                <h2 id="t-incluso">O que é que está incluído?</h2>
                                <div id="incluso"><?php echo $post['incluso']; ?></div>
                            </div><!--w-50-->

                            <div class="w-50">
                                <h2 id="t-excluso">Exclusões:</h2>
                                <div id="excluso"><?php echo $post['excluso']; ?></div>
                            </div><!--w-50-->
                        </div>

                            <h2 id="t-levar">O que é necessário levar?</h2>
                            <div id="levar"><?php echo $post['levar']; ?></div>
                </div><!--w-70-->

                <div id="form" class="w-40">
                    
                    <div class="form_title">
                        <h3 id="t-form">Reserve antes de pagar</h3>
                    </div>

                    <form target="_blank" action="https://formsubmit.co/atendimento@checkpointtours.com.br" method="POST">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="http://localhost/Checkpointtours/enviado">

                        <div style="display: none;">
                            <input type="select" id="titulo" name="<?php echo $post['titulo']; ?>">
                            <input type="select" name="<?php echo 'Duração ',substr(strip_tags($post['duracao']),0,2).'h';?>">
                            <!--<input type="select" name="<?php echo 'A partir de R$',$post['preco'],',00';?>">-->
                        </div>

                        <!--<div>
                            <label for="data" id="t-data">Escolha uma data:</label>
                            
                        <div id="datepicker">
                            <input type="text" id="data" name="data_principal" class="form-control" style="display: none;">
                        </div>-->

                        

                        <!--<div>
                        <label for="festa" id="t-horario">horário de saída:</label>
                            <input type="select" id="horario" required name="horário" class="timepicker">
                        </div>-->

                        <div>
                            <label for="festa" id="t-npessoas"> Número de pessoas:</label>
                            <div class="flex-range">
                                <input type="range" id="npessoas" required name="Número de pessoas" class="range" min="<?php echo $post['pessoas_init']; ?>" max="<?php echo $post['pessoas_end']; ?>">
                                <p class="value"></p>
                            </div>
                        </div>

                        <div>
                            <label id="t-nome">Nome:</label>
                            <input type="text" id="nome" required name="nome">
                        </div>

                        <div>
                            <label id="t-email">E-mail:</label>
                            <input type="email" id="email" required name="email" >
                        </div>
                        
                        <div>
                            <label id="t-email">Telefone:</label>
                            <input type="text" id="telefone" required name="telefone" >
                        </div>

                        <div  class="preco">
                            <!--<label for="preço"><strong>BRL:</strong><?php echo $post['preco'],',00';?></label>-->
                        </div>

                        <div class="button-main">
                            <a id="ancora" class="ancora" href="#form" >Consulte nossos valores</a>
                        </div>

                        <button id="t-button1" class="button" type="submit" >Consulte nossos valores</button>

                        <a class="button_reservar"  href="https://wa.me/551127911316?text="
                            
                            onclick="location.href=this.href
                                +'Formulário de Contato'

                                +'%0a'
                                +'%0a'

                                +'Nome: '
                                +document.getElementById('nome').value

                                +'%0a'
                                +'%0a'

                                +'Tour: '
                                +`<?php echo $post['titulo'];?>`

                                +'%0a'
                                +'%0a'

                                +'Data: '
                                +document.getElementById('data').value

                                +'%0a'
                                +'%0a'

                                +'Horário: '
                                +document.getElementById('horario').value

                                +'%0a'
                                +'%0a'

                                +'Número de pessoas: '
                                +document.getElementById('npessoas').value
                                
                                 +'%0a'
                                +'%0a'

                                +'E-mail: '
                                +document.getElementById('email').value
                                
                                +'%0a'
                                +'%0a'

                                +'Telefone: '
                                +document.getElementById('telefone').value

                                +'%0a'
                                +'%0a'

                                +'BRL: '
                                +`<?php echo $post['preco'],',00';?>`

                            return false;" target="_blank" rel="noopener noreferrer">

                            <div id="t-button2" class="inside_button">
                                Reservar via WhatsApp <i class="fa-brands fa-whatsapp"></i>
                            </div>
                        </a>
                    </form>
                </div><!--w-70-->

            </div>
        </section>

        <footer id="footer">
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
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>AM">Manaus/AM</a></li>
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
                
            <div class="container-bottom">
                <p>© 2022, Check Point Tours. Todos os direitos reservados.</p>
            </div>
        </footer>
	<!--Scripts-->

	<script>
		window.location.href='#form';
	</script>

	<script>

        //PT

        function pt(){
			document.getElementById("titulo").innerHTML=`<?php echo $post['titulo']; ?>`;

            document.getElementById("conteudo").innerHTML=`<?php echo $post['conteudo']; ?>`;

            document.getElementById("intinerario").innerHTML=`<?php echo $post['intinerario']; ?>`;

            document.getElementById("recolha").innerHTML=`<?php echo $post['recolha']; ?>`;


            document.getElementById("t-incluso").innerHTML="O que é que está incluído?";
            document.getElementById("incluso").innerHTML=`<?php echo $post['incluso']; ?>`;

            document.getElementById("t-excluso").innerHTML="Exclusões:";
            document.getElementById("excluso").innerHTML=`<?php echo $post['excluso']; ?>`;


            document.getElementById("t-levar").innerHTML="O que é necessário levar?";
            document.getElementById("levar").innerHTML=`<?php echo $post['levar']; ?>`;

            document.getElementById("t-button1").innerHTML="Consulte nossos valores";

            document.getElementById("t-form").innerHTML="Reserve antes de pagar";

            document.getElementById("t-data").innerHTML="Escolha uma data:";

            document.getElementById("t-horario").innerHTML="horário de saída:";

            document.getElementById("t-npessoas").innerHTML="Número de pessoas:";

            document.getElementById("t-nome").innerHTML="Nome:";

            document.getElementById("t-email").innerHTML=" E-mail para contato:";

            document.getElementById("t-button2").innerHTML=`Reserve via WhatsApp <i class="fa-brands fa-whatsapp"></i>`;

            document.getElementById("ancora").innerHTML="Reservar";

            document.getElementById("header").innerHTML=
            `
                <header>
                    <div class="container">
                        <input type="checkbox" name="" id="check">

                        <div class="logo-container">

                        <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo"><img style="width: 70%;" class="logo" src="<?php echo INCLUDE_PATH; ?>./logos/logo.png"></a>

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
                                                    <a href="">Home</a>
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
                                                    <a href="#">Traslados</a>
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
                                                    <button class="l-button" onclick="pt()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Português</p></button><!-- pt-BR -->
                                                </li>

                                                <li class="dropdown-link">
                                                    <button class="l-button" onclick="en()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>English</p></button><!-- eng-US -->
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <button class="l-button" onclick="es()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Espanõl</p></button><!-- en-US -->
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
            `;

            document.getElementById("footer").innerHTML=
            `
                <footer>
                    <div class="footer-content">
                        <div class="itens-wrap">
                            <div class="container-content">
                                <ul class="list-unstyled">
                                    <h3>São Paulo</h3>

                                     

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
                                    <li><a class="text-muted" target="_blank" href="">Rio de Janeiro</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Foz do Iguaçu</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Natal / RN</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Florianópolis / SC</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Salvador / BA</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Manaus / AM</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Fortaleza / CE</a></li>
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
                        
                    <div class="container-bottom">
                        <p>© 2022, Check Point Tours. Todos os direitos reservados.</p>
                    </div>
                </footer>
            `;
		}

        //Espanhol

        function es(){

			document.getElementById("titulo").innerHTML=`<?php echo $post['esp_titulo']; ?>`;

            document.getElementById("conteudo").innerHTML=`<?php echo $post['esp_conteudo']; ?>`;

            document.getElementById("intinerario").innerHTML=`<?php echo $post['esp_intinerario']; ?>`;

            document.getElementById("recolha").innerHTML=`<?php echo $post['esp_recolha']; ?>`;


            document.getElementById("t-incluso").innerHTML="¿Que esta incluido?";
            document.getElementById("incluso").innerHTML=`<?php echo $post['esp_incluso']; ?>`;

            document.getElementById("t-excluso").innerHTML="Exclusiones:";
            document.getElementById("excluso").innerHTML=`<?php echo $post['esp_excluso']; ?>`;


            document.getElementById("t-levar").innerHTML="¿Qué necesitas traer?";
            document.getElementById("levar").innerHTML=`<?php echo $post['esp_levar']; ?>`;

            document.getElementById("t-button1").innerHTML="RESERVA ANTES DE PAGAR";

            document.getElementById("t-form").innerHTML="RESERVA ANTES DE PAGAR";

            document.getElementById("t-data").innerHTML="Elige una fecha:";

            document.getElementById("t-horario").innerHTML="Hora de salida:";

            document.getElementById("t-npessoas").innerHTML="Cantidad de personas:";

            document.getElementById("t-nome").innerHTML="Nombre:";

            document.getElementById("t-email").innerHTML="Email de contacto:";

            document.getElementById("t-button2").innerHTML=`Reservar vía WhatsApp <i class="fa-brands fa-whatsapp"></i>`;

            document.getElementById("ancora").innerHTML="Reservar";

            document.getElementById("header").innerHTML=
            `
                <header>
                    <div class="container">
                        <input type="checkbox" name="" id="check">

                        <div class="logo-container">

                        <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo"><img style="width: 70%;" class="logo" src="<?php echo INCLUDE_PATH; ?>./logos/logo.png"></a>

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
                                                     <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">tour de medio dia</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">tour de día completo</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="#">City Tour Gastronómico</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida nocturna</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="#">Eventos de la ciudad</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="#">parques temáticos</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="#">transferencias</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="#">Puerto de Santos</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Visitas de Negocios</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="#">más<i class="fas fa-caret-down"></i></a>

                                                    <div class="dropdown second">
                                                        <ul>

                                                            <li class="dropdown-link">
                                                                <a href="#">alojamiento</a>
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
                                                                <a href="#">Giras navideñas</a>
                                                            </li>
                                
                                                            <li class="dropdown-link">
                                                                <a href="<?php echo INCLUDE_PATH; ?>tours">Carnaval SP</a>
                                                            </li>

                                                            <li class="dropdown-link">
                                                                <a href="<?php echo INCLUDE_PATH; ?>tours">Campos do Jordão</a>
                                                            </li>
                                
                                                            <li class="dropdown-link">
                                                                <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-pacote-romantico">Paquete Romántico</a>
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
                                                    <button class="l-button" onclick="pt()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Português</p></button><!-- pt-BR -->
                                                </li>

                                                <li class="dropdown-link">
                                                    <button class="l-button" onclick="en()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>English</p></button><!-- eng-US -->
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <button class="l-button" onclick="es()"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Espanõl</p></button><!-- en-US -->
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
            `;

            document.getElementById("footer").innerHTML=
            `
                <footer>
                    <div class="footer-content">
                        <div class="itens-wrap">
                            <div class="container-content">
                                <ul class="list-unstyled">
                                    <h3>São Paulo</h3>

                                        

                                    <li>
                                         <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">tour de medio dia</a>
                                    </li>
        
                                    <li>
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">tour de día completo</a>
                                    </li>

                                    <li>
                                        <a href="#">City Tour Gastronómico</a>
                                    </li>
                                    <li>
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida nocturna</a>
                                    </li>
        
                                    <li>
                                        <a href="#">Eventos de la ciudad</a>
                                    </li>

                                    <li>
                                        <a href="#">parques temáticos</a>
                                    </li>
        
                                    <li>
                                        <a href="#">transferencias</a>
                                    </li>

                                    <li>
                                        <a href="#">Puerto de Santos</a>
                                    </li>

                                    <li>
                                        <a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Visitas de Negocios</a>
                                    </li>

                                    <li>
                                        <a href="#">alojamiento</a>
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
                                        <a href="#">Giras navideñas</a>
                                    </li>
        
                                    <li>
                                        <a href="<?php echo INCLUDE_PATH; ?>tours">Carnaval SP</a>
                                    </li>

                                    <li>
                                        <a href="<?php echo INCLUDE_PATH; ?>tours">Campos do Jordão</a>
                                    </li>
        
                                    <li>
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-pacote-romantico">Paquete Romántico</a>
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
                                    <h3>Otras ciudades</h3>
                                    <li><a class="text-muted" target="_blank" href="">Rio de Janeiro</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Foz do Iguaçu</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Natal / RN</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Florianópolis / SC</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Salvador / BA</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Manaus / AM</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Fortaleza / CE</a></li>
                                </ul>
                            </div>
                
                
                            <div class="container-content">
                                <ul class="list-unstyled">
                                    <h3>Empresa</h3>
                                    <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">Sobre nosotros</a></a></li>
                                    <li><a class="text-muted" target="_blank" href="">Nuestro equipo</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Condiciones de uso del servicio</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Política de privacidad</a></li>
                                    <li><a class="text-muted" target="_blank" href="">política de cancelación</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Blog</a></li>
                                    <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>contato">Contacto</a></li>
                                </ul>
                            </div>

                            <div class="container-content">
                                <ul class="list-unstyled">
                                    <h3>Canales</h3>
                                    <li><a class="text-muted" target="_blank" href="">Pronóstico del tiempo</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Fechas conmemorativas</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Consejos y direcciones</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Cotación del dolar</a></li>
                                </ul>
                            </div>
                
                            <div class="container-content">
                                <ul class="list-unstyled">
                                    <h3>Formas de pago</h3>
                                    <li><a class="text-muted" target="_blank" href="">Boleto</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Pix</a></li>
                                    <li><a class="text-muted" target="_blank" href="">Pay Pal</a></li>
                                </ul>
                            </div>

                            <div class="container-content">
                                <h3><strong>CHECK POINT Receptive Service</strong></h3>
                                    <p>La carretera Jacques Du Cerceau, 84 - 03624-120 - São Paulo - SP - BRASIL</p>

                                    <p>Lunes a Viernes de 9 am a 6 pm</p>
                                    
                                    <p>PABX: <strong>(11) 2791-1316 </strong> Después de este tiempo, llame <strong>(11) 99187-1393</strong></p>
                        </div>
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
                        
                    <div class="container-bottom">
                        <p>© 2022, Check Point Tours. Todos los derechos reservados.</p>
                    </div>
                </footer>
            `;
        }

         //Inglês

         function en(){
			document.getElementById("titulo").innerHTML=`<?php echo $post['eng_titulo']; ?>`;

            document.getElementById("conteudo").innerHTML=`<?php echo $post['eng_conteudo']; ?>`;

            document.getElementById("intinerario").innerHTML=`<?php echo $post['eng_intinerario']; ?>`;

            document.getElementById("recolha").innerHTML=`<?php echo $post['eng_recolha']; ?>`;


            document.getElementById("t-incluso").innerHTML="What is included?";
            document.getElementById("incluso").innerHTML=`<?php echo $post['eng_incluso']; ?>`;

            document.getElementById("t-excluso").innerHTML="Exclusions:";
            document.getElementById("excluso").innerHTML=`<?php echo $post['eng_excluso']; ?>`;


            document.getElementById("t-levar").innerHTML="What do you need to bring?";
            document.getElementById("levar").innerHTML=`<?php echo $post['eng_levar']; ?>`;

            document.getElementById("t-button1").innerHTML="BOOK BEFORE PAYING";

            document.getElementById("t-form").innerHTML="BOOK BEFORE PAYING";

            document.getElementById("t-data").innerHTML="Choose a date:";

            document.getElementById("t-horario").innerHTML="Departure time:";

            document.getElementById("t-npessoas").innerHTML="Amount of people:";

            document.getElementById("t-nome").innerHTML="Name:";

            document.getElementById("t-email").innerHTML="Contact email:";

            document.getElementById("t-button2").innerHTML=`Book via WhatsApp <i class="fa-brands fa-whatsapp"></i>`;

            document.getElementById("ancora").innerHTML="Reserve";


            document.getElementById("header").innerHTML=`
				<header>
					<div class="container">
						<input type="checkbox" name="" id="check">

						<div class="logo-container">

						<a href="<?php echo INCLUDE_PATH; ?>en-US/oquefazersaopaulo"><img style="width: 70%;" class="logo" src="<?php echo INCLUDE_PATH; ?>/logos/logo.png"></a>

						<!-- <img  style="width: 55%;" class="logo" src="./logo2.jpg">-->
						</div>

						<div class="nav-btn">
							<div class="nav-links">

								<ul>
									<li class="nav-link" style="--i: .6s">
										<a href="<?php echo INCLUDE_PATH; ?>en-US/oquefazersaopaulo">Home</a>
									</li>

									<li class="nav-link" style="--i: .6s">
										<a href="#">São Paulo<i class="fas fa-caret-down"></i></a>
										

										<div class="dropdown">
											
											<ul>
												<li class="dropdown-link">
													<a href="en-US/oquefazersaopaulo">Home</a>
												</li>
					
												<li class="dropdown-link">
													<a href="#">The city</a>
												</li>

												<li class="dropdown-link">
													<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">half day tour</a>
												</li>
					
												<li class="dropdown-link">
													<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">full day tour</a>
												</li>

												<li class="dropdown-link">
													<a href="#">Gastronomic City Tour</a>
												</li>
												<li class="dropdown-link">
													<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Night life</a>
												</li>
					
												<li class="dropdown-link">
													<a href="#">City Events</a>
												</li>

												<li class="dropdown-link">
													<a href="#">Thematic parks</a>
												</li>
					
												<li class="dropdown-link">
													<a href="<?php echo INCLUDE_PATH; ?>en-US/transfers">Transfers</a>
												</li>

												<li class="dropdown-link">
													<a href="#">Port of Santos</a>
												</li>

												<li class="dropdown-link">
													<a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Business Visits</a>
												</li>

												<li class="dropdown-link">
													<a href="#">more<i class="fas fa-caret-down"></i></a>

													<div class="dropdown second">
														<ul>

															<li class="dropdown-link">
																<a href="#">accommodation</a>
															</li>

															<li class="dropdown-link">
																<a href="#">transport</a>
															</li>
								
															<li class="dropdown-link">
																<a href="#">ecotourism</a>
															</li>

															<li class="dropdown-link">
																<a href="#">agritourism</a>
															</li>
															<li class="dropdown-link">
																<a href="#">Christmas tours</a>
															</li>
								
															<li class="dropdown-link">
																<a href="#">Carnival SP</a>
															</li>

															<li class="dropdown-link">
																<a href="<?php echo INCLUDE_PATH; ?>tours">Campos do Jordão</a>
															</li>
								
															<li class="dropdown-link">
																<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-pacote-romantico">Romantic Package</a>
															</li>

															<li class="dropdown-link">
																<a href="<?php echo INCLUDE_PATH; ?>en-US/F1">GP São Paulo F1</a>
															</li>

															<li class="dropdown-link">
																<a href="#">theater</a>
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
										<a href="<?php echo INCLUDE_PATH; ?>en-US/transfers">Transfers</i></a>
									</li>

									<li class="nav-link" style="--i: 1.1s">
										<a href="<?php echo INCLUDE_PATH; ?>en-US/F1">GP São Paulo F1</i></a>
									</li>

									<li class="nav-link" style="--i: 1.1s">
										<a href="<?php echo INCLUDE_PATH; ?>shows">Shows</i></a>
									</li>

									<li class="nav-link" style="--i: 1.1s">
									<a><p><i class="fa-solid fa-language"></i></p><i class="fas fa-caret-down"></i></a>
					
										<div class="dropdown">
											<ul>
                                                <li class="dropdown-link">
                                                    <button class="l-button" onclick="pt()"><img src="<?php echo INCLUDE_PATH; ?>/pages/assets/icons/brasil.png" alt="pt-BR"><p>Português</p></button><!-- pt-BR -->
                                                </li>

                                                <li class="dropdown-link">
                                                    <button class="l-button" onclick="en()"><img src="<?php echo INCLUDE_PATH; ?>/pages/assets/icons/estados-unidos.png" alt="en-US"><p>English</p></button><!-- eng-US -->
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <button class="l-button" onclick="es()"><img src="<?php echo INCLUDE_PATH; ?>/pages/assets/icons/espanha.png" alt="es-ES"><p>Espanõl</p></button><!-- en-US -->
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
			`;
			
			document.getElementById("footer").innerHTML=`
				<footer>
					<div class="footer-content">
						<div class="itens-wrap">
							<div class="container-content">
								<ul class="list-unstyled">
									<h3>São Paulo</h3>

									<li>
										<a href="#">The city</a>
									</li>

									<li>
										<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">half day tour</a>
									</li>

									<li>
										<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">full day tour</a>
									</li>

									<li>
										<a href="#">Gastronomic City Tour</a>
									</li>
									<li>
										<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Night life</a>
									</li>

									<li>
										<a href="#">City Events</a>
									</li>

									<li>
										<a href="#">Thematic parks</a>
									</li>

									<li>
										<a href="<?php echo INCLUDE_PATH; ?>en-US/transfers">Transfers</a>
									</li>

									<li>
										<a href="#">Port of Santos</a>
									</li>

									<li>
										<a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Business Visits</a>
									</li>

									<li>
										<a href="#">accommodation</a>
									</li>

									<li>
										<a href="#">transport</a>
									</li>

									<li>
										<a href="#">ecotourism</a>
									</li>

									<li>
										<a href="#">agritourism</a>
									</li>
									<li>
										<a href="#">Christmas tours</a>
									</li>

									<li>
										<a href="#">Carnival SP</a>
									</li>

									<li>
										<a href="<?php echo INCLUDE_PATH; ?>tours">Campos do Jordão</a>
									</li>

									<li>
										<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-pacote-romantico">Romantic Package</a>
									</li>

									<li>
										<a href="<?php echo INCLUDE_PATH; ?>en-US/F1">GP São Paulo F1</a>
									</li>

									<li>
										<a href="#">theater</a>
									</li>

									<li>
										<a href="<?php echo INCLUDE_PATH; ?>tours">TurisMetrô</a>
									</li>
								</ul>
							</div>

							<div class="container-content">
								<ul class="list-unstyled">
									<h3>Other cities</h3>
									<li><a class="text-muted" target="_blank" href="">Rio de Janeiro</a></li>
									<li><a class="text-muted" target="_blank" href="">Foz do Iguaçu</a></li>
									<li><a class="text-muted" target="_blank" href="">Natal / RN</a></li>
									<li><a class="text-muted" target="_blank" href="">Florianópolis / SC</a></li>
									<li><a class="text-muted" target="_blank" href="">Salvador / BA</a></li>
									<li><a class="text-muted" target="_blank" href="">Manaus / AM</a></li>
									<li><a class="text-muted" target="_blank" href="">Fortaleza / CE</a></li>
								</ul>
							</div>
				
				
							<div class="container-content">
								<ul class="list-unstyled">
									<h3>Company</h3>
									<li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">About Us</a></li>
									<li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">Our team</a></li>
									<li><a class="text-muted" target="_blank" href="">Service Terms of Use</a></li>
									<li><a class="text-muted" target="_blank" href="">Privacy Policy</a></li>
									<li><a class="text-muted" target="_blank" href="">Cancellation policy</a></li>
									<li><a class="text-muted" target="_blank" href="">Blog</a></li>
									<li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>contato">Contact</a></li>
								</ul>
							</div>

							<div class="container-content">
								<ul class="list-unstyled">
									<h3>Channels</h3>
									<li><a class="text-muted" target="_blank" href="">Weather forecast</a></li>
									<li><a class="text-muted" target="_blank" href="">Commemorative dates</a></li>
									<li><a class="text-muted" target="_blank" href="">Tips and Addresses</a></li>
									<li><a class="text-muted" target="_blank" href="">Dollar quotation</a></li>
								</ul>
							</div>
				
							<div class="container-content">
								<ul class="list-unstyled">
									<h3>Payment methods</h3>
									<li><a class="text-muted" target="_blank" href="">Ticket</a></li>
									<li><a class="text-muted" target="_blank" href="">Pix</a></li>
									<li><a class="text-muted" target="_blank" href="">Pay Pal</a></li>
								</ul>
							</div>

							<div class="container-content">
								<h3><strong>CHECK POINT Receptive Service</strong></h3>
									<p>Rua Jacques Du Cerceau, 84 - 03624-120 - São Paulo - SP - BRASIL</p>

									<p>Monday to Friday from 9am to 6pm</p>
									
									<p>PABX: <strong>(11) 2791-1316 </strong> After this time, call <strong>(11) 99187-1393</strong></p>
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
						<p>© 2022, Check Point Tours. All rights reserved.</p>
					</div>
				</footer>
			`;
		}




	</script>

	<script type="text/javascript">
		$('#datepicker').datepicker({
			format: "dd/mm/yyyy",
			startDate: '<?php echo $post['data_init']; ?>',                               
			endDate: '<?php echo $post['data_end']; ?>',
			language: "pt-BR",
		});
	</script>
	
	<script>
		$('.timepicker').timepicker({
			use24hours: true,
			timeFormat: 'HH:mm',
			interval: 60,
			minTime: '<?php echo $post['horario_init'];?>',
			maxTime: '<?php echo $post['horario_end'];?>',
			dynamic: false,
			dropdown: true,
			scrollbar: true
		});
	</script>

	<script>
		const slider = document.querySelector(".range");
		const value = document.querySelector(".value");
		value.textContent = slider.value;

		slider.oninput = function(){
			value.textContent = this.value;
		}
	</script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
