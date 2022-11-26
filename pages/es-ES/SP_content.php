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
                        <p class="p-align"><?php echo $infoSite['esp_descricao']; ?></p>
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
                <h1 class="title-box" id="txtrect"><?php echo $infoSite['esp_title1'], $cidade; ?></h1>
            </div>
        </div>
        <div class="itens-wrap">
            <div class="container-content">
                <h3 class="f-icon"><i class="<?php echo $infoSite['icone1']; ?>" aria-hidden="true"></i></h3>
                <h2 class="text-center"><?php echo $infoSite['esp_sub_title1']; ?></h2>
                <p class="p-align"><?php echo $infoSite['esp_descricao1']; ?></p>
            </div>

            <div class="container-content">
                <h3 class="f-icon"><i class="<?php echo $infoSite['icone2']; ?>" aria-hidden="true"></i></h3>
				<h2 class="text-center"><?php echo $infoSite['esp_sub_title2']; ?></h2>
				<p class="p-align"><?php echo $infoSite['esp_descricao2']; ?></p>
            </div>

            <div class="container-content">
                <h3 class="f-icon"><i class="<?php echo $infoSite['icone3']; ?>" aria-hidden="true"></i></h3>
				<h2 class="text-center"><?php echo $infoSite['esp_sub_title3']; ?></h2>
				<p class="p-align"><?php echo $infoSite['esp_descricao3']; ?></p>
            </div>
        </div>
    </section>

    <section class="grid">
        <div class="container-row">
    
            <div class="row-items">
                <div class="container-title">
                    <h2>Destaques</h2>
                </div>

                <div class="margin-items">
                    <div class="sideitem" style="background-image: url(<?php echo $infoSite['SP_bg1']; ?>);">
                        <div class="row-content">
                            <h3>City Tours de día completo por la ciudad</h3>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-" target="_blank">Ver más >></a>

                        </div><!--row-content-->
                    </div><!--sideitem-->

                    <div class="item_1" style="background-image: url(<?php echo $infoSite['SP_bg2']; ?>);">
                        <div class="row-content">
                            <h3>City tours de medio día</h3>
                            <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia" target="_blank">Ver más >></a>

                        </div><!--row-content-->
                    </div><!--sideitem-->

                    <a href="<?php echo INCLUDE_PATH ?>tours" class="sideitem-2" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/banners/esp_dance_banner.png);">
                    </a><!--sideitem-->

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
						<h2><?php echo substr(strip_tags($value['esp_titulo']),0,20).'...'; ?></h2>
					</a>
				</div>
			</div>
		</div>

	<?php } ?>
	</section>


    <section class="grid-bg">
        <div class="aside1-mobile">
            <div class="container-title">
                <h2>DESTACAR</h2>
                <h3>ARRENDAMIENTO Y TRANSPORTE</h3>

                <ul class="grid-ul">
                    <li style="list-style: disc inside; font-style: italic;">Helicópteros</li>
                    <li style="list-style: disc inside; font-style: italic;">Autobús</li>
                    <li style="list-style: disc inside; font-style: italic;">Furgonetas</li>
                    <li style="list-style: disc inside; font-style: italic;">Coches de ejecución blindados</li>
                </ul>
            </div>
        </div>

        <div class="double-grid">

            <div class="grid-main">

                <aside class="aside1">
                    <div class="container-title">
                        <h2>DESTACAR</h2>
                        <h3>ARRENDAMIENTO Y TRANSPORTE</h3>

                        <ul class="grid-ul">
                            <li style="list-style: disc inside; font-style: italic;">Helicópteros</li>
                            <li style="list-style: disc inside; font-style: italic;">Autobús</li>
                            <li style="list-style: disc inside; font-style: italic;">Furgonetas</li>
                            <li style="list-style: disc inside; font-style: italic;">Coches de ejecución blindados</li>
                        </ul>
                    </div>
                </aside>
                
                <aside class="aside2" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/helic.jpg);">
                </aside>
        
                <section class="section1" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/transfer.jpg);">
                </section>
        
                <section class="section2">
                    <a href="<?php echo INCLUDE_PATH; ?>es-ES/transfers" class="buttonClass">ver todas las transferencias</a>
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
                    <a href="<?php echo INCLUDE_PATH; ?>es-ES/F1" class="btn transparent">GP São Paulo F1</a>
                </div>
            </div>

            <div class="full-item-content">
                <div class="full-gradiant">
                    <div class="full-ul">
                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH; ?>es-ES/ingressos">Entradas</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>es-ES/transfers">Transferencias</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>es-ES/transfers">Alquiler de transporte</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </section>


    <section class="rate">
            <div class="box-align">
                <div class="container-title">
                    <h2>¿QUÉ DICEN NUESTROS CLIENTES?</h2>
                </div>
            </div>
        <div class="itens-wrap">
            <div class="container-content">

            <div id="TA_selfserveprop948" class="TA_selfserveprop"><ul id="EB16KcVae8" class="TA_links GHpm0Z"><li id="sT7vjhe" class="pGK4Zk"><a target="_blank" href="https://www.tripadvisor.es/Attraction_Review-g303631-d4289356-Reviews-Check_Point_Receptive_Service-Sao_Paulo_State_of_Sao_Paulo.html"><img src="https://www.tripadvisor.es/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-11900-2.svg" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=948&amp;locationId=4289356&amp;lang=es&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=true&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
        </div>
    </section>