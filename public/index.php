<?php
include_once('master.php');
?>
<!--==========================
    Intro Section
    ============================-->
<section id="intro">
	<div class="intro-container">
		<div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

			<ol class="carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<div class="carousel-item active" style="background-image: url('img/slide/home.jpg');">
					<div class="carousel-container">
						<div class="carousel-content">
							<h2>Bem vindo a Indesfer</h2>
							<p>Lider de mercado a mais de 20 anos em produtos para serralheria, corte e dobra.</p>
							<a href="#catalogo" class="btn-get-started scrollto">Catalogo</a>
						</div>
					</div>
				</div>

				<div class="carousel-item" style="background-image: url('img/slide/zinco.jpg');">
					<div class="carousel-container">
						<div class="carousel-content">
							<h2>Telhas de Zinco
							</h2>
							<p>(Galvalume - Aluzinco).</p>
							<a href="#catalogo" class="btn-get-started scrollto">Catalogo</a>
						</div>
					</div>
				</div>

				<div class="carousel-item" style="background-image: url('img/slide/termo.jpg');">
					<div class="carousel-container">
						<div class="carousel-content">
							<h2>Telha Termo acústica </h2>
							<p>Sanduíche.</p>
							<a href="#catalogo" class="btn-get-started scrollto">Catalogo</a>
						</div>
					</div>
				</div>

				<div class="carousel-item" style="background-image: url('img/slide/bobina.jpg');">
					<div class="carousel-container">
						<div class="carousel-content">
							<h2>Bobinas e chapas</h2>
							<p> dobradas para calheiros.</p>
							<a href="#catalogo" class="btn-get-started scrollto">Catalogo</a>
						</div>
					</div>
				</div>


			</div>

		</div>

		<a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>
	</div>
</section><!-- #intro -->

