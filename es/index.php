<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amazon Refuje</title>
  <meta name="description" content="Es una iniciativa única y visionaria en la región de la Amazonía peruana. Este proyecto ha sido concebido con el objetivo de ofrecer un entorno seguro, sostenible y próspero para las familias que buscan un escape de las tensiones globales, al mismo tiempo que representa una excelente oportunidad de inversión.">
  <link rel="icon" href="../assets/image/logo.webp" type="image/webp">
  <link rel="stylesheet" href="../style.css">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Amazon Refuje">
  <meta property="og:description" content="Descubre una iniciativa única y visionaria en la Amazonía peruana. Ofrecemos un entorno seguro y sostenible para familias, además de ser una excelente oportunidad de inversión.">
  <meta property="og:image" content="./assets/social-media/presentacion.png">
  <meta property="og:url" content="http://amazonrefuge.pe/">
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Amazon Refuje">
  <meta name="twitter:description" content="Únete a nuestra iniciativa visionaria en la Amazonía peruana. Un entorno seguro y sostenible para familias, con grandes oportunidades de inversión.">
  <meta name="twitter:image" content="/assets/social-media/presentacion.png">
  <!-- <meta name="twitter:site" content="@tu_usuario_de_twitter"> -->

  <!-- Precargar fuentes Roboto -->
  <link rel="preload" href="../assets/fonts/Roboto/Roboto-VariableFont_wdth,wght.ttf" as="font" type="font/ttf" crossorigin="anonymous">
  <link rel="preload" href="../assets/fonts/Roboto/Roboto-Italic-VariableFont_wdth,wght.ttf" as="font" type="font/ttf" crossorigin="anonymous">

  <!-- Precargar fuente Jura -->
  <link rel="preload" href="../assets/fonts/Jura/Jura-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin="anonymous">

  <!-- preload images -->
  <link rel="preload" href="../assets/image/about.webp" as="image"> 
  <link rel="preload" href="../assets/image/check.svg" as="image">
  <link rel="preload" href="../assets/image/coordenadas.webp" as="image">
  <link rel="preload" href="../assets/image/eco-aldea.webp" as="image">
  <link rel="preload" href="../assets/image/flor.webp" as="image">
  <link rel="preload" href="../assets/image/hectarias.webp" as="image">
  <link rel="preload" href="../assets/image/hero.webp" as="image">
  <link rel="preload" href="../assets/image/hoja.webp" as="image">
  <link rel="preload" href="../assets/image/huacamayo.webp" as="image">
  <link rel="preload" href="../assets/image/logo.webp" as="image">
  <link rel="preload" href="../assets/image/mariposa.webp" as="image">
  <link rel="preload" href="../assets/image/seguridad-fisica-sanitaria.webp" as="image">
  <link rel="preload" href="../assets/image/territorio.webp" as="image">
  <link rel="preload" href="../assets/image/whatsapp.webp" as="image">
