<?php
include_once('master.php');
?>
<!--==========================
    Intro Section
    ============================-->
<section id="intro">
<div class="container" id="intro">
    <div class="row mx-0 my-5 justify-content-center d-flex">
        <div class="col-12 text-center">
            <header class="section-header">
                <h3 class="section-title">Portifólio</h3>
            </header>
        </div>
        <div class="col-12 col-md-10">
            <?php
            foreach ($arr_produtos as $key => $value) {
            ?>
                <div class="card p-2 m-4">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img src="<?=$value['imagem']['1']?>" alt="">
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body m-0 px-3 p-0">

                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="card-title"><?=$value['nome'] ?></h4>
                                        <span class="card-text text-muted m-0"><?= $value['descricao'] ?></span>
                                    </div>
                                    <div class="col-12 alinha-btn-center-small">
                                        <a href="index?id=<?=$value['nome']?>&type=Orçamento" class="btn btn-primary mt-4">Solicitar Orçamento</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>
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

</body>

</html>