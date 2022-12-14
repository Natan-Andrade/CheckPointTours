<!DOCTYPE html>
<html>
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
        
    <?php $page = "F1"; ?>
    <?php include('header.php') ;?>  


        <?php include('f1-painel.php'); ?>

        <section class="F1">
            <div class="box-align">
                <div class="container-title">
                    <h1 class="title-box" id="txtrect">GP São Paulo F1</h1>
                </div>
            </div>
            <div class="itens-wrap" style="flex-direction: column;">
                <div class="container-content">
                    <h2 class="text-center" style="justify-content: left;"><?php echo $infoSite['eng_F1_titulo1']; ?></h2>
                    <p class="p-align"><?php echo $infoSite['eng_F1_descricao1']; ?></p>
                </div>

                <?php
                    for($i = 2; $i <= 4; $i++){
                ?>

                    <div class="container-content" style="margin-top: 30px;">
                        <div class="full-item" style="border-radius: 7px; box-shadow: 0px 0px 10px #00000038; background-image: url(<?php echo $infoSite['img'.$i]; ?>);">
                        </div>
                        <h2 style="margin:30px 0; color:rgb(167 183 204); font-size: 35px;"><?php echo $infoSite['eng_F1_titulo'.$i]; ?></h2>
                        <?php echo $infoSite['eng_F1_descricao'.$i]; ?>

                        <p class="price">BRL:<?php echo $infoSite['preco'.$i]; ?></p>

                        <div class="button-main">
                            <a class="ancora" href="#form" >Reserve</a>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </section>

        <div id="form"></div>

        <section class="transfer-form">

            <div class="form_title">
                <h3>BOOK YOUR TOURIST PACKAGE</h3>
            </div>

            <form target="_blank" action="https://formsubmit.co/atendimento@checkpointtours.com.br" method="POST">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="https://checkpointtours.com.br/Enviado">

                <div>
                    <label for="festa">Select the Package:</label>
                    </br>
                    <select name="veiculo" id="option" class="form-select" form="carform">
                        <?php
                            for($i = 2; $i <= 4; $i++){
                        ?>
                            <option id="option" value="<?php echo $infoSite['eng_F1_titulo'.$i]; ?>"><?php echo $infoSite['F1_titulo'.$i]; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div>
                    <label>Amount of people:</label>
                    </br>
                    <input type="number" min="1" id="qtd" required name="Número de pessoas" placeholder="5" class="form-select">
                </div>

                <div>
                    <label>Name:</label>
                    </br>
                    <input type="text" id="nome" required name="nome" placeholder="Nome" class="form-select">
                </div>

                <div>
                    <label>Contact email:</label>
                    </br>
                    <input type="email" id="email" required name="Email" placeholder="Email Address" class="form-select">
                </div>

                <div>
                    <label>Contact phone:</label>
                    </br>
                    <input type="number" id="tel" required name="telefone" placeholder="Tel" class="form-select">
                </div>

                <button type="submit" class="submit-button">Book before paying</button>

                <a class="button_reservar" href="https://wa.me/551127911316?text="
                    
                    onclick="location.href=this.href
                        +'Formulário de Contato'

                        +'%0a'
                        +'%0a'

                        +'Nome: '
                        +document.getElementById('nome').value

                        +'%0a'
                        +'%0a'

                        +'Tour: '
                        +document.getElementById('option').value

                        +'%0a'
                        +'%0a'

                        +'Número de pessoas: '
                        +document.getElementById('qtd').value

                        +'%0a'
                        +'%0a'

                        +'Email: '
                        +document.getElementById('email').value
                        +'%0a'
                        +'%0a'

                        +'Telefone: '
                        +document.getElementById('tel').value

                       
                    return false;" target="_blank" rel="noopener noreferrer">

                    <div class="inside_button">
                        Book by WhatsApp <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </a>
            </form>
        </section>

        <?php include('footer.php'); ?>  

    </body>
</html>