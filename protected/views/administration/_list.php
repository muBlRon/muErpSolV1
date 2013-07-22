<?php
/* @var $this AdministrationController */
/* @var $data Administration */
?>

<div class="view">

	<b>
	<?php echo CHtml::link(CHtml::encode($data->adm_name), array('employee/index', 'id'=>$data->administrationCode)); ?>
	</b>
            

	


</div>