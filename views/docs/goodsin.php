<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use Yii;
$this->title = Yii::t('app','Поступление товаров');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Документы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?=$this->title?></h1>
