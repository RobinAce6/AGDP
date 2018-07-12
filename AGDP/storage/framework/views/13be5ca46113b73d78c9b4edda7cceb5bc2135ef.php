<?php $__env->startSection('content'); ?>
    
<form  method="POST" action="<?php echo e(route('storePr')); ?>">
	<?php echo e(csrf_field()); ?>

    <div class="row justify-content-center main-container">
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Permisos</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Permiso </button>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content-center">
										<div class="col-sm-12 col-md-6 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre</label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" name="namePermission" required>
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 form-group text-left">
											<label for="" class="col-sm-12 col-lg-4 col-form-label">Descripción</label>
											<div class="col-sm-10 col-lg-12">
												<input type="text" class="form-control" name="description" required="">
												<div class="invalid-feedback">
													Por favor ingrese el nombre
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-12 form-group text-center ">
											<button class="btn btn-success" >Guardar</button>
											<a href="<?php echo e(route('mainboard')); ?>" class="btn btn-light">Cancelar</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-11">
			<br><br>
			<table  class=" table-search hover text-center" style="width:100%">
				<thead class="thead-light">
					<tr>
						<th scope="col">Permiso</th>
						<th scope="col">Descripción</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $permiss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permiss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td scope="row"><?php echo e($permiss->namePermission); ?></td>
						<td scope="row"><?php echo e($permiss->description); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		</div>
		<div class="text-center col-sm-11">
			<a href="<?php echo e(route('others')); ?>" class="btn btn-success">Home</a>
		</div>
	</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>