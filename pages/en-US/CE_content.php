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
                    <div class="sideitem" style="background-image: url(<?php echo $infoSite['CE_bg1']; ?>);">
                        <div class="row-content">
                            <h3>full day city tours</h3>
                            
                            <a href="#" target="_blank">See more >></a>

                        </div><!--row-content-->
                    </div><!--sideitem-->

                    <div class="item_1" style="background-image: url(<?php echo $infoSite['CE_bg2']; ?>);">
                        <div class="row-content">
                            <h3>half day tours</h3>
                            
                            <a href="#" target="_blank">See more >></a>

                        </div><!--row-content-->
                    </div><!--sideitem-->

                    <div class="sideitem-2" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/banners/fortalezabg-eng.png);">
                        
                    </div><!--sideitem-->

                </div>
            </div><!--row-items-->
        </div>


    </section>

    <?php
		$porPagina = 7;
		if(!isset($_POST['parametro'])){
		if($categoria['nome'] == 'O que fazer em Fortaleza'){
			echo '';
		}else{
			echo '';
		}
		}else{
			echo '';
		}

		$query = "SELECT * FROM `tb_site.tours` ";
		if($categoria['nome'] != 'O que fazer em Fortaleza'){
			$categoria['id'] = 37;
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
		if($categoria['nome'] != 'O que fazer em Fortaleza'){
				$categoria['id'] = 37;
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
					<a href="<?php echo INCLUDE_PATH; ?>tours/<?php echo $categoriaNome; ?>">
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
                    <a href="<?php echo INCLUDE_PATH; ?>en-US/transfers" class="buttonClass">All transfers</a>
                </section>

                <section class="section3" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/onibus1.jpg);">
                </section>

                <section class="section4" style="background-image: url(<?php echo INCLUDE_PATH ?>pages/assets/imgs/imgs-grid/van2.jpg);">
                </section>

            </div>
        </div>  
    </section>  

        <?php include('f1-painel.php'); ?>

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
