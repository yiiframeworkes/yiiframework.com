<?php
use yii\helpers\Html;
?>
<ul class="footerList">
  <li class="footerList_item">
    <div>Acerca de</div>
  </li>
  <li class="footerList_item">
    <?= Html::a('Acerca de Yii', ['guide/view', 'type' => 'guide', 'version' => reset(Yii::$app->params['versions']['api']), 'language' => 'en', 'section' => 'intro-yii']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Noticias', ['news/index']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Características', ['site/features']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Rendimiento', ['site/performance']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Licencia', ['site/license']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Contáctenos', ['site/contact']) ?>
  </li>
</ul>
