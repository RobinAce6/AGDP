<?php $__env->startSection('main'); ?>

<form data-toggle="validator" role="form" method="POST" action="<?php echo e(route('storeU')); ?>" >
  <?php echo e(csrf_field()); ?>

    <div class="row justify-content-center main-container">
      <div class="col-sm-12 col-md-8 text-left">


        <h1 class="text-center text-uppercase">Registrar Nuevo Usuario</h1> <br>
        <form class="needs-validation">
          <div class="form-group row">
            <label for="" class="col-sm-2 col-lg-4 col-form-label">Nombre(s) <sup>*</sup></label>
            <div class="col-sm-10 col-lg-8">
              <input type="text" class="form-control" name="namePerson" required>
            </div>

          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-lg-4 col-form-label">Apellido(s) <sup>*</sup></label>
            <div class="col-sm-10 col-lg-8">
              <input type="text" class="form-control" name="lastnamePerson" value="" required>
              <div class="invalid-feedback">
                Por favor ingrese su(s) apellido(s)
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-lg-4 col-form-label">Número de documento <sup>*</sup></label>
            <div class="col-sm-10 col-lg-8">
              <input type="number" class="form-control" value="" name="codPerson" required>
              <div class="invalid-feedback">
                Por favor ingrese su número de documento
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-lg-4 col-form-label">Correo electrónico <sup>*</sup></label>
            <div class="col-sm-10 col-lg-8">
              <input type="email" class="form-control" name="email" 
              pattern="[a-z0-9._%+-]+@[consultecnicos.-]+\.[a-z]{2,3}$" title="Solo Correo Corporativo" required>
              <div class="invalid-feedback">
                Por favor ingrese su correo electrónico
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-lg-4 col-form-label">Área de trabajo <sup>*</sup></label>
            <div class="col-sm-10 col-lg-8">
              <select class="form-control custom-select" name="idDependency">
              <?php $__currentLoopData = $depend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Depend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value="<?php echo e($Depend->idDependency); ?>"><?php echo e($Depend->nameDependency); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <div class="invalid-feedback">
                Por favor ingrese el área de trabajo
              </div>
            </div>
          </div>

           <div class="form-group row">
              <label for="" class="col-sm-2 col-lg-4 col-form-label">Cargo <sup>*</sup></label>
                 <div class="col-sm-10 col-lg-8">
                    <select class="form-control custom-select" name="idTypePerson">
                       <?php $__currentLoopData = $typep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typePerson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($typePerson->idTypePerson); ?>"><?php echo e($typePerson->nameTypePerson); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese el cargo
                    </div>
                 </div>
           </div> 
          <div class="form-group text-right">
            <small><sup>*</sup> Campos obligatorios</small>
          </div>

          <div class="text-center">
           <button class="btn btn-info">Guardar</button>
            <a href="<?php echo e(route('Principal')); ?>" class="btn btn-light">Cancelar</a>
          </div>
          
        </form>
      </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>