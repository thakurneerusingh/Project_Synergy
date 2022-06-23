
  
<?php $__env->startSection('content'); ?>
<section>
    <div class="container">
<div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
                <div class="logindata">
                    <h4>Login Page</h4>
                    <?php if(session('success')): ?>
                        <div class="alert alert-danger  w-100" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <!-- <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success w-25">
                    <p><?php echo e($message); ?></p>
                    </div>
                    <?php endif; ?> -->
        <form action="<?php echo e(route('login.post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
  <div class="form-group">
  <input type="text" id="email_address" class="form-control login_text mt-5" placeholder="Email Address" name="email" >
  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group mt-4">
  <input type="password" id="password" class="form-control login_text" placeholder="Password" name="password">
  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert text-danger "><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-check mt-4">
    <input type="checkbox" class="form-check-input " id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="btn_submit">
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
    </form>
            </div>
        </div>
    </div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layout_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\Biodiesel\resources\views/auth/login.blade.php ENDPATH**/ ?>