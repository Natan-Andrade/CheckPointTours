<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Adicionar Ingresso</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
				if(Painel::insert($_POST)){
					Painel::alert('sucesso','O cadastro do ingresso foi realizado com sucesso!');
				}else{
					Painel::alert('erro','Campos vázios não são permitidos!');
				}
			
			}
		?>



		<div class="form-group">
			<label>Titulo:</label>
			<input type="text" name="servico">
		
			<label>Titulo EN:</label>
			<input type="text" name="eng_titulo">
			<label>Titulo ES:</label>
			<input type="text" name="esp_titulo">
			
			<label>Descrição:</label>
			<textarea class="tinymce" name="descricao"></textarea>
			<label>Descrição EN:</label>
			<textarea class="tinymce" name="eng_descricao"></textarea>
			<label>Descrição ES:</label>
			<textarea class="tinymce" name="esp_descricao"></textarea>
		
			<label>Preço:</label>
			<textarea class="tinymce" name="pt_preco"></textarea>
			<label>Preço EN:</label>
			<textarea class="tinymce" name="eng_preco"></textarea>
			<label>Preço ES:</label>
			<textarea class="tinymce" name="esp_preco"></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value="tb_site.servicos" />
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->