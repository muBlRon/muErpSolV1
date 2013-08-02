<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Admission'=>array('admin'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Admission', 'url'=>array('index')),
	array('label'=>'Manage Admission', 'url'=>array('admin')),
);*/
?>


<div id="form">
    <h3>Student Admission</h3>
<?php 

        if ($form=="_form_1")
        {
            echo $this->renderPartial($form, array('admission'=>$admission),false,true); 
        }
        elseif ($form=="_form_2")
        {
            echo $this->renderPartial($form, array('admission'=>$admission,'student'=>$student,'person'=>$person,'acHistory'=>$acHistory,'jobExp'=>$jobExp),false,FALSE); 
        }
        elseif ($form=="_form_3")
        {
            echo $this->renderPartial($form, array('admission'=>$admission,'student'=>$student,'person'=>$person,'acHistory'=>$acHistory,'jobExp'=>$jobExp)); 
        }
?>
</div>