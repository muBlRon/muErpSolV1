<?php
/* @var $this RegistryController */

$this->breadcrumbs=array(
	'Registry',
);
?>
<!--h1><?php echo $this->id . '/' . $this->action->id; ?></h1-->


<h1>
    Welcome to the Registry department.
    
</h1>
<ol class="list-view">
    <li>
        For accessing the <strong>School</strong> information please <?php echo CHtml::link('Click Here', array('School/index')); ?>.
    </li>
    <li>
        For getting the <strong>Administrative Department</strong> information please <?php echo CHtml::link('Click Here', array('Administration/index')); ?>.
    </li>
    <li>
        For accessing the <strong>Faculty</strong> information please <?php echo CHtml::link('Click Here', array('Faculty/departmentView')); ?>.
    </li>
</ol>
<p>
	
</p>
