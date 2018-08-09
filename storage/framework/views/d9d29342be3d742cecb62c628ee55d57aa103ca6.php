<?php $__env->startSection('body'); ?>
	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h2><?php echo e(substr(Route::currentRouteName(),5)); ?> item</h2>
		<form class="form-horizontal" action="/todo/<?php echo $__env->yieldContent('editID'); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<?php $__env->startSection('editMethod'); ?>
		<?php echo $__env->yieldSection(); ?>
  			<fieldset>
    			<div class="form-group">
    				<div class="col-lg-10">
      					<input class="form-control" type="text" name="title" value="<?php echo $__env->yieldContent('edittitle'); ?>" placeholder="Title">
      					<br>
    					
    				</div>
      				<div class="col-lg-10">
      					<textarea class="form-control" name="body" placeholder="Body" id="Textarea" rows="5"><?php echo $__env->yieldContent('editbody'); ?></textarea>
      					<br>
    					<button type="submit" class="btn btn-success">Submit</button>
    				</div>
    			</div>
  			</fieldset>
		</form>
		<?php echo $__env->make('todo.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>