</head>
<body>
  <header class="header">
    <div class="header__container">
      <img src="../assets/image/logo.webp" alt="logo amazon refuje" class="header__logo">
      <label class="toggle">
        <span>
          <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">
            <path d="M4 6l16 0" />
            <path d="M4 12l16 0" />
            <path d="M4 18l16 0" />
          </svg>
        </span>
        <input type="checkbox" id="toggle-menu" style="display: none;">
      </label>
      <div class="overlay"></div>
      <nav class="header__nav">
        <div class="header__nav--toggle">
          <label for="toggle-menu" class="toggle closed">
            <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x">
              <path d="M18 6l-12 12" />
              <path d="M6 6l12 12" />
            </svg>
          </label>
        </div>
        <a href="#main">REFUGIO AMAZONAS</a>
        <a href="#about">NOSOTROS</a>
        <a href="#location">ESTAMOS AQUÍ</a>
        <a href="#differential">DIFERENCIAL</a>
        <a href="#benefits">BENEFICIOS</a>
        <a href="#contact">CONTACTO</a>
        <a href="https://wa.me/+51970909121" target="_blank">
          <img src="../assets/image/whatsapp.webp" alt="whatsapp">
        </a>
      </nav>
    </div>
  </header>

  <section class="hero" style="background-image: url('../assets/image/hero.webp')">
    <div class="hero__description">
      <p>ENCUENTRA TRANQUILIDAD EN TIEMPOS  INCIERTOS</p>
      <p>VIVE EN LA AMAZONÍA</p>
    </div>
    <a href="#main" class="hero__btn">
      <span>
        <svg width="62" height="82" viewBox="0 0 62 82" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_4_81)">
          <path d="M0.5 51.5C0.5 68.3447 14.1553 82 31 82C47.8447 82 61.5 68.3447 61.5 51.5C61.5 34.6553 47.8447 21 31 21C14.1553 21 0.5 34.6553 0.5 51.5Z" fill="white" fill-opacity="0.2"/>
          <path d="M30.5 0V62" stroke="#E0E0E0" stroke-width="2"/>
          <path d="M44.5 47L30.5 61L16.5 47" stroke="#E0E0E0" stroke-width="2"/>
          </g>
          <defs>
          <clipPath id="clip0_4_81">
          <rect width="61" height="82" fill="white" transform="translate(0.5)"/>
          </clipPath>
          </defs>
        </svg>
      </span>
      <span class="hero__btn--text">Seguir navegando</span>
    </a>
  </section>

  <section id="main" class="main">
    <img loading="lazy" class="main__flower" src="../assets/image/flor.webp" alt="flor">

    <div class="title">
      <div>
        <svg width="61" height="50" viewBox="0 0 61 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60.4973 47.4387C60.4963 47.3942 60.4943 47.3497 60.4905 47.3051C60.488 47.2754 60.4848 47.2461 60.4811 47.2165C60.476 47.1752 60.4699 47.1341 60.4623 47.0929C60.4564 47.0604 60.4496 47.0283 60.4423 46.9966C60.4338 46.9599 60.4246 46.9236 60.4142 46.8871C60.4041 46.8516 60.3931 46.8166 60.3812 46.7818C60.3703 46.7499 60.3589 46.7184 60.3466 46.687C60.3316 46.6489 60.3155 46.6114 60.2984 46.5743C60.2857 46.5466 60.2727 46.519 60.2587 46.4917C60.2388 46.4527 60.2177 46.4147 60.1955 46.3771C60.1864 46.3618 60.1793 46.3458 60.1699 46.3306L39.247 12.5723V7.03778C39.247 5.82266 38.2619 4.83758 37.0467 4.83758C35.8316 4.83758 34.8465 5.82266 34.8465 7.03778V12.5124L31.1868 16.1722L27.7805 10.8404V2.50953C27.7805 1.29441 26.7954 0.309326 25.5803 0.309326C24.3652 0.309326 23.3801 1.29441 23.3801 2.50953V10.8406L0.846055 46.1129C0.590586 46.5128 0.482422 46.9639 0.504336 47.4044C0.503281 47.4331 0.5 47.4613 0.5 47.4903C0.5 48.7054 1.48508 49.6905 2.7002 49.6905H47.7162H48.4603H58.2928C58.2958 49.6905 58.299 49.6908 58.3019 49.6908C58.37 49.6908 58.4381 49.6864 58.5061 49.6802C58.5187 49.679 58.5311 49.6777 58.5435 49.6763C58.6736 49.6619 58.8034 49.6359 58.931 49.5975C58.9487 49.5923 58.9661 49.5865 58.9838 49.5807C59.0299 49.5656 59.0755 49.5488 59.1208 49.5305C59.137 49.5241 59.1534 49.5181 59.1693 49.5112C59.2246 49.4873 59.2794 49.461 59.3333 49.4321C59.3513 49.4224 59.3687 49.4118 59.3864 49.4017C59.4104 49.3879 59.4349 49.3751 59.4587 49.3604C59.4693 49.3538 59.4787 49.3459 59.4891 49.3393C59.5239 49.3168 59.5577 49.2931 59.5911 49.2687C59.6184 49.2489 59.6457 49.2291 59.672 49.2083C59.6989 49.1867 59.7248 49.1638 59.7507 49.1411C59.7802 49.1151 59.8097 49.0893 59.8375 49.0622C59.8583 49.042 59.8776 49.0208 59.8974 48.9998C59.9271 48.9684 59.9565 48.9372 59.9841 48.9044C60.0018 48.8835 60.0181 48.8615 60.035 48.8398C60.0614 48.8059 60.0879 48.7722 60.112 48.7368C60.1296 48.7113 60.1456 48.6844 60.1621 48.6581C60.1825 48.6255 60.2032 48.5933 60.2218 48.5597C60.24 48.527 60.2561 48.4933 60.2727 48.4595C60.2867 48.4308 60.3016 48.4024 60.3143 48.3732C60.3311 48.3349 60.3455 48.2955 60.3602 48.2561C60.37 48.2295 60.3806 48.2031 60.3894 48.1762C60.4024 48.1363 60.4133 48.0956 60.4239 48.0548C60.4316 48.0261 60.4396 47.9976 60.4461 47.9685C60.4543 47.9313 60.4606 47.8934 60.467 47.8554C60.4728 47.8205 60.4787 47.7856 60.4829 47.7504C60.4868 47.7182 60.4891 47.6854 60.4914 47.6526C60.4945 47.6104 60.4972 47.5682 60.4979 47.5259C60.498 47.5138 60.4996 47.5021 60.4996 47.4899C60.5 47.4726 60.4978 47.4558 60.4973 47.4387ZM6.59365 45.2901L25.5803 15.5704L28.966 20.8703C28.9675 20.8725 28.9688 20.8748 28.9704 20.8771L30.864 23.8412L18.0182 45.2901H6.59365ZM23.1472 45.2901L33.5114 27.9851L44.5669 45.2901H23.1472ZM49.7888 45.2901L33.6124 19.9696L36.7252 16.8568L54.3476 45.2901H49.7888Z" fill="#034F29"/>
        </svg>
        <h3>REFUGIO</h3>
      </div>
      <h2>AMAZONAS</h2>
    </div>

    <article class="main__description">
      <p class="main__description--text">
        Es una iniciativa única y visionaria en la región de la Amazonía peruana. Este proyecto ha sido concebido con el objetivo de ofrecer un entorno seguro, sostenible y próspero para las familias que buscan un escape de las tensiones globales, al mismo tiempo que representa una excelente oportunidad de inversión.
      </p>
      <img loading="lazy" class="main__description--img" src="../assets/image/about.webp" alt="imagen de refugio">
    </article>
  </section>

  <section id="about" class="about">
    <div class="title">
      <div>
        <svg width="61" height="50" viewBox="0 0 61 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M60.4973 47.4387C60.4963 47.3942 60.4943 47.3497 60.4905 47.3051C60.488 47.2754 60.4848 47.2461 60.4811 47.2165C60.476 47.1752 60.4699 47.1341 60.4623 47.0929C60.4564 47.0604 60.4496 47.0283 60.4423 46.9966C60.4338 46.9599 60.4246 46.9236 60.4142 46.8871C60.4041 46.8516 60.3931 46.8166 60.3812 46.7818C60.3703 46.7499 60.3589 46.7184 60.3466 46.687C60.3316 46.6489 60.3155 46.6114 60.2984 46.5743C60.2857 46.5466 60.2727 46.519 60.2587 46.4917C60.2388 46.4527 60.2177 46.4147 60.1955 46.3771C60.1864 46.3618 60.1793 46.3458 60.1699 46.3306L39.247 12.5723V7.03778C39.247 5.82266 38.2619 4.83758 37.0467 4.83758C35.8316 4.83758 34.8465 5.82266 34.8465 7.03778V12.5124L31.1868 16.1722L27.7805 10.8404V2.50953C27.7805 1.29441 26.7954 0.309326 25.5803 0.309326C24.3652 0.309326 23.3801 1.29441 23.3801 2.50953V10.8406L0.846055 46.1129C0.590586 46.5128 0.482422 46.9639 0.504336 47.4044C0.503281 47.4331 0.5 47.4613 0.5 47.4903C0.5 48.7054 1.48508 49.6905 2.7002 49.6905H47.7162H48.4603H58.2928C58.2958 49.6905 58.299 49.6908 58.3019 49.6908C58.37 49.6908 58.4381 49.6864 58.5061 49.6802C58.5187 49.679 58.5311 49.6777 58.5435 49.6763C58.6736 49.6619 58.8034 49.6359 58.931 49.5975C58.9487 49.5923 58.9661 49.5865 58.9838 49.5807C59.0299 49.5656 59.0755 49.5488 59.1208 49.5305C59.137 49.5241 59.1534 49.5181 59.1693 49.5112C59.2246 49.4873 59.2794 49.461 59.3333 49.4321C59.3513 49.4224 59.3687 49.4118 59.3864 49.4017C59.4104 49.3879 59.4349 49.3751 59.4587 49.3604C59.4693 49.3538 59.4787 49.3459 59.4891 49.3393C59.5239 49.3168 59.5577 49.2931 59.5911 49.2687C59.6184 49.2489 59.6457 49.2291 59.672 49.2083C59.6989 49.1867 59.7248 49.1638 59.7507 49.1411C59.7802 49.1151 59.8097 49.0893 59.8375 49.0622C59.8583 49.042 59.8776 49.0208 59.8974 48.9998C59.9271 48.9684 59.9565 48.9372 59.9841 48.9044C60.0018 48.8835 60.0181 48.8615 60.035 48.8398C60.0614 48.8059 60.0879 48.7722 60.112 48.7368C60.1296 48.7113 60.1456 48.6844 60.1621 48.6581C60.1825 48.6255 60.2032 48.5933 60.2218 48.5597C60.24 48.527 60.2561 48.4933 60.2727 48.4595C60.2867 48.4308 60.3016 48.4024 60.3143 48.3732C60.3311 48.3349 60.3455 48.2955 60.3602 48.2561C60.37 48.2295 60.3806 48.2031 60.3894 48.1762C60.4024 48.1363 60.4133 48.0956 60.4239 48.0548C60.4316 48.0261 60.4396 47.9976 60.4461 47.9685C60.4543 47.9313 60.4606 47.8934 60.467 47.8554C60.4728 47.8205 60.4787 47.7856 60.4829 47.7504C60.4868 47.7182 60.4891 47.6854 60.4914 47.6526C60.4945 47.6104 60.4972 47.5682 60.4979 47.5259C60.498 47.5138 60.4996 47.5021 60.4996 47.4899C60.5 47.4726 60.4978 47.4558 60.4973 47.4387ZM6.59365 45.2901L25.5803 15.5704L28.966 20.8703C28.9675 20.8725 28.9688 20.8748 28.9704 20.8771L30.864 23.8412L18.0182 45.2901H6.59365ZM23.1472 45.2901L33.5114 27.9851L44.5669 45.2901H23.1472ZM49.7888 45.2901L33.6124 19.9696L36.7252 16.8568L54.3476 45.2901H49.7888Z" fill="#034F29"/>
        </svg>
        <h3>ACERCA DE</h3>
      </div>
      <h2>NOSOTROS</h2>
    </div>
    <article class="about__description">
      <div class="about__description--btns">
        <button class="about__description--btn active">Ubicación</button>
        <button class="about__description--btn">Turismo</button>
        <button class="about__description--btn">Sostenibilidad</button>
        <span></span>
      </div>
      <div class="about__description--text">
        <p>Está ubicado en una de las regiones más biodiversas y protegidas del planeta, ofreciendo una oportunidad única de vivir en armonía con la naturaleza.</p>
        <p>El proyecto está diseñado para salvar la seguridad integral de las familias, mediante el acceso a una fuente inagotable de recursos hídricos y naturales, lo que asegura la autosuficiencia a largo plazo.</p>
      </div>
      <div class="about__description--text hidden">
        <p>Ofrece oportunidades para generar ingresos sostenibles mediante el turismo ecológico y el alquiler de casas de campo, lo que permite a los propietarios no solo disfrutar de un entorno privilegiado, sino también aprovechar el crecimiento del turismo en la región.</p>
      </div>
      <div class="about__description--text hidden">
        <p>En el marco de nuestra visión de sostenibilidad, Refugio Amazonas Madre de Dios contará con 3 Bancos de Germoplasma destinados a garantizar la seguridad alimentaria y promover la preservación de especies nativas, contribuyendo a la biodiversidad global y al desarrollo de prácticas agrícolas sostenibles</p>
      </div>
    </article>
  </section>

  <section id="location" class="location">
    <img loading="lazy" class="location__leaf" src="../assets/image/hoja.webp" alt="hoja">
    <div class="title">
      <div>
        <svg width="61" height="50" viewBox="0 0 61 50" fill="none">
          <path d="M60.4973 47.4387C60.4963 47.3942 60.4943 47.3497 60.4905 47.3051C60.488 47.2754 60.4848 47.2461 60.4811 47.2165C60.476 47.1752 60.4699 47.1341 60.4623 47.0929C60.4564 47.0604 60.4496 47.0283 60.4423 46.9966C60.4338 46.9599 60.4246 46.9236 60.4142 46.8871C60.4041 46.8516 60.3931 46.8166 60.3812 46.7818C60.3703 46.7499 60.3589 46.7184 60.3466 46.687C60.3316 46.6489 60.3155 46.6114 60.2984 46.5743C60.2857 46.5466 60.2727 46.519 60.2587 46.4917C60.2388 46.4527 60.2177 46.4147 60.1955 46.3771C60.1864 46.3618 60.1793 46.3458 60.1699 46.3306L39.247 12.5723V7.03778C39.247 5.82266 38.2619 4.83758 37.0467 4.83758C35.8316 4.83758 34.8465 5.82266 34.8465 7.03778V12.5124L31.1868 16.1722L27.7805 10.8404V2.50953C27.7805 1.29441 26.7954 0.309326 25.5803 0.309326C24.3652 0.309326 23.3801 1.29441 23.3801 2.50953V10.8406L0.846055 46.1129C0.590586 46.5128 0.482422 46.9639 0.504336 47.4044C0.503281 47.4331 0.5 47.4613 0.5 47.4903C0.5 48.7054 1.48508 49.6905 2.7002 49.6905H47.7162H48.4603H58.2928C58.2958 49.6905 58.299 49.6908 58.3019 49.6908C58.37 49.6908 58.4381 49.6864 58.5061 49.6802C58.5187 49.679 58.5311 49.6777 58.5435 49.6763C58.6736 49.6619 58.8034 49.6359 58.931 49.5975C58.9487 49.5923 58.9661 49.5865 58.9838 49.5807C59.0299 49.5656 59.0755 49.5488 59.1208 49.5305C59.137 49.5241 59.1534 49.5181 59.1693 49.5112C59.2246 49.4873 59.2794 49.461 59.3333 49.4321C59.3513 49.4224 59.3687 49.4118 59.3864 49.4017C59.4104 49.3879 59.4349 49.3751 59.4587 49.3604C59.4693 49.3538 59.4787 49.3459 59.4891 49.3393C59.5239 49.3168 59.5577 49.2931 59.5911 49.2687C59.6184 49.2489 59.6457 49.2291 59.672 49.2083C59.6989 49.1867 59.7248 49.1638 59.7507 49.1411C59.7802 49.1151 59.8097 49.0893 59.8375 49.0622C59.8583 49.042 59.8776 49.0208 59.8974 48.9998C59.9271 48.9684 59.9565 48.9372 59.9841 48.9044C60.0018 48.8835 60.0181 48.8615 60.035 48.8398C60.0614 48.8059 60.0879 48.7722 60.112 48.7368C60.1296 48.7113 60.1456 48.6844 60.1621 48.6581C60.1825 48.6255 60.2032 48.5933 60.2218 48.5597C60.24 48.527 60.2561 48.4933 60.2727 48.4595C60.2867 48.4308 60.3016 48.4024 60.3143 48.3732C60.3311 48.3349 60.3455 48.2955 60.3602 48.2561C60.37 48.2295 60.3806 48.2031 60.3894 48.1762C60.4024 48.1363 60.4133 48.0956 60.4239 48.0548C60.4316 48.0261 60.4396 47.9976 60.4461 47.9685C60.4543 47.9313 60.4606 47.8934 60.467 47.8554C60.4728 47.8205 60.4787 47.7856 60.4829 47.7504C60.4868 47.7182 60.4891 47.6854 60.4914 47.6526C60.4945 47.6104 60.4972 47.5682 60.4979 47.5259C60.498 47.5138 60.4996 47.5021 60.4996 47.4899C60.5 47.4726 60.4978 47.4558 60.4973 47.4387ZM6.59365 45.2901L25.5803 15.5704L28.966 20.8703C28.9675 20.8725 28.9688 20.8748 28.9704 20.8771L30.864 23.8412L18.0182 45.2901H6.59365ZM23.1472 45.2901L33.5114 27.9851L44.5669 45.2901H23.1472ZM49.7888 45.2901L33.6124 19.9696L36.7252 16.8568L54.3476 45.2901H49.7888Z" fill="#034F29"/>
        </svg>
        <h3>ESTAMOS</h3>
      </div>
      <h2>EN ESTE LUGAR</h2>
    </div>
    <div class="location__container">
      <article class="location__description">
        <span>
          <svg width="79" height="78" viewBox="0 0 79 78" fill="none">
            <g clip-path="url(#clip0_22_361)">
            <path d="M61.8701 14.6383C61.9849 13.8142 62.0533 12.984 62.0533 12.1494C62.0533 5.45008 56.6006 -0.000244141 49.8986 -0.000244141C45.1405 -0.000244141 41.0151 2.75012 39.0224 6.74269C19.5942 7.00012 3.86807 22.8812 3.86807 42.369C3.86807 62.0162 19.8523 78.0004 39.5002 78.0004C59.148 78.0004 75.1323 62.0162 75.1323 42.369C75.1319 31.6216 70.2009 21.3744 61.8701 14.6383ZM49.8986 5.10786C53.7842 5.10786 56.9456 8.26684 56.9456 12.1498C56.9456 13.1291 56.825 14.1152 56.6143 15.0932C56.6081 15.1174 56.6034 15.1416 56.5979 15.1657C55.5021 20.1482 52.0517 24.9113 49.8958 27.5088C47.3072 24.3961 42.8556 18.1671 42.8556 12.1498C42.856 8.26684 46.0153 5.10786 49.8986 5.10786ZM47.9726 42.369C47.9726 45.276 47.8429 48.1169 47.597 50.8407H31.4027C31.1575 48.119 31.0281 45.2784 31.0281 42.369C31.0281 39.4613 31.1578 36.62 31.4034 33.8966H47.5922C47.8422 36.6452 47.9726 39.4831 47.9726 42.369ZM39.5002 72.8923C22.6691 72.8923 8.97584 59.1994 8.97584 42.3687C8.97584 26.1236 21.7327 12.8032 37.7547 11.8954C37.753 11.9802 37.7482 12.0643 37.7482 12.1494C37.7482 18.5682 41.4309 24.8 44.4053 28.7885H32.0224C32.5373 25.4773 33.2438 22.4334 34.1265 19.7862C34.5725 18.448 33.8496 17.0018 32.5114 16.5557C31.1725 16.1096 29.727 16.8326 29.2809 18.1711C28.2423 21.2862 27.4302 24.8858 26.8632 28.7885H16.1056C14.6948 28.7885 13.5517 29.9319 13.5517 31.3424C13.5517 32.7528 14.6948 33.8962 16.1056 33.8962H26.2762C26.0419 36.6354 25.9207 39.4756 25.9207 42.3687C25.9207 45.2631 26.0412 48.103 26.2748 50.8404H16.1056C14.6948 50.8404 13.5517 51.9839 13.5517 53.3943C13.5517 54.8047 14.6948 55.9482 16.1056 55.9482H26.8619C27.4411 59.9343 28.2767 63.6023 29.348 66.7651C29.7086 67.8295 30.7022 68.5003 31.7667 68.5003C32.0384 68.5003 32.3146 68.4567 32.5863 68.3648C33.9222 67.9123 34.6383 66.4627 34.1857 65.1265C33.2752 62.4381 32.5489 59.3329 32.0228 55.9485H46.9779C46.4631 59.2587 45.7565 62.3026 44.8739 64.9511C44.4282 66.2894 45.1511 67.7355 46.4893 68.1813C46.7573 68.2705 47.0294 68.313 47.297 68.313C48.3666 68.313 49.3629 67.6361 49.7195 66.5658C50.7577 63.4494 51.5698 59.8502 52.1371 55.9489H62.8948C64.3055 55.9489 65.4486 54.8054 65.4486 53.395C65.4486 51.9845 64.3055 50.8411 62.8948 50.8411H52.7245C52.9588 48.102 53.0804 45.2617 53.0804 42.3694C53.0804 39.492 52.9602 36.6538 52.7242 33.8969H62.8948C64.3055 33.8969 65.4486 32.7535 65.4486 31.343C65.4486 29.9326 64.3055 28.7892 62.8948 28.7892H55.3935C57.0991 26.5029 59.0336 23.4805 60.3783 20.106C66.4726 25.8406 70.0245 33.9255 70.0245 42.369C70.0242 59.1998 56.3309 72.8923 39.5002 72.8923Z" fill="#F1902B"/>
            </g>
            <defs>
            <clipPath id="clip0_22_361">
            <rect width="78" height="78" fill="white" transform="translate(0.5)"/>
            </clipPath>
            </defs>
          </svg>
        </span>
        <p>Ubicados en la Ciudad de Puerto Maldonado, Provincia y distrito de Tambopata Departamento de Madre de Dios, contamos con una extensión de 61 hectáreas y/o 150.734 acres. Tenemos 406 metros lineales de frentera con el rio Madre de Dios, rio navegable y el más grande de la región.</p>
      </article>
      <div class="location__coordinates">
        <article class="location__coordinates--utm">
          <h4 class="location__coordinates--utm--title">COORDENADAS UTM</h4>
          <ul class="location__coordinates--utm--list">
            <li>
              <h4>Punto 1</h4>
              <p><strong>Este: </strong><span>500884.00</span></p>
              <p><strong>Norte: </strong><span>8617761.00</span></p>
            </li>
            <li>
              <h4>Punto 2</h4>
              <p><strong>Este: </strong><span>501280.00</span></p>
              <p><strong>Norte: </strong><span>8617742.00</span></p>
            </li>
            <li>
              <h4>Punto 3</h4>
              <p><strong>Este: </strong><span>501465.00</span></p>
              <p><strong>Norte: </strong><span>8618630.00</span></p>
            </li>
            <li>
              <h4>Punto 4</h4>
              <p><strong>Este: </strong><span>500988.00</span></p>
              <p><strong>Norte: </strong><span>8618709.00</span></p>
            </li>
            <li>
              <h4>Punto 5</h4>
              <p><strong>Este: </strong><span>500556.00</span></p>
              <p><strong>Norte: </strong><span>8618684.00</span></p>
            </li>
          </ul>
        </article>
        <img loading="lazy" class="location__coordinates--img" src="../assets/image/coordenadas.webp" alt="coordenadas">
      </div>
    </div>
  </section>

  <section id="differential" class="differential">
    <img loading="lazy" class="differential__huacamayo" src="../assets/image/huacamayo.webp" alt="huacamayo">
    <img loading="lazy" class="differential__leaf" src="../assets/image/hoja.webp" alt="hoja">
    <div class="title">
      <div>
        <svg width="61" height="50" viewBox="0 0 61 50" fill="none">
          <path d="M60.4973 47.4387C60.4963 47.3942 60.4943 47.3497 60.4905 47.3051C60.488 47.2754 60.4848 47.2461 60.4811 47.2165C60.476 47.1752 60.4699 47.1341 60.4623 47.0929C60.4564 47.0604 60.4496 47.0283 60.4423 46.9966C60.4338 46.9599 60.4246 46.9236 60.4142 46.8871C60.4041 46.8516 60.3931 46.8166 60.3812 46.7818C60.3703 46.7499 60.3589 46.7184 60.3466 46.687C60.3316 46.6489 60.3155 46.6114 60.2984 46.5743C60.2857 46.5466 60.2727 46.519 60.2587 46.4917C60.2388 46.4527 60.2177 46.4147 60.1955 46.3771C60.1864 46.3618 60.1793 46.3458 60.1699 46.3306L39.247 12.5723V7.03778C39.247 5.82266 38.2619 4.83758 37.0467 4.83758C35.8316 4.83758 34.8465 5.82266 34.8465 7.03778V12.5124L31.1868 16.1722L27.7805 10.8404V2.50953C27.7805 1.29441 26.7954 0.309326 25.5803 0.309326C24.3652 0.309326 23.3801 1.29441 23.3801 2.50953V10.8406L0.846055 46.1129C0.590586 46.5128 0.482422 46.9639 0.504336 47.4044C0.503281 47.4331 0.5 47.4613 0.5 47.4903C0.5 48.7054 1.48508 49.6905 2.7002 49.6905H47.7162H48.4603H58.2928C58.2958 49.6905 58.299 49.6908 58.3019 49.6908C58.37 49.6908 58.4381 49.6864 58.5061 49.6802C58.5187 49.679 58.5311 49.6777 58.5435 49.6763C58.6736 49.6619 58.8034 49.6359 58.931 49.5975C58.9487 49.5923 58.9661 49.5865 58.9838 49.5807C59.0299 49.5656 59.0755 49.5488 59.1208 49.5305C59.137 49.5241 59.1534 49.5181 59.1693 49.5112C59.2246 49.4873 59.2794 49.461 59.3333 49.4321C59.3513 49.4224 59.3687 49.4118 59.3864 49.4017C59.4104 49.3879 59.4349 49.3751 59.4587 49.3604C59.4693 49.3538 59.4787 49.3459 59.4891 49.3393C59.5239 49.3168 59.5577 49.2931 59.5911 49.2687C59.6184 49.2489 59.6457 49.2291 59.672 49.2083C59.6989 49.1867 59.7248 49.1638 59.7507 49.1411C59.7802 49.1151 59.8097 49.0893 59.8375 49.0622C59.8583 49.042 59.8776 49.0208 59.8974 48.9998C59.9271 48.9684 59.9565 48.9372 59.9841 48.9044C60.0018 48.8835 60.0181 48.8615 60.035 48.8398C60.0614 48.8059 60.0879 48.7722 60.112 48.7368C60.1296 48.7113 60.1456 48.6844 60.1621 48.6581C60.1825 48.6255 60.2032 48.5933 60.2218 48.5597C60.24 48.527 60.2561 48.4933 60.2727 48.4595C60.2867 48.4308 60.3016 48.4024 60.3143 48.3732C60.3311 48.3349 60.3455 48.2955 60.3602 48.2561C60.37 48.2295 60.3806 48.2031 60.3894 48.1762C60.4024 48.1363 60.4133 48.0956 60.4239 48.0548C60.4316 48.0261 60.4396 47.9976 60.4461 47.9685C60.4543 47.9313 60.4606 47.8934 60.467 47.8554C60.4728 47.8205 60.4787 47.7856 60.4829 47.7504C60.4868 47.7182 60.4891 47.6854 60.4914 47.6526C60.4945 47.6104 60.4972 47.5682 60.4979 47.5259C60.498 47.5138 60.4996 47.5021 60.4996 47.4899C60.5 47.4726 60.4978 47.4558 60.4973 47.4387ZM6.59365 45.2901L25.5803 15.5704L28.966 20.8703C28.9675 20.8725 28.9688 20.8748 28.9704 20.8771L30.864 23.8412L18.0182 45.2901H6.59365ZM23.1472 45.2901L33.5114 27.9851L44.5669 45.2901H23.1472ZM49.7888 45.2901L33.6124 19.9696L36.7252 16.8568L54.3476 45.2901H49.7888Z" fill="#034F29"/>
        </svg>
        <h3>NUESTRO</h3>
      </div>
      <h2>DIFERENCIAL</h2>
    </div>
    <article class="differential__hectaria">
      <img  loading="lazy" class="differential__hectaria--img" src="../assets/image/territorio.webp" alt="hectaria">
      <div class="differential__hectaria--text">
        <h2>373</h2>
        <h3>ECO HOUSE</h3>
      </div>
    </article>
    <div class="differential__container">
      <article class="differential__description">
        <div class="differential__description--text">
          <h3>Seguridad física y alimentaria para usted y su familia</h3>
          <p>“Refugio Amazónico Madre de Dios” cuenta con lotes de 1000 m2. tendrá casas de campo que serán autosostenibles y sustentables. El cual permitirá la independencia enérgica y alimenticia.</p>
          <p>Contaremos con un operador turístico que nos partirá generar ingresos residuales por la visita y permanencia de turistas a nuestra Eco Aldea.</p>
        </div>
        <img  loading="lazy" class="differential__description--img" src="../assets/image/seguridad-fisica-sanitaria.webp" alt="seguridad fisica y alimentación">
      </article>
      <article class="differential__description left">
        <div class="differential__description--text">
          <h3>27 HECTAREAS BANCO DE GERMOPLASMA</h3>
          <p>Contamos con 03 bancos de germoplasma de de 9 hectáreas cada uno, ubicados estratégicamente para salvaguardar la independencia alimenticia en toda la eco aldea En el bando de germoplasma, tendremos plantas medicinales, arboles frutales, arboles maderables.</p>
        </div>
        <img loading="lazy" class="differential__description--img" src="../assets/image/hectarias.webp" alt="seguridad fisica y alimentación">
      </article>
      <article class="differential__description">
        <div class="differential__description--text">
          <h3>ECO ALDEA</h3>
          <p>El área de la propiedad es de 1000m2, la vivienda o casa de campo propuesto de 80m2.</p>
          <p>Cocina, comedor, sala, 3 habitaciones, un baño completo, lavandería y terraza.</p>
          <p>La propiedad, cuenta con árboles frutales como: Coco, árbol de mango, papaya, entre otros que necesite o desee.</p>
          <p>Tenemos plantas medicinales, como Uña de gato (para el cáncer) sano para infecciones, Sacha jergón para tratamientos de cáncer o fortalecimiento de sistema inmunológico, el botiquín herbario es amplio.</p>
        </div>
        <img loading="lazy" class="differential__description--img" src="../assets/image/eco-aldea.webp" alt="seguridad fisica y alimentación">
      </article>
    </div>
  </section>

  <section class="information">
    <article class="information__container">
      <div class="title">
        <div>
          <svg width="61" height="50" viewBox="0 0 61 50" fill="none">
            <path d="M60.4973 47.4387C60.4963 47.3942 60.4943 47.3497 60.4905 47.3051C60.488 47.2754 60.4848 47.2461 60.4811 47.2165C60.476 47.1752 60.4699 47.1341 60.4623 47.0929C60.4564 47.0604 60.4496 47.0283 60.4423 46.9966C60.4338 46.9599 60.4246 46.9236 60.4142 46.8871C60.4041 46.8516 60.3931 46.8166 60.3812 46.7818C60.3703 46.7499 60.3589 46.7184 60.3466 46.687C60.3316 46.6489 60.3155 46.6114 60.2984 46.5743C60.2857 46.5466 60.2727 46.519 60.2587 46.4917C60.2388 46.4527 60.2177 46.4147 60.1955 46.3771C60.1864 46.3618 60.1793 46.3458 60.1699 46.3306L39.247 12.5723V7.03778C39.247 5.82266 38.2619 4.83758 37.0467 4.83758C35.8316 4.83758 34.8465 5.82266 34.8465 7.03778V12.5124L31.1868 16.1722L27.7805 10.8404V2.50953C27.7805 1.29441 26.7954 0.309326 25.5803 0.309326C24.3652 0.309326 23.3801 1.29441 23.3801 2.50953V10.8406L0.846055 46.1129C0.590586 46.5128 0.482422 46.9639 0.504336 47.4044C0.503281 47.4331 0.5 47.4613 0.5 47.4903C0.5 48.7054 1.48508 49.6905 2.7002 49.6905H47.7162H48.4603H58.2928C58.2958 49.6905 58.299 49.6908 58.3019 49.6908C58.37 49.6908 58.4381 49.6864 58.5061 49.6802C58.5187 49.679 58.5311 49.6777 58.5435 49.6763C58.6736 49.6619 58.8034 49.6359 58.931 49.5975C58.9487 49.5923 58.9661 49.5865 58.9838 49.5807C59.0299 49.5656 59.0755 49.5488 59.1208 49.5305C59.137 49.5241 59.1534 49.5181 59.1693 49.5112C59.2246 49.4873 59.2794 49.461 59.3333 49.4321C59.3513 49.4224 59.3687 49.4118 59.3864 49.4017C59.4104 49.3879 59.4349 49.3751 59.4587 49.3604C59.4693 49.3538 59.4787 49.3459 59.4891 49.3393C59.5239 49.3168 59.5577 49.2931 59.5911 49.2687C59.6184 49.2489 59.6457 49.2291 59.672 49.2083C59.6989 49.1867 59.7248 49.1638 59.7507 49.1411C59.7802 49.1151 59.8097 49.0893 59.8375 49.0622C59.8583 49.042 59.8776 49.0208 59.8974 48.9998C59.9271 48.9684 59.9565 48.9372 59.9841 48.9044C60.0018 48.8835 60.0181 48.8615 60.035 48.8398C60.0614 48.8059 60.0879 48.7722 60.112 48.7368C60.1296 48.7113 60.1456 48.6844 60.1621 48.6581C60.1825 48.6255 60.2032 48.5933 60.2218 48.5597C60.24 48.527 60.2561 48.4933 60.2727 48.4595C60.2867 48.4308 60.3016 48.4024 60.3143 48.3732C60.3311 48.3349 60.3455 48.2955 60.3602 48.2561C60.37 48.2295 60.3806 48.2031 60.3894 48.1762C60.4024 48.1363 60.4133 48.0956 60.4239 48.0548C60.4316 48.0261 60.4396 47.9976 60.4461 47.9685C60.4543 47.9313 60.4606 47.8934 60.467 47.8554C60.4728 47.8205 60.4787 47.7856 60.4829 47.7504C60.4868 47.7182 60.4891 47.6854 60.4914 47.6526C60.4945 47.6104 60.4972 47.5682 60.4979 47.5259C60.498 47.5138 60.4996 47.5021 60.4996 47.4899C60.5 47.4726 60.4978 47.4558 60.4973 47.4387ZM6.59365 45.2901L25.5803 15.5704L28.966 20.8703C28.9675 20.8725 28.9688 20.8748 28.9704 20.8771L30.864 23.8412L18.0182 45.2901H6.59365ZM23.1472 45.2901L33.5114 27.9851L44.5669 45.2901H23.1472ZM49.7888 45.2901L33.6124 19.9696L36.7252 16.8568L54.3476 45.2901H49.7888Z" fill="#034F29"/>
          </svg>
          <h3>LIBRES DE</h3>
        </div>
        <h2>PANDEMIAS Y GUERRAS</h2>
      </div>
      <p>"Gracias a nuestra privilegiada ubicación geográfica y el acceso a una fuente inagotable de recursos naturales, Refugio Amazónico Madre de Dios se posiciona como una ecoaldea autosostenible. Aquí, las familias encontrarán seguridad integral, alejadas de los riesgos de desastres nucleares y con la tranquilidad de vivir en armonía con la naturaleza."</p>
    </article>
  </section>

  <section id="benefits" class="benefits">
    <div class="title">
      <div>
        <svg width="61" height="50" viewBox="0 0 61 50" fill="none">
          <path d="M60.4973 47.4387C60.4963 47.3942 60.4943 47.3497 60.4905 47.3051C60.488 47.2754 60.4848 47.2461 60.4811 47.2165C60.476 47.1752 60.4699 47.1341 60.4623 47.0929C60.4564 47.0604 60.4496 47.0283 60.4423 46.9966C60.4338 46.9599 60.4246 46.9236 60.4142 46.8871C60.4041 46.8516 60.3931 46.8166 60.3812 46.7818C60.3703 46.7499 60.3589 46.7184 60.3466 46.687C60.3316 46.6489 60.3155 46.6114 60.2984 46.5743C60.2857 46.5466 60.2727 46.519 60.2587 46.4917C60.2388 46.4527 60.2177 46.4147 60.1955 46.3771C60.1864 46.3618 60.1793 46.3458 60.1699 46.3306L39.247 12.5723V7.03778C39.247 5.82266 38.2619 4.83758 37.0467 4.83758C35.8316 4.83758 34.8465 5.82266 34.8465 7.03778V12.5124L31.1868 16.1722L27.7805 10.8404V2.50953C27.7805 1.29441 26.7954 0.309326 25.5803 0.309326C24.3652 0.309326 23.3801 1.29441 23.3801 2.50953V10.8406L0.846055 46.1129C0.590586 46.5128 0.482422 46.9639 0.504336 47.4044C0.503281 47.4331 0.5 47.4613 0.5 47.4903C0.5 48.7054 1.48508 49.6905 2.7002 49.6905H47.7162H48.4603H58.2928C58.2958 49.6905 58.299 49.6908 58.3019 49.6908C58.37 49.6908 58.4381 49.6864 58.5061 49.6802C58.5187 49.679 58.5311 49.6777 58.5435 49.6763C58.6736 49.6619 58.8034 49.6359 58.931 49.5975C58.9487 49.5923 58.9661 49.5865 58.9838 49.5807C59.0299 49.5656 59.0755 49.5488 59.1208 49.5305C59.137 49.5241 59.1534 49.5181 59.1693 49.5112C59.2246 49.4873 59.2794 49.461 59.3333 49.4321C59.3513 49.4224 59.3687 49.4118 59.3864 49.4017C59.4104 49.3879 59.4349 49.3751 59.4587 49.3604C59.4693 49.3538 59.4787 49.3459 59.4891 49.3393C59.5239 49.3168 59.5577 49.2931 59.5911 49.2687C59.6184 49.2489 59.6457 49.2291 59.672 49.2083C59.6989 49.1867 59.7248 49.1638 59.7507 49.1411C59.7802 49.1151 59.8097 49.0893 59.8375 49.0622C59.8583 49.042 59.8776 49.0208 59.8974 48.9998C59.9271 48.9684 59.9565 48.9372 59.9841 48.9044C60.0018 48.8835 60.0181 48.8615 60.035 48.8398C60.0614 48.8059 60.0879 48.7722 60.112 48.7368C60.1296 48.7113 60.1456 48.6844 60.1621 48.6581C60.1825 48.6255 60.2032 48.5933 60.2218 48.5597C60.24 48.527 60.2561 48.4933 60.2727 48.4595C60.2867 48.4308 60.3016 48.4024 60.3143 48.3732C60.3311 48.3349 60.3455 48.2955 60.3602 48.2561C60.37 48.2295 60.3806 48.2031 60.3894 48.1762C60.4024 48.1363 60.4133 48.0956 60.4239 48.0548C60.4316 48.0261 60.4396 47.9976 60.4461 47.9685C60.4543 47.9313 60.4606 47.8934 60.467 47.8554C60.4728 47.8205 60.4787 47.7856 60.4829 47.7504C60.4868 47.7182 60.4891 47.6854 60.4914 47.6526C60.4945 47.6104 60.4972 47.5682 60.4979 47.5259C60.498 47.5138 60.4996 47.5021 60.4996 47.4899C60.5 47.4726 60.4978 47.4558 60.4973 47.4387ZM6.59365 45.2901L25.5803 15.5704L28.966 20.8703C28.9675 20.8725 28.9688 20.8748 28.9704 20.8771L30.864 23.8412L18.0182 45.2901H6.59365ZM23.1472 45.2901L33.5114 27.9851L44.5669 45.2901H23.1472ZM49.7888 45.2901L33.6124 19.9696L36.7252 16.8568L54.3476 45.2901H49.7888Z" fill="#034F29"/>
        </svg>
        <h3>NUESTROS</h3>
      </div>
      <h2>BENEFICIOS</h2>
    </div>
    <ul class="benefits__list">
      <li>
        <img  loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Aeropuerto en la ciudad</span>
      </li>
      <li>
        <img  loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Pozo de agua pura</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Sin rastros químicos</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Bosque inmenso</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Bosque con peces</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Animales  salvajes</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Alimentos transgénicos</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Huertos orgánicos</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Cerca de dos fronteras</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Río navegable</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Acceso por el Rio Madre de Dios.</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Fuente de recursos hídricos</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Lejos de posibles epidemias virales</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Muy lejos de cualquier instalación nuclear</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Acceso por carretera</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Sin rastros químicos</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Sin 5G</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Sin Inteligencia Artificial</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Sin medidores inteligentes</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>Sin cloro y fluoruro en el agua</span>
      </li>
      <li>
        <img loading="lazy" src="../assets/image/check.svg" alt="check">
        <span>3 bancos de germoplasma de 9 hectáreas cada uno</span>
      </li>
    </ul>
  </section>

  <section class="notice">
    <article class="notice__container">
      <div class="title">
        <div>
          <svg width="61" height="50" viewBox="0 0 61 50" fill="none">
            <path d="M60.4973 47.4387C60.4963 47.3942 60.4943 47.3497 60.4905 47.3051C60.488 47.2754 60.4848 47.2461 60.4811 47.2165C60.476 47.1752 60.4699 47.1341 60.4623 47.0929C60.4564 47.0604 60.4496 47.0283 60.4423 46.9966C60.4338 46.9599 60.4246 46.9236 60.4142 46.8871C60.4041 46.8516 60.3931 46.8166 60.3812 46.7818C60.3703 46.7499 60.3589 46.7184 60.3466 46.687C60.3316 46.6489 60.3155 46.6114 60.2984 46.5743C60.2857 46.5466 60.2727 46.519 60.2587 46.4917C60.2388 46.4527 60.2177 46.4147 60.1955 46.3771C60.1864 46.3618 60.1793 46.3458 60.1699 46.3306L39.247 12.5723V7.03778C39.247 5.82266 38.2619 4.83758 37.0467 4.83758C35.8316 4.83758 34.8465 5.82266 34.8465 7.03778V12.5124L31.1868 16.1722L27.7805 10.8404V2.50953C27.7805 1.29441 26.7954 0.309326 25.5803 0.309326C24.3652 0.309326 23.3801 1.29441 23.3801 2.50953V10.8406L0.846055 46.1129C0.590586 46.5128 0.482422 46.9639 0.504336 47.4044C0.503281 47.4331 0.5 47.4613 0.5 47.4903C0.5 48.7054 1.48508 49.6905 2.7002 49.6905H47.7162H48.4603H58.2928C58.2958 49.6905 58.299 49.6908 58.3019 49.6908C58.37 49.6908 58.4381 49.6864 58.5061 49.6802C58.5187 49.679 58.5311 49.6777 58.5435 49.6763C58.6736 49.6619 58.8034 49.6359 58.931 49.5975C58.9487 49.5923 58.9661 49.5865 58.9838 49.5807C59.0299 49.5656 59.0755 49.5488 59.1208 49.5305C59.137 49.5241 59.1534 49.5181 59.1693 49.5112C59.2246 49.4873 59.2794 49.461 59.3333 49.4321C59.3513 49.4224 59.3687 49.4118 59.3864 49.4017C59.4104 49.3879 59.4349 49.3751 59.4587 49.3604C59.4693 49.3538 59.4787 49.3459 59.4891 49.3393C59.5239 49.3168 59.5577 49.2931 59.5911 49.2687C59.6184 49.2489 59.6457 49.2291 59.672 49.2083C59.6989 49.1867 59.7248 49.1638 59.7507 49.1411C59.7802 49.1151 59.8097 49.0893 59.8375 49.0622C59.8583 49.042 59.8776 49.0208 59.8974 48.9998C59.9271 48.9684 59.9565 48.9372 59.9841 48.9044C60.0018 48.8835 60.0181 48.8615 60.035 48.8398C60.0614 48.8059 60.0879 48.7722 60.112 48.7368C60.1296 48.7113 60.1456 48.6844 60.1621 48.6581C60.1825 48.6255 60.2032 48.5933 60.2218 48.5597C60.24 48.527 60.2561 48.4933 60.2727 48.4595C60.2867 48.4308 60.3016 48.4024 60.3143 48.3732C60.3311 48.3349 60.3455 48.2955 60.3602 48.2561C60.37 48.2295 60.3806 48.2031 60.3894 48.1762C60.4024 48.1363 60.4133 48.0956 60.4239 48.0548C60.4316 48.0261 60.4396 47.9976 60.4461 47.9685C60.4543 47.9313 60.4606 47.8934 60.467 47.8554C60.4728 47.8205 60.4787 47.7856 60.4829 47.7504C60.4868 47.7182 60.4891 47.6854 60.4914 47.6526C60.4945 47.6104 60.4972 47.5682 60.4979 47.5259C60.498 47.5138 60.4996 47.5021 60.4996 47.4899C60.5 47.4726 60.4978 47.4558 60.4973 47.4387ZM6.59365 45.2901L25.5803 15.5704L28.966 20.8703C28.9675 20.8725 28.9688 20.8748 28.9704 20.8771L30.864 23.8412L18.0182 45.2901H6.59365ZM23.1472 45.2901L33.5114 27.9851L44.5669 45.2901H23.1472ZM49.7888 45.2901L33.6124 19.9696L36.7252 16.8568L54.3476 45.2901H49.7888Z" fill="#034F29"/>
          </svg>
          <h3>AMAZON</h3>
        </div>
        <h2>REGUGE INN</h2>
      </div>
      <div class="notice__description">
        <h3>"Refugio Amazónico Madre de Dios: Explora la Naturaleza, Protege el Planeta, Vive el Turismo Sostenible"</h3>
        <p>Para generar sostenibilidad económica, Refugio Amazónico Madre de Dios Inn contará con un operador turístico que permitirá generar ingresos por turismo en los diferentes tractivos turísticos de Madre de Dios, como, por ejemplo: Isla de los Monos, colpa de loros, Pesca deportiva, entre otros Nuestros residentes podrán poner en alquiler su casa de campo cuando deseen y generar ingresos de arriendo. Permitiendo el mantenimiento y la sostenibilidad económica.</p>
      </div>
    </article>
  </section>

  <div class="container__contact">
    <section id="contact" class="contact">
      <img loading="lazy" class="contact__mariposa" src="../assets/image/mariposa.webp" alt="mariposa">
      <form class="contact__form" id="contact-form" method="POST">
        <div class="contact__form--title">
          <img loading="lazy" src="../assets/image/logo.webp" alt="logo">
          <h3>HOLA</h3>
          <h2>contactémonos</h2>
        </div>
        <div class="contact__form--row">
          <div class="contact__form--group">
            <label for="name">Nombres</label>
            <input type="text" id="name" name="name" placeholder="Escribir su nombre correctamente" required>
          </div>
          <div class="contact__form--group">
            <label for="last-name">Apellidos</label>
            <input type="text" id="last-name" name="last_name" placeholder="Escribir su apellido correctamente" required>
          </div>
        </div>
        <div class="contact__form--row">
          <div class="contact__form--group">
            <label for="phonenumber">Teléfono</label>
            <input type="text" id="phonenumber" name="phonenumber" placeholder="Escribir su teléfono correctamente" required>
          </div>
          <div class="contact__form--group">
            <label for="email">Correo</label>
            <input type="email" id="email" name="email" placeholder="Escribir su correo correctamente" required>
          </div>
        </div>
        <div id="response-message" style="display:none;"></div>
        <button class="contact__form--btn" id="submit-btn">Enviar mensaje</button>
      </form>
    </section>
  </div>

  <footer class="footer">
    <p class="footer__text">© 2025 · TODOS LOS DERECHOS RESERVADOS</p>
  </footer>

  <div class="language-switcher">
    <button class="language-toggle">ES</button>
    <div class="language-dropdown">
      <button class="language-option active" data-lang="es">Español</button>
      <button class="language-option" data-lang="en">English</button>
    </div>
  </div>  

  <script src="../script.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const responseMessage = document.getElementById('response-message');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(form);

        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Enviando...';

        fetch('../enviar_email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text()) // Obtener texto de la respuesta
        .then(responseText => {
            if (responseText.trim() === 'success') { // Trim para eliminar espacios
                responseMessage.textContent = '¡Correo enviado exitosamente!';
                responseMessage.style.color = 'green';
                form.reset();
            } else {
                responseMessage.textContent = 'Error enviando correo. Por favor, inténtalo de nuevo.';
                responseMessage.style.color = 'red';
            }
            responseMessage.style.display = 'block';
        })
        .catch(error => {
            console.error('Error:', error);
            responseMessage.textContent = 'Error enviando correo. Por favor, inténtalo de nuevo.';
            responseMessage.style.color = 'red';
            responseMessage.style.display = 'block';
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = 'Enviar mensaje';
        });
    });
  });
  </script>
</body>
</html>