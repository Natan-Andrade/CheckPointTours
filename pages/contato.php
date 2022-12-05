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
    <?php $page = "contato"; ?>
    <?php include('header.php'); ?>

    <section class="transfer-form">

        <div class="form_title">
            <h3>Me ligue</h3>
        </div>

        <form target="_blank" action="https://formsubmit.co/atendimento@checkpointtours.com.br" method="POST">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="<?php echo INCLUDE_PATH; ?>enviado">


            <div>
                <label>Nome:</label>
                </br>
                <input type="text" id="nome" required name="Nome" class="form-select">
            </div>

            <div>
                <label>Telefone:</label>
                </br>
                <input type="number" id="tel" required name="Telefone" class="form-select">
            </div>

            <div>
                <label>Data e horário:</label>
                </br>
                <input type="datetime-local" id="date" required name="Horário e Data" class="form-select">
            </div>

            <button type="submit" class="submit-button">Enviar</button>

            <a class="button_reservar" href="https://wa.me/551127911316?text="
                
                onclick="location.href=this.href
                    +'*Me ligue*'

                    +'%0a'
                    +'%0a'

                    +'Nome: '
                    +document.getElementById('nome').value

                    +'%0a'
                    +'%0a'

                    +'Telefone: '
                    +document.getElementById('tel').value

                    +'%0a'
                    +'%0a'

                    +'Data e horário: '
                    +document.getElementById('date').value

                return false;" target="_blank" rel="noopener noreferrer">

                <div class="inside_button">
				Enviar <i class="fa-brands fa-whatsapp"></i>
                </div>
            </a>
        </form>
    </section>

    <section class="transfer-form">

        <div class="form_title">
            <h3>ENTRE EM CONTATO</h3>
        </div>

        <form target="_blank" action="https://formsubmit.co/atendimento@checkpointtours.com.br" method="POST">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="https://checkpointtours.com.br/Enviado">


            <div>
                <label>Nome:</label>
                </br>
                <input type="text" id="nome" required name="Nome" class="form-select">
            </div>

            <div>
                <label>E-mail:</label>
                </br>
                <input type="email" id="email" required name="Email" class="form-select">
            </div>

            <div>
            <label>Telefone:</label>
                </br>
                <input type="email" id="tel2" required name="Telefone" class="form-select">
            </div>

			<div>
                <label>Mensagem:</label>
                </br>
                <textarea style="height:300px; resize: vertical;" id="mensagem" required name="Mensagem" class="form-select"></textarea>
            </div>

            <button type="submit" class="submit-button">Enviar</button>

            <a class="button_reservar" href="https://wa.me/551127911316?text="
                
                onclick="location.href=this.href
                    +'Formulário de Contato'

                    +'%0a'
                    +'%0a'

                    +'Nome: '
                    +document.getElementById('nome').value

                    +'%0a'
                    +'%0a'

                    +'E-mail: '
                    +document.getElementById('email').value
                    
                    +'%0a'
                    +'%0a'

                    +'Telefone: '
                    +document.getElementById('tel2').value

                    +'Mensagem: '
                    +document.getElementById('mensagem').value

                return false;" target="_blank" rel="noopener noreferrer">

                <div class="inside_button">
				Enviar <i class="fa-brands fa-whatsapp"></i>
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
