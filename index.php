<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="Imagens/favicon/favicon-16x16.png" type="image/x-icon">
    <!-- font awesome import -->
    <script src="https://kit.fontawesome.com/523942d4fb.js" crossorigin="anonymous"></script>
    <title>Bueno Beauty</title>
</head>

<body>
    <header>
        <!--O header está englobando até a parte da imagem principal contendo um texto e um botão "Saiba Mais"-->
        <nav class="flex">
            <!--A barra de navegação está se referindo apenas a parte mais superior contendo os links de contato-->
            <div class="linksArea">
                <a href=""><i class="fa-solid fa-envelope-open-text" alt="Ícone do gmail em preto e branco"> </i>
                    seusalaofavorito@buenobeauty.com.br</a>
                <a href=""><i class="fa-solid fa-phone-volume" alt="Ícone de Telefone em preto e branco"></i>
                    +55 (71) 0100-1010</a>
                <a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp" alt="Ícone da rede social Whatsapp em preto e branco"></i>
                    +55 (71) 9 9563-5561</a>
            </div>
            <div class="flex socialLinks">
                <p>Siga-nos:</p>
                <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube" alt="Ícone da plataforma de streaming Youtube em preto e branco"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram" alt="Ícone da rede social Instagram em preto e branco"></i></a>
                <a href="https://www.tiktok.com/pt-BR" target="_blank"><i class="fa-brands fa-tiktok" alt="Ícone da rede social Tik Tok em preto e branco"></i></a>
                <a href="https://pt-br.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f" alt="Ícone da rede social Facebook em preto e branco"></i></a>
            </div>
        </nav>

        <div class="flex" id="menuBar">
            <!--Parte do código referindo-se à barra branca contendo informações da página-->

            <div>
                <img class="logo" src="Imagens/svg/logo.svg" alt="" srcset="">
            </div>
            <div class="menuLinks">
                <a id="home">HOME</a>
                <a id="sobreNos">SOBRE NÓS</a>
                <a id="servicos">SERVIÇOS</a>
                <a id="newsletter">NEWSLETTER</a>
                <a id="contato">CONTATO</a>

                <a href="formulario.php" target="_self" class="menuButton" target="_blank">AGENDAR
                    HORÁRIO </a>
                <!-- <img src="Imagens/icones Relógio Icon.png" alt="Ícone de relógio minimalista em preto e branco" width="15px"></a> -->

            </div>
        </div>
    </header>

    <main id="homeContainer" class="flex">
        <!--Código da imagem principal contendo a modelo centralizada na página com título grande e pequeno texto-->
        <div id="mainImage">
            <img src="Imagens/Fotos_homepage/Model Main Image.png" alt="Foto de jovem mulher modelo de cabelos tom ruivo acobreado com pele clara e olhos verdes" width="400px">
            <!-- <img class="bolhasImg"
            src="Imagens/Fotos homepage/Background Circles.png"
                alt="Imagem contendo três circulos de cores e gradientes diferentes" width=""> -->
        </div>
        <div class="flex mainContent">
            <h1 class="mainTitle">SEUS CABELOS PRECISAM DOS CUIDADOS CERTOS.</h1>
            <p id="mainDescription">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                officia consequat duis enim velit mollit.</p>
            <div class="mainButton">
                <button id="mainButton" type="button"><a href="formulario.php" target="_self">Saiba Mais <img src="Imagens/icones/Arrow Icon.png" alt="Ícone de duplas setas apontando para o lado direito" width="15px"></a>
                </button>
            </div>
        </div>
    </main>


    <!--Parte iniciada a partir do desenvolvimento da âncora #Sobre Nós-->
    <section id="aboutContainer" class="flex">
        <div id="infosContainer" class="flex">
            <div class="infos">
                <div>
                    <div class="tittleaboutinfos">
                        <h4 class="tittlesblack">SOBRE A</h4>
                        <h3 class="tittlescolored">BUENO BEAUTY</h3>
                    </div>
                    <p id="infoMainText">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                        Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                        Velit officia consequat duis enim velit mollit</p>
                </div>
                <!--A div a seguir é apenas para tratar os 4 mini textos acompanhados de imagem-->
                <div class="flex-wrap" id="infosArea">
                    <div class="miniTexts">
                        <img src="" alt="" width="">
                        <h5>Linha de utensílios de ponta</h5>
                        <p>Amet minim mollit non deserunt ullam co est sit.</p>
                    </div>
                    <div class="miniTexts">
                        <img src="" alt="" width="">
                        <h5>Produtos da melhor qualidade</h5>
                        <p>Amet minim mollit non deserunt ullam co est sit.</p>
                    </div>
                    <div class="miniTexts">
                        <img src="" alt="" width="">
                        <h5>Política de Higiene e cuidados sanitários</h5>
                        <p>Amet minim mollit non deserunt ullam co est sit.</p>
                    </div>
                    <div class="miniTexts">
                        <img src="" alt="" width="">
                        <h5>Conforto e acolhimento</h5>
                        <p>Amet minim mollit non deserunt ullam co est sit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="imageArea">
            <img style='height: 100%; width: 100%; object-fit: contain' src="Imagens/Fotos_homepage/female-hairdresser-making-hairstyle-redhead-woman-beauty-salon 1.png" alt="" width="">
        </div>
        <!--FALTA ADICIONAR A IMAGEM LATERAL DO CABELO COM PENTE / (CASO VÁ UTILIZÁ-LA)-->
    </section>
    <section id="servicosContainer">
        <div class="onlyservices">
            <div class="centered tittleourservices">
                <h4 class="tittlesblack">NOSSOS</h4>
                <h3 class="tittlescolored">SERVIÇOS</h3>
            </div>
            <div id="definitionArea" class="flex-wrap centered">
                <?php

                // Verifica se o cache existe e ainda é válido
                if (isset($_SESSION['servicos']) && (time() - $_SESSION['servicos']['timestamp']) < 3600) {
                    $servicos = $_SESSION['servicos']['data'];
                } else {
                    try {
                    // Conexão com o banco de dados
                    $conexao = mysqli_connect("localhost", "root", "123456", "mydb");

                    // Verifica se a conexão foi realizada com sucesso
                    if (mysqli_connect_errno()) {
                        echo "Falha ao conectar ao banco de dados: " . mysqli_connect_error();
                    }



                    // Consulta ao banco de dados
                    $query = "SELECT nome, descricao, preco FROM servicos";
                    $result = mysqli_query($conexao, $query);
                    $servicos = array();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $servicos[] = $row;
                        }
                    }

                    mysqli_free_result($result);

                    // Fecha a conexão com o banco de dados
                    mysqli_close($conexao);

                    // Armazena os dados em cache na sessão
                    $_SESSION['servicos'] = array(
                        'timestamp' => time(),
                        'data' => $servicos
                    );

                } catch (\Throwable $th) {
                    //throw $th;
                }
                }

                if (isset($servicos)) {
            
                    // Loop para exibir os resultados
                    foreach($servicos as $servico) {
                        $nome = $servico['nome'];
                        $descricao = $servico['descricao'];
                        $preco = $servico['preco'];
                        
                        echo '<div class="definitionservices flex">';
                        echo '<h5 class="tittlesservices">' . $nome . '</h5>';
                        echo '<p class="textaboutservices">' . $descricao . '</p>';
                        echo '<p class="pricesservices">R$' . $preco . '</p>';
                        echo '<button class="btnschedule" type="button"><a href="formulario.php" target="_self">AGENDAR HORÁRIO</a></button>';
                        echo '</div>';
                    }
                } else {
                    echo '<h5>Houve uma falha na comunicação com nosso servidor pedimos que tente novamente mais tarde</h5>';
                }
                ?>
            </div>
        </div>
    </section>

    <!--A próxima section vai ser para o desenvolvimento até o ponto sobre os profissionais-->
    <section id="extrasContainer" class="flex centered">
        <div id="know" class="divspaday">
            <!-- <img style="position: absolute; z-index: 2;" src="./Imagens/Fotos_homepage/Rectangle48.png" alt=""> -->
            <div>
                <div class="tittlesspaday">
                    <h4 class="tittleswhite">CONHEÇA NOSSO</h4>
                    <h3 class="tittlecolored">DIA DE NOIVA</h3>
                </div>
                <p class="textswhite">Amet minim mollit non deserunt ullam coet minim mollit.</p>
            </div>
            <div>
                <button class="btnspaday" type="button"><a href="">Mais informações</a></button>
            </div>
        </div>

        <div id="relax" class="divspaday">
            <!-- <img style="position: absolute; z-index: 2;" src="./Imagens/Fotos_homepage/Rectangle49.png" alt=""> -->
            <div style="z-index: 1;">
                <div class="tittlesspaday">
                    <h4 class="tittleswhite">RELAXE NO</h4>
                    <h3 class="tittlecolored">SPA ZEN</h3>
                </div>
                <p class="textswhite">Amet minim mollit non deserunt ullam coet minim mollit.</p>
            </div>
            <div>
                <button class="btnspaday" type="button"><a href="">Mais informações</a></button>
            </div>
        </div>
    </section>

    <section id="newsletterContainer" class="flex-column centered">
        <h5>Assine Nosssa</h5>
        <h4>NEWSLETTER</h4>
        <p>Cadastre-se para receber gratuitamente nossas promoções diretamente em seu e-mail.</p>
        <div class="newsInputArea">
            <input type="text" placeholder="Informe seu e-mail">
            <button>Assinar Newsletter</button>
        </div>

    </section>

    <footer id="contatoContainer" class="flex centered"> <!--Parte com fundo de cor em preto no final da página do site-->
        <div id="centralFooter" class="centered flex-column">
            <img src="Imagens/svg/Group 2.svg" alt="" srcset="">
            <div class="white">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
        </div>
        <div class="footerSection grow">
            <h4>Empresa</h5>
                <ul>
                    <li id="sobreNos2" class="selectors">Sobre Nos</li>
                    <li id="servicos2" class="selectors">Serviços</li>
                    <li id="contato2" class="selectors">Contato</li>
                </ul>
        </div>
        <div class="footerSection grow">
            <h4>Contato</h5>
                <ul>
                    <li>Fale Conosco</li>
                    <li>Agendar Horário </li>
                    <li>(00) 0000-0000 </li>
                    <li>(00) 00000-0000</li>
                </ul>
        </div>
    </footer>
    <script src="./js/index.js"></script>
</body>

</html>