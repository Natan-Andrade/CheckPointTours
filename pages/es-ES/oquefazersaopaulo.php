<!DOCTYPE html>
<html lang="es">

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

    <!--Menu-->
    <?php $page = "oquefazersaopaulo"; ?>
    <?php include('header.php'); ?>

        <?php include('SP_content.php'); ?>

    <!--FOOTER-->

    <footer>
        <div class="footer-content">
            <div class="itens-wrap">
                <div class="container-content">
                    <ul class="list-unstyled">
                    <h3><?php echo $cidade; ?></h3>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazersaopaulo">Home</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">tour de medio dia</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">tour de día completo</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-city-tour-gastronomico-">City Tour Gastronómico</a>
                        </li>
                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida nocturna</a>
                        </li>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Eventos de la ciudad</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-parques-tematicos-">parques temáticos</a>
                        </li>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>transfers">transferencias</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-porto-de-santos">Puerto de Santos</a>
                        </li>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>visitadenegocios">Visitas de Negocios</a>
                        </li>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>tours">alojamiento</a>
                        </li>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Transportes</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-eco-turismo-">Ecoturismo</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-agro-turismo-">Agroturismo</a>
                        </li>
                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Giras navideñas</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-carnaval-">Carnaval SP</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-campos-do-jordao-">Campos do Jordão</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-pacote-romantico">Paquete Romántico</a>
                        </li>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>es-ES/F1">GP São Paulo F1</a>
                        </li>

                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>tours">Teatro</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-sao-paulo-turismetro-">TurisMetrô</a>
                        </li>
                    </ul>
                </div>

                <div class="container-content">
                    <ul class="list-unstyled">
                        <h3>Otras ciudades</h3>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazersaopaulo">São Paulo/SP</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazerriodejaneiro">Rio de Janeiro/RJ</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazerfozdoiguacu">Foz do Iguaçu/PR</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazernatal">Natal/RN</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazerflorianopolis">Florianópolis/SC</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazersalvador">Salvador/BA</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazermanaus">Manaus/AM</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazerfortaleza">Fortaleza/CE</a></li>
                    </ul>
                </div>


                <div class="container-content">
                    <ul class="list-unstyled">
                        <h3>Empresa</h3>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">Sobre nosotros</a></a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>sobrenos">Nuestro equipo</a></li>
                        <li><a class="text-muted" target="_blank" href="">Condiciones de uso del servicio</a></li>
                        <li><a class="text-muted" target="_blank" href="">Política de privacidad</a></li>
                        <li><a class="text-muted" target="_blank" href="">política de cancelación</a></li>
                        <li><a class="text-muted" target="_blank" href="">Blog</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>es-ES/contato">Contacto</a></li>
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
            <div class="container-content">
                <ul class="list-unstyled" style="font-size:10px;">
                    <h3>Tareas</h3>
                    <li><a href="https://www.flaticon.com/br/icones-gratis/brasil" title="brasil ícones">Brasil ícones criados por Freepik - Flaticon</a></li>
                    <li><a href="https://www.flaticon.com/br/icones-gratis/estados-unidos" title="estados unidos ícones">Estados unidos ícones criados por Freepik - Flaticon</a></li>
                    <li><a href="https://www.flaticon.com/br/icones-gratis/espanha" title="espanha ícones">Espanha ícones criados por Freepik - Flaticon</a></li>
                </ul>
            </div>

<p>© 2022, Check Point Tours. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

    <?php }else{ 
	include('tour_single.php');
	}
	?>

</body>

</html>
