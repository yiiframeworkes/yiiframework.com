<?php
/* @var $books array */
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="books-videos">
    <div class="container content-separator">
        <div class="row">
            <div class="col-md-12">
                <div class="dashed-heading-front-books">
                    <span>Libros y Videos sobre Yii</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?= $this->render('/site/partials/_books.php', ['books' => $books]) ?>
        </div>
        <div class="row see-all">
            <a href="<?= Url::to(['site/books']) ?>" class="btn btn-front btn-block">Ver todos los libros</a>
        </div>
    </div>
</div>
