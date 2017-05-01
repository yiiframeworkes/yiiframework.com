<?php
use yii\helpers\Html;
?>
<ul class="footerList">
  <li class="footerList_item">
    <div>Desarrollo</div>
  </li>
  <li class="footerList_item">
    <?= Html::a('Contribuir', ['site/contribute']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Últimas actualizaciones', 'https://github.com/yiisoft/yii2/commits/master') ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Reportar error', ['site/report-issue']) ?>
  </li>
  <li class="footerList_item">
    <?= Html::a('Reportar problema de seguridad', ['site/security']) ?>
  </li>
</ul>
