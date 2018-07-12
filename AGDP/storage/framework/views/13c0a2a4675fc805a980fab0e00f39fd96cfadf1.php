<?php $__env->startSection('main'); ?>

<form class="needs-validation" method="POST" action="">

    <?php echo e(csrf_field()); ?>

    
	<div class="right_col" role="main">
	<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Roles del Sistema </h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>	
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_content">
								<table id="datatable-responsive" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Dependencia</th>
											<th>Description </th>
											<th>Opciones</th>
										</tr>
									</thead>
									<tbody>
										<?php $__currentLoopData = $depend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Depend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td scope="row"><?php echo e($Depend->nameDependency); ?></td>
											<td scope="row"><?php echo e($Depend->description); ?></td>
											<td>
												<div class="dropdown">
													<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
														<i class="fa fa-ellipsis-v"></i>
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
													<li class="lock"><a href="#">Desctivar</a></li>
													<li class="hide unlock"><a href="#">Activar</a></li>
													</div>
													
													</div>
												</div>
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>  
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>