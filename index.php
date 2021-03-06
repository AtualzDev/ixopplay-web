<?php
// ini_set('display_errors', 'On');
// error_reporting(E_ALL);


include_once "admin/con/conexao.php";
//include_once "con/conexao.php";


$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['btn_enviar'])) {

    try {


        $stmt = $PDO->prepare('INSERT INTO contato (nome, email, mensagem, ip ) VALUES(:nome, :email, :mensagem, :ip)');

        $stmt->execute(array(
            ':nome' => $_POST["nome"],
            ':email' => $_POST["email"],
            ':mensagem' => $_POST["mensagem"],
            ':ip' => $ip,
          ));
      

        $form_inserted = true;
        //echo $stmt->rowCount();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@500&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="public/js/index.js" defer></script>
    <title>IxopPlay</title>
</head>

<body>

    <div class="show">
    </div>

    <div class="nav-bar">
        <div class="nav-item-holder">
            <li class="nav-li"><a href="#know-us">CONHEÇA O IXOPPLAY</a> </li>
            <div class="nav-circle-hover">
                <div class="nav-circle-inside"></div>
            </div>

        </div>
        <div class="nav-item-holder">
            <li class="nav-li"><a href="#consumers">CONSUMIDORES</a> </li>
            <div class="nav-circle-hover">
                <div class="nav-circle-inside"></div>
            </div>
        </div>
        <div class="nav-item-holder">
            <li class="nav-li"><a href="#shopkeepers">LOJISTAS</a> </li>
            <div class="nav-circle-hover">
                <div class="nav-circle-inside"></div>
            </div>
        </div>
        <div class="nav-item-holder">
            <li class="nav-li"><a href="#investors">INVESTIDORES</a> </li>
            <div class="nav-circle-hover">
                <div class="nav-circle-inside"></div>
            </div>
        </div>
        <div class="nav-item-holder">
            <li class="nav-li"><a href="#industries">INDÚSTRIAS</a> </li>
            <div class="nav-circle-hover">
                <div class="nav-circle-inside"></div>
            </div>
        </div>
        <div class="nav-item-holder">
            <li class="nav-li"><a href="#who-we-are">QUEM SOMOS</a> </li>
            <div class="nav-circle-hover">
                <div class="nav-circle-inside"></div>
            </div>
        </div>
        <div class="nav-item-holder">
            <li class="nav-li"><a href="#contact">CONTATE-NOS</a> </li>
            <div class="nav-circle-hover">
                <div class="nav-circle-inside"></div>
            </div>
        </div>
    </div>






    <!-- START -->
    <section id="start" class="start">
        <div class="logo-holder">
            <img class="logo" src="public/assets/images/logoP.png" alt="">
        </div>
         <?php
        if (isset($form_inserted)) {
            
        ?>
            <div class="alert alert-success" role="alert">
                Cadastro efetuado com sucesso, entraremos em contato em breve !
            </div>
            <br>
        <?php } ?>
        
        
        <h4 class="subtitle">Rota de fuga para quem quer rota de compra!</h4>

        <div class="social-media-buttons-holder">
            <li><a href=""><img src="public/assets/images/socialmedia/Face.png" alt=""></a></li>
            <li><a href=""><img src="public/assets/images/socialmedia/Insta.png" alt=""></a></li>
            <li><a href=""><img src="public/assets/images/socialmedia/Twit.png" alt=""></a></li>
            <li><a href=""><img src="public/assets/images/socialmedia/You.png" alt=""></a></li>
        </div>
        <p class="version-holder">
            <span>Versão: 22.01.2022</span>
        </p>
    </section>
    <!-- START -->

    <!-- CONHEÇA -->
    <section id="know-us">
        <img class="back-image" src="public/assets/images/slider/ixopplaytelafundo.png" alt="">
        <!-- <div class="page-title">
            <img src="public/assets/images/misc/ico_1.png" alt="">
        </div>
        <h1 class="subtitle">
            O APP IxopPlay foi idealizado com o propósito atender as necessidades do público que consome produtos
            alimentícios fazendo as tomadas de preços para baratear o valor da sua compra.
        </h1>  -->
        <div class="slider">
            <div class="img-holder">
                <div class="slider-fade">
                    <img class="slider-img" src="/public/assets/images/slider/ApresAssinantes02.png" alt="">
                </div>
                <div class="slider-fade">
                    <img class="slider-img" src="/public/assets/images/slider/ApresAssinantes03.png" alt="">
                </div>
                <div class="slider-fade">
                    <img class="slider-img" src="/public/assets/images/slider/ApresAssinantes04.png" alt="">
                </div>
                <div class="slider-fade">
                    <img class="slider-img" src="/public/assets/images/slider/ApresAssinantes05.png" alt="">
                </div>
                <div class="slider-fade">
                    <img class="slider-img" src="/public/assets/images/slider/ApresAssinantes06.png" alt="">
                </div>
                <div class="slider-fade">
                    <img class="slider-img" src="/public/assets/images/slider/ApresAssinantes07.png" alt="">
                </div>
                <div class="slider-fade">
                    <img class="slider-img" src="/public/assets/images/slider/ApresAssinantes08.png" alt="">
                </div>

            </div>
            <div class="dots-holder">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </section>
    <!-- CONSUMIDORES -->
    <section id="consumers">
        <img class="back-image" src="public/assets/images/fundos/03 IxopPlay TelaFundo Consumidores.png" alt="">

        <div class="page-title">
            <img src="public/assets/images/misc/consumers_logo.png" alt="">
            <span>CONSUMIDORES</span>
        </div>
        <h1 class="subtitle">
            ESTÃO PRESTES A CONHECER O APP QUE SERÁ INDISPENSÁVEL NA SUA ROTINA
        </h1>
        <!-- <img class="image-1" src="public/assets/images/misc/imagemMenorPreço.png" alt="">
        <img class="image-2" src="public/assets/images/misc/ImagemMenu.png" alt="">
        <img class="image-3" src="public/assets/images/misc/ImagemDiversas.png" alt=""> -->
        <div class="slider-consumers">
            <img class="consumer-slider-img" src="public/assets/images/slides consumers/Consumidores Slaid 01.png" alt="">
            <img class="consumer-slider-img" src="public/assets/images/slides consumers/Consumidores Slaid 02.png" alt="">
            <!-- <ul>
                <li>Realizar compras online</li>
            </ul>
            <ul>
                <li>Receber compras via delivery ou drive-thru</li>
            </ul>
            <ul>
                <li>Criar e gerenciar listas de compras</li>
            </ul>
            <ul>
                <li>Fazer cotação</li>
            </ul>
            <ul>
                <li>Controlar e conferir estoque(despensa)</li>
            </ul>
            <ul>
                <li>Controlar, gerenciar e analisar consumo</li>
            </ul>
            <ul>
                <li>Obter rotas</li>
            </ul>
            <ul>
                <li>Ser informado das promoções</li>
            </ul>
            <ul>
                <li>Obter rotas</li>
            </ul>
            <ul>
                <li>Participar de jogos, sorteios e entretenimentos</li>
            </ul>
            <ul>
                <li>Obter rendas e ganhos financeiros</li>
            </ul> -->
        </div>
    </section>
    <!-- CONSUMIDORES -->

    <!-- SHOPKEEPERS -->
    <section id="shopkeepers">
        <img class="back-image" src="public/assets/images/fundos/04 IxopPlay TelaFundo Lojistas.png" alt="">
        <!-- <div class="page-title">
            <img src="public/assets/images/misc/investors_logo.png" alt="">
            <span>LOJISTAS</span>
        </div>

        <img class="image-1" src="public/assets/images/misc/image_5.png" alt="">
        <img class="image-2" src="public/assets/images/misc/image_77.png" alt="">
        <img class="image-3" src="public/assets/images/misc/Image_7.png" alt="">
        <img class="image-4" src="public/assets/images/logoP.png" alt=""> -->

        <!-- <div class="list-holder">
            <li>Vender Online;</li>
            <li>Entregar delivery;</li>
            <li>Entregar drive-thru;</li>
            <li>Anunciar promoções;</li>
            <li>Destacar sua loja;</li>
            <li>Receber feedbacks dos clientes;</li>
            <li>Acesso estatísticos;</li>
            <li>Patrocinar eventos;</li>
            <li>Conhecer o perfil dos consumidores.</li>
        </div> -->
    </section>

    <!-- INVESTORS -->
    <section id="investors">
        <img class="back-image" src="public/assets/images/fundos/05 IxopPlay TelaFundo Investidores.png" alt="">

        <div class="page-title">
            <img src="public/assets/images/misc/investors_logo.png" alt="">
            <span>INVESTIDORES</span>
        </div>
        <div class="content-holder">
            <div class="socio">
                <h1>Como investir no IxopPlay?</h1>
                <h3>Adquirindo cotas</h3>
                <h3>-> Ordinárias (voto e rendimentos) OU</h3>
                <h3>-> Preferenciais (rendimentos)</h3>

                <div class="benefits-holder">
                    <h2>Seja SÓCIO e obtenha</h2>
                    <ul>
                        <li>Ganho de capital (valorização da cota);</li>
                        <li>Rendimentos trimestrais;</li>
                        <li>Preferências em novas aquisições;</li>
                        <li>Direito a voto e;</li>
                        <li>Uso gratuito do APP</li>
                    </ul>
                </div>
            </div>
            <div class="invest">
                <div class="documents-holder">
                    <img src="public/assets/images/misc/business.png" alt="">
                    <div class="restrict-area-holder">
                        <div class="restrict-area-button">
                            <img src="public/assets/images/misc/Icones2.png" alt="">
                            <a href="">Acesso Área Restrita</a>
                        </div>
                        <ul>
                            <li><a href="">Downloads</a></li>
                            <li><a href="">Plano de Negócio</a></li>
                            <li><a href="">Contrato de Investimento</a></li>
                            <li><a href="">Termo NDA</a></li>
                        </ul>
                    </div>
                </div>
                <div class="benefits-holder">
                    <h2>INVISTA 10 parcelas de R$ 1 mil para</h2>
                    <h3>Adquirir 1 cota (0,33%) do Capital Social e ganhe rendimento
                        anual (previsão) de:
                    </h3>
                    <ul>
                        <li>R$ 25 mil para o 2 ano;</li>
                        <li>R$ 150 mil para o 3 ano;</li>
                        <li>R$ 545 mil para o 4 ano e;</li>
                        <li>Crescimento de 15% para os anos seguintes.</li>
                    </ul>
                </div>

            </div>
        </div>

        <p class="page-hint">Acesse a área de restrita e saiba todos os detalhes de como e porquê investir!</p>

    </section>
    <!-- INVESTORS -->

    <!-- INDUSTRIES -->
    <section id="industries">
        <img class="back-image" src="public/assets/images/fundos/06 IxopPlay TelaFundo Fornecedores.png" alt="">

        <div class="page-title">
            <img src="public/assets/images/misc/investors_logo.png" alt="">
            <span>FORNECEDORES (INDÚSTRIAS, FABRICANTES E DISTRIBUIDORES)</span>
        </div>
        <h1 class="subtitle">No IxopPlay os fornecedores terão conhecimento</h1>

        <div class="info-holder">
            <li>De como está a aceitação do seus produtos e marcas junto aos consumidores</li>
            <li>Quem são seus concorretes diretos e quais são as maiores ameaças sobre suas vendas</li>
            <li>Em quais regiões, ou lojas ou estados e ou <br> municípios seus produtos não estão disponíveis aos
                consumidores</li>
            <li>Os números de vendas por ítem de consumo por lojas, região, estado ou município </li>
        </div>
        <div class="image-holder">
            <img src="public/assets/images/screens/image 58.png" alt="">
            <img src="public/assets/images/screens/image 59.png" alt="">
            <img src="public/assets/images/screens/image 60.png" alt="">
            <img src="public/assets/images/screens/image 61.png" alt="">
            <img src="public/assets/images/screens/image 62.png" alt="">
        </div>
    </section>
    <!-- INDUSTRIES -->


    <!-- WHO WE ARE -->
    <section id="who-we-are">
        <img class="back-image" src="public/assets/images/fundos/07 IxopPlay TelaFundo QuemSomos.png" alt="">
        <button>Trabalhe conosco</button>
        <div class="info-holder">
            <h1>QUEM SOMOS</h1>
            <span>A ItsCar World é uma empresa unipessoal que iniciou suas atividades em 2017 <br>
                <br>

                idealizar e trabalhar no desenvolvimento do IxopPlay é a tarefa principal desde 2019. <br>
                <br>
                Esta tarefa engloba todos os aspéctos da vida do consumidor de produtos alimentícios <br>
                dos lojistas, fabricantes e os seus respectivos comportamentos sociais e virtuais. <br>
                <br>
                Tudo foi pensado para ajudar, facilitar e baratear os custos do consumidor em suas tarefas rotineiras no
                <br>
                ato da realização das compras.
                <a href="">TRABALHE CONOSCO</a>
            </span>
        </div>
        <div class="image-holder">
            <img src="public/assets/images/misc/image_8.png" alt="">

        </div>
    </section>
    <!-- WHO WE ARE -->


    <!-- CONTACT -->
    <section id="contact">
        <img class="back-image" src="public/assets/images/fundos/08 IxopPlay TelaFundo Contate-nos.png" alt="">
        
        <div class="content">
            <div class="contact-form holder">
                <form id="" action="index.php" method="post" name="">
                    <input type="text" name="nome" id="" placeholder="Seu nome..." required="">
                    <input type="email" name="email" id="" placeholder="Seu email..." required="">
                    <!-- <input class="text" type="text" name="mensagem" id="" placeholder="Sua mensagem..." required=""> -->
                    <textarea class="text" required="" placeholder="Sua mensagem..." name="mensagem" id="" ></textarea>
                    <button type="submit" name="btn_enviar">Enviar</button>
                </form>
            </div>
        </div>
        <div class="adress-holder">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.467721652799!2d-51.85023118546882!3d-21.87805778554452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949164cbf3d26ac1%3A0x74dc26ee9ded70cd!2sRua%20Carlos%20Gomes%2C%20871%20-%20Jd%20Europa%2C%20Pres.%20Venceslau%20-%20SP%2C%2019400-000!5e0!3m2!1sen!2sbr!4v1643384620938!5m2!1sen!2sbr"></iframe>

            </div>
            
            <!-- <div class="adress holder">
                <p>Rua Carlos GOmes, 871 - Jarim Europa - Cep 19.400-000 - Pres. Venceslau (SP)</p>
                <p>WhatsApp: (18) 93300 - 7549 / (18) 99665-9878</p>
                <p>E-mail: contato@ixoplay.com.br</p>
                <p>Site: http://www.ixopplay.com.br</p>
            </div> -->
        </div>

        <div class="social-media-buttons-holder">
            <li><a href=""><img src="public/assets/images/socialmedia/Face.png" alt=""></a></li>
            <li><a href=""><img src="public/assets/images/socialmedia/Insta.png" alt=""></a></li>
            <li><a href=""><img src="public/assets/images/socialmedia/Twit.png" alt=""></a></li>
            <li><a href=""><img src="public/assets/images/socialmedia/You.png" alt=""></a></li>
        </div>
    </section>
    <!-- CONTACT -->

    <!-- FOOTER -->
    <footer>

    </footer>
</body>

</html>
