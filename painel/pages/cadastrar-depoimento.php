<div class="box-content">
	<h2><i class="fa fa-pencil"></i>Calendário GP São Paulo F1</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
				if(Painel::insert($_POST)){
					Painel::alert('sucesso','O cadastro do depoimento foi realizado com sucesso!');
				}else{
					Painel::alert('erro','Campos vázios não são permitidos!');
				}
			

			}
		?>

		<div class="form-group">
			<label>Imagem do circuito (URL):</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<label>Tabela:</label>
			<textarea class="tinymce" name="depoimento"></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value="tb_site.depoimentos" />
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->