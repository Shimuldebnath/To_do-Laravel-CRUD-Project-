<?php $__env->startSection('body'); ?>
	<br>
	<?php echo $__env->make('todo.partial.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<a href="todo/create" class="btn btn-info">Add new!</a>
	<div class="col-lg-6 col-lg-offset-3">
		<center><h2>Todo lists</h2></center>
		<ul class="list-group col-lg-8">
		<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  			<li class="list-group-item">
    			<a href="<?php echo e('/todo/'.$todo->id); ?>"><?php echo e($todo->title); ?></a>
    			<span class="pull-right"><?php echo e($todo->created_at->diffforhumans()); ?></span>
  			</li>
  			<!--<br>

  			<li class="list-group-item">
    			<?php echo e($todo->body); ?>

    			<span class="pull-right"><?php echo e($todo->created_at->diffforhumans()); ?></span>
  			</li>
  			<br><br>--> 
  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>

		<ul class="list-group col-lg-4">
		<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  			<li class="list-group-item">
    			<a href="<?php echo e('/todo/'.$todo->id.'/edit'); ?>">Edit</a>
    			<form class="form-group pull-right" action="<?php echo e('/todo/'.$todo->id); ?>" method="post">
    			<?php echo e(csrf_field()); ?>

    			<?php echo e(method_field('DELETE')); ?>

    			<input type="submit" value="delete"></form>
  			</li>
  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>