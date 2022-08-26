<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Programação PHP</title> 
    <style type="text/css">

        h2{
            text-align: left;
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

        <h1>Programação PHP</h1>
        <h2>Resultado da Pesquisa</h2><br><br>

        <?php

            $pesquisa = $_GET["pesquisa"];

            switch($pesquisa) {

                case 'hatch':
                    echo "<h2>Hatch</h2><br>

                    <p>O Administrador de banco de dados (DBA - DataBase Administrator) é responsável por manter e gerenciar bancos de dados, ou sistema de banco de dados.</p>
                    <p>Este profissional gerencia, atualiza, monitora o centro das informações de um sistema. Formação recomendada: Curso Superior em Ciência da Computação, Informática ou Engenharia da Computação ou qualquer outra área de base matemática. Atividades: Criação e testes de backup para garantir a recuperabilidade dos dados no caso de falha de hardware ou outros problemas severos. Verificar e zelar pela integridade do banco de dados.</p>
                    <p>Ter um controle de acesso aos dados como quem pode acessar e o que pode acessar e talvez quando possa acessar. Garantir o acesso ao banco de dados no maior tempo possível. Garantir o máximo de desempenho para o banco de dados. Auxiliar a equipe de desenvolvimento e a equipe de testes a maximizar o uso e desempenho do banco de dados.</p>
                    <p><b>Salário: Entre R$ 3.000 a R$ 9.000 reais.</b></p>
                    <br><br>";
                    break;

                case 'sedan':
                    echo "<h2>Sedan</h2><br>
                    <p>O analista de sistemas ou atualmente mais conhecido como sistematizador de informações, é aquele que tem como finalidade realizar estudos de processos computacionais para encontrar o melhor e mais racional caminho para que a informação virtual possa ser processada.</p>
                    <p>Este profissional estuda os diversos sistemas existentes entre hardwares e softwares e o usuário final, incluindo seus comportamentos e aplicações.</p>
                    <p>Formação recomendada: Curso Superior em Ciência da Computação, Informática ou Engenharia da Computação ou qualquer outra área de base matemática.</p>
                    <p><b>Salário: Entre R$ 4.800 a R$ 9.100 reais.</b></p>
                    <br><br>";
                    break;

                case 'suv':
                    echo "<h2>SUV</h2><br>
                    <p>O analista de suporte é um profissional de TI especialista em tecnologias, constantemente atualizado com novidades mercadológicas de Hardware e Software.</p>
                    <p>Cuida da manutenção da estrutura física de computadores, da estrutura de Rede de área local de computadores e de sistemas operacionais.</p>
                    <p>Atividades: Instalar e manter os diversos Sistemas Operacionais; Instalar e manter a comunicação digital (correio eletrônico, WEB, FTP, VPN, etc.): Instalar e manter sistemas de gestão (ERP); Instalar e manter sistemas de banco de dados (SGBD); Suporte aos usuários da empresa</p>
                    <p><b>Salário: Entre R$ 2.000 a R$ 7.000 reais.</b></p>
                    <br><br>";
                    break;

                case 'Hatch':
                    echo "<h2>Hatch</h2><br>
                    <p>Um profissional de programação web é responsável pelo desenvolvimento de sites, portais, fóruns e aplicações voltadas para o ambiente da internet.</p>
                    <p>Formação recomendada: 2o grau técnico ou faculdade de Informática/Processamento de Dados/Engenharia da Computação.</p>
                    <p>Atividades: Programação do código de sites, portais, sistemas para a internet; Cuidar da segurança de uma aplicação na internet; Aplicar formas de melhorar a performance do site; Criar sistemas de backend de softwares; Portar aplicações desktop para a web.</p>
                    <p><b>Salário: Entre R$ 2.500 a R$ 5.000.</b></p>
                    <br><br>";
                    break;

                case 'Sedan':
                    echo "<h2>Sedan</h2><br>
                    <p>Um programador pode ser alguém que desenvolve ou faz manutenção de software.</p>
                    <p>Formação recomendada: Para ser programador de computador é necessário diploma de curso técnico, que pode ser cursado paralelamente ou após a conclusão do ensino médio.</p> 
                    <p>Por ser um mercado competitivo, entretanto, cursos extras são importantes para diferenciar o currículo na hora da seleção.</p>
                    <p>Atividades: listar ou ler as especificações de programas, detalhadas por um analista de sistemas, e que mostram passo a passo as tarefas que o computador precisa executar; analisar o problema e a melhor forma para solucioná-lo; preparar diagramas para mostrar a seqüência de procedimentos a ser adotada pela máquina; codificar essas instruções para uma linguagem de computador; depois de prontas e implantadas as instruções, o programador deve testar todo o sistema, através de simulação, para verificar falhas e possíveis adequações.</p> 
                    <p><b>Salário: Entre R$ 1.800 a R$ 9.000 reais.</b></p>
                    <br><br>";
                    break;

                case 'Suv':
                    echo "<h2>SUV</h2><br>
                    <p>Um programador pode ser alguém que desenvolve ou faz manutenção de software.</p>
                    <p>Formação recomendada: Para ser programador de computador é necessário diploma de curso técnico, que pode ser cursado paralelamente ou após a conclusão do ensino médio.</p> 
                    <p>Por ser um mercado competitivo, entretanto, cursos extras são importantes para diferenciar o currículo na hora da seleção.</p>
                    <p>Atividades: listar ou ler as especificações de programas, detalhadas por um analista de sistemas, e que mostram passo a passo as tarefas que o computador precisa executar; analisar o problema e a melhor forma para solucioná-lo; preparar diagramas para mostrar a seqüência de procedimentos a ser adotada pela máquina; codificar essas instruções para uma linguagem de computador; depois de prontas e implantadas as instruções, o programador deve testar todo o sistema, através de simulação, para verificar falhas e possíveis adequações.</p> 
                    <p><b>Salário: Entre R$ 1.800 a R$ 9.000 reais.</b></p>
                    <br><br>";
                    break;
                        
                case 'HATCH':
                    echo "<h2>Hatch</h2><br>
                    <p>Um programador pode ser alguém que desenvolve ou faz manutenção de software.</p>
                    <p>Formação recomendada: Para ser programador de computador é necessário diploma de curso técnico, que pode ser cursado paralelamente ou após a conclusão do ensino médio.</p> 
                    <p>Por ser um mercado competitivo, entretanto, cursos extras são importantes para diferenciar o currículo na hora da seleção.</p>
                    <p>Atividades: listar ou ler as especificações de programas, detalhadas por um analista de sistemas, e que mostram passo a passo as tarefas que o computador precisa executar; analisar o problema e a melhor forma para solucioná-lo; preparar diagramas para mostrar a seqüência de procedimentos a ser adotada pela máquina; codificar essas instruções para uma linguagem de computador; depois de prontas e implantadas as instruções, o programador deve testar todo o sistema, através de simulação, para verificar falhas e possíveis adequações.</p> 
                    <p><b>Salário: Entre R$ 1.800 a R$ 9.000 reais.</b></p>
                    <br><br>";
                    break;
                    
                case 'SEDAN':
                    echo "<h2>Sedan</h2><br>
                    <p>Um programador pode ser alguém que desenvolve ou faz manutenção de software.</p>
                    <p>Formação recomendada: Para ser programador de computador é necessário diploma de curso técnico, que pode ser cursado paralelamente ou após a conclusão do ensino médio.</p> 
                    <p>Por ser um mercado competitivo, entretanto, cursos extras são importantes para diferenciar o currículo na hora da seleção.</p>
                    <p>Atividades: listar ou ler as especificações de programas, detalhadas por um analista de sistemas, e que mostram passo a passo as tarefas que o computador precisa executar; analisar o problema e a melhor forma para solucioná-lo; preparar diagramas para mostrar a seqüência de procedimentos a ser adotada pela máquina; codificar essas instruções para uma linguagem de computador; depois de prontas e implantadas as instruções, o programador deve testar todo o sistema, através de simulação, para verificar falhas e possíveis adequações.</p> 
                    <p><b>Salário: Entre R$ 1.800 a R$ 9.000 reais.</b></p>
                    <br><br>";
                    break;
                                            
                case 'SUV':
                    echo "<h2>SUV</h2><br>
                    <p>Um programador pode ser alguém que desenvolve ou faz manutenção de software.</p>
                    <p>Formação recomendada: Para ser programador de computador é necessário diploma de curso técnico, que pode ser cursado paralelamente ou após a conclusão do ensino médio.</p> 
                    <p>Por ser um mercado competitivo, entretanto, cursos extras são importantes para diferenciar o currículo na hora da seleção.</p>
                    <p>Atividades: listar ou ler as especificações de programas, detalhadas por um analista de sistemas, e que mostram passo a passo as tarefas que o computador precisa executar; analisar o problema e a melhor forma para solucioná-lo; preparar diagramas para mostrar a seqüência de procedimentos a ser adotada pela máquina; codificar essas instruções para uma linguagem de computador; depois de prontas e implantadas as instruções, o programador deve testar todo o sistema, através de simulação, para verificar falhas e possíveis adequações.</p> 
                    <p><b>Salário: Entre R$ 1.800 a R$ 9.000 reais.</b></p>
                    <br><br>";
                    break;

                default:
                echo "<h2>Infelizmente não encontramos isso em nossos bancos de dados!</h2><br>";
                echo "<b>Tente essas sugestões:</b><br>";
                echo "<b>Hatch</b><br>";
                echo "<b>Sedan</b><br>";
                echo "<b>SUV</b><br>";
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
        <p class="texto-rodape"><b>Contato:</b> carloseocandidotq@gmail.com</p>
        <p class="texto-rodape">WhatsApp: (16)00000-0000</p>
        <br>
        <h6>Desenvolvido por Carlos Candido</h6>

    </footer>

</body>
</html>