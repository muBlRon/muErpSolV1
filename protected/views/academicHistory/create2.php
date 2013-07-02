<?php
/* @var $this AcademicHistoryController */
/* @var $model AcademicHistory */

$this->breadcrumbs=array(
    'Registry'=>array('site/registry'),
	'Administration'=>array('site/administration'),
    'HRM'=>array('site/HRM'),
    'Academic Departments'=>array('department/list'),
    'Faculty'=>array('faculty/index','id'=>yii::app()->session['departmentId']),
	'Academic Histories'=>array('index','id'=>yii::app()->session['personId']),
	'Excel',
);

$this->menu=array(
	array('label'=>'List AcademicHistory', 'url'=>array('index','id'=>yii::app()->session['personId'])),
	array('label'=>'Manage AcademicHistory', 'url'=>array('admin')),
);
?>

<h1>Create Academic History</h1>
<h5><?php    echo DBhelper::getFullNameByPersonID(yii::app()->session['personId']) ;?></h5>

<?php Yii::app()->clientScript->registerScript('search', "
    $('#exportToExcel').click(function(){
        window.location = '". $this->createUrl('admin')  . "?' + $(this).parents('form').serialize() + '&export=true';
        return false;
    });
    $('.search-form form').submit(function(){
        $.fn.yiiGridView.update('some-grid', {
            data: $(this).serialize()
        });
        return false;
    });
"); ?>
…
<div class="search-form" style="display:block">
<?php $this->renderPartial('_form_1', array('model' => $model)); ?>
</div><!-- search-form -->
 
…
<?php $this->widget('application.components.widgets.tlbExcelView', array(
    'id'                   => 'some-grid',
    'dataProvider'         => $model->search(),
    'grid_mode'            => $production, // Same usage as EExcelView v0.33
    //'template'           => "{summary}\n{items}\n{exportbuttons}\n{pager}",
    'title'                => 'Some title - ' . date('d-m-Y - H-i-s'),
    'creator'              => 'Your Name',
    'subject'              => mb_convert_encoding('Something important with a date in French: ' . utf8_encode(strftime('%e %B %Y')), 'ISO-8859-1', 'UTF-8'),
    'description'          => mb_convert_encoding('Etat de production généré à la demande par l\'administrateur (some text in French).', 'ISO-8859-1', 'UTF-8'),
    'lastModifiedBy'       => 'Some Name',
    'sheetTitle'           => 'Report on ' . date('m-d-Y H-i'),
    'keywords'             => '',
    'category'             => '',
    'landscapeDisplay'     => true, // Default: false
    'A4'                   => true, // Default: false - ie : Letter (PHPExcel default)
    'RTL'                  => false, // Default: false - since v1.1
    'pageFooterText'       => '&RThis is page no. &P of &N pages', // Default: '&RPage &P of &N'
    'automaticSum'         => true, // Default: false
    'decimalSeparator'     => ',', // Default: '.'
    'thousandsSeparator'   => '.', // Default: ','
    //'displayZeros'       => false,
    //'zeroPlaceholder'    => '-',
    'sumLabel'             => 'Column totals:', // Default: 'Totals'
    'borderColor'          => '00FF00', // Default: '000000'
    'bgColor'              => 'FFFF00', // Default: 'FFFFFF'
    'textColor'            => 'FF0000', // Default: '000000'
    'rowHeight'            => 45, // Default: 15
    'headerBorderColor'    => 'FF0000', // Default: '000000'
    'headerBgColor'        => 'CCCCCC', // Default: 'CCCCCC'
    'headerTextColor'      => '0000FF', // Default: '000000'
    'headerHeight'         => 10, // Default: 20
    'footerBorderColor'    => '0000FF', // Default: '000000'
    'footerBgColor'        => '00FFCC', // Default: 'FFFFCC'
    'footerTextColor'      => 'FF00FF', // Default: '0000FF'
    'footerHeight'         => 50, // Default: 20
    'columns'              => $grid // an array of your CGridColumns
)); ?>