<?php $__env->startSection('editC'); ?>

	<div class="right_col" role="main">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Actualizar Información  <small><?php echo e($client->nameClient); ?></small> </h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						
						<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="<?php echo e(route('update', [$client->idClient])); ?>">

							<?php echo e(method_field('PUT')); ?>

							<?php echo e(csrf_field()); ?>

							
							<div class="row">
								<div class="form-group col-xs-12 col-md-6">
									<label class="control-label" for="last-name">NIT<span class="required">*</span></label>
									<input type="text" name="nitClient" required data-parsley-required-message="Este campo es obligatorio" class="form-control" value="<?php echo e($client->nitClient); ?>">
								</div>
								<div class="form-group col-xs-12 col-md-6">
									<label class="control-label" for="last-name">Empresa<span class="required">*</span></label>
									<input type="text" id="last-name" name="nameClient" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control" value="<?php echo e($client->nameClient); ?>">
								</div>
								<div class="form-group col-xs-12 col-md-6">
									<label class="control-label" for="last-name">Encargado<span class="required">*</span></label>
									<input type="text" name="personClient" required data-parsley-required-message="Este campo es obligatorio" class="form-control" value="<?php echo e($client->personClient); ?>">
								</div>
								<div class="form-group col-xs-12 col-md-6">
									<label class="control-label" for="last-name">Dirección <span class="required">*</span></label>
									<input type="text" name="addressClient" required data-parsley-required-message="Este campo es obligatorio" class="form-control" value="<?php echo e($client->addressClient); ?>">
								</div>
							</div>
							
							
						
							<div class="row">
								<div class="form-group text-left">
									<small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
								</div>
							</div>					
							<div class="ln_solid"></div>
							<div class="row">
								<div class="form-group col-xs-12 text-center">
								
									<a href="<?php echo e(route('listaC')); ?>" class="btn btn-primary">Cancelar</a>
									<button class="btn btn-success">Guardar</button>
								
							</div>
							</div>
							

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.editC', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>