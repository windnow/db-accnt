<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use Yii;

$title = Yii::t('app','Поступление товаров');
if(!$this->title)
    $this->title = Yii::$app->name. ': ' . $title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Документы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $title;
?>
<h2><?=$title?></h2>

