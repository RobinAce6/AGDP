<?php $__env->startSection('content'); ?>
	
	<div class="limiter">
		<div class="container-login98">
			<div class="wrap-login98">
				<form class="login100-form" method="POST" action="<?php echo e(route('searchP')); ?>" novalidate>

					<?php echo e(csrf_field()); ?>

					
					<div class="container-login98">
						<div class="form-group">
							<div class="wrap-input100 validate-input m-t-4">
								<input class="input100" type="text" name="searchR" placeholder="Buscar..." required>							
							</div>

							<br>

							<button class="btn btn-warning" type="submit">Buscar</button>

							<div class="container-login100-form-btn">
								<a href="<?php echo e(route('newP')); ?>" class="btn btn-warning">Crear Nueva Persona</a>
							</div>
							<div class="container-login100-form-btn">
								<a href="<?php echo e(route('mainboard' )); ?>" class="btn btn-danger"> Home</a>
							</div>
						</div>

						<table class="table table-bordered">
							<thead class="thead-light">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre(s)</th>
									<th scope="col">Apellido(s)</th>
									<th scope="col">Correo Corporativo</th>
									<th scope="col">Tipo Persona</th>
									<th scope="col">  </th>
								</tr>
							</thead>
							<tbody class="table table-bordered">
								<?php $__currentLoopData = $person; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td scope="row"><?php echo e($persons->idPeo); ?></td>
									<td scope="row"><?php echo e($persons->nameP); ?></td>
									<td scope="row"><?php echo e($persons->surnameP); ?></td>
									<td scope="row"><?php echo e($persons->emailP); ?></td>
									<td scope="row"><?php echo e($persons->typeP); ?></td>
									<td>
										<a class="btn btn-link" href="<?php echo e(route('person/edit', ['idPeo' => $persons->idPeo])); ?>">Actualizar</a>
										<a href="<?php echo e(route('person/destroy', ['idPeo' => $persons->idPeo])); ?>">Eliminar</a>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
							
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>