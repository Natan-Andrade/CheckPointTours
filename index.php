<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>

<?php
	$infoSite = MySql::conectar()->prepare("SELECT * FROM `tb_site.config`");
	$infoSite->execute();
	$infoSite = $infoSite->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $infoSite['titulo']; ?></title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
	<link href="https://fonts.apis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Luciano Abreu" />
	<meta name="keywords" content="cidade turistica de são paulo,turismo em cidade de são paulo ultimas noticias,turismo em cidade de sao paulo telefone,turismo em cidade de sao paulo taxa,turismo em cidade de sao paulo tmt,turismo em cidade de sao paulo trem,turismo em cidade de sao paulo tour,turismo em cidade de sao paulo trans muleke,turismo em cidade de são paulo usa,turismo em cidade de são paulo ultima hora">
	<meta name="description" content="Check point tours As melhores experiências em São Paulo, passeios sob medida, os melhores preços para serviço privativo.">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">erro header-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>timepiker\jquery.timepicker.min.css ">
    <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>timepiker\jquery.timepicker.min.js"></script>

	<meta charset="utf-8" />

	<style>
		.whatsapp-link {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 1px 1px 2px #888;
			z-index: 1000;
		}
 
		.fa-whatsapp {
			margin-top: 16px;
		}
	</style>

</head>


<body id="body">

<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=551127911316" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>

<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'oquefazersaopaulo';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
	?>

    
	<?php

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			//Podemos fazer o que quiser, pois a página não existe.
			if($url != 'depoimentos' && $url != 'servicos'){
				$urlPar = explode('/',$url)[0];
				if($urlPar != 'tours'){
				$pagina404 = true;
				include('pages/404.php');
				}else{
					include('pages/tours.php');
				}
			}else{
				include('pages/oquefazersaopaulo.php');
			}
		}
	?>

	</div><!--container-principal-->


<script>
    var header           = document.getElementById('header');
    var navigationHeader = document.getElementById('navigation_header');
    var content          = document.getElementById('content');
    var showSidebar      = false;

    function toggleSidebar()
    {
        showSidebar = !showSidebar;
        if(showSidebar)
        {
            navigationHeader.style.marginLeft = '-10vw';
            navigationHeader.style.animationName = 'showSidebar';
            content.style.filter = 'blur(2px)';
        }
        else
        {
            navigationHeader.style.marginLeft = '-100vw';
            navigationHeader.style.animationName = '';
            content.style.filter = '';
        }
    }

    function closeSidebar()
    {
        if(showSidebar)
        {
            showSidebar = true;
            toggleSidebar();
        }
    }

    window.addEventListener('resize', function(event) {
        if(window.innerWidth > 768 && showSidebar) 
        {  
            showSidebar = true;
            toggleSidebar();
        }
    });

</script>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>

	<?php

		if(is_array($url) && strstr($url[0],'tours') !== false){
	?>
		<script>
			$(function(){
				$('select').change(function(){
					location.href=include_path+"tours/"+$(this).val();
				})
			})
		</script>
	<?php
		}
	?>

	<?php
		if($url == 'contato'){
	?>
	<?php } ?>
	
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>

	<script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>
</body>
</html>