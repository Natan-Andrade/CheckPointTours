<?php
	$servicos = Painel::selectAll('tb_site.servicos');
    $depoimentos = Painel::selectAll('tb_site.depoimentos');
?>
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

    <!--<style>
        table{
            width: 90% !important;
            table-layout: unset !important;
            margin: 20px auto !important;
        }
    </style>-->

    </head>
    <body>
        <?php $page = "ingressos"; ?>
        <?php include('header.php') ;?>    

        <?php include('f1-painel.php') ;?>

        <section class="F1">

            <div class="box-align">
                <div class="container-title">
                    <h1 class="title-box" id="txtrect">Calendar</h1>
                </div>
            </div>
            
            <div class="itens-wrap" style="flex-direction: column;">

                <div class="run-table">
                <?php foreach ($depoimentos as $key => $value) { ?>
                    <p><?php echo $value['depoimento'] ?></p>
                    <div class="box-align">
                        <div class="container-title">
                            <h2 class="title-box" id="txtrect">Circuit</h2>
                        </div>
                    </div>
                    <div class="img-circuito" style="background-image: url(<?php echo $value['nome'] ?>);"></div>
                <?php } ?>
                </div>

                <div class="box-align">
                    <div class="container-title">
                        <h2 class="title-box" id="txtrect">Tickets</h2>
                    </div>
                </div>

                <?php
                    foreach ($servicos as $key => $value) {
                ?>

                    <div class="container-tickets">
                        <div class="tickets">
                            <div class="ticket-content">
                                <div class="ticket-title">
                                    <h2><?php echo $value['eng_titulo']; ?></h2>
                                </div>
                                <p><?php echo $value['eng_descricao']; ?></p>
                            </div>

                            <div class="date">
                                <h2 style="text-align: center;"><?php echo $value['eng_preco']; ?></h2>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </section>

        <div id="form"></div>

        <section class="transfer-form">

            <div class="form_title">
                <h3>RESERVE YOUR TICKET</h3>
            </div>

            <form target="_blank" action="https://formsubmit.co/atendimento@checkpointtours.com.br" method="POST">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="https://checkpointtours.com.br/Enviado">

                <div>
                    <label for="festa">Select the package:</label>
                    </br>
                    <select name="veiculo" id="option" class="form-select" form="carform">
                        
                        <option id="option" value="<?php echo $value['servico']; ?>"><?php echo $value['eng_titulo']; ?></option>
                        
                    </select>
                </div>

                <div>
                    <label>Amount of tickets:</label>
                    </br>
                    <input type="number" min="1" id="npessoas" required name="numero de ingressos" placeholder="5" class="form-select">
                </div>

                <div>
                    <label>Name:</label>
                    </br>
                    <input type="text" id="nome" required name="nome" placeholder="Name" class="form-select">
                </div>

                <div>
                    <label>Contact email:</label>
                    </br>
                    <input type="email" id="email" required name="email" placeholder="Email Address" class="form-select">
                </div>

                <div>
                    <label>Telephone for contact:</label>
                    </br>
                    <input type="number" id="numero" required name="Telefone" placeholder="Telephone" class="form-select">
                </div>

                <button type="submit" class="submit-button">Submit</button>

                <a class="button_reservar" href="https://wa.me/551127911316?text="
                    
                    onclick="location.href=this.href
                        +'Ingresso GP São Paulo F1'

                        +'%0a'
                        +'%0a'

                        +'Nome: '
                        +document.getElementById('nome').value

                        +'%0a'
                        +'%0a'

                        +'Ingresso: '
                        +document.getElementById('option').value

                        +'%0a'
                        +'%0a'

                        +'Número de ingressos: '
                        +document.getElementById('npessoas').value

                        +'%0a'
                        +'%0a'

                        +'Telefone para contato: '
                        +document.getElementById('numero').value

                        +'%0a'
                        +'%0a'

                        +'E-mail para contato: '
                        +document.getElementById('email').value
                       
                    return false;" target="_blank" rel="noopener noreferrer">

                    <div class="inside_button">
                        Submit by WhatsApp <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </a>
            </form>
        </section>

    <?php include ('footer.php');?>

    </body>
</html>