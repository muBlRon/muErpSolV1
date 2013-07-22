<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
            <div class="well" style="min-width:280px; max-width: 320px; padding: 8px 0;">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-list'),
		));
		$this->endWidget();
	?>
            </div>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>