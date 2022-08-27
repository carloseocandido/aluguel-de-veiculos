<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/aluguel.css">
    <title>Auto Car's</title>

</head>

<body>
    
    <header>
        <h3>Auto Car's</h3>
        <h4>Agências De Aluguel De Carros</h4>
    </header>

    <br><br><br><br><br><br><br><br>

    <section>

        <?php
        ?>

            <h1>Aluguel de Veículos</h1>
            <h2>Página Modelo</h2>

            <div class="form-text">
                <form action="analise.php" method="get" target="">  
                <label for="pesquisa">Pesquisar</label>&nbsp
                    <input type="text" id="pesquisa" name="pesquisa" placeholder="Digite aqui">
                    <input type="submit" id="enviar" name="Enviar" value="Pesquisar"><br>

                </form>
            </div>
            
            <br><br>

            <section class="container" id="grid-container">
                <div class="grid">
                    <div>
                        <h2>Hatch</h2>
                        <img src="img/hatch.png" alt="Carro Hatch"><br>
                        <a href="hatch.html">CLIQUE PARA ALUGAR</a>
                    </div>

                    <div>
                        <h2>Sedan</h2>
                        <img src="img/sedan.png" alt="Carro Sedan"><br>
                        <a href="sedan.html">CLIQUE PARA ALUGAR</a>
                    </div>

                    <div>
                        <h2>SUV</h2>
                    <img src="img/suv.png" alt="Carro SUV"><br>
                        <a href="suv.html">CLIQUE PARA ALUGAR</a>
                    </div>

                    <!--
                    <div>Conteúdo4</div>
                    <div>Conteúdo5</div>
                    <div>Conteúdo6</div>
                     -->
                </div>
            </section>

            


    </section>

    <br>
    
    <section>

        <?php
            $date = $_GET['date'];
            $time = $_GET['time'];
            $model = $_GET['model'];
            $name = $_GET['name'];
            $obs = $_GET['obs'];

            $model1 = $time*100;
            $model2 = $time*200;
            $model3 = $time*300;


            echo "<p>Olá Sr(a) <b>$name</b>, seja muito bem vino(a) a nossa página de orçamentos.</p><br>";
            echo "<p>O modelo escolhido foi: <b>$model</b>.</p><br>";
            echo "<p>Data da consulta: <b>$date</b>. <br><b>OBS: Orçamento válido por 15 dias após esta data.</b> </p><br>";

            if($model == "HATCH"){ 
                echo "<p>O valor total do orçamento é R$ <b>$model1</b>.</p>";
            } else if($model == "SEDAN"){
                echo "<p>O valor total do orçamento é R$ <b>$model2</b>.</p>";
            } else{
                echo "<p>O valor total do orçamento é R$ <b>$model3</b>.</p>";               
            }

            echo "<p>Observação Adicional do cliente: <b>$obs</b>. </p><br>";
            echo "<p>Agradecemos por sua consulta.</p><br>";

        ?>
        
        <p><b>WhatsApp para contato: (xx)xxxxx-xxxx</b></p><br>
        <a href="index.php">Voltar</a>

    </section>

    <br><br>

    <footer>

        <h3>CURSO DE PHP</h3>
        <h4>Página Modelo Para os Cursos de Desenvolvimento WEB</h4>
        <br>
        <p class="texto-rodape"><b>Contato:</b> xxxxxxxxx@xxxxxxxx.com</p>
        <p class="texto-rodape">WhatsApp: (xx)xxxxx-xxxx</p>
        <br>
        <h6>Desenvolvido por Carlos Candido</h6>

    </footer>

</body>
</html>