<?php echo $__env->make('Biodiesel.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
       
                        <?php if(session('status')): ?>
                                    <h6 class="alert alert-success"><?php echo e(session('status')); ?></h6>
                                <?php endif; ?>
                                <div class="col-lg-8 mt-5" >
                            <div class="update_form" >
                            <div class="container mt-4">
                            <h4>Automation Form</h4>
                            <form method="POST" action="<?php echo e(url('update/'.$auto->id)); ?>" id="automation">
                            <?php echo e(csrf_field()); ?>  
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo e($auto->name); ?>" placeholder="Name" >
                                </div>
                                <div class=" col-lg-6 form-group">
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($auto->email); ?>"  placeholder="Email Address">
                            </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="pump" id="pump" value="<?php echo e($auto->pump); ?>" placeholder="Pump Name" >
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="address" value="<?php echo e($auto->address); ?>" id="address"  placeholder="Address">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" id="problem_since" value="<?php echo e($auto->problem_since); ?>" name="problem_since" placeholder="Problem Since">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select class="custom-select my-1 mr-sm-2" name="nature" id="nature" value="<?php echo e($auto->nature); ?>">
                                    <option selected>Nature of Compliment</option>
                                    <option>No Connection</option>
                                    <option>Data Minery</option>
                                    <option>No ATG</option>
                                    <option>App</option>
                                    <option>No ATG</option>
                                    <option>No GPS</option>
                                    <option>Data</option>
                                    <option>Other</option>
                                </select>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description" value="<?php echo e($auto->description); ?>"  id="description" rows="3"></textarea>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary mx-3 w-100">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- Automation Form end -->
                    <!-- Fabrication Form start -->
          
                <!-- Service Section end -->
        </section>

    <?php echo $__env->make('Biodiesel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  






  




<?php /**PATH C:\Laravel\Biodiesel\resources\views/Biodiesel/update.blade.php ENDPATH**/ ?>