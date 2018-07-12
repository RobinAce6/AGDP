<?php $__env->startSection('content'); ?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-65 p-b-10">
				<form class="login100-form validate-form" method="POST"	action="<?php echo e(route('update', [$person->idPeo])); ?>">

				    <?php echo e(method_field('PUT')); ?>

				    <?php echo e(csrf_field()); ?>

					
					<span class="login100-form-title p-b-45">
						Acualizar Persona
					</span>
						
					<div class="form-control">

						<div class="wrap-input100 validate-input m-t-6">
							<input class="input100" type="number" name="idPeo" value="<?php echo e($person->idPeo); ?>" disabled>
						</div>

						<div class="wrap-input100 validate-input m-t-6">
							<input class="input100" type="text" name="nameP" value="<?php echo e($person->nameP); ?>" required>
						</div>

						<div class="wrap-input100 validate-input m-t-6">
							<input class="input100" type="text" name="surnameP" value="<?php echo e($person->surnameP); ?>" required>
						</div>

						<div class="wrap-input100 validate-input m-t-6">
							<input class="input100" type="text" name="emailP" value="<?php echo e($person->emailP); ?>" required>
						</div>

						<div class="wrap-input100 validate-input m-t-6">
							<input class="input100" type="text" name="typeP" value="<?php echo e($person->typeP); ?>" required>
						</div>

						<div class="container-login100">
							<button class="btn btn-warning">Guardar</button>
						</div>

						<div class="container-login100">
							<a href="<?php echo e(route('person.listP')); ?>" class="btn btn-danger">Cancelar</a>
						</div>

						<div class="container-login100">
							<a href="<?php echo e(route('person.listP')); ?>" class="btn btn-primary">Regresar a la Lista</a>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>