<?php 
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$depoimento = Painel::select('tb_site.depoimentos','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
 ?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Calendário</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST)){
					Painel::alert('editado com sucesso!');
					$depoimento = Painel::select('tb_site.depoimentos','id = ?',array($id));
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

		<div class="form-group">
			<label>Imagem do Circuito (URL):</label>
			<input type="text" name="nome" value="<?php echo $depoimento['nome']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Calendário:</label>
			<textarea class="tinymce" name="depoimento"><?php echo $depoimento['depoimento']; ?></textarea>
		</div><!--form-group-->


		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="nome_tabela" value="tb_site.depoimentos" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->