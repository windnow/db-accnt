<?php

$title = Yii::t('app','Главная');
if(!$this->title)
    $this->title = Yii::$app->name. ': ' . $title;
//$this->params['breadcrumbs'][] = $title;
?>
<h1>-<?=$title?>-</h1>

