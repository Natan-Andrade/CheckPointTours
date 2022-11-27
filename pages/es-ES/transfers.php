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
	$porPagina = 2;
	
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

    <!--Menu-->
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
                                        <a href="<?php echo INCLUDE_PATH; ?>transfers"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Português</p></a><!-- pt-BR -->
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>en-US/transfers"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>English</p></a><!-- eng-US -->
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>es-ES/transfers"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Espanõl</p></a><!-- en-US -->
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

    <nav>
        <div class="bg-banner" style="background-image: url(' <?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['slide']; ?> ');">
        </div>
    </nav>

    <section class="transfer">
        <div class="box-align">
            <div class="container-title">
                <h1 class="title-box" id="txtrect">ALQUILER DE TRANSPORTE</h1>
                <p>Tu empresa de alquiler de coches en São Paulo</p>
                <div class="button-main">
                    <a class="ancora" href="#form" >Reservar</a>
                </div>
            </div>
        </div>

        <div class="w-100-container">

            <div class="w-50left">
                <div class="w-50left-container">
                    <div class="container-content">
                        <h3 class="f-icon"><i class="<?php echo $infoSite['icone1']; ?>" aria-hidden="true"></i></h3>
                        <h2 class="text-center">Autos Ejecutivos</h2>
                        <p><?php echo $infoSite['esp_transfers_description1']; ?></p>
                    </div>
                </div>
            </div>

            <div class="w-50right" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/carro3.jpg); background-position: 50%;">
            </div>

        </div>

        <div class="w-100-container">

            <div class="w-50right" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/van3.jpg); background-position: 50%;">
            </div>

            <div class="w-50left">
                <div class="w-50left-container">
                    <div class="container-content">
                        <h3 class="f-icon"><i class="fa-solid fa-van-shuttle"></i></h3>
                        <h2 class="text-center">Furgonetas y Minivans</h2>
                        <p><?php echo $infoSite['esp_transfers_description2']; ?></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-100-container">

            <div class="w-50left">
                <div class="w-50left-container">
                    <div class="container-content">
                        <h3 class="f-icon"><i class="fa-solid fa-bus-simple"></i></h3>
                        <h2 class="text-center">Autobús y Minibús</h2>
                        <p><?php echo $infoSite['esp_transfers_description3']; ?></p>
                    </div>
                </div>
            </div>

            <div class="w-50right" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/onibus3.jpg); background-position: 50%;">
            </div>

        </div>

        <div class="full-item" style="height: auto;">
            <div class="container-content" style="text-align: center; padding:50px 0;">
                <h3 class="f-icon"><i class="fa-solid fa-helicopter"></i></h3>
				<h2 class="text-center">Helicópteros</h2>
                <p><?php echo $infoSite['esp_transfers_description4']; ?></p>
            </div>
        </div>

        <div class="full-item" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/helic.jpg); background-position: 50% 60%;">
        </div>
    </section>

    <div id="form"></div>



    <section class="transfer-form">

        <div class="form_title">
            <h3>RESERVA UN TRASLADO</h3>
        </div>

        <form target="_blank" action="https://formsubmit.co/atendimento@checkpointtours.com.br" method="POST">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="http://localhost/Checkpointtours/enviado">

            <div>
                <label for="festa">Vehículo:</label>
                </br>
                <select name="veiculo" id="option" class="form-select" form="carform">
                    <option value="Carro Executivo">Coche Ejecutivo</option>
                    <option value="Van">Furgonetas</option>
                    <option value="Minivan">Minivans</option>
                    <option value="Ônibus">Autobús</option>
                    <option value="Microonibus">Minibús</option>
                    <option value="Helicóptero">Helicópteros</option>
                </select>
            </div>

            <div>
                <label>Elige una fecha:</label>
                </br>
                <input type="date" id="data" name="data_principal" class="form-select" required>
            </div>

            <div>
                <label>Tiempo:</label>
                </br>
                <input type="time" id="horario" required name="horário" class="form-select" required>
            </div>

            <div>
                <label>Ubicación de inicio:</label>
                </br>
                <input type="text" id="inicio" required name="horário" class="form-select" required>
            </div>

            <div>
                <label>Destino:</label>
                </br>
                <input type="text" id="destino" required name="horário" class="form-select" required>
            </div>

            <div>
                <label>Nombre:</label>
                </br>
                <input type="text" id="nome" required name="nome" placeholder="Nome" class="form-select" required>
            </div>

            <div>
                <label>Cantidad de personas:</label>
                </br>
                <input type="number" min="1" id="qtd" required name="qtd" placeholder="Ex. 5" class="form-select" required>
            </div>

            <div>
                <label>Email de contacto:</label>
                </br>
                <input type="email" id="email" required name="email" placeholder="Email Address" class="form-select" required>
            </div>

            <button type="submit" class="submit-button">Reserva antes de pagar</button>

            <a class="button_reservar" href="https://wa.me/551127911316?text="
                
                onclick="location.href=this.href
                    +'Formulário de Contato'

                    +'%0a'
                    +'%0a'

                    +'Nome: '
                    +document.getElementById('nome').value

                    +'%0a'
                    +'%0a'

                    +'Veículo: '
                    +document.getElementById('option').value

                    +'%0a'
                    +'%0a'

                    +'Local de Início: '
                    +document.getElementById('inicio').value

                    +'%0a'
                    +'%0a'

                    +'Local de destíno: '
                    +document.getElementById('destino').value

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
                    +document.getElementById('qtd').value

                return false;" target="_blank" rel="noopener noreferrer">

                <div class="inside_button">
                reserva por whatsapp <i class="fa-brands fa-whatsapp"></i>
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
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazersaopaulo">São Paulo/SP</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazerriodejaneiro">Rio de Janeiro/RJ</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/PR">Foz do Iguaçu/PR</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazernatal">Natal/RN</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/SC">Florianópolis/SC</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazersalvador">Salvador/BA</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/AM">Manaus/AM</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/CE">Fortaleza/CE</a></li>
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
            <p>© 2022, Check Point Tours. Todos los derechos reservados.</p>
        </div>
    </footer>

    
     <!--
    <img src="./assets/imgs/historia-cor-azul.jpg" />
    <img src="./assets/imgs/paleta-de-colores-azul-pastel.png"/>
    <img src="./assets/imgs/a2bf025e36d455d8131b24a51ae314da.png"/>
    -->

    <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

    <?php }else{ 
	include('tour_single.php');
	}
	?>

</body>

</html>