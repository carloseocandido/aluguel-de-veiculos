<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/analise.css">
    <title>Programação PHP</title>
</head>

<body>
    
    <header>
        <h3>Auto Car's</h3>
        <h4>Agências De Aluguel De Carros</h4>
    </header>

    <br><br><br><br><br><br><br><br>

    <section>

        <h1>Programação PHP</h1>
        <h2>Resultado da Pesquisa</h2><br><br>

        <?php

            $pesquisa = $_GET["pesquisa"];

            switch($pesquisa) {

                case 'hatch':
                    echo "<h2>O que é tipo de veículo hatch?</h2>
                    <p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
                    <p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
                    
                    <p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>";
                    break;

                case 'Hatch':
                    echo "<h2>O que é tipo de veículo hatch?</h2>
                    <p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
                    <p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
                    
                    <p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>";
                    break;
                        
                case 'HATCH':
                    echo "<h2>O que é tipo de veículo hatch?</h2>
                    <p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
                    <p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
                    
                    <p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>";
                    break;

                case 'sedan':
                    echo "<h2>Carro para toda família</h2>

                    <p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
                    
                    <p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";
                    break;

                case 'Sedan':
                    echo "<h2>Carro para toda família</h2>

                    <p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
                    
                    <p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";
                    break;
                    
                case 'SEDAN':
                    echo "<h2>Carro para toda família</h2>

                    <p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
                    
                    <p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>";
                    break;

                case 'suv':
                    echo "<h2>SUV</h2>
                    <p>Em sua definição básica, SUV é a sigla para Sport Utility Vehicle, ou Veículo Utilitário Esportivo, ou seja, um carro destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. Normalmente é equipado com tração nas quatro rodas e caracteristicamente de porte avantajado.</p>
                    
                    <p>Qual a diferença de um carro SUV?</p>
                    <p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, confortáveis e arrojados. <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p><br><br>";
                    break;

                case 'Suv':
                    echo "<h2>SUV</h2>
                    <p>Em sua definição básica, SUV é a sigla para Sport Utility Vehicle, ou Veículo Utilitário Esportivo, ou seja, um carro destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. Normalmente é equipado com tração nas quatro rodas e caracteristicamente de porte avantajado.</p>
                    
                    <p>Qual a diferença de um carro SUV?</p>
                    <p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, confortáveis e arrojados. <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p><br><br>";
                    break;
                                            
                case 'SUV':
                    echo "<h2>SUV</h2>
                    <p>Em sua definição básica, SUV é a sigla para Sport Utility Vehicle, ou Veículo Utilitário Esportivo, ou seja, um carro destinado a carga/trabalho, como as picapes, mas com uma tocada mais esportiva. Normalmente é equipado com tração nas quatro rodas e caracteristicamente de porte avantajado.</p>
                    
                    <p>Qual a diferença de um carro SUV?</p>
                    <p>Os SUVs são veículos que têm mais adaptabilidade a diferentes terrenos, são mais altos e robustos e, também, confortáveis e arrojados. <p>O motor, no geral, é mais potente e alguns modelos têm, ainda, a opção de tração 4×4.</p><br><br>";
                    break;

                default:
                echo "<h2>Infelizmente não possuimos esse tipo de carro no banco de dados!</h2><br>";
                echo "<b>Tente essas sugestões:</b><br>";
                echo '<b>"Hatch"</b><br>';
                echo '<b>"Sedan"</b><br>';
                echo '<b>"SUV"</b><br>';
                echo "<b>Clique em voltar e tente novamente!</b><br>";
                    break;
            }

        ?>


        <br>
        <a href="index.php"><b>Voltar</b></a>

    </section>

    <br>
    
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