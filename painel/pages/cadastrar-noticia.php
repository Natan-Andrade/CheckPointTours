<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Cadastrar Notícia</h2>

	<form method="post" enctype="multipart/form-data">

		<?php

			if(isset($_POST['acao'])){
				
				$categoria_id = $_POST['categoria_id'];
				$titulo = $_POST['titulo'];
				$esp_titulo = $_POST['esp_titulo'];
				$eng_titulo = $_POST['eng_titulo'];
				$conteudo = $_POST['conteudo'];
				$esp_conteudo = $_POST['esp_conteudo'];
				$eng_conteudo = $_POST['eng_conteudo'];
				$intinerario = $_POST['intinerario'];
				$mapa = $_POST['mapa'];
				$esp_intinerario = $_POST['esp_intinerario'];
				$eng_intinerario = $_POST['eng_intinerario'];
				$recolha = $_POST['recolha'];
				$esp_recolha = $_POST['esp_recolha'];
				$eng_recolha = $_POST['eng_recolha'];

				$incluso = $_POST['incluso'];
				$eng_incluso = $_POST['eng_incluso'];
				$esp_incluso = $_POST['esp_incluso'];
				$excluso = $_POST['excluso'];
				$eng_excluso = $_POST['eng_excluso'];
				$esp_excluso = $_POST['esp_excluso'];
				
				$requirements = $_POST['requirements'];
				$eng_requirements = $_POST['eng_requirements'];
				$esp_requirements = $_POST['esp_requirements'];

				
				$data_init = $_POST['data_init'];
				$data_end = $_POST['data_end'];

				$duracao = $_POST['duracao'];
				$pessoas_init = $_POST['pessoas_init'];
				$pessoas_end = $_POST['pessoas_end'];
				$horario_init = $_POST['horario_init'];
				$horario_end = $_POST['horario_end'];
				$preco = $_POST['preco'];
				$capa = $_FILES['capa'];

				if(
				    $titulo == '' || 
    				$esp_titulo == '' || 
    				$eng_titulo == '' ||
    				$conteudo == '' || 
    				$esp_conteudo == '' ||
    				$eng_conteudo == '' ||
    				$intinerario == '' ||
    				$mapa == '' ||
    				$eng_intinerario == '' ||
    				$esp_intinerario == '' ||
    				$recolha == '' ||
    				$esp_recolha == '' ||
    				$eng_recolha == '' ||
    				$incluso == '' ||
    				$eng_incluso == '' ||
    				$esp_incluso == '' ||
    				$requirements == '' ||
    				$eng_requirements== '' ||
    				$esp_requirements == '' ||
    				$data_init == '' ||
    				$data_end == '' ||
    				$duracao == '' ||
    				$pessoas_init == '' ||
    				$pessoas_end == '' ||
    				$preco == ''
				){
					Painel::alert('erro','Campos Vázios não são permitidos!');
				}else if($capa['tmp_name'] == '' ){
					Painel::alert('erro','A imagem de capa precisa ser selecionada.');
				}else{
					if(Painel::imagemValida($capa)){
						$verifica = MySql::conectar()->prepare("SELECT * FROM `tb_site.tours` WHERE titulo=? AND categoria_id = ?");
						$verifica->execute(array($titulo,$categoria_id));
						if($verifica->rowCount() == 0){
						$imagem = Painel::uploadFile($capa);
						$slug = Painel::generateSlug($titulo);

						$arr = [
							'categoria_id'=>$categoria_id,
							'titulo'=>$titulo,
							'esp_titulo'=>$esp_titulo,
							'eng_titulo'=>$eng_titulo,
							'conteudo'=>$conteudo,
							'esp_conteudo'=>$esp_conteudo,
							'eng_conteudo'=>$eng_conteudo,
							'intinerario'=>$intinerario,
							'mapa'=>$mapa,
							'esp_intinerario'=>$esp_intinerario,
							'eng_intinerario'=>$eng_intinerario,
							'recolha'=>$recolha,
							'esp_recolha'=>$esp_recolha,
							'eng_recolha'=>$eng_recolha,

							'incluso'=>$incluso,
							'eng_incluso'=>$eng_incluso,
							'esp_incluso'=>$esp_incluso,

							'excluso'=>$excluso,
							'eng_excluso'=>$eng_excluso,
							'esp_excluso'=>$esp_excluso,
							
							'requirements'=>$requirements,
							'eng_requirements'=>$eng_requirements,
							'esp_requirements'=>$esp_requirements,


							'data_init'=>$data_init,
							'data_end'=>$data_end,
							'duracao'=>$duracao,
							'pessoas_init'=>$pessoas_init,
							'pessoas_end'=>$pessoas_end,
							'horario_init'=>$horario_init,
							'horario_end'=>$horario_end,
							'preco'=>$preco,
							'capa'=>$imagem,
							'slug'=>$slug,

						'order_id'=>'0',
						'nome_tabela'=>'tb_site.tours'
						];
						if(Painel::insert($arr)){
							Painel::redirect(INCLUDE_PATH_PAINEL.'cadastrar-noticia?sucesso');
						}

						//Painel::alert('sucesso','O cadastro da notícia foi realizado com sucesso!');
						}else{
							Painel::alert('erro','Já existe uma notícia com esse nome!');
						}
					}else{
						Painel::alert('erro','Selecione uma imagem válida!');
					}
					
				}
				
			}
			if(isset($_GET['sucesso']) && !isset($_POST['acao'])){
				Painel::alert('sucesso','O cadastro foi realizado com sucesso!');
			}
		?>
		<div class="form-group">
		<label>Categoria:</label>
		<select name="categoria_id">
			<?php
				$categorias = Painel::selectAll('tb_site.categorias');
				foreach ($categorias as $key => $value) {
			?>
			<option <?php if($value['id'] == @$_POST['categoria_id']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['nome']; ?></option>
			<?php } ?>
		</select>
		</div>

		<div class="form-group">
			<label>Título:</label>
			<input type="text" name="titulo" value="<?php recoverPost('titulo'); ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Título (Espanhol):</label>
			<input type="text" name="esp_titulo" value="<?php recoverPost('esp_titulo'); ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Título (Inglês):</label>
			<input type="text" name="eng_titulo" value="<?php recoverPost('eng_titulo'); ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Conteúdo</label>
			<textarea name="conteudo"><?php recoverPost('conteudo'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Conteúdo (Espanhol):</label>
			<textarea name="esp_conteudo"><?php recoverPost('esp_conteudo'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Conteúdo (Inglês):</label>
			<textarea name="eng_conteudo"><?php recoverPost('eng_conteudo'); ?></textarea>
		</div>

		<div class="form-group">
			<label>intinerario:</label>
			<textarea name="intinerario"><?php recoverPost('intinerario'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Link mapa:</label>
			<textarea class="text" name="mapa"><?php recoverPost('mapa'); ?></textarea>
			<label>Cole aqui o código HTML do trajeto copiado do Google Maps e exclua o que não estiver entre as aspas.</label>
			<br>
			<label>Exemplo(O que não está em negrito deve ser apagado):</label>
			<br>
			<label>< iframe src="<strong>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657</strong>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">< /iframe></label>
		</div>
		
		<div class="form-group">
			<label>intinerario (Espanhol):</label>
			<textarea name="esp_intinerario"><?php recoverPost('esp_intinerario'); ?></textarea>
		</div>

		<div class="form-group">
			<label>intinerario (Inglês):</label>
			<textarea name="eng_intinerario"><?php recoverPost('eng_intinerario'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Recolha</label>
			<textarea name="recolha"><?php recoverPost('recolha'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Recolha (Espanhol):</label>
			<textarea name="esp_recolha"><?php recoverPost('esp_recolha'); ?></textarea>
		</div>

		<div class="form-group">
		    <label>Recolha (Inglês):</label>
			<textarea name="eng_recolha"><?php recoverPost('eng_recolha'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Incluso:</label>
			<textarea name="incluso"><?php recoverPost('incluso'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Incluso(Inglês):</label>
			<textarea name="eng_incluso"><?php recoverPost('eng_incluso'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Incluso(Espanhol):</label>
			<textarea name="esp_incluso"><?php recoverPost('esp_incluso'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Exclusões:</label>
			<textarea name="excluso"><?php recoverPost('excluso'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Exclusões(Inglês):</label>
			<textarea name="eng_excluso"><?php recoverPost('eng_excluso'); ?></textarea>
		</div>

		<div class="form-group">
			<label>Exclusões(Espanhol):</label>
			<textarea name="esp_excluso"><?php recoverPost('esp_excluso'); ?></textarea>
		</div>
		
		<div class="form-group">
			<label>O que é necessário levar:</label>
			<textarea name="requirements"><?php recoverPost('requirements'); ?></textarea>
		</div>

		<div class="form-group">
			<label>O que é necessário levar(Inglês):</label>
			<textarea name="eng_requirements"><?php recoverPost('eng_requirements'); ?></textarea>
		</div>
		
		<div class="form-group">
			<label>O que é necessário levar (Espanhol):</label>
			<textarea name="esp_requirements"><?php recoverPost('esp_requirements'); ?></textarea>
		</div>


		<div class="form-group">
			<label>Data de início:</label>
			<input type="date" name="data_init"><?php recoverPost('data_init'); ?>
		</div>

		<div class="form-group">
			<label>Data de término</label>
			<input type="date" name="data_end"><?php recoverPost('data_end'); ?>
		</div>

		<div class="form-group">
			<label>Duração:</label>
			<input type="text" placeholder="Ex 3:30 ou 3h" name="duracao" value="<?php recoverPost('duracao'); ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Mínimo de pessoas:</label>
			<input type="number" min="1" name="pessoas_init" value="<?php recoverPost('pessoas_init'); ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Máximo de pessoas:</label>
			<input type="number" name="pessoas_end" value="<?php recoverPost('pessoas_end'); ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Horário de início:</label>
			<input type="time" name="horario_init" value="<?php recoverPost('horario_init'); ?>">
			<label>Use somente horários inteiros, com os minutos em zero. (ex. 10:00)</label>
		</div><!--form-group-->

		<div class="form-group">
			<label>Horário de término:</label>
			<input type="time" name="horario_end" value="<?php recoverPost('horario_end'); ?>">
			<label>Use somente horários inteiros, com os minutos em zero. (ex. 22:00)</label>

		</div><!--form-group-->

		<div class="form-group">
			<label>Preço:</label>
			<input type="number" placeholder="Ex. 300" name="preco" value="<?php recoverPost('preco'); ?>">
			<label>Digite somente o valor sem vírgula.</label>
			<label>Ex. RS:<strong>200</strong>,00</label>
		</div><!--form-group-->

		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="capa"/>
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value="tb_site.tours" />
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->