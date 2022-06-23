

<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success w-25 mt-3">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
    <section>
             <!-- Sales Section start-->
            <div class="container-fluid" style="margin-top:20px;">
                        <select name="skill_dropdown" id="skill_dropdown" class="select ml-2">
                            <option value="">Please select skill</option>
                            <option value="php">Sales</option>
                            <option value="mysql">Service</option>
                        </select>
                    </div>	
                <div  class="php skill">
                    <select  name="skill_dropdown_2" id="skill_dropdown_2" class="select">
                        <option>Sales Table</option>
                        <option value="bio">Biodiesel Table</option>
                        <option value="fab">Fabrication Table</option>
                    </select>
                   <!-- Biodiesel Form start -->
                        <div class="col-lg-12 mt-5" style="float: right;">
                            <div class=" bio table_test" >
                            <h4>Biodiesel Table</h4>
                            <table class="table table-striped  text-center">
                            <thead class="thead-dark table-bordered">
                                    <tr>
                                    <th>Id</th>
                                    <th>Ticket Id</th>
                                    <th>Customer Name</th>
                                    <th>Email Address</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Customer Type</th>
                                    <th>Volume</th>
                                    <th>Use In</th>
                                    <th>Description</th>
                                    <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->user_id); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->address); ?></td>
                                    <td><?php echo e($item->mobile); ?></td>
                                    <td><?php echo e($item->customer_type); ?></td>
                                    <td><?php echo e($item->volume); ?></td>
                                    <td><?php echo e($item->Use_in); ?></td>
                                    <td><?php echo e($item->description); ?></td>
                                    <td><a href="" ><i class="fa fa-edit text-center"style="font-size:20px;color:#019306;font-weight: 700;"></i></a></td>
                                </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                                </div>
                                </div>
                                
                     <!-- Biodiesel Form end -->
                    <!-- Fabrication Form start -->
                  
                            <div class="col-lg-12 " >
                            <div class="fab table_test mt-5" >
                            <h4>Fabrication Table</h4>
                            <table class="table table-striped  text-center">
                            <thead class="thead-dark table-bordered">
                                    <tr>
                                    <th>Id</th>
                                    <th>Ticket Id</th>
                                    <th>Mobile</th>
                                    <th>Email Address</th>
                                    <th>Type</th>
                                    <th>Capacity</th>
                                    <th>Pump</th>
                                    <th>Choose</th>
                                    <th>QTY</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $fabrication; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->user_id); ?></td>
                                    <td><?php echo e($user->mobile); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->type); ?></td>
                                    <td><?php echo e($user->capacity); ?></td>
                                    <td><?php echo e($user->pump); ?></td>
                                    <td><?php echo e($user->Choose); ?></td>
                                    <td><?php echo e($user->qty); ?></td>
                                    <td><?php echo e($user->description); ?></td>
                                    <td><a href="" ><i class="fa fa-edit text-center" style="font-size:20px;color:#019306;font-weight: 700;"></i></a>
                                   </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                </table>
                        </div>
                        </div>
</div>
                    </div>
                
            <!-- Fabrication Form end -->
             <!-- Sales section end -->
             <!-- service section start -->

                <div class="mysql skill">
                    <select name="skill_dropdown_3" id="skill_dropdown_3" class="select">
                        <option>Service Table</option>
                        <option value="auto">Automation</option>
                        <option value="fab_2">Fabrication</option>
                    </select>
                
                    <!-- Automation Form start -->
                            <div class="col-lg-12 mt-5">
                            <div class=" auto table_test_2" >
                            <h4>Automation Table</h4>
                            <table class="table table-striped  text-center ">
                                <thead class="thead-dark table-bordered">
                                    <tr>
                                    <th>Id</th>
                                    <th>Ticket Id</th>
                                    <th>Customer Name</th>
                                    <th>Email Address</th>
                                    <th>Pump</th>
                                    <th>Address</th>
                                    <th>Problem Since</th>
                                    <th>Nature of Compliment</th>
                                    <th>description</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $automation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($res->id); ?></td>
                                    <td><?php echo e($res->user_id); ?></td>
                                    <td><?php echo e($res->name); ?></td>
                                    <td><?php echo e($res->email); ?></td>
                                    <td><?php echo e($res->pump); ?></td>
                                    <td><?php echo e($res->address); ?></td>
                                    <td><?php echo e($res->problem_since); ?></td>
                                    <td><?php echo e($res->nature); ?></td>
                                    <td><?php echo e($res->description); ?></td>
                                    <td><a href="<?php echo e(url('edit/'.$res->id)); ?>" ><i class="fa fa-edit text-center" style="font-size:20px;color:#019306;font-weight: 700;"></i></a>
                                   </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                     <!-- Automation Form end -->
                    <!-- Fabrication Form start -->
                            <div class="col-lg-12 ">
                            <div class="fab_2 table_test_2" >
                            <h4>Fabrication Table</h4>
                            <table class="table table-striped text-center">
                            <thead class="thead-dark table-bordered">
                                    <tr>
                                    <th>Id</th>
                                    <th>Ticket Id</th>
                                    <th>Customer Name</th>
                                    <th>Email Address</th>
                                    <th>Pump</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Problem Since </th>
                                    <th>Type</th>
                                    <th>Description </th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $ServiceFabrication; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td><?php echo e($item_2->id); ?></td>
                                    <td><?php echo e($item_2->user_id); ?></td>
                                    <td><?php echo e($item_2->name); ?></td>
                                    <td><?php echo e($item_2->email); ?></td>
                                    <td><?php echo e($item_2->pump); ?></td>
                                    <td><?php echo e($item_2->address); ?></td>
                                    <td><?php echo e($item_2->mobile); ?></td>
                                    <td><?php echo e($item_2->problem_since); ?></td>
                                    <td><?php echo e($item_2->type); ?></td>
                                    <td><?php echo e($item_2->description); ?></td>
                                    <td><a href="" ><i class="fa fa-edit text-center" style="font-size:20px;color:#019306;;font-weight: 700;"></i></a>
                                   </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
                <!-- Service Section end -->
        </section>
    <?php echo $__env->make('Biodiesel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\Biodiesel\resources\views/admin/index.blade.php ENDPATH**/ ?>