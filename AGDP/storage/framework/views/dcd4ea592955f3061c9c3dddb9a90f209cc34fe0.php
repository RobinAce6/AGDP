<?php $__env->startSection('main'); ?>

<div class="right_col" role="main">
   <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2>Nuevo Proyecto </h2>
                  <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                     </li>
                      <li><a href="editar_proyecto.html" class="collapse-link"><i class="fa fa-wrench"></i></a>
                     </li>
                  </ul>
               <div class="clearfix"></div>
               </div>
               <div class="x_content">

                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo e(route('storeF')); ?>" method="POST">

                     <?php echo e(csrf_field()); ?>

            
                        <div class="row">
                           <div class="form-group col-xs-12 col-md-6">
                              <label class="control-label" for="last-name">Nombre<span class="required">*</span></label>
                              <input type="text" name="nameFolder" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
                           </div>
                           <div class="form-group col-md-6 col-xs-12">
                              <label class="control-label">Cliente<span class="required">*</span></label>
                              <select name="idClient" class="select2_single form-control" tabindex="-1" required data-parsley-required-message="Este campo es obligatorio">
                                 <?php $__currentLoopData = $client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                   <option value="<?php echo e($Client->idClient); ?>"><?php echo e($Client->nameClient); ?></option>
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
                           
                              <button class="btn btn-primary">Cancelar</button>
                              <button type="submit" class="btn btn-success">Guardar</button>
                           
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