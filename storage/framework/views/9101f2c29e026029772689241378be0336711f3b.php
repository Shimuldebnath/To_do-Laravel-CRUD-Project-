<?php if(session()->has('message')): ?>
	<h1 class="alert alert-success"><?php echo e(session()->get('message')); ?></h1>
<?php endif; ?>