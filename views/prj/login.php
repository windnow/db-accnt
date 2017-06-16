<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use Yii;
$this->title = Yii::t('app','Вход');
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?=$this->title?></h1>
<p>
    <?php $form = ActiveForm::begin([
        'class'=>'form-vertical1',

    ])?>
    <?=$form->field($model, 'name')->textInput(['autofocus'=>true])?>
    <?=$form->field($model, 'password')->passwordInput()?>
    <?= Html::submitButton(Yii::t('app', 'Вход'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    <?php
    ActiveForm::end()
    ?>

</p>