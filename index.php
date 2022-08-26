<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Auto Car's</title> 
    <style type="text/css">
        header{
            position: fixed;
            width: 100%;
        }
        .form-text{
            background-color: #4682B4;
            color: #ffffff;
            text-shadow: 2px 2px #000000;
            padding: 10px;
            font-size: 1.8rem;
            font-weight: bold;
            text-align: right;
        }

        input{
            font-size: 1.7rem;
            padding: 3.5px;
            border: solid 1px;
            border-radius: 8px;
            font-weight: bold;
        }

        h2{
            text-align: left;
            padding: 10px;
        }

        p{
            font-size: 1.6rem;
            padding: 10px;
        }

        #grid-container{
            background-color: #4682B4;

        }
        .grid{
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 5px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .grid div{
            font-size: 1.6rem;
            text-align: center;
            background-color: #ffffff;
            padding-bottom: 25px;
        }

        h1{
            text-align: center;
        }

        img{
            width: 80%;
            height: 70%;
        }

        a{
            font-size: 1.7rem;
            color: #4682B4;
            font-weight: bold;
            text-decoration: none;
        }

    </style>

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
    
    <footer>

        <h3>CURSO DE PHP</h3>
        <h4>Página Modelo Para os Cursos de Desenvolvimento WEB</h4>
        <br>
        <p class="texto-rodape"><b>Contato:</b> carloseocandidotq@gmail.com</p>
        <p class="texto-rodape">WhatsApp: (16)00000-0000</p>
        <br>
        <h6>Desenvolvido por Carlos Candido</h6>

    </footer>

</body>
</html>