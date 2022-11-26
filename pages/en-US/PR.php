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
	$porPagina = 3;
	
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

            <a href="<?php echo INCLUDE_PATH; ?>en-US/PR"><img style="width: 70%;" class="logo" src="<?php echo INCLUDE_PATH; ?>/logos/logo.png"></a>

            <!-- <img  style="width: 55%;" class="logo" src="./logo2.jpg">-->
            </div>

            <div class="nav-btn">
                <div class="nav-links">

                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="<?php echo INCLUDE_PATH; ?>en-US/PR">Home</a>
                        </li>

                        <li class="nav-link" style="--i: .6s">
                        <a href="<?php echo INCLUDE_PATH; ?>en-US/PR">Foz do Iguaçu<i class="fas fa-caret-down"></i></a>
                            

                            <div class="dropdown">
                                
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="en-US/PR">Home</a>
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
                                        <a href="<?php echo INCLUDE_PATH; ?>PR"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\brasil.png" alt="pt-BR"><p>Português</p></a><!-- pt-BR -->
                                    </li>

                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>en-US/PR"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\estados-unidos.png" alt="en-US"><p>English</p></a><!-- eng-US -->
                                    </li>
        
                                    <li class="dropdown-link">
                                        <a href="<?php echo INCLUDE_PATH; ?>es-ES/PR"><img src="<?php echo INCLUDE_PATH; ?>\pages\assets\icons\espanha.png" alt="es-ES"><p>Espanõl</p></a><!-- en-US -->
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

        <section class="descricao-autor">
            <div class="center">
                <div class="w100 left">
                    <div class="container-img">
                        <div class="img-autor" style="background-image: url(<?php echo INCLUDE_PATH ?>/images/Luciano-abreu.jpeg);"></div>
                    </div>

                    <div class="container-description">
                        <h2 class="text-center">
                            <?php echo $infoSite['nome_autor']; ?>
                        </h2>
                        <p class="p-align"><?php echo $infoSite['eng_descricao']; ?></p>
                    </div>
                </div><!--w100-->
                    <div class="clear"></div>
            </div><!--center-->
        </section><!--descricao-autor-->
    </nav>

    <!--SECTION 1-->
    <section>
        <div class="box-align">
            <div class="container-title">
                <h1 class="title-box" id="txtrect"><?php echo $infoSite['eng_title1'], $cidade; ?></h1>
            </div>
        </div>
        <div class="itens-wrap">
            <div class="container-content">
                <h3 class="f-icon"><i class="<?php echo $infoSite['icone1']; ?>" aria-hidden="true"></i></h3>
                <h2 class="text-center"><?php echo $infoSite['eng_sub_title1']; ?></h2>
                <p class="p-align"><?php echo $infoSite['eng_descricao1']; ?></p>
            </div>

            <div class="container-content">
                <h3 class="f-icon"><i class="<?php echo $infoSite['icone2']; ?>" aria-hidden="true"></i></h3>
				<h2 class="text-center"><?php echo $infoSite['eng_sub_title2']; ?></h2>
				<p class="p-align"><?php echo $infoSite['eng_descricao2']; ?></p>
            </div>

            <div class="container-content">
                <h3 class="f-icon"><i class="<?php echo $infoSite['icone3']; ?>" aria-hidden="true"></i></h3>
				<h2 class="text-center"><?php echo $infoSite['eng_sub_title3']; ?></h2>
				<p class="p-align"><?php echo $infoSite['eng_descricao3']; ?></p>
            </div>
        </div>
    </section>

 

    <section class="grid">
        <div class="container-row">
    
            <div class="row-items">
                <div class="container-title">
                    <h2>HIGHLIGHTS</h2>
                </div>

                <div class="margin-items">
                    <div class="sideitem" style="background-image: url(<?php echo $infoSite['PR_bg1']; ?>);">
                        <div class="row-content">
                            <h3>full day city tours</h3>
                            
                            <a href="#" target="_blank">See more >></a>

                        </div><!--row-content-->
                    </div><!--sideitem-->

                    <div class="item_1" style="background-image: url(<?php echo $infoSite['PR_bg2']; ?>);">
                        <div class="row-content">
                            <h3>half day tours</h3>
                            
                            <a href="#" target="_blank">See more >></a>

                        </div><!--row-content-->
                    </div><!--sideitem-->

                    <div class="sideitem-2" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/banners/eng_dance_banner.png);">
                        
                    </div><!--sideitem-->

                </div>
            </div><!--row-items-->
        </div>


    </section>

    <?php
		$porPagina = 7;
		if(!isset($_POST['parametro'])){
		if($categoria['nome'] == ''){
			echo '<h2></h2>';
		}else{
			echo '<h2>Visualizando Posts em <span>'.$categoria['nome'].'</span></h2>';
		}
		}else{
			echo '<h2><i class="fa fa-check"></i> Busca realizada com sucesso!</h2>';
		}

		$query = "SELECT * FROM `tb_site.tours` ";
		if($categoria['nome'] != ''){
			$categoria['id'] = (int)$categoria['id'];
			$query.="WHERE categoria_id = $categoria[id]";
		}
		if(isset($_POST['parametro'])){
			if(strstr($query,'WHERE') !== false){
				$busca = $_POST['parametro'];
				$query.=" AND titulo LIKE '%$busca%'";
			}else{
				$busca = $_POST['parametro'];
				$query.=" WHERE titulo LIKE '%$busca%'";
			}
		}
		$query2 = "SELECT * FROM `tb_site.tours` "; 
		if($categoria['nome'] != ''){
				$categoria['id'] = (int)$categoria['id'];
				$query2.="WHERE categoria_id = $categoria[id]";
		}
		if(isset($_POST['parametro'])){
			if(strstr($query2,'WHERE') !== false){
				$busca = $_POST['parametro'];
				$query2.=" AND titulo LIKE '%$busca%'";
			}else{
				$busca = $_POST['parametro'];
				$query2.=" WHERE titulo LIKE '%$busca%'";
			}
		}
		$totalPaginas = MySql::conectar()->prepare($query2);
		$totalPaginas->execute();
		$totalPaginas = ceil($totalPaginas->rowCount() / $porPagina);
		if(!isset($_POST['parametro'])){
			if(isset($_GET['pagina'])){
				$pagina = (int)$_GET['pagina'];
				if($pagina > $totalPaginas){
					$pagina = 1;
				}
				
				$queryPg = ($pagina - 1) * $porPagina;
				$query.=" ORDER BY order_id ASC LIMIT $queryPg,$porPagina";
			}else{
				$pagina = 1;
				$query.=" ORDER BY order_id ASC LIMIT 0,$porPagina";
			}
		}else{

			$query.=" ORDER BY order_id ASC";
		}
		$sql = MySql::conectar()->prepare($query);
		$sql->execute();
		$tours = $sql->fetchAll();
	?>


	<section class="side-container">

	<?php
		foreach($tours as $key=>$value){
		$sql = MySql::conectar()->prepare("SELECT `slug` FROM `tb_site.categorias` WHERE id = ?");
		$sql->execute(array($value['categoria_id']));
		$categoriaNome = $sql->fetch()['slug'];
	?>

        
		<div class="travels">
			<div class="travels-content" style="background-image: url(' <?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['capa']; ?> ');">
				<div class="travels-text">
					<a href="<?php echo INCLUDE_PATH; ?>tours/<?php echo $categoriaNome; ?>/<?php echo $value['slug']; ?>">
						<h2><?php echo substr(strip_tags($value['eng_titulo']),0,20).'...'; ?></h2>
					</a>
				</div>
			</div>
		</div>

	<?php } ?>
	</section>


    <section class="grid-bg">
        <div class="aside1-mobile">
            <div class="container-title">
                <h2>HIGHLIGHTS</h2>
                <h3>LEASING AND TRANSPORTATION</h3>

                <ul class="grid-ul">
                    <li style="list-style: disc inside; font-style: italic;">Helicopter</li>
                    <li style="list-style: disc inside; font-style: italic;">Bus</li>
                    <li style="list-style: disc inside; font-style: italic;">Vans</li>
                    <li style="list-style: disc inside; font-style: italic;">Armored execution cars</li>
                </ul>
            </div>
        </div>

        <div class="double-grid">

            <div class="grid-main">

                <aside class="aside1">
                    <div class="container-title">
                        <h2>HIGHLIGHTS</h2>
                        <h3>LEASING AND TRANSPORTATION</h3>

                        <ul class="grid-ul">
                            <li style="list-style: disc inside; font-style: italic;">Helicopter</li>
                            <li style="list-style: disc inside; font-style: italic;">Bus</li>
                            <li style="list-style: disc inside; font-style: italic;">Vans</li>
                            <li style="list-style: disc inside; font-style: italic;">Armored execution cars</li>
                        </ul>
                    </div>
                </aside>
                
                <aside class="aside2" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/helic.jpg);">
                </aside>
        
                <section class="section1" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/transfer.jpg);">
                </section>
        
                <section class="section2">
                    <a href="#" class="buttonClass">All transfers</a>
                </section>

                <section class="section3" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/onibus1.jpg);">
                </section>

                <section class="section4" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/van2.jpg);">
                </section>

            </div>
        </div>  
    </section>  

        <div class="full-item" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/F1/5.jpg);">

            <div class="button">
                <div class="log-sign" style="--i: 1.8s">
                    <a href="#" class="btn transparent">GP São Paulo F1</a>
                </div>
            </div>

            <div class="full-item-content">
                <div class="full-gradiant">
                    <div class="full-ul">
                        <ul>
                            <li><a href="#">Tickets</a></li>
                            <li><a href="#">Transfers</a></li>
                            <li><a href="#">Transport rental</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!--<section class="grid">
        <div class="title-slide">
            <p>CONHEÇA NOSSOS DESTAQUES</p>
            <h2>Descubra seu próximo destino</h2>
        </div>


        <div class="container-grid">
            <div class="sidenav" onclick="window.location.href='./tours.html'">
                <div class="container-content">
                    <h1>teste</h1>
                    <p></p>
                </div>
            </div>

            <div class="footer-1" onclick="window.location.href='./tours.html'">
                <div class="container-content">
                    <h1>teste</h1>
                    <p></p>
                </div>
            </div>
            
            <div class="item-1" onclick="window.location.href='./tours.html'">
                <div class="container-content">
                    <h1>teste</h1>
                    <p></p>
                </div>
            </div>
            <div class="item-2" onclick="window.location.href='./tours.html'">
                <div class="container-content">
                    <h1>teste</h1>
                    <p></p>
                </div>
            </div>
            
            <div class="footer-2" onclick="window.location.href='./tours.html'">
                <div class="container-content">
                    <h1>teste</h1>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="btn-grid">
            <div class="log-btn" style="--i: 1.8s">
                <a href="./tours.html" class="btn-banner transparent">Ver mais</a>
            </div>
        </div>
    </section>-->

    <section class="rate">
            <div class="box-align">
                <div class="container-title">
                    <h2>What do our customers say?</h2>
                </div>
            </div>
        <div class="itens-wrap">
            <div class="container-content">

            <div id="TA_selfserveprop816" class="TA_selfserveprop"><ul id="ZFtQBAQTn" class="TA_links ymje2Gv0vbJ"><li id="gZXmipaZ" class="pPV4o22"><a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g303631-d4289356-Reviews-Check_Point_Receptive_Service-Sao_Paulo_State_of_Sao_Paulo.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=816&amp;locationId=4289356&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
            
        </div>
    </section>

    <!--BLOG

        <section class="blog">

            <div class="news">
                <div class="blog-title">
                    <h2>O que fazer em São Paulo?</h2>
                    <a href="https://www.oquefazersaopaulo.com.br/" target="_blank">ver mais artigos no blog >></a> 
                </div>

                <div class="new">
                    <div class="bg-n1"></div>
                        <div class="news-content">
                        <h4>10 praias paradisíacas para curtir no Litoral de São Paulo</h4>
                        <p>Se você está em busca de faixas de areia super preservadas e com belezas naturais super autênticas, então o Litoral Norte de São Paulo sem dúvidas vai te surpreender...</p>
                        <a href="https://oquefazersaopaulo.com.br/10-praias-paradisiacas-para-curtir-no-litoral-de-sao-paulo/" target="_blank">continuar lendo >></a>
                    </div>
                </div>

                <div class="new">
                    <div class="bg-n2"></div>
                        <div class="news-content">
                        <h4>São Paulo: 4 roteiros alternativos para explorar a cidade</h4>
                        <p>4 super roteiros alternativos para você descobrir redutos da natureza, ouvir histórias, degustar uma boa comida e ainda viajar no tempo; tudo isso em meio à agitada metrópole....</p>
                        <a href="https://oquefazersaopaulo.com.br/sao-paulo-4-roteiros-alternativos-para-explorar-a-cidade/" target="_blank">continuar lendo >></a>
                    </div>
                </div>

                <div class="new">
                    <div class="bg-n3"></div>
                        <div class="news-content">
                        <h4>4 destinos incríveis que a Check Point te leva para conhecer!</h4>
                        <p>Quem faz turismo no Brasil sabe bem que o que não faltam por aqui são belezas naturais abundantes, incrível diversidade cultural e um povo que adora receber bem. Abaixo, listamos quatro destinos nacionais que a Check Point Tours leva você para conhecer, com toda segurança que o momento exige....</p>
                        <a href="https://oquefazersaopaulo.com.br/pensando-em-viajar-conheca-4-destinos-incriveis-que-a-check-point-te-leva-para-conhecer/" target="_blank">continuar lendo >></a>
                    </div>
                </div>

            </div>

        </section>

    -->

    <!--FOOTER-->

    <footer>
        <div class="footer-content">
            <div class="itens-wrap">
                <div class="container-content">
                    <ul class="list-unstyled">
                        <h3>São Paulo</h3>
   

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
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazersaopaulo">São Paulo/SP</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazerriodejaneiro">Rio de Janeiro/RJ</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/PR">Foz do Iguaçu/PR</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/oquefazernatal">Natal/RN</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/SC">Florianópolis/SC</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/BA">Salvador/BA</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/AM">Manaus/AM</a></li>
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>en-US/CE">Fortaleza/CE</a></li>
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

    <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

    

    <?php }else{ 
	include('tour_single.php');
	}
	?>

</body>

</html>