<main id="main">



	<!--==========================
      About Us Section
      ============================-->
	<section id="about">
		<div class="container">
			<header class="section-header">
				<h3>Sobre nós</h3>
				<p>A Indesfer atua no mercado de corte e dobra de chapas, fabricação de telhas galvanizadas e termoacústica, além de perfis estruturais que atendem as mais variadas necessidades do mercado. A cada ano, a indesfer tem se aperfeiçoado através de lançamentos de novos produtos e adaptações às normas técnicas de qualidade exigidas pelo mercado.</p>
			</header>
			<div class="row about-cols">
			</div>
		</div>
	</section><!-- #about -->
	<!--==========================
      catalogo Section
      ============================-->
	<section id="catalogo" class="section-bg">
		<div class="container">
			<header class="section-header">
				<h3 class="section-title">Catalogo</h3>
			</header>
			<div class="row my-5">
				<div class="col-12 p-4 border border-danger">
					<div class="row">
						<div class="col-12 col-md-6 text-center">
							<h3 class="text-danger font-weight-bold m-0">Catálogo técnico</h3>
						</div>
						<div class="col-12 col-md-6 text-center">
							<a href="catalogo-construtoras.pdf" download><button class="btn btn-outline-danger px-5">Visualizar</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row catalogo-container">
				<div class="col-lg-4 col-md-6 catalogo-item filter-bobina wow fadeInUp" v-for="index in todos">
					<div class="catalogo-wrap">
						<figure>
							<img src="img/catalogo/termo.webp" class="img-fluid w-100 h-100" alt="">
							<a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#termo"><i class="ion ion-android-open"></i></a>
						</figure>

						<div class="catalogo-info">
							<h4><a href="#">Telha Termoacústica</a></h4>
							<p>Sanduíche de EPS</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 catalogo-item filter-bobina wow fadeInUp" v-for="index in todos">
					<div class="catalogo-wrap">
						<figure>
							<img src="img/catalogo/zinco.webp" class="img-fluid w-100 h-100" alt="">
							<a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#zinco"><i class="ion ion-android-open"></i></a>
						</figure>

						<div class="catalogo-info">
							<h4><a href="#">Telha de Zinco</a></h4>
							<p>Galvalume - Aluzinco</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 catalogo-item filter-bobina wow fadeInUp" v-for="index in todos">
					<div class="catalogo-wrap">
						<figure>
							<img src="img/catalogo/calhas.webp" class="img-fluid w-100 h-100" alt="">
							<a href="#" class="link-details" title="More Details" data-toggle="modal" data-target="#calhas"><i class="ion ion-android-open"></i></a>
						</figure>

						<div class="catalogo-info">
							<h4><a href="#">Calhas e Rufos</a></h4>
							<p>Aço galvanizado</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="portifolio"><button class="btn btn-primary border-0 wow fadeInUp">Visualizar mais</button></a>
				</div>
			</div>
		</div>
	</section><!-- #catalogo -->
	<?php
		foreach ($arr_produtos as $key => $value) {
	?>
	<!-- CATALOGO MODAL -->
	<div class="modal fade modal-produto-custom" id="<?=$key?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content bg-light">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?=$value['nome']?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-12 mb-2">
								<div class="owl-carousel carrossel-modal owl-theme">
									
									<div class="item"><img src="<?=$value['imagem']['1']?>" alt=""></div>
									<div class="item"><img src="<?=$value['imagem']['2']?>" alt=""></div>

								</div>
							</div>
							<div class="col-12">
								<?=$value['descricao']?>
							</div>
							<div class="col-12">
								<div class="table-responsive">

									<table class="table">
										<thead>
											<tr>
												<th scope="col">Código</th>
												<th scope="col">Nome</th>
												<th scope="col">Tamanho</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row"><?=$value['codigo']?></th>
												<td><?=$value['nome']?></td>
												<td><?=$value['tamanho']?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary border-0" data-dismiss="modal">Orçamento</button>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
	?>
	<!-- Modal 1 -->



	<!--==========================
      Clients Section
      ============================-->
	<section id="clients" class="wow fadeInUp">
		<div class="container">

			<header class="section-header">
				<h3>Clientes</h3>
			</header>

			<div class="owl-carousel clients-carousel">
				<img src="img/clientes/coplana.png" alt="">
				<img src="img/clientes/cpfl.png" alt="">
				<img src="img/clientes/gba.png" alt="">
				<img src="img/clientes/raizen.png" alt="">
				<img src="img/clientes/sabesp.png" alt="">
				<img src="img/clientes/semag.png" alt="">
			</div>

		</div>
	</section><!-- #clients -->
	<!--=========================
      Contact Section
      ============================-->
	<section id="contact" class="section-bg wow fadeInUp">
		<div class="container">
			<div class="section-header">
				<h3>Contatos</h3>
				<div class="row contact-info">
					<div class="col-md-4">
						<div class="contact-address">
							<i class="ion-ios-location-outline"></i>
							<h3>Endereço</h3>
							<address>AV. PRAÇA DOS TRABALHADORES, 238
								CECAP - Guariba - São Paulo - Brasil
								CEP 14.840.000</address>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-phone">
							<i class="ion-ios-telephone-outline"></i>
							<h3>Telefone | Whatsapp</h3>
							<p><a href="tel:1632518316">Telefone (16) 3251-8316
								</a></p>
							<p><a href="https://api.whatsapp.com/send?phone=5516991858042&text=Ol%C3%A1%2C%20gostaria%20de%20ser%20atendido">Whatsapp (16) 99185-8042</a></p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="contact-email">
							<i class="ion-ios-email-outline"></i>
							<h3>E-mail</h3>
							<p><a href="mailto:comercial@indesfer.com.br">comercial@indesfer.com.br</a></p>
						</div>
					</div>

				</div>

				<div class="form" id="contact">
					<div id="errormessage"></div>
					<form action="enviosmtp.php" method="post" role="form">
						<div class="form-row">
							<div class="form-group col-md-6">
								<input type="text" name="nome" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" value="<?=$_GET['type']?>" name="assunto" id="subject" placeholder="Titulo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
							<div class="validation"></div>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="mensagem" id="mensagem" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem">
							<?php
								if($_GET['id']){
									echo $_GET['id'];
								}
							?>
							</textarea>
							<div class="validation"></div>
						</div>
						<div class="text-center"><button class="btn btn-primary px-4" id="enviarEmail">Enviar</button></div>
					</form>
				</div>

			</div>
	</section><!-- #contact -->
</main>

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

<script>
$('document').ready(function()
{
    $('textarea').each(function(){
            $(this).val($(this).val().trim());
        }
    );
});
	$("#enviarEmail").click(function() {
		$
		$.ajax({
			type: "POST",
			url: "enviosmtp.php",
			data: {
				p1: $("#name").val(),
				p2: $("#email").val(),
				p3: $("#subject").val(),
				p4: $("#mensagem").val(),
			},
			success: function() {
				Swal.fire({
					icon: 'success',
					title: 'Sucesso',
					text: 'Ficamos gratos pelo seu contato, retornaremos em breve!',
				})
			},
		});
	});
</script>
<script>
	$('.carrossel-modal').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>

</body>

</html>