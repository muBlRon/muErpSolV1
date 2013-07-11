<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Admission'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Admission', 'url'=>array('index')),
	array('label'=>'Manage Admission', 'url'=>array('admin')),
);
?>


<div id="form">
    <h1>Student Admission</h1>
<?php 

        if ($form=="_form_1")
        {
            echo $this->renderPartial($form, array('admission'=>$admission),false,true); 
        }
        elseif ($form=="_form_2")
        {
            echo $this->renderPartial($form, array('admission'=>$admission,'student'=>$student,'person'=>$person,'acHistory'=>$acHistory,'jobExp'=>$jobExp),false,true); 
        }
?>
</div>