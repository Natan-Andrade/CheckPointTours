<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Cadastrar Banner</h2>

	<form method="post" enctype="multipart/form-data">

		<?php

			if(isset($_POST['acao'])){
				$nome = $_POST['nome'];
				$imagem = $_FILES['imagem'];
				if($nome == ''){
					Painel::alert('erro','O campo nome não pode ficar vázio!');
				}else{
					//Podemos cadastrar!
					if(Painel::imagemValida($imagem) == false){
						Painel::alert('erro','O formato especificado não está correto!');
					}else{
						//Apenas cadastrar no banco de dados!
						include('../classes/lib/WideImage.php');
						$imagem = Painel::uploadFile($imagem);
						//WideImage::load('uploads/'.$imagem)->resize(100)->rotate(180)->saveToFile('uploads/'.$imagem);
						$arr = ['nome'=>$nome,'slide'=>$imagem,'order_id'=>'0','nome_tabela'=>'tb_site.slides'];
						Painel::insert($arr);
						Painel::alert('sucesso','O cadastro do slide foi realizado com sucesso!');
					}
				}
				
			}
		?>

		<div class="form-group">
			<label>Nome do slide:</label>
			<input type="text" name="nome">
		</div><!--form-group-->


		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="imagem"/>
		</div><!--form-group-->


		<div class="form-group">
			<input type="submit" name="acao" value="Cadastrar!">
		</div><!--form-group-->

	</form>
</div><!--box-content-->

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
	$porPagina = 15;
	
	$slides = Painel::selectAll('tb_site.slides',($paginaAtual - 1) * $porPagina,$porPagina);
	
?>
<div class="box-content">
	<h2><i class="fa fa-id-card-o" aria-hidden="true"></i> Banners Cadastrados</h2>
	<div class="wraper-table">
	<table>
		<tr>
			<td>Nome</td>
			<td>Imagem</td>
			<td>#</td>
			<td>#</td>
			<td>#</td>
			<td>#</td>
		</tr>

		<?php
			foreach ($slides as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['nome']; ?></td>
			<td><img style="width: 50px;height:50px;" src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['slide']; ?>" /></td>
			<td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-slide?id=<?php echo $value['id']; ?>"><i class="fa fa-pencil"></i> Editar</a></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides?excluir=<?php echo $value['id']; ?>"><i class="fa fa-times"></i> Excluir</a></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides?order=up&id=<?php echo $value['id'] ?>"><i class="fa fa-angle-up"></i></a></td>
			<td><a class="btn order" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides?order=down&id=<?php echo $value['id'] ?>"><i class="fa fa-angle-down"></i></a></td>
		</tr>

		<?php } ?>

	</table>
	</div>

	<div class="paginacao">
		<?php
			$totalPaginas = ceil(count(Painel::selectAll('tb_site.slides')) / $porPagina);

			for($i = 1; $i <= $totalPaginas; $i++){
				if($i == $paginaAtual)
					echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-slides?pagina='.$i.'">'.$i.'</a>';
				else
					echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-slides?pagina='.$i.'">'.$i.'</a>';
			}

		?>
	</div><!--paginacao-->


</div><!--box-content-->



