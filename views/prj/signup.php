<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use Yii;
$this->title = Yii::t('app','Регистрация');
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?=$this->title?></h1>
<p>
    <?php $form = ActiveForm::begin([
        'class'=>'form-vertical1',

    ])?>
    <?=$form->field($model, 'name')->textInput(['autofocus'=>true])?>
    <?=$form->field($model, 'email')->textInput()?>
    <?=$form->field($model, 'pasHash')->passwordInput()?>
    <?= Html::submitButton(Yii::t('app', 'Регистрация'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    <?php
    ActiveForm::end()
    ?>
</p>
