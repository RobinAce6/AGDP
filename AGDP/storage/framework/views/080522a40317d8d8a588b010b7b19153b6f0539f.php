<?php $__env->startSection('content'); ?>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-65 p-b-10">
			<form class="login100-form validate-form" method="POST"	action="<?php echo e(route('updateR', [$role->idRole])); ?>">
				
				<?php echo e(method_field('PUT')); ?>

				<?php echo e(csrf_field()); ?>

				
				<span class="login100-form-title p-b-45">
					Actualizar Rol
				</span>
					
				<div class="form-control">

					<div class="wrap-input100 validate-input m-t-6">
						<input class="input100" type="number" name="idRole" value="<?php echo e($role->idRole); ?>" disabled>
					</div>

					<div class="wrap-input100 validate-input m-t-6">
						<input class="input100" type="text" name="nameRole" value="<?php echo e($role->nameRole); ?>" required>
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-warning">Guardar</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<a href="<?php echo e(route('role.listR')); ?>" class="btn btn-danger">Cancelar</a>
					</div>
					
					<div class="container-login100-form-btn">
						<a href="<?php echo e(route('role.listR')); ?>" class="btn btn-primary">Regresar a la Lista</a>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>