<?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
)); ?>
…
    <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        <?php echo CHtml::button(Yii::t('app', 'Export to Excel (xls)'), array('id' => 'exportToExcel')); ?>
    </div>
<?php $this->endWidget(); ?>