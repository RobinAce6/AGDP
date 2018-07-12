<?php $__env->startSection('main'); ?>

<form class="login100-form" method="POST" action="">

    <?php echo e(csrf_field()); ?>

    
	<div class="row justify-content-center main-container">
	<h1 class="text-center text-uppercase ">Área de Trabajo</h1> <br>	
		<div class="col-sm-11">
			<br><br>
			<div>
				<div class="card">
				<?php $__currentLoopData = $depend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $depends): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="card-header" id="headingOne">
						<h6 class="mb-0" data-toggle="collapse" data-target="#gerencia" aria-expanded="true" aria-controls="gerencia">
						<?php echo e($depends->nameDependency); ?>

						</h6>
					</div>
					<div id="gerencia" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<P><strong> <?php echo e($depends->nameDependency); ?></strong><br>--</P>
							<br>
							<p><strong>Trabajadores:</strong></p>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
        </div>
	</div>
</form>  
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>