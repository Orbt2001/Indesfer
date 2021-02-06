<?php

include_once('master.php');
?>
<div class="container-fluid" id="intro">
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
        </div>
    </div>    
    <div class="container-fluid m-0 p-0">
        <div class="row m-0">
            <div class="col-12 p-0 m-0">
            <?php
        include_once('footer.php');
        ?>
            </div>
        </div>
    </div>
</div>
