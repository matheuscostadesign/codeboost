<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title><?php bloginfo('name')?><?php wp_title('-')?></title>
  <meta name="title" content="Redesign Neon - Banco 100% digital">
  <meta name="description" content="A conta digital certa pra cuidar bem do seu dinheiro">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/">
  <meta property="og:title" content="Redesign Neon - Banco 100% digital">
  <meta property="og:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
  <meta property="og:image" content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/img/share-img.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/">
  <meta property="twitter:title" content="Redesign Neon - Banco 100% digital">
  <meta property="twitter:description" content="A conta digital certa pra cuidar bem do seu dinheiro">
  <meta property="twitter:image"
    content="https://matheuscostadesign.github.io/codeboost/projeto03-neon/img/share-img.jpg">

  <!-- Favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png" type="image/png">

  <!-- Styles -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.7.5/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.min.css">

  <?php wp_head();?>

</head>

<body>

  <?php get_header();?>

  <section class="s-hero">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h3>Abra sua conta, é só baixar o app!</h3>
        <h1>A conta digital certa pra cuidar bem do seu dinheiro</h1>
        <button class="btn-primary">Abra sua conta digital</button>
        <ul>
          <li>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-anuidade.svg" alt="Cartão sem anuidade">
            </div>
            <span>Cartão sem <br>anuidade</span>
          </li>
          <li>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-conta-digital.svg" alt="Conta digital 100% grátis">
            </div>
            <span>Conta digital<br> 100% grátis</span>
          </li>
          <li>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-dinheiro.svg" alt="Seu dinheiro rendendo mais">
            </div>
            <span>Seu dinheiro<br> rendendo mais</span>
          </li>
        </ul>
      </div>
      <div class="area-image">
        <h2 data-aos="fade-left">Banco 100% digital</h2>
        <div class="image" data-aos="zoom-in">
          <img src="<?php echo get_template_directory_uri() ?>/img/card-neon-front.png" class="card-front" alt="Card Neon Front">
          <img src="<?php echo get_template_directory_uri() ?>/img/card-neon-back.png" class="card-back" alt="Card Neon Back">
          <img src="<?php echo get_template_directory_uri() ?>/img/circle-cards-neon.svg" class="circle" alt="Neon">
        </div>
      </div>
    </div>
  </section>

  <section class="s-card-neon">
    <div class="container">
      <div class="left-area">
        <div class="ilustra-mockup">
          <img src="<?php echo get_template_directory_uri() ?>/img/circle-mockup.svg" class="circle" data-aos="fade-left" alt="Circulo">
          <img src="<?php echo get_template_directory_uri() ?>/img/mockup.svg" class="mockup" data-aos="flip-right" alt="Mockup Neon">
        </div>
        <div class="text" data-aos="fade-up">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-neon.svg" alt="">
          </div>
          <div class="info-txt">
            <h3>Baixe nosso app</h3>
            <p>Que tal abrir uma conta digital para ver como a gente faz a sua vida muito mais simples?</p>
            <ul>
              <li>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo get_template_directory_uri() ?>/img/apple-store.svg" alt="Apple Store">
                </a>
              </li>
              <li>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo get_template_directory_uri() ?>/img/google-play.svg" alt="Google Play">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="right-area">
        <div class="main-text" data-aos="fade-left">
          <h2>Resolva sua vida direto pelo app Neon!</h2>
          <ul>
            <li>
              <div class="info">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-cartao-credito.svg" alt="Icone">
                <div class="txt">
                  <h3>Cartão de crédito sem anuidade</h3>
                  <p>Conta digital com cartão de crédito sem anuidade e sem complicação</p>
                </div>
              </div>
              <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="Icone">
            </li>
            <li>
              <div class="info">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-taxas.svg" alt="Icone">
                <div class="txt">
                  <h3>Sem taxas</h3>
                  <p>Transferências, boletos de depósito e outros serviços gratuitos</p>
                </div>
              </div>
              <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="Icone">
            </li>
            <li>
              <div class="info">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-investimentos.svg" alt="Icone">
                <div class="txt">
                  <h3>Mais investimentos</h3>
                  <p>Rendem mais que a poupança e você resgata quando quiser</p>
                </div>
              </div>
              <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="Icone">
            </li>
          </ul>
          <a href="#" class="btn">Conheça outros produtos</a>
        </div>
        <div class="box-card" data-aos="fade-left">
          <div class="text">
            <h2>Neon Pejota</h2>
            <h3>Contas digitais PJ gratuitas para decolar seu negócio!</h3>
            <p>As melhores contas para fazer pagamentos, compras e receber dos seus clientes.</p>
            <div class="btns">
              <button class="btn-primary">Sou MEI</button>
              <button class="btn-primary">SOU ME</button>
            </div>
          </div>
          <img src="<?php echo get_template_directory_uri() ?>/img/card-front-pj.svg" class="image" alt="Cartão Neon">
        </div>
      </div>
    </div>
  </section>

  <section class="s-depoimentos">
    <div class="container">
      <div class="top" data-aos="fade-right">
        <h2><span>Prático, fácil, moderno</span>Você resolve tudo sem estresse 😊</h2>
        <div class="swiper-pagination"></div>
      </div>
      <div class="slide-depoimentos" data-aos="fade-up">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="user">
                <strong>@marciogurka</strong>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="Twitter">
              </div>
              <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoNeon</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="user">
                <strong>@kleriene18</strong>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="Twitter">
              </div>
              <p>Eu uso o Neon pra render o pouquinho que eu tenho. Como disse minha amiga Bruna, um dia eu abro o app
                de novo e PA: tô rica.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="user">
                <strong>@mzltweet</strong>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="Twitter">
              </div>
              <p>Só por ter um cartão virtual com bloqueio fácil no app, já ganha e muito na segurança pro cliente.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="user">
                <strong>@marciogurka</strong>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="Twitter">
              </div>
              <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoNeon</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="user">
                <strong>@marciogurka</strong>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="Twitter">
              </div>
              <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoNeon</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="user">
                <strong>@marciogurka</strong>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="Twitter">
              </div>
              <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoNeon</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-depoimento">
              <div class="user">
                <strong>@marciogurka</strong>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="Twitter">
              </div>
              <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoNeon</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s-conta-digital">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h2><span>Aproveite</span>Domine o seu dinheiro com uma conta 100% digital</h2>
        <ul>
          <li>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-cartao-internacional.svg" alt="Icone">
            </div>
            <div class="info">
              <h4>Cartão visa internacional</h4>
              <p>Tenha facilidades e benefícios para o seu dia a dia.</p>
            </div>
          </li>
          <li>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-taxa-zero.svg" alt="Icone">
            </div>
            <div class="info">
              <h4>Zero mensalidade e anuidade</h4>
              <p>Não gaste grana pagando taxas desnecessárias.</p>
            </div>
          </li>
          <li>
            <div class="icon">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon-poupanca.svg" alt="Icone">
            </div>
            <div class="info">
              <h4>Investimento que rende mais que a poupança</h4>
              <p>Invista o seu dinheiro de maneira mais rentável.</p>
            </div>
          </li>
        </ul>
        <button class="btn-primary">Abra sua conta digital</button>
      </div>
      <div class="image">
        <img src="<?php echo get_template_directory_uri() ?>/img/mockup-01.svg" data-aos="fade-up" class="mockup-01" alt="Mockup">
        <img src="<?php echo get_template_directory_uri() ?>/img/mockup-02.png" data-aos="fade-down" class="mockup-02" alt="Mockup">
        <img src="<?php echo get_template_directory_uri() ?>/img/circle-conta-digital.svg" data-aos="zoom-in" class="circle" alt="Circulo">
      </div>
    </div>
  </section>

  <?php wp_footer();?>

</body>

  <?php get_footer();?>

  <!-- Scripts -->
  <script src="https://unpkg.com/swiper@6.7.5/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    var swiper = new Swiper(".slide-depoimentos", {
      slidesPerView: 3,
      spaceBetween: 32,
      grabCursor: true,
      pagination: {
        el: ".s-depoimentos .top .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        320: {
          slidesPerView: 1.3,
          spaceBetween: 16,
        },
        600: {
          slidesPerView: 2.3,
          spaceBetween: 16,
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 32,
        }
      }
    });

    AOS.init({
      duration: 1000,
      once: true
    });
  </script>

</body>

</html>