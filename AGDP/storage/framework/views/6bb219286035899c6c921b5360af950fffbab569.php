<?php $__env->startSection('content'); ?>

	<div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100 p-t-65 p-b-10">
            <form class="login100-form validate-form" method="POST" action="<?php echo e(route('updateU', [$user->idUser])); ?>">

              <?php echo e(method_field('PUT')); ?>              
              <?php echo e(csrf_field()); ?>


               <span class="login100-form-title p-b-45">
                  Actualizar Usuario
               </span>
                  
               <div class="form-control">

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="codPerson" value="<?php echo e($user->codPerson); ?>">
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="namePerson" value="<?php echo e($user->namePerson); ?>">
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="lastnamePerson" value="<?php echo e($user->lastnamePerson); ?>">
                  </div>

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="email" value="<?php echo e($user->email); ?>">
                  </div>

                  </div>
                  <br>
                  <div class="form-group">
                   <p> Tipo de Persona </p>
                      <select class="form-control" name="idTypePerson">
                        <?php $__currentLoopData = $typep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typePerson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($typePerson->idTypePerson); ?>"><?php echo e($typePerson->nameTypePerson); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
                  <br>
                  <div class="form-group">
                   <p> Área de Trabajo </p>
                      <select class="form-control" name="idDependency">
                        <?php $__currentLoopData = $depend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Depend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($typePerson->idTypePerson); ?>"><?php echo e($Depend->nameDependency); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                  </div>
              <div class="hidden">
                 <input class="input100" type="hidden" name="password">
              </div>
              <div class="container-login100-form-btn">
               <button class="btn btn-warning">Guardar</button><br>
               <a href="<?php echo e(route('user.listU')); ?>" class="btn btn-primary">Cancelar</a>
            </div>
            </form>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>