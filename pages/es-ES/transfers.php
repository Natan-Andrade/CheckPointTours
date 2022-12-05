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
    <?php $page = "transfers"; ?>
    <?php include('header.php'); ?>

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
            <input type="hidden" name="_next" value="https://checkpointtours.com.br/Enviado">

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
                <input type="date" id="data" name="data" class="form-select" required>
            </div>

            <div>
                <label>Tiempo:</label>
                </br>
                <input type="time" id="horario" required name="horário" class="form-select" required>
            </div>

            <div>
                <label>Ubicación de inicio:</label>
                </br>
                <input type="text" id="inicio" required name="local de saída" class="form-select" required>
            </div>

            <div>
                <label>Destino:</label>
                </br>
                <input type="text" id="destino" required name="Destino" class="form-select" required>
            </div>

            <div>
                <label>Nombre:</label>
                </br>
                <input type="text" id="nome" required name="nome" placeholder="Nome" class="form-select" required>
            </div>

            <div>
                <label>Cantidad de personas:</label>
                </br>
                <input type="number" min="1" id="qtd" required name="número de pessoas" placeholder="Ex. 5" class="form-select" required>
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

    <?php include('footer.php'); ?>

    <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

    <?php }else{ 
	include('tour_single.php');
	}
	?>

</body>

</html>