<?php $__env->startSection('content'); ?>

<form  method="POST" action="<?php echo e(route('storeRU')); ?>">
	<?php echo e(csrf_field()); ?>

    <div class="row justify-content-center main-container">
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Rol-Usuario</h1> <br>	
			<div class="col-sm-12">
				<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Asignar Asociación </button>
				<div class="row">
					<div class="col-sm-12">
						<div class="collapse" id="collapseExample">
							<div class="card card-body">
								<form  class="needs-validation" novalidate>
									<div class="row justify-content-center">
                              <div class="col-sm-12 col-md-6 form-group text-left">
                              <label for="col-sm-10 col-lg-12" class="col-sm-12 col-lg-4 col-form-label">Usuario</label>
                                 <select class="form-control custom-select" name="idUser">
                                 <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($User->idUser); ?>"><?php echo e($User->namePerson); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                           
                              <div class="col-sm-12 col-md-6 form-group text-left">
                                 <label for="col-sm-10 col-lg-12" class="col-sm-12 col-lg-4 col-form-label">Rol a Asignar</label>
                                 <div class="col-sm-10 col-lg-12">                                 <select class="form-control custom-select" name="idRole">
                                    <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($Role->idRole); ?>"><?php echo e($Role->nameRole); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
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
						<th scope="col">Usuario</th>
						<th scope="col">Rol</th>
						<th scope="col">Opciones </th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $userole; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $useRole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td scope="row"><?php echo e($useRole->User->namePerson); ?></td>
						<td scope="row"><?php echo e($useRole->Role->nameRole); ?></td>
						<td>
							<a class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter-<?php echo e($useRole->nPR); ?>"><i class="fas fa-pencil-alt"></i></a>

							<div class="modal fade bd-example-modal-md" id="exampleModalCenter-<?php echo e($useRole->nPR); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                       	<div class="modal-dialog modal-dialog-centered" role="document">
                         	<div class="modal-content">
                           	<div class="modal-header">
                             	<h5 class="modal-title" id="exampleModalLongTitle">Cambiar Rol</h5>
                            	 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             	</button>
                           	</div>

                           	<div class="modal-body">

                              	<form class="login100-form validate-form" method="POST" action="<?php echo e(route('updateRU', [$useRole->nRU])); ?>">

                                  <?php echo e(method_field('PUT')); ?>

                                  <?php echo e(csrf_field()); ?>

                                        
                                    <span class="login100-form-title p-b-45">
                                       Asociación Rol-Usuario
                                    </span>
                                            
                                    <div class="form-control">
                                    
                                          <div class="form-group">
                                           <p> Usuario </p>
                                              <select class="wrap-input100 m-t-6" name="idUser">
                                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option value="<?php echo e($User->idUser); ?>"><?php echo e($User->namePerson); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                           <p> Rol de Usuario </p>
                                              <select class="wrap-input100 m-t-6" name="idRole">
                                                <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option value="<?php echo e($Role->idRole); ?>"><?php echo e($Role->nameRole); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                              </select>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                    </div>

                                       <div class="card-footer text-muted">
                                       </div>
                                    </div>
                                 </form>
                           	</div>
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
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>