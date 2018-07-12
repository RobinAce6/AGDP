<?php $__env->startSection('main'); ?>

<div class="right_col" role="main">

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Actualizar Usuario <small> <?php echo e($user->namePerson); ?></small> </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action=" <?php echo e(route('updateU', [$user->idUser])); ?>" method="POST">

              <?php echo e(method_field('PUT')); ?>              
              <?php echo e(csrf_field()); ?>

              
              <div class="row">
                <div class="form-group col-xs-12 col-md-4">
                  <label class="control-label" for="last-name">Nombre(s)<span class="required">*</span></label>
                  <input type="text" name="namePerson" value="<?php echo e($user->namePerson); ?>" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
                </div>
                <div class="form-group col-xs-12 col-md-4">
                  <label class="control-label" for="last-name">Apellido(s)<span class="required">*</span></label>
                  <input type="text" name="lastnamePerson" value="<?php echo e($user->lastnamePerson); ?>" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
                </div>
                <div class="form-group col-xs-12 col-md-4">
                  <label class="control-label" for="last-name">Número de documento<span class="required">*</span></label>
                  <input type="text" name="codPerson" value="<?php echo e($user->codPerson); ?>" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                  <label class="control-label" for="last-name">Correo electrónico<span class="required">*</span></label>
                  <input type="email" name="email" value="<?php echo e($user->email); ?>" required="required" data-parsley-required-message="Este campo es obligatorio" data-parsley-type-message="Ingrese un valor válido de correo electrónico" class="form-control">
                </div>
                <div class="form-control">
                 <input class="input100" type="hidden" name="password">
              </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4 col-xs-12">
                  <label class="control-label">Cargo</label>
                  <select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio" name="idDependency">
                    <?php $__currentLoopData = $depend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Depend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($Depend->idDependency); ?>"><?php echo e($Depend->nameDependency); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group col-md-4 col-xs-12">
                  <label class="control-label">Área de trabajo</label>
                  <select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio" name="idTypePerson">
                    <?php $__currentLoopData = $typep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typePerson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($typePerson->idTypePerson); ?>"><?php echo e($typePerson->nameTypePerson); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
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
                  <button class="btn btn-success">Guardar</button><br>
                    <a href="<?php echo e(route('listaU')); ?>" class="btn btn-primary">Cancelar</a>
                </div>
              </div>
              

            </form>
          </div>
        </div>
      </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>