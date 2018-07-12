<?php $__env->startSection('content'); ?>

<div class="container">
   <div class="wrapper-dashboard">
      <form  method="POST" action="<?php echo e(route('storeF')); ?>">
         <div class="col-sm-11">
            <h1 class="text-center text-uppercase" style="margin-top: 10%;">Cargo</h1> 
            <a href="<?php echo e(route('others')); ?>" class="btn btn-success">Home</a>
            <br><br>
            <table  class=" table-search hover text-center" style="width:90%">
            	<thead class="thead-light">
            		<tr>
            			<th scope="col">Cod. Proyecto</th>
            			<th scope="col">Cliente</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php $__currentLoopData = $typep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            		<tr>
            			<td scope="row"><?php echo e($typeP->idTypePerson); ?></td>
            			<td scope="row"><?php echo e($typeP->nameTypePerson); ?></td>
            		</tr>
            		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	</tbody>
            </table>
         </div>
      </form>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>