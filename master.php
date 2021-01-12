<html>

<head>
    
    <meta charset="utf-8">
    <title>Indesfer</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/icon.svg" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- SwiperJS -->
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- SWEETALERT -->

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
</head>
<!--==========================
    Header
    ============================-->
<header id="header">
	<div class="container-fluid">
		<div class="logobar">
			<img class="" src="img/logo.png" width="100" alt="">
		</div>
		<nav id="nav-menu-container">

			<ul class="nav-menu">
				<li class="item-menu"><a href="index#intro">Inicio</a></li>
				<li class="item-menu"><a href="index#catalogo">Catalogo</a></li>
				<li class="item-menu"><a href="index#clients">Clientes</a></li>
				<li class="item-menu"><a href="index#contact">Contatos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li class="item-menu"><a href="index#contact">Orçamento</a></li>
			</ul>
		</nav><!-- #nav-menu-container -->
	</div>
</header><!-- #header -->
<?php
$text_termo = 'As telhas termoacústica são usadas quando se exige um excelente desempenho termoacústico. Oferecem maior resistência nas trocas de calor externo e interno, possibilitando significativa redução da utilização de equipamentos para refrigeração. Tem como característica ser retardante na ação de chamas e não absorver a água.';
$text_zinco = 'As telhas de zinco oferecem tudo o que uma obra precisa, versatilidade, praticidade e economia, protegendo o aço da corrosão atmosférica.';
$text_calhas = 'As calhas são os canais responsáveis pela coleta das águas pluviais (provindas das chuvas) e que correm pelos telhados e terraços de casas ou construções. Normalmente, as calhas são produzidas em aço galvanizado, ou seja, revestidos com uma camada de zinco para evitar a corrosão.';
$text_chapas = 'São produzidas pelo processo de corte transversal, disponibilizados em diversos comprimentos e larguras.';
$text_perfil = 'Nossos perfis são obtidos através do processo de conformação a frio, de acordo com norma NBR 6355, garantindo total qualidade. Para melhor atendê-lo, oferecemos perfis sob medida e em aços especiais.';
$text_parafuso = 'Com o objetivo de agregar agilidade e qualidade na instalação dos matérias fornecidos pela Indesfer, disponibilizamos parafusos auto brocante das principais empresas do ramo.';
$arr_produtos = [
    'termo' => [
        'nome' => 'Telha Termoacústica',
        'descricao' => $text_termo,
        'codigo' => '0001',
        'tamanho' => 'Sob Medida',
        'imagem' => ['1' => 'img/catalogo/termo.webp', '2' => 'img/catalogo/Telha_Bandeja_Trapezio40_Lado.png'],
    ],
    'zinco' => [
        'nome' => 'Telha de Zinco',
        'descricao' => $text_zinco,
        'codigo' => '0002',
        'tamanho' => 'Sob Medida',
        'imagem' => ['1' => 'img/catalogo/zinco.webp', '2' => 'img/catalogo/zinco-2.jpg'],
    ],
    'calhas' => [
        'nome' => 'Calhas e Rufos',
        'descricao' => $text_calhas,
        'codigo' => '0003',
        'tamanho' => 'Sob Medida',
        'imagem' => ['1' => 'img/catalogo/calhas.webp', '2' => 'img/catalogo/calhas-2.png'],
    ],
    'parafusos'=>[
        'nome'=>'Chapas Dobradas',
        'descricao' => $text_chapas,
        'codigo'=> '0004',
        'tamanho' => 'Até 3m',
        'imagem'=> ['1'=>'img/catalogo/chapas.webp'],
    ],
    'perfil'=>[
        'nome'=>'Perfis U e perfis C',
        'descricao' => $text_perfil,
        'codigo'=> '0005',
        'tamanho' => 'Sob Medida',
        'imagem'=> ['1'=>'img/catalogo/perfis.webp'],
    ],
    'Parafusos auto brocante'=>[
        'nome'=>'Parafusos auto brocante',
        'descricao' => $text_parafuso,
        'codigo'=> '0006',
        'tamanho' => 'Sob Medida',
        'imagem'=> ['1'=>'img/catalogo/parafusos.webp'],
    ],
];
?>