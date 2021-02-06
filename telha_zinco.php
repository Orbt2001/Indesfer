<?php
include_once('master.php'); ?>
<!--==========================
    Container
    ============================-->
	<style>
	  .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
	.swiper-pagination{
		color:red;
	}
	</style>
<div class="container">


	<h1 class="my-4 text-white font-weight-bold">Telhas de Zinco</h1>


	<div class="row">

		<div class="col-md-8">
			<div class="swiper-container">
				<div class="swiper-wrapper">
				<div class="swiper-slide">Slide 1</div>
				<div class="swiper-slide">Slide 2</div>
				<div class="swiper-slide">Slide 3</div>
				<div class="swiper-slide">Slide 4</div>
				<div class="swiper-slide">Slide 5</div>
				<div class="swiper-slide">Slide 6</div>
				<div class="swiper-slide">Slide 7</div>
				<div class="swiper-slide">Slide 8</div>
				<div class="swiper-slide">Slide 9</div>
				<div class="swiper-slide">Slide 10</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>

		<div class="col-md-4">
			<h3 class="my-3 text-white">Descrição Produto</h3>
			<p>As telhas de zinco oferecem tudo o que uma obra precisa,
				versatilidade, praticidade e economia. O produto recebe esse nome,
				pois ele passa por um processo de zincagem, que está entre os mais eficientes e econômicos para
				proteger o aço da corrosão atmosférica.
				as telhas de zinco apresentam boa durabilidade, podendo se manter de 40 a 70 anos, enquanto outros tipos de cobertura duram entre 12 e 20 anos;</p>
			<h3 class="my-3 text-white">Facilidades</h3>
			<ul>
				<li>Fácil mobilização e instalação;</li>
				<li>Estável e seguras</li>
				<li>Flexibilidade para curvatura.</li>
				<li>Fechamentos laterais de edifícios industriais e comerciais;</li>
			</ul>
		</div>

	</div>



	<h3 class="my-4 text-white">Detalhes</h3>

	<div class="row">

		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="img/catalogo/Telha-Trapezoidal.jpg" alt="">
			</a>
		</div>

		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="img/catalogo/Telha-Trapezoidal.jpg" alt="">
			</a>
		</div>

		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="img/catalogo/Telha-Trapezoidal.jpg" alt="">
			</a>
		</div>

		<div class="col-md-3 col-sm-6 mb-4">
			<a href="#">
				<img class="img-fluid" src="img/catalogo/Telha-Trapezoidal.jpg" alt="">
			</a>
		</div>

	</div>


</div>



<!--==========================
    Container
    ============================-->
<?php
include_once('footer.php');
?>

<!-- Whatsapp -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=5516991858042&text=Tudo%20bem%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento." target="_blank">
	<img src="img/whatsapp.svg" class="fixed-bottom m-3 fadeInUp" height="40" alt="">
</a>


<!-- Whatsapp -->


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



</body>
<script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</html>
