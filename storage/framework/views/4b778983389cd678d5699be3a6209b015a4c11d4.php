<?php $__env->startSection('editID',$item->id); ?>

<?php $__env->startSection('edittitle',$item->title); ?>
<?php $__env->startSection('editbody',$item->body); ?>
<?php $__env->startSection('editMethod'); ?>
	<?php echo e(method_field('PUT')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('todo.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>