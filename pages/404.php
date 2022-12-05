<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="./home/favico.jpg" />
        <title>Check Point Tours</title>

        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/tours.css">

        <style>
            *{
                width: 100%;
                max-height:100%;
                text-align: center;  
            }

            .bg-banner{
                width: 100%;
				height: 100%;
                background-position: center;
                background-size: cover;
            }

            .bg-filter{
                width: 100%;
                height: 100%;
                background-color: #0b26436e;
                backdrop-filter: blur(8px) !important;
            }

            .content{
                margin: 0 auto;
                width: 100%;
                display: flex;
                height: 100vh;
            }

            .flex{
                max-width: 900px;
                display: flex;
                margin: auto;
            }

            .center{
                width: 100%;
            }

            h2{
               font-size: 70px;
               color: #00dbdb;
            }

            h3{
               font-size: 30px;
               color: white;
            }

            a{
               font-size: 50px;
               color: #00dbdb;
               margin: 30px 0px;
               cursor: pointer;
            }

            button{
                width: 100px;
                height: 30px;
                margin: 30px 0px;
                border-radius: 15px;
                cursor: pointer;
                color: white;
                background-color: #00dbdb73;
            }


        </style>

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
        $porPagina = 1;
        
        $slides = Painel::selectAll('tb_site.slides',($paginaAtual - 1) * $porPagina,$porPagina);

    ?>
	<?php
        foreach ($slides as $key => $value) {
    ?>

            <div class="bg-banner" style="background-image: url(' <?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['slide']; ?> ');">
                <div class="bg-filter"> 

                    <section class="content">
                        <div class="flex">
                            <div class="center">
                                <h2><i class="fa-solid fa-circle-exclamation"></i></i></h2>
                                <h3 id="translate1">Página não encontrada</h3>

                                <a id="translate2" href="<?php echo INCLUDE_PATH ?>oquefazersaopaulo"><h4>Voltar</h4></a>

                                <button onclick="en()">English</button>
                                <button onclick="es()">Español</button>
                                <button onclick="pt()">Português</button>
                            <div class="center">
                        </div>
                    </section>

                </div>
            </div>
        
        <?php } ?>

        <script>
            function en(){
                document.getElementById("translate1").innerHTML="Page not found";
                document.getElementById("translate2").innerHTML=`<a id="translate2" href="<?php echo INCLUDE_PATH ?>en-US/oquefazersaopaulo"><h4>Come back</h4></a>`;
            }

            function es(){
                document.getElementById("translate1").innerHTML="Página no encontrada";
                document.getElementById("translate2").innerHTML=`<a id="translate2" href="<?php echo INCLUDE_PATH ?>es-ES/oquefazersaopaulo"><h4>Regresar</h4></a>`;
            }

            function pt(){
                document.getElementById("translate1").innerHTML="Página não encontrada";
                document.getElementById("translate2").innerHTML=`<a id="translate2" href="<?php echo INCLUDE_PATH ?>oquefazersaopaulo"><h4>Voltar</h4></a>`;
            }
        </script>
    </body>

</html>

