<!DOCTYPE html>
<html lang="en">

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
<?php $cidade = "Florianópolis" ;?>
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
	$porPagina = 5;
	
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

            <a href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerflorianopolis"><img style="width: 70%;" class="logo" src="<?php echo INCLUDE_PATH; ?>/logos/logo.png"></a>
            </div>

            <div class="nav-btn">
                <div class="nav-links">

                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerflorianopolis">Home</a>
                        </li>

                        <li class="nav-link" style="--i: .6s">
                        <a href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerflorianopolis">Florianópolis<i class="fas fa-caret-down"></i></a>
                            

                            <div class="dropdown">
                                
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>oquefazerflorianopolis">Home</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Tour De Meio Dia</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                         <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Tour de Dia Inteiro</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Vida Noturna</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Pontos turísticos</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Praias</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Compras</a>
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Beto Carrero World</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Blumenau</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Camboriú</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Guarda do Embaú</a>
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Oktoberfest</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-link" style="--i: 1.1s">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Tours</a>
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
                                        <a href="<?php echo INCLUDE_PATH; ?>oquefazerflorianopolis"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Português</p></a><!-- pt-BR -->
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerflorianopolis"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>English</p></a><!-- eng-US -->
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>es-ES/oquefazerflorianopolis"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Espanõl</p></a><!-- en-US -->
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

        <?php include('SC_content.php'); ?>

    <!--FOOTER-->
    <footer>
        <div class="footer-content">
            <div class="itens-wrap">
                <div class="container-content">
                    <ul class="list-unstyled">
                        <h3><?php echo $cidade;?></h3>
                        <li class="">
                            <a href="<?php echo INCLUDE_PATH; ?>oquefazerflorianopolis">Home</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Tour De Meio Dia</a>
                        </li>

                        <li class="">
                                <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Tour de Dia Inteiro</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Vida Noturna</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Pontos turísticos</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Praias</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Compras</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Beto Carrero World</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Blumenau</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Camboriú</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Guarda do Embaú</a>
                        </li>

                        <li class="">
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-em-florianopolis-">Oktoberfest</a>
                        </li>
                    </ul>
                </div>

                <div class="container-content">
                    <ul class="list-unstyled">
                        <h3>Other cities</h3>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazersaopaulo">São Paulo/SP</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerriodejaneiro">Rio de Janeiro/RJ</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerfozdoiguacu">Foz do Iguaçu/PR</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazernatal">Natal/RN</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerflorianopolis">Florianópolis/SC</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazersalvador">Salvador/BA</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazermanaus">Manaus/AM</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerfortaleza">Fortaleza/CE</a></li>
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
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/contato">Contact</a></li>
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
            <div class="container-content">
                <ul class="list-unstyled" style="font-size:10px;">
                    <h3>Assignments</h3>
                    <li><a href="https://www.flaticon.com/br/icones-gratis/brasil" title="brasil ícones">Brasil ícones criados por Freepik - Flaticon</a></li>
                    <li><a href="https://www.flaticon.com/br/icones-gratis/estados-unidos" title="estados unidos ícones">Estados unidos ícones criados por Freepik - Flaticon</a></li>
                    <li><a href="https://www.flaticon.com/br/icones-gratis/espanha" title="espanha ícones">Espanha ícones criados por Freepik - Flaticon</a></li>
                </ul>
            </div>

<p>© 2022, Check Point Tours. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

    

    <?php }else{ 
	include('tour_single.php');
	}
	?>

</body>

</html>