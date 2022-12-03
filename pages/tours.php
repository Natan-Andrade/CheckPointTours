
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
		<link rel="shortcut icon" href="./home/favico.jpg" />
		<title>Check Point Tours</title>

		<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/tours.css">
	</head>

	<body>


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
                                        <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida Nortuna</a>
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
                                                    <a href="#">Carnaval SP</a>
                                                </li>

                                                <li class="dropdown-link">
                                                    <a href="#">Campos do Jordão</a>
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

	<?php
		$url = explode('/',$_GET['url']);
		if(!isset($url[2]))
		{
		$categoria = MySql::conectar()->prepare("SELECT * FROM `tb_site.categorias` WHERE slug = ?");
		$categoria->execute(array(@$url[1]));
		$categoria = $categoria->fetch();
	?>
		<section class="container-portal">
			<div class="center">
			
				<div class="sidebar">
						<form id="form" method="post" class="serch-box">
							<h3><i class="fa fa-search"></i></h3>
							<input class="serch-bar" type="text" name="parametro" placeholder="O que deseja procurar?" required />
							<input class="serch-submit" type="submit" name="buscar" value="Pesquisar">
						</form>

						<!--<div class="btn-container" >
							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="São Paulo" required />
								<input class="city-btn" type="submit" name="buscar" value="São Paulo">
							</form>

							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="Rio de Janeiro" required />
								<input class="city-btn" type="submit" name="buscar" value="Rio de Janeiro">
							</form>

							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="Foz do Iguaçu" required />
								<input class="city-btn" type="submit" name="buscar" value="Foz do Iguaçu">
							</form>

							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="Natal" required />
								<input class="city-btn" type="submit" name="buscar" value="Natal">
							</form>

							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="Florianópolis" required />
								<input class="city-btn" type="submit" name="buscar" value="Florianópolis">
							</form>

							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="Salvador" required />
								<input class="city-btn" type="submit" name="buscar" value="Salvador">
							</form>

							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="Manaus" required />
								<input class="city-btn" type="submit" name="buscar" value="Manaus">
							</form>

							<form id="form" method="post">
								<input class="serch-bar" type="hidden" name="parametro" placeholder="O que deseja procurar?" value="Fortaleza" required />
								<input class="city-btn" type="submit" name="buscar" value="Fortaleza">
							</form>
						</div>-->
					
					<div class="category-selector">
						<h3 id="category-selector"><i class="fa fa-list-ul" aria-hidden="true"></i> Selecione a categoria:</h3>
						<form>

							<select class="form-select" name="categoria">
							<option value="" selected="">Todas as categorias</option>
								<?php
									$categorias = MySql::conectar()->prepare("SELECT * FROM `tb_site.categorias` ORDER BY order_id ASC");
									$categorias->execute();
									$categorias = $categorias->fetchAll();
									foreach ($categorias as $key => $value) {
									
								?>
									<option <?php if($value['slug'] == @$url[1]) echo 'selected'; ?> value="<?php echo $value['slug'] ?>"><?php echo $value['nome']; ?></option>
								<?php } ?>
								
							</select>
						</form>

					</div><!--category-selector-->

				</div><!--sidebar-->
			

			<?php
				$porPagina = 10;
				if(!isset($_POST['parametro'])){
				if(@$categoria['nome'] == ''){
					echo '';
				}else{
					echo '';
				}
				}else{
					echo '';
				}

				$query = "SELECT * FROM `tb_site.tours` ";
				if(@$categoria['nome'] != ''){
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
				if(@$categoria['nome'] != ''){
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

		<div class="box-content-sidebar">
			<?php
				foreach($tours as $key=>$value){
				$sql = MySql::conectar()->prepare("SELECT `slug` FROM `tb_site.categorias` WHERE id = ?");
				$sql->execute(array($value['categoria_id']));
				$categoriaNome = $sql->fetch()['slug'];
			?>

			<section class="tours-grid">
				<div class="cards">
					<div class="card card1">
						<div class="container-tours">
							<div class="image-tour-grid" style="background-image: url('<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['capa']; ?>');"></div>
						</div>
						<div id="details" class="details">
							<h3><?php echo $value['titulo']; ?></h3>
							<p><?php echo substr(strip_tags($value['conteudo']),0,100).'...'; ?></p>
							<a href="<?php echo INCLUDE_PATH; ?>tours/<?php echo $categoriaNome; ?>/<?php echo $value['slug']; ?>">Ver mais</a>
						</div>
					</div>
				</div>
			</section>

			<?php } ?>

		</div><!--box-content-sidebar-->

		<div class="paginator">
			<?php
				if(!isset($_POST['parametro'])){
				for($i = 1; $i <= $totalPaginas; $i++){
					$catStr = (@$categoria['nome'] != '') ? '/'.$categoria['slug'] : '';
					if($pagina == $i)
						echo '<a class="active-page" href="'.INCLUDE_PATH.'tours'.$catStr.'?pagina='.$i.'">'.$i.'</a>';
					else
						echo '<a href="'.INCLUDE_PATH.'tours'.$catStr.'?pagina='.$i.'">'.$i.'</a>';
				}
				}
			?>
		</div><!--paginator-->


	</div><!--center-->		
	</section><!--container-portal-->	

	<footer id="footer">
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
								<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida Nortuna</a>
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
								<a href="#">Carnaval SP</a>
							</li>

							<li>
								<a href="#">Campos do Jordão</a>
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
                        <li><a class="text-muted" target="_blank" href="<?php echo INCLUDE_PATH; ?>oquefazerfozdoiguacu">Foz do Iguaçu/PR</a></li>
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

	<script>

		function pt(){

			document.getElementById("details").innerHTML=`
				<div id="details" class="details">
					<h3><?php echo $value['titulo']; ?></h3>
					<p><?php echo substr(strip_tags($value['conteudo']),0,100).'...'; ?></p>
					<a href="<?php echo INCLUDE_PATH; ?>tours/<?php echo $categoriaNome; ?>/<?php echo $value['slug']; ?>">Ver mais</a>
				</div>
			`;

			document.getElementById("form").innerHTML=`
				<form method="post" class="serch-box">
					<h3><i class="fa fa-search"></i></h3>
					<input class="serch-bar" type="text" name="parametro" placeholder="O que deseja procurar?" required />
					<input class="serch-submit" type="submit" name="buscar" value="Pesquisar">
				</form>
			`;

			document.getElementById("category-selector").innerHTML=`
				<h3 id="category-selector"><i class="fa fa-list-ul" aria-hidden="true"></i> Selecione a categoria:</h3>
			`;


			document.getElementById("header").innerHTML=`
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
													<a href="#">A cidade</a>
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
													<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida Nortuna</a>
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
																<a href="#">Carnaval SP</a>
															</li>

															<li class="dropdown-link">
																<a href="#">Campos do Jordão</a>
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
											<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia">Tour De Meio Dia</a>
										</li>

										<li>
											 <a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-dia-inteiro-">Tour de Dia Inteiro</a>
										</li>

										<li>
											<a href="#">City Tour Gastronômico</a>
										</li>
										<li>
											<a href="https://checkpointtours.com.br/tours/o-que-fazer-sao-paulo-tours-de-meio-dia-tours-by-night">Vida Nortuna</a>
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
											<a href="#">Carnaval SP</a>
										</li>

										<li>
											<a href="#">Campos do Jordão</a>
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
			`;
		}

		function en(){

			document.getElementById("details").innerHTML=`
				<div id="details" class="details">
					<h3><?php echo $value['eng_titulo']; ?></h3>
					<p><?php echo substr(strip_tags($value['eng_conteudo']),0,100).'...'; ?></p>
					<a href="<?php echo INCLUDE_PATH; ?>tours/<?php echo $categoriaNome; ?>/<?php echo $value['slug']; ?>">See more</a>
				</div>
			`;

			document.getElementById("form").innerHTML=`
				<form method="post" class="serch-box">
					<h3><i class="fa fa-search"></i></h3>
					<input class="serch-bar" type="text" name="parametro" placeholder="What do you want to look for?" required />
					<input class="serch-submit" type="submit" name="buscar" value="Search">
				</form>
			`;

			document.getElementById("category-selector").innerHTML=`
				<h3 id="category-selector"><i class="fa fa-list-ul" aria-hidden="true"></i> select category:</h3>
			`;

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
																<a href="#">Campos do Jordão</a>
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
										<a href="#">Campos do Jordão</a>
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
						<p>© 2022, Check Point Tours. All rights reserved.</p>
					</div>
				</footer>
			`;
		}

		function es(){

			document.getElementById("details").innerHTML=`
				<div id="details" class="details">
					<h3><?php echo $value['esp_titulo']; ?></h3>
					<p><?php echo substr(strip_tags($value['esp_conteudo']),0,100).'...'; ?></p>
					<a href="<?php echo INCLUDE_PATH; ?>tours/<?php echo $categoriaNome; ?>/<?php echo $value['slug']; ?>">Ver más</a>
				</div>
			`;

			document.getElementById("form").innerHTML=`
				<form method="post" class="serch-box">
					<h3><i class="fa fa-search"></i></h3>
					<input class="serch-bar" type="text" name="parametro" placeholder="¿Qué quieres buscar?" required />
					<input class="serch-submit" type="submit" name="buscar" value="Buscar">
				</form>
			`;

			document.getElementById("category-selector").innerHTML=`
				<h3 id="category-selector"><i class="fa fa-list-ul" aria-hidden="true"></i> Selecciona una categoría:</h3>
			`;

			document.getElementById("header").innerHTML=`
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
                                                                <a href="#">Carnaval SP</a>
                                                            </li>

                                                            <li class="dropdown-link">
                                                                <a href="#">Campos do Jordão</a>
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
                                        <a href="#">Carnaval SP</a>
                                    </li>

                                    <li>
                                        <a href="#">Campos do Jordão</a>
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
						<p>© 2022, Check Point Tours. Todos los derechos reservados.</p>
					</div>
				</footer>
			`;
		}	
	</script>

	</body>
</html>

<?php }else{ 
	include('tour_single.php');
}
?>
