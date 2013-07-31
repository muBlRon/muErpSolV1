<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Student Admission'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Administration', 'url'=>array('index'),'active'=>true),
	array('label'=>'Create Administration', 'url'=>array('create','flag'=>true)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle('slow');
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('admission-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Admission</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbExtendedGridView', array(
        
	'id'=>'admission-grid',
    'type' => 'striped',
    'responsiveTable' => true,
	'dataProvider'=>$model->search(yii::app()->session['secName'],yii::app()->session['batName'],yii::app()->session['proCode']),
	'filter'=>$model,
    
	'columns'=>array(
           
                        'studentID',
                        'per_title',
                         'per_firstName',
                        'per_lastName',
			
			'per_bloodGroup' ,
                        'per_mobile',
            'per_email'=>array(
            'class'=>'CLinkColumn',
            'header'=>Yii::t('ui','Email'),
            //'imageUrl'=>CHtml::imageUrl('email.png'),
            'labelExpression'=>'$data->per_email',
            'urlExpression'=>'"mailto://".$data->per_email',
            'htmlOptions'=>array('style'=>'text-align:center'),
        ),
  
            
            
            array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{ac} {je} {view} {update} {print_act}',
            'buttons'=>array
            (
                'ac' => array
                (
                    'label'=>'Academic History',
                    'icon'=>'certificate white',
                    'url'=>'Yii::app()->createUrl("academicHistory", array("id"=>$data->personID))',
                    'options'=>array(
                        'class'=>'btn btn-mini btn-primary',
                        'data-toggle'=>'tooltip',
                        'data-placement'=>'left'
                    ),
                ),
                'je' => array
                (
                    'label'=>'Job Experiance',
                    'icon'=>'tasks white',
                    'url'=>'Yii::app()->createUrl("jobExperiance", array("id"=>$data->personID))',
                    'options'=>array(
                        'class'=>'btn btn-mini btn-info',
                        'data-toggle'=>'tooltip',
                    ),
                ),
                'view' => array
                (
                    'label'=>'View Details',
                    'icon'=>'search white',
                    'url'=>'Yii::app()->createUrl("customer/update", array("id"=>$data->personID))',
                    'options'=>array(
                        'class'=>'btn btn-mini btn-success',
                        'data-toggle'=>'tooltip',
                        
                    ),
                ),
                'update' => array
                (
                    'label'=>'Edit Info',
                    'icon'=>'pencil white',
                    'url'=>'Yii::app()->createUrl("admission/update", array("id"=>$data->studentID))',
                    'options'=>array(
                        'class'=>'btn btn-mini btn-warning',
                        'data-toggle'=>'tooltip',
                        
                    ),
                ),
                'print_act' => array
                (
                    'label'=>'print',
                    'icon'=>'print',
                    'url'=>'Yii::app()->createUrl("customer/printAct", array("id"=>$data->personID))',
                    'options'=>array(
                        'class'=>'btn btn-mini',
                        'data-toggle'=>'tooltip',
                        'data-placement'=>'right'
                    ),
                ),
            ),
            'htmlOptions'=>array(
                'style'=>'width: 220px; ',
                'class'=>'moreButtons',
                
            ),
     ),   
    )
    
    
)); 


?>
