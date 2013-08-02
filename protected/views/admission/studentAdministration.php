<?php
/* @var $this RegistryController */

$this->breadcrumbs=array(
        
	'Student Administration'=>array('site/studentAdministration'),
	
);
?>
<!--h1><?php echo $this->id . '/' . $this->action->id; ?></h1-->


<h3>
    Welcome to the Student Administration
    
</h3>


<?php 
$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'Student Informatoin'=>$this->renderPartial('_form_1',null,true,true),
        'Readmission'=>'content for panel 2',
        // panel 3 contains the content rendered by a partial view
        //'panel 3'=>$this->renderPartial('_form_1',null,true),
        'Batch Transfer'=>array('panel 4.1'=>'content for panel 4.1','panel 4.2'=>'content for panel 4.2',),
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'bounceslide',
        'style'=>array('minHeight'=>'200'),
        'autoHeight'=>false,
        'icons'=>array(
            "header"=>"ui-icon-plus",//ui-icon-circle-arrow-e
            "headerSelected"=>"ui-icon-circle-arrow-s",//ui-icon-circle-arrow-s, ui-icon-minus
        ),
        
    ),
    'htmlOptions'=>array('class'=>'time_cell'),
        
    
));
?>
