<?php $__env->startSection('content'); ?>
<div class="limiter">
   <div class="container-login100">
      <div class="wrap-login100 p-t-65 p-b-10">
         <form class="login100-form validate-form" method="POST" action="<?php echo e(route('storeF')); ?>" novalidate>

            <?php echo e(csrf_field()); ?>

                
            <span class="login100-form-title p-b-45">
               Registro Proyecto
            </span>
                    
            <div class="form-control">
               <div class="wrap-input100 validate-input m-t-6">
                  <input class="input100" type="text" name="nameFolder" placeholder="Nombre" required>
               </div>

               <div class="form-group">
                <laber> Cliente </laber>
                   <select class="wrap-input100 m-t-6" name="idCliente">
                     <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                       <option value="<?php echo e($Client->idClient); ?>"><?php echo e($Client->nameClient); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </select>
               </div>

                <div class="container-login100-form-btn">
                  <button class="btn btn-warning">Guardar</button>
               </div>
               <div class="container-login100-form-btn">
                  <a href="<?php echo e(route('folder.listF')); ?>" class="btn btn-danger">Cancelar</a>
               </div>   
            </div>
         </form>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>