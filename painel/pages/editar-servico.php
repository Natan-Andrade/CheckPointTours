<?php 
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$servico = Painel::select('tb_site.servicos','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
 ?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar ingressos</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST)){
					Painel::alert('sucesso','O serviço foi editado com sucesso!');
					$servico = Painel::select('tb_site.servicos','id = ?',array($id));
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

		<div class="form-group">
			<label>Título:</label>
			<input type="text" name="servico" value="<?php echo $servico['servico']; ?>" />
			<label>Título EN:</label>
			<input type="text" name="eng_titulo" value="<?php echo $servico['eng_titulo']; ?>" />
			<label>Título ES:</label>
			<input type="text" name="esp_titulo" value="<?php echo $servico['esp_titulo']; ?>" />
			
			<label>Descrição:</label>
			<textarea class="tinymce" name="descricao"><?php echo $servico['descricao']; ?></textarea>
			<label>Descrição EN:</label>
			<textarea class="tinymce" name="eng_descricao"><?php echo $servico['eng_descricao']; ?></textarea>
			<label>Descrição ES:</label>
			<textarea class="tinymce" name="esp_descricao"><?php echo $servico['esp_descricao']; ?></textarea>
			
			<label>Preço:</label>
			<textarea class="tinymce" name="pt_preco"><?php echo $servico['pt_preco']; ?></textarea>
			<label>Preço EN:</label>
			<textarea class="tinymce" name="eng_preco"><?php echo $servico['eng_preco']; ?></textarea>
			<label>Preço ES:</label>
			<textarea class="tinymce" name="esp_preco"><?php echo $servico['esp_preco']; ?></textarea>
		</div><!--form-group-->



		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="nome_tabela" value="tb_site.servicos" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->