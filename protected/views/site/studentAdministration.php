<?php
/* @var $this RegistryController */

$this->breadcrumbs=array(
        
	'Student Administration'=>array('site/studentAdministration'),
	
);
?>
<!--h1><?php echo $this->id . '/' . $this->action->id; ?></h1-->


<h1>
    Welcome to the Student Administration
    
</h1>
<ol class="list-view">
    <li>
        Find student details <?php echo CHtml::link('Click Here', array('Admission/getAdmission')); ?>.
    </li>
    <li>
        <strong>New </strong>student admission  please <?php echo CHtml::link('Click Here', array('Admission/getAdmission')); ?>.
    </li>
    <li>
        <strong>Old</strong> Student Admission for any new  programme  please <?php echo CHtml::link('Click Here', array('Admission/create')); ?>.
    </li>
    
    
</ol>

<?php 
$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'panel 1'=>'content for panel 1',
        'panel 2'=>'content for panel 2',
        // panel 3 contains the content rendered by a partial view
        //'panel 3'=>$this->renderPartial('_partial',null,true),
        'panel 4'=>array('panel 4.1'=>'content for panel 4.1','panel 4.2'=>'content for panel 4.2',),
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'bounceslide',
    ),
));
?>
