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
                                        <a href="#" data-toggle="modal" data-target="#<?=$key?>" class="btn btn-secondary mt-4">...</a>
                                        <a href="index?id=<?=$value['nome']?>&type=Orçamento#contact" class="btn btn-primary mt-4">Solicitar Orçamento</a>
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
    
  <!-- CATALOGO MODAL -->
    <?php
		foreach ($arr_produtos as $key => $value) {
	?>
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

