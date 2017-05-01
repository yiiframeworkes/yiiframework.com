<?php
use yii\helpers\Html;
?>
<ul class="footerList">
    <li class="footerList_item">
        <a href="https://www.patreon.com/yiiframework_es"><img src="<?= Yii::getAlias('@web/image/patreon.svg') ?>"></a>
    </li>
  <li class="footerList_item">
      <span class="social">
          <a href="https://github.com/yiiframeworkes"><i class="fa fa-github fa-fw"></i></a>
          <a href="https://twitter.com/yiienespanol"><i class="fa fa-twitter fa-fw"></i></a>
          <a href="https://www.facebook.com/groups/yiiframeworkes/"><i class="fa fa-facebook fa-fw"></i></a>
          <a href="#"><i class="fa fa-rss fa-fw"></i></a>
      </span>
  </li>
  <!-- li class="footerList_item">
    <?= Html::a('Términos de Servicio', ['site/tos']) ?>
  </li -->
  <li class="footerList_item">
      <?= Html::a('Licencia', ['site/license']) ?>
  </li>
  <li class="footerList_item">
      <a href="https://github.com/yiisoft-contrib/yiiframework.com" target="_blank">Código Fuente</a>
  </li>
  <li class="footerList_item">
      &nbsp;
  </li>
  <li class="footerList_item">
    &copy; 2008 - <?= date('Y') ?> Yii
  </li>
  <li class="footerList_item">
    Design: <a href="http://www.eshill.ru/" target="_blank">Eshill</a>
  </li>
</ul>
