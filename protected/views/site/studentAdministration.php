<?php
/* @var $this RegistryController */

$this->breadcrumbs=array(
        'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
	'HRM',
);
?>
<!--h1><?php echo $this->id . '/' . $this->action->id; ?></h1-->


<h1>
    Welcome to the Human Resource Management.
    
</h1>
<ol class="list-view">
    <li>
        For  <strong>new student admission </strong> please <?php echo CHtml::link('Click Here', array('Admission/getAdmission')); ?>.
    </li>
    <li>
        For Old Student Admission for any new <strong> programme </strong> please <?php echo CHtml::link('Click Here', array('Admission/create')); ?>.
    </li>
    
    
</ol>
<p>
	
</p>
