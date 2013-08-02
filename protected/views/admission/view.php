<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Student Info'=>array('admin'),
	$model->studentID,
);

$this->menu=array(
	array('label'=>'List Administration', 'url'=>array('index')),
	array('label'=>'Create Administration', 'url'=>array('create')),
	array('label'=>'Update Administration', 'url'=>array('update', 'id'=>$model->administrationCode)),
	array('label'=>'Delete Administration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->administrationCode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Administration', 'url'=>array('admin')),
);
?>
<?php
    
?>


    <div class="preview">
        <h3>Details Info </h3>
        <h4><strong>Programme: </strong> <?php  echo DBhelper::getProgrammeByCode(yii::app()->session['proCode']); ?></h4>
        <h4><strong>Batch: </strong><span class="label label-success "> <?php echo yii::app()->session['batName'].FormUtil::getBatchNameSufix(yii::app()->session['batName']); ?>  </span><strong>Section: </strong><span class="label label-important"> <?php echo yii::app()->session['secName']; ?></span></h4>
        <!--h4><strong>Academic Year: </strong><span class="label label-info"><?php  echo FormUtil::getTerm(Batch::model()->findByPk(array('batchName'=>yii::app()->session['batName'],'programmeCode'=>yii::app()->session['proCode']))->bat_term)." ".Batch::model()->findByPk(array('batchName'=>yii::app()->session['batName'],'programmeCode'=>yii::app()->session['proCode']))->bat_year ;  ?></span></h4-->
        
        <h3><strong>Student ID:</strong> <?php echo $admission->studentID;  ?></h3>
        <h4><strong>Academic Year: </strong><span class="label label-info"><?php  echo FormUtil::getTerm($student->stu_academicTerm)." ".$student->stu_academicYear ;  ?></span></h4>
     </div>
     <hr/>
     <table class="table table-hover table-bordered detail">
         <tr>
             <td class="detail-title ">
                Name:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_title." ".$person->per_firstName." ".$person->per_lastName; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         <tr>
             <td class="detail-title">
                 Gender:
             </td>
             <td class="detail-content">
                 <?php echo $person->per_gender; ?>
             </td>
         </tr>
         
     </table>


