<?php
use yii\helpers\Html;
?>
<ul class="footerList">
  <li class="footerList_item">
    <div>Descargas</div>
  </li>
  <li class="footerList_item">
    <?= Html::a('Framework', ['site/download']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Documentación', ['site/download', '#' => 'offline-documentation']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Extensiones', ['extension/index']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Logo', ['site/logo']) ?>
  </li>
</ul>
