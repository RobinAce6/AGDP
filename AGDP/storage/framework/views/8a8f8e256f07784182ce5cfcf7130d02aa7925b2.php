<?php $__env->startSection('content'); ?>
<div class="col-md-10 text-center">
   <div class="col-md-10 text-center">
      <div class="card card-body text-center">
         <form  class="needs-validation" novalidate>
            <div class="row justify-content-center">
               <div class="col-sm-12 col-md-6 form-group text-left">
                  <label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre</label>
                  <div class="col-sm-10 col-lg-12">
                     <input type="text" class="form-control" name="nameFolder" required>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>