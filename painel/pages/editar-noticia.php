<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$slide = Painel::select('tb_site.tours','id = ?',array($id));
	}else{
		Painel::alert('erro','Você precisa passar o parametro ID.');
		die();
	}
?>
<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Notícia</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				//Enviei o meu formulário.
				
				$nome = $_POST['titulo'];
				$esp_nome = $_POST['esp_titulo'];
				$eng_nome = $_POST['eng_titulo'];
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
				$imagem = $_FILES['capa'];
				$imagem_atual = $_POST['imagem_atual'];


				$verifica = MySql::conectar()->prepare("SELECT `id` FROM `tb_site.tours` WHERE titulo = ? AND categoria_id = ? AND id != ?");
				$verifica->execute(array($nome,$_POST['categoria_id'],$id));
				if($verifica->rowCount() == 0){
				if($imagem['name'] != ''){
					//Existe o upload de imagem.
					if(Painel::imagemValida($imagem)){
						Painel::deleteFile($imagem_atual);
						$imagem = Painel::uploadFile($imagem);
						$slug = Painel::generateSlug($nome);
						$arr = [
							'titulo'=>$nome,
							'esp_titulo'=>$esp_nome,
							'eng_titulo'=>$eng_nome,
							//'data'=>date('Y-m-d'),
							'categoria_id'=>$_POST['categoria_id'],
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
							'id'=>$id,
							'nome_tabela'=>'tb_site.tours'
						];
						Painel::update($arr);
						$slide = Painel::select('tb_site.tours','id = ?',array($id));
						Painel::alert('sucesso','A notícia foi editada com junto com a imagem!');
					}else{
						Painel::alert('erro','O formato da imagem não é válido');
					}
				}else{
					$imagem = $imagem_atual;
					$slug = Painel::generateSlug($nome);
					$arr = [
						'titulo'=>$nome,
						'esp_titulo'=>$esp_nome,
						'eng_titulo'=>$eng_nome,
						'categoria_id'=>$_POST['categoria_id'],
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
						'id'=>$id,
						'nome_tabela'=>'tb_site.tours'
					];
					Painel::update($arr);
					$slide = Painel::select('tb_site.tours','id = ?',array($id));
					Painel::alert('sucesso','A notícia foi editada com sucesso!');
				}
				}else{
					Painel::alert('erro','Já existe uma notícia com este nome!');
				}

			}
		?>

		<div class="form-group">
			<label>Título :</label>
			<input type="text" name="titulo" required value="<?php echo $slide['titulo']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Título (ESPANHOL):</label>
			<input type="text" name="esp_titulo" required value="<?php echo $slide['esp_titulo']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Título (INGLÊS):</label>
			<input type="text" name="eng_titulo" required value="<?php echo $slide['eng_titulo']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Conteúdo:</label>
			<textarea class="tinymce" name="conteudo"><?php echo $slide['conteudo']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Conteúdo (ESPANHOL):</label>
			<textarea class="tinymce" name="esp_conteudo"><?php echo $slide['esp_conteudo']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Conteúdo (INGLÊS):</label>
			<textarea class="tinymce" name="eng_conteudo"><?php echo $slide['eng_conteudo']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Intinerario:</label>
			<textarea class="tinymce" name="intinerario"><?php echo $slide['intinerario']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Mapa:</label>
			<input type="text" name="mapa" required value="<?php echo $slide['mapa']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Intinerario (ESPANHOL):</label>
			<textarea class="tinymce" name="esp_intinerario"><?php echo $slide['esp_intinerario']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Intinerario (INGLÊS):</label>
			<textarea class="tinymce" name="eng_intinerario"><?php echo $slide['eng_intinerario']; ?></textarea>
		</div><!--form-group-->


		<div class="form-group">
			<label>Recolha:</label>
			<textarea class="tinymce" name="recolha"><?php echo $slide['recolha']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Recolha (ESPANHOL):</label>
			<textarea class="tinymce" name="esp_recolha"><?php echo $slide['esp_recolha']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Recolha (INGLÊS):</label>
			<textarea class="tinymce" name="eng_recolha"><?php echo $slide['eng_recolha']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Incluso:</label>
			<textarea class="tinymce" name="incluso"><?php echo $slide['incluso']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Incluso (ESPANHOL):</label>
			<textarea class="tinymce" name="esp_incluso"><?php echo $slide['esp_incluso']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Incluso (INGLÊS):</label>
			<textarea class="tinymce" name="eng_incluso"><?php echo $slide['eng_incluso']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Exclusões:</label>
			<textarea class="tinymce" name="excluso"><?php echo $slide['excluso']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Exclusões (ESPANHOL):</label>
			<textarea class="tinymce" name="esp_excluso"><?php echo $slide['esp_excluso']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Exclusões (INGLÊS):</label>
			<textarea class="tinymce" name="eng_excluso"><?php echo $slide['eng_excluso']; ?></textarea>
		</div><!--form-group-->
		
		<div class="form-group">
			<label>O que é necessário levar:</label>
			<textarea class="tinymce" name="requirements"><?php echo $slide['requirements']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>O que é necessário levar (ESPANHOL):</label>
			<textarea class="tinymce" name="esp_requirements"><?php echo $slide['esp_requirements']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>O que é necessário levar (INGLÊS):</label>
			<textarea class="tinymce" name="eng_requirements"><?php echo $slide['eng_requirements']; ?></textarea>
		</div><!--form-group-->

		
		<div class="form-group">
			<label>Data de início:</label>
			<input type="text" placeholder="dd/mm/yyyy" name="data_init" required value="<?php echo $slide['data_init']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Data de término:</label>
			<input type="text" placeholder="dd/mm/yyyy" name="data_end" required value="<?php echo $slide['data_end']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Duração:</label>
			<input type="number" name="duracao" required value="<?php echo $slide['duracao']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Mínimo de pessoas:</label>
			<input type="number" name="pessoas_init" required value="<?php echo $slide['pessoas_init']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Máximo de pessoas:</label>
			<input type="number" name="pessoas_end" required value="<?php echo $slide['pessoas_end']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Horário de início:</label>
			<input type="text" name="horario_init" required value="<?php echo $slide['horario_init']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<label>Horário de término:</label>
			<input type="text" name="horario_end" required value="<?php echo $slide['horario_end']; ?>">
		</div><!--form-group-->
		

		<div class="form-group">
			<label>Preço:</label>
			<input type="number" name="preco" required value="<?php echo $slide['preco']; ?>">
		</div><!--form-group-->

		<div class="form-group">
		<label>Categoria:</label>
		<select name="categoria_id">
			<?php
				$categorias = Painel::selectAll('tb_site.categorias');
				foreach ($categorias as $key => $value) {
			?>
			<option <?php if($value['id'] == $slide['categoria_id']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['nome']; ?></option>
			<?php } ?>
		</select>
		</div>

		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="capa"/>
			<input type="hidden" name="imagem_atual" value="<?php echo $slide['capa']; ?>">
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>

</div><!--box-content-->