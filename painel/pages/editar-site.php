<?php 
	$site = Painel::select('tb_site.config',false);
?>

<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Editar Configurações do Site</h2>

	<div class="button-main">
		<a class="ancora-f1" href="#f1" >F1</a>
	</div>

	<div class="button-main">
		<a class="ancora-transfers" href="#transfers" >Transfers</a>
	</div>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST,true)){
					Painel::alert('sucesso','O site foi editado com sucesso!');
					$site = Painel::select('tb_site.config',false);
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}
		?>

		<div class="form-group">
			<label>Título do site:</label>
			<input type="text" name="titulo" value="<?php echo $site['titulo'] ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Nome do autor do site:</label>
			<input type="text" name="nome_autor" value="<?php echo $site['nome_autor'] ?>" />
		</div><!--form-group-->

		<!--<iframe 
			src="https://context.reverso.net/traducao/",
			width="100%" height="400px" 
			style="border:0;" 
			allowfullscreen="" 
			loading="lazy" 
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>-->

		<div class="form-group">
			<label>Descrição do autor do site:</label>
			<textarea name="descricao"><?php echo $site['descricao']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do autor do site (INGLÊS):</label>
			<textarea name="eng_descricao"><?php echo $site['eng_descricao']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do autor do site (ESPANHOL):</label>
			<textarea name="esp_descricao"><?php echo $site['esp_descricao']; ?></textarea>
		</div><!--form-group-->

		<h2 style="text-align: center;">Sessão 1</h2>

		<div class="form-group">
			<label>Título:</label>
			<input type="text" name="title1" value="<?php echo $site['title1'] ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Título (INGLÊS):</label>
			<input type="text" name="eng_title1" value="<?php echo $site['eng_title1'] ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Título (ESPANHOL):</label>
			<input type="text" name="esp_title1" value="<?php echo $site['esp_title1'] ?>" />
		</div><!--form-group-->


		<?php
			for($i = 1; $i <= 3; $i++){
		?>

		<div class="form-group">	
			<label>Subtítulo <?php echo $i; ?>:</label>
			<input type="text" name="sub_title<?php echo $i; ?>" value="<?php echo $site['sub_title'.$i] ?>" />
		</div><!--form-group-->

		<div class="form-group">	
			<label>Subtítulo <?php echo $i; ?> (INGLÊS):</label>
			<input type="text" name="eng_sub_title<?php echo $i; ?>" value="<?php echo $site['eng_sub_title'.$i] ?>" />
		</div><!--form-group-->

		<div class="form-group">	
			<label>Subtítulo <?php echo $i; ?> (ESPANHOL):</label>
			<input type="text" name="esp_sub_title<?php echo $i; ?>" value="<?php echo $site['esp_sub_title'.$i] ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Ícone <?php echo $i; ?>:</label>
			<input type="text" name="icone<?php echo $i; ?>" value="<?php echo $site['icone'.$i] ?>" />
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do ícone <?php echo $i; ?>:</label>
			<textarea name="descricao<?php echo $i; ?>"><?php echo $site['descricao'.$i]; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do ícone <?php echo $i; ?> (INGLÊS):</label>
			<textarea name="eng_descricao<?php echo $i; ?>"><?php echo $site['eng_descricao' .$i]; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<label>Descrição do ícone <?php echo $i; ?> (ESPANHOL):</label>
			<textarea name="esp_descricao<?php echo $i; ?>"><?php echo $site['esp_descricao' .$i]; ?></textarea>
		</div><!--form-group-->

		<?php } ?>

		<h2 style="text-align: center;">Banners</h2>

			<h2 style="text-align: center;">SP</h2>

			<div class="form-group">
				<label>Link imagem 1 SP:</label>
				<input type="text" name="SP_bg1" value="<?php echo $site['SP_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 SP:</label>
				<input type="text" name="SP_bg2" value="<?php echo $site['SP_bg2'] ?>" />
			</div><!--form-group-->

			<h2 style="text-align: center;">RJ</h2>

			<div class="form-group">
				<label>Link imagem 1 RJ:</label>
				<input type="text" name="RJ_bg1" value="<?php echo $site['RJ_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 RJ:</label>
				<input type="text" name="RJ_bg2" value="<?php echo $site['RJ_bg2'] ?>" />
			</div><!--form-group-->

			<h2 style="text-align: center;">PR</h2>

			<div class="form-group">
				<label>Link imagem 1 PR:</label>
				<input type="text" name="PR_bg1" value="<?php echo $site['PR_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 PR:</label>
				<input type="text" name="PR_bg2" value="<?php echo $site['PR_bg2'] ?>" />
			</div><!--form-group-->

			<h2 style="text-align: center;">RN</h2>

			<div class="form-group">
				<label>Link imagem 1 RN:</label>
				<input type="text" name="RN_bg1" value="<?php echo $site['RN_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 RN:</label>
				<input type="text" name="RN_bg2" value="<?php echo $site['RN_bg2'] ?>" />
			</div><!--form-group-->

			<h2 style="text-align: center;">SC</h2>

			<div class="form-group">
				<label>Link imagem 1 SC:</label>
				<input type="text" name="SC_bg1" value="<?php echo $site['SC_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 SC:</label>
				<input type="text" name="SC_bg2" value="<?php echo $site['SC_bg2'] ?>" />
			</div><!--form-group-->

			<h2 style="text-align: center;">BA</h2>

			<div class="form-group">
				<label>Link imagem 1 BA:</label>
				<input type="text" name="BA_bg1" value="<?php echo $site['BA_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 BA:</label>
				<input type="text" name="BA_bg2" value="<?php echo $site['BA_bg2'] ?>" />
			</div><!--form-group-->

			<h2 style="text-align: center;">AM</h2>

			<div class="form-group">
				<label>Link imagem 1 AM:</label>
				<input type="text" name="AM_bg1" value="<?php echo $site['AM_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 AM:</label>
				<input type="text" name="AM_bg2" value="<?php echo $site['AM_bg2'] ?>" />
			</div><!--form-group-->

			<h2 style="text-align: center;">CE</h2>

			<div class="form-group">
				<label>Link imagem 1 CE:</label>
				<input type="text" name="CE_bg1" value="<?php echo $site['CE_bg1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Link imagem 2 CE:</label>
				<input type="text" name="CE_bg2" value="<?php echo $site['CE_bg2'] ?>" />
			</div><!--form-group-->

		<section class="transfers" id="transfers">
			<h2>Transfers</h2>

			<?php
				for($i = 1; $i <= 4; $i++){
			?>

			<h1 style="margin: 50px 0; text-align:center;">Item <?php echo $i; ?></h1>

			<div class="form-group">	
				<label>Descrição item <?php echo $i; ?>:</label>
				<input type="text" name="transfers_description<?php echo $i; ?>" value="<?php echo $site['transfers_description'.$i] ?>" />
			</div><!--form-group-->

			<div class="form-group">	
				<label>Descrição item <?php echo $i; ?> (INGLÊS):</label>
				<input type="text" name="eng_transfers_description<?php echo $i; ?>" value="<?php echo $site['eng_transfers_description'.$i] ?>" />
			</div><!--form-group-->

			<div class="form-group">	
				<label>Descrição item <?php echo $i; ?> (ESPANHOL):</label>
				<input type="text" name="esp_transfers_description<?php echo $i; ?>" value="<?php echo $site['esp_transfers_description'.$i] ?>" />
			</div><!--form-group-->

			<?php } ?>

		</section>

		<section class="F1" id="f1">

			<h2>GP São Paulo F1</h2>

			<div class="form-group">	
				<label>Título Pacotes Turísticos (Item 1):</label>
				<input type="text" name="F1_titulo1" value="<?php echo $site['F1_titulo1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">	
				<label>Título Pacotes Turísticos (ESPANHOL):</label>
				<input type="text" name="esp_F1_titulo1" value="<?php echo $site['esp_F1_titulo1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">	
				<label>Título Pacotes Turísticos (INGLÊS):</label>
				<input type="text" name="eng_F1_titulo1" value="<?php echo $site['eng_F1_titulo1'] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição Pacotes Turísticos:</label>
				<textarea class="tinymce" name="F1_descricao1"><?php echo $site['F1_descricao1']; ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição Pacotes Turísticos (ESPANHOL):</label>
				<textarea class="tinymce" name="esp_F1_descricao1"><?php echo $site['esp_F1_descricao1']; ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição Pacotes Turísticos (INGLÊS):</label>
				<textarea class="tinymce" name="eng_F1_descricao1"><?php echo $site['eng_F1_descricao1']; ?></textarea>
			</div><!--form-group-->



			<?php
				for($i = 2; $i <= 4; $i++){
			?>

			<h1 style="margin: 50px 0; text-align:center;">Item <?php echo $i; ?></h1>

			<div class="form-group">
				<label>Link imagem item <?php echo $i; ?>:</label>
				<input type="text" name="img<?php echo $i; ?>" value="<?php echo $site['img'.$i] ?>" />
			</div><!--form-group-->


			<div class="form-group">
				<label>Título item <?php echo $i; ?>:</label>
				<input type="text" name="F1_titulo<?php echo $i; ?>" value="<?php echo $site['F1_titulo'.$i] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Título item <?php echo $i; ?> (INGLÊS):</label>
				<input type="text" name="eng_F1_titulo<?php echo $i; ?>" value="<?php echo $site['eng_F1_titulo'.$i] ?>" />
			</div><!--form-group-->

			<div class="form-group">
				<label>Título item <?php echo $i; ?> (ESPANHOL):</label>
				<input type="text" name="esp_F1_titulo<?php echo $i; ?>" value="<?php echo $site['esp_F1_titulo'.$i] ?>" />
			</div><!--form-group-->


			<div class="form-group">
				<label>Descrição item <?php echo $i; ?>:</label>
				<textarea class="tinymce" name="F1_descricao<?php echo $i; ?>"><?php echo $site['F1_descricao'.$i]; ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição item <?php echo $i; ?> (INGLÊS):</label>
				<textarea class="tinymce" name="esp_F1_descricao<?php echo $i; ?>"><?php echo $site['esp_F1_descricao' .$i]; ?></textarea>
			</div><!--form-group-->

			<div class="form-group">
				<label>Descrição item <?php echo $i; ?> (ESPANHOL):</label>
				<textarea class="tinymce" name="eng_F1_descricao<?php echo $i; ?>"><?php echo $site['eng_F1_descricao' .$i]; ?></textarea>
			</div><!--form-group-->

			<div class="form-group" style="margin-bottom: 80px;">
				<label>Preço item <?php echo $i; ?>:</label>
				<input placeholder="R$..." type="text" name="preco<?php echo $i; ?>" value="<?php echo $site['preco'.$i] ?>" />
			</div><!--form-group-->
			
			<?php } ?>
		</section>
		



		<div class="form-group">
			<input type="hidden" name="nome_tabela" value="tb_site.config" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->