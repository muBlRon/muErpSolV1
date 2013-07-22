<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/stepByStepForm.css" />
        <?php Yii::app()->bootstrap->register(); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

        <div class="navbar">
                    <div class="navbar-inner">
        
	
		<?php  $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index'), 'itemOptions'=>array('class'=>'about')),

                                array('label'=>'Registry', 'url'=>array('site/registry')),
                                array('label'=>'Student Administration', 'url'=>array('site/studentAdministration')),
                                array('label'=>'Examination', 'url'=>array('/employee/index')),
                                array('label'=>'User Management', 'url'=>array('/employee/index')),
                                array('label'=>'Settings', 'url'=>array('/site/index')),
                            	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                    'htmlOptions'=>array('class'=>'nav')
		));  ?>
                        <a class="brand" href="#"><?php
                      
                        echo str_replace(array(Yii::app()->name.' -','Site'),' ',$this->pageTitle) ; ?></a>
                    </div>
        </div>
                
	<?php if(isset($this->breadcrumbs)):?>
		<!-- breadcrumbs -->
                
                    <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
                    'links' => $this->breadcrumbs,
                    )); ?>
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page --> 

</body>
</html>
