<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/carros.css">
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
                        <img src="img/hatch.png" alt="Carro Hatch">
                    </div>
                    <div>
                        <h2>O que é um veículo hatch?</h2>
                        <p>O que é carro hatch? Os modelos de carro hatch, também chamados de hatchback, fazem parte dos mais populares do país. A sua principal característica é a dimensão da carroceria, que é muito mais compacta do que os veículos sedã, por exemplo, e o seu design é considerado mais simples.</p><br><br>
                    </div>
                </div>
            </section>
        <br><br>
        <a href="index.php"><b>Voltar</b></a>
            


    </section>

    <br>
    
    <section>
        <fieldset>
            <legend><h2>Faça seu orçamento de aluguel</h2></legend>

            <form action="aluguel.php" method="get" target="">
                <label for="date">Insira a data dor Orçamento</label><br>
                <input type="date" id="date" name="date">

                <br><br>

                <label for="time">Tempo de Aluguel(dias)</label><br>
                <input type="text" id="time" name="time">

                <br><br>

                <label>Escolha o Modelo</label><br>

                <select name="model">
                    <option>HATCH</option>
                    <option>SEDAN</option>
                    <option>SUV</option>
                </select>

                <br><br>

                <label for="nomeCliente">Insira seu Nome</label><br>
                <input type="text" id="nomeCliente" name="name" placeholder="Insira seu nome completo">

                <br><br>

                <label for="obs">Observações Adicionais</label><br>
                <input type="text" name="obs" id="obs" placeholder="Observações">

                <br><br>

                <input type="submit" name="Enviar" id="">

                <br><br>

            </form>
        </fieldset>
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