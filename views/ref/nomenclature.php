<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use Yii;
$this->title = Yii::t('app','Номенклатура');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Справочники'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?=$this->title?></h1>
