<?php

$title = Yii::t('app','Справочники');
if(!$this->title)
    $this->title = Yii::$app->name. ': ' . $title;
$this->params['breadcrumbs'][] = $title;
?>
<h1><?=$title?></h1>

