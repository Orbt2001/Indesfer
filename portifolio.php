<?php
$text_termo = 'As telhas termoacústica são usadas quando se exige um excelente desempenho termoacústico. Oferecem maior resistência nas trocas de calor externo e interno, possibilitando significativa redução da utilização de equipamentos para refrigeração. Tem como característica ser retardante na ação de chamas e não absorver a água.';
$text_zinco = 'As telhas de zinco oferecem tudo o que uma obra precisa, versatilidade, praticidade e economia, protegendo o aço da corrosão atmosférica.';
$text_calhas = 'As calhas são os canais responsáveis pela coleta das águas pluviais (provindas das chuvas) e que correm pelos telhados e terraços de casas ou construções. Normalmente, as calhas são produzidas em aço galvanizado, ou seja, revestidos com uma camada de zinco para evitar a corrosão.';
$text_chapas = 'São produzidas pelo processo de corte transversal, disponibilizados em diversos comprimentos e larguras.';
$text_perfil = 'Nossos perfis são obtidos através do processo de conformação a frio, de acordo com norma NBR 6355, garantindo total qualidade. Para melhor atendê-lo, oferecemos perfis sob medida e em aços especiais.';
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
    'parafusos'=>[
        'nome'=>'Perfis U e perfis C',
        'descricao' => $txt_perfil,
        'codigo'=> '0005',
        'tamanho' => 'Sob Medida',
        'imagem'=> ['1'=>'img/catalogo/perfis.webp'],
        ]
];
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
                                        <h4 class="card-title"><?= $value['nome'] ?></h4>
                                        <span class="card-text text-muted m-0"><?= $value['descricao'] ?></span>
                                    </div>
                                    <div class="col-12 alinha-btn-center-small">
                                        <a href="index#contact" class="btn btn-primary mt-4">Solicitar Orçamento</a>
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
