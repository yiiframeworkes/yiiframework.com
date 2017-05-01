<?php
use yii\helpers\Url;

$this->registerJs("
    $('#Glide').glide({
        type: 'carousel',
        autoheight: false,
        autoplay: 10000,
    });
");
?>
<div class="sitejumbo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>El cimiento más sólido para su aplicación PHP</h1>
                <p class="propaganda">
                    <strong>Yii</strong> es <em>rápido</em>, <em>seguro</em> y <em>eficiente</em> y funciona perfecto usando los valores por defecto.
                </p>
                <p class="propaganda">
                    El framework es fácil de ajustar para satisfacer sus necesidades, porque Yii ha sido diseñado para ser <em>flexible</em>.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashed-heading-jumbo">
                    <span><a href="<?= Url::to(['doc/guide/2.0/en/start-installation']) ?>" class="btn">Empezar</a> </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="Glide" class="glide">
            <div class="glide__wrapper">
                <ul class="glide__track">
                    <?= $this->render('/site/partials/tour/1') ?>
                    <?= $this->render('/site/partials/tour/2') ?>
                    <?= $this->render('/site/partials/tour/3') ?>
                    <?= $this->render('/site/partials/tour/4') ?>
                    <?= $this->render('/site/partials/tour/5') ?>
                </ul>
            </div>
            <div class="glide__bullets hidden-xs"></div>
        </div>
    </div>
</div>
