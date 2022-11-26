<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />
</head>
<body>

<div class="menu">
	<div class="menu-wraper">
	<div class="box-usuario">
		<?php
			if($_SESSION['img'] == ''){
		?>
			<div class="avatar-usuario">
				<i class="fa fa-user"></i>
			</div><!--avatar-usuario-->
		<?php }else{ ?>
			<div class="imagem-usuario">
				<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
			</div><!--avatar-usuario-->
		<?php } ?>
		<div class="nome-usuario">
			<p><?php echo $_SESSION['nome']; ?></p>
			<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
		</div><!--nome-usuario-->
	</div><!--box-usuario-->
	<div class="items-menu">

		<h2>Configurações do site</h2>
			<a <?php selecionadoMenu('editar-site'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>
			<a <?php selecionadoMenu('cadastrar-Banner'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-banner">Cadastrar Banner</a>

		<h2>Ingressos</h2>
			<a <?php selecionadoMenu('listar-servicos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Ingressos</a>
			<a <?php selecionadoMenu('cadastrar-servico'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Ingresso</a>
			
			<a <?php selecionadoMenu('listar-depoimentos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Calendários</a>
			<a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Calendário</a>
		
		<h2>Gestão de Tours</h2>
			<a <?php selecionadoMenu('cadastrar-categorias'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-categorias">Cadastrar Categorias</a>
			<a <?php selecionadoMenu('gerenciar-categorias'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias">Gerenciar Categorias</a>
			<a <?php selecionadoMenu('cadastrar-noticia'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-noticia">Cadastrar Tour</a>
			<a <?php selecionadoMenu('gerenciar-noticias'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-noticias">Gerenciar Tours</a>

		<h2>Administração do painel</h2>
			<a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
			<a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>
	
		</div><!--items-menu-->
	</div><!--menu-wraper-->
</div><!--menu-->

<header>
	<div class="center">
		<div class="menu-btn">
			<i class="fa fa-bars"></i>
		</div><!--menu-btn-->

		<div class="loggout">
			<a <?php if(@$_GET['url'] == ''){ ?> style="padding: 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"> <i class="fa-solid fa-house"></i> <span>Home</span></a>
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"> <i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Sair</span></a>
		</div><!--loggout-->

		<div class="clear"></div>
	</div>
</header>

<div class="content">


	<?php Painel::carregarPagina(); ?>


</div><!--content-->

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

<script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>
  tinymce.init({ 
  	selector:'.tinymce',
  	plugins: "image",
  	height:300
   });
  </script>
</body>
</html>