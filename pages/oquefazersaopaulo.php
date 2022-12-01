<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./home/favico.jpg" />
    <title>Check Point Tours</title>

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/home.css">

</head>

<body>
<?php $cidade = "São Paulo"?>
<?php
	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		$selectImagem = MySql::conectar()->prepare("SELECT slide FROM `tb_site.slides` WHERE id = ?");
		$selectImagem->execute(array($_GET['excluir']));

		$imagem = $selectImagem->fetch()['slide'];
		Painel::deleteFile($imagem);
		Painel::deletar('tb_site.slides',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'listar-slides');
	}else if(isset($_GET['order']) && isset($_GET['id'])){
		Painel::orderItem('tb_site.slides',$_GET['order'],$_GET['id']);
	}

	$paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
	$porPagina = 1;
	
	$slides = Painel::selectAll('tb_site.slides',($paginaAtual - 1) * $porPagina,$porPagina);


	error_reporting(E_ERROR | E_PARSE);
	$url = explode('/',$_GET['url']);
	if(!isset($url[2]))
	{
	$categoria = MySql::conectar()->prepare("SELECT * FROM `tb_site.categorias` WHERE slug = ?");
	$categoria->execute(array(@$url[1]));
	$categoria = $categoria->fetch();
	
?>
	<?php
			foreach ($slides as $key => $value) {
		?>

    <?php } ?>

    <section style="margin-top: 80px;">
        <div class="center">
            <h2 style="text-align: center; padding: 30px 0;"><i class="fa-solid fa-triangle-exclamation"></i> Site em Construção</h2>
        </div>
    </section>

    <!--Menu-->
    <header>
        <div class="container">
            <input type="checkbox" name="" id="check">
                
                <div class="logo-container">
                    <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo"><img style="width: 70%;" class="logo" src="<?php echo INCLUDE_PATH; ?>/logos/logo.png"></a>
                </div>
            <div class="nav-btn">
                <div class="nav-links">

                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo">Home</a>
                        </li>

                        <li class="nav-link" style="--i: .6s">
                            <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo">São Paulo<i class="fas fa-caret-down"></i></a>
                            

                            <div class="dropdown">
                                
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">Tour De Meio Dia</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                         <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">Tour de Dia Inteiro</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-city-tour-gastronomico-">City Tour Gastronômico</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida Noturna</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>tours">Eventos da Cidade</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-parques-tematicos-">Parques Temáticos</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>transfers">Traslados</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-porto-de-santos">Porto de Santos</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Visitas de Negócios</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="#">mais<i class="fas fa-caret-down"></i></a>

                                        <div class="dropdown second">
                                            <ul>

                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>tours">Hospedagem</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>tours">Transportes</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-eco-turismo-">Ecoturismo</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-agro-turismo-">Agroturismo</a>
                                                </li>
                                                <li class="dropdown-link">
                                                    <a href="<?php echo INCLUDE_PATH; ?>tours">Tours Natalinos</a>
                                                </li>
                    
                                                <li class="dropdown-link">
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-carnaval-">Carnaval SP</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-campos-do-jordao-">Campos do Jordão</a>
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
                                                    <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-turismetro-">TurisMetrô</a>
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
                                        <a href="<?php echo INCLUDE_PATH; ?>oquefazersaopaulo"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Português</p></a><!-- pt-BR -->
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>en-US/oquefazersaopaulo"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>English</p></a><!-- eng-US -->
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazersaopaulo"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Espanõl</p></a><!-- en-US -->
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="hamburguer-menu-container">
                <div class="hamburguer-menu">
                    <div></div>
                </div>
            </div>

        </div>
    </header>

        <?php include('SP_content.php'); ?>

    <!--FOOTER-->
    <footer>
        <div class="footer-content">
            <div class="itens-wrap">
                <div class="container-content">
                    <ul class="list-unstyled">
                        <h3><?php echo $cidade; ?></h3>

                        <li>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">Tour De Meio Dia</a>
                        </li>

                        <li>
                             <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">Tour de Dia Inteiro</a>
                        </li>

                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>tours">City Tour Gastronômico</a>
                        </li>
                        <li>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-vida-noturna-">Vida Noturna</a>
                        </li>

                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Eventos da Cidade</a>
                        </li>

                        <li>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-parques-tematicos-">Parques Temáticos</a>
                        </li>

                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>transfers">Traslados</a>
                        </li>

                        <li>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-porto-de-santos">Porto de Santos</a>
                        </li>

                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Visitas de Negócios</a>
                        </li>

                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Hospedagem</a>
                        </li>

                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Transportes</a>
                        </li>

                        <li>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-eco-turismo-">Ecoturismo</a>
                        </li>

                        <li>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-agro-turismo-">Agroturismo</a>
                        </li>
                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Tours Natalinos</a>
                        </li>

                        <li>
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Carnaval SP</a>
                        </li>

                        <li>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-campos-do-jordao-">Campos do Jordão</a>
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
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazerflorianopolis">Florianópolis/SC</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazersalvador">Salvador/BA</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazermanaus">Manaus/AM</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazerfortaleza">Fortaleza/CE</a></li>
                    </ul>
                </div>
    
    
                <div class="container-content">
                    <ul class="list-unstyled">
                        <h3>Empresa</h3>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">Sobre nós</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">Nossa Equipe</a></li>
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

    <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

    <?php }else{ 
	include('tour_single.php');
	}
	?>

</body>

</html>
