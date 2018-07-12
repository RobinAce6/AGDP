<?php $__env->startSection('content'); ?>

    <form  class="needs-validation" method="POST" action="<?php echo e(route('login')); ?>" style="background-image: url(../img/bg-login.jpg);">
        <div class="wrapper-login" >
            <div class="container">
                    <?php echo e(csrf_field()); ?>

                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-6 login text-center">
                            <img src="../img/logo.png">
                            <h1 class="text-uppercase">Iniciar sesión</h1>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            </div>

                                <div>
                                    <input id="email" type="email" class="form-control" class="col-md-6 text-center" placeholder="Email Corporativo" name="email" value="<?php echo e(old('email')); ?>" required autofocus >

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                            <div class="form-group text-left password<?php echo e($errors->has('password') ? ' has-error' : ''); ?>"></div>
                            

                                <div><div class="form-group text-left password">
                                    <input id="password" type="password" class="form-control" placeholder="Ingresa Contraseña" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>

                                
                                <div class="input-group-lock__pswwd">
                                    <i class="lock fas fa-eye-slash d-none"></i>
                                    <i class="unlock far fa-eye"></i>
                                </div>
                                </div>
                                   <div class="form-group">
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <a href="" class="remember-pssw" data-toggle="modal" data-target="#exampleModalCenter">¿Olvidó su contraseña?</a><br>
                                <div class="col-md-4 col-md-offset-4 text-center">
                                </div>
                            </div>
                                    <button type="submit" class="btn btn-info">
                                        Ingresar
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

            
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form  class="needs-validation" novalidate>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Restablecer contraseña</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group text-left">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico empresarial" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su email corporativo
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-light">Cancelar</a>
                            <button type="submit" class="btn btn-info">Restablecer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>