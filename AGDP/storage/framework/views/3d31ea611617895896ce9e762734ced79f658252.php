<?php $__env->startSection('content'); ?>

<div class="limiter">
   <div class="container-login100">
      <div class="wrap-login100 p-t-65 p-b-10">
         <form class="login100-form validate-form" method="POST" action="<?php echo e(route('updateRU', [$userole->nRU])); ?>">

          <?php echo e(method_field('PUT')); ?>

          <?php echo e(csrf_field()); ?>

                
            <span class="login100-form-title p-b-45">
               Asociación Rol-Usuario
            </span>
                    
            <div class="form-control">

                  <div class="wrap-input100 validate-input m-t-6 validate-form">
                     <input class="input100" type="text" name="nRU" value="<?php echo e($userole->nRU); ?>" disabled>
                  </div>

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
            <div class="container-login100-form-btn">
               <button class="btn btn-warning">Guardar</button><br>
               <a href="<?php echo e(route('role_user.listRU')); ?>" class="btn btn-danger">Cancelar</a>
            </div>
               <div class="card-footer text-muted">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>