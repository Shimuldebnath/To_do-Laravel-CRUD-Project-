<?php $__env->startSection('body'); ?>
	<br>
	<div class="col-lg-offset-4 col-lg-4"><h2><?php echo e($item->title); ?></h2></div>
	

	<div class="col-lg-offset-4 col-lg-4"><h1><?php echo e($item->body); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>