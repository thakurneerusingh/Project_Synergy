                            <!-- <table class="table table-striped  text-center">
                            <thead class="thead-dark table-bordered">
                                    <tr>
                                    <th>Id</th>
                                    <th>Customer Name</th>
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
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->address); ?></td>
                                    <td><?php echo e($item->mobile); ?></td>
                                    <td><?php echo e($item->customer_type); ?></td>
                                    <td><?php echo e($item->volume); ?></td>
                                    <td><?php echo e($item->Use_in); ?></td>
                                    <td><?php echo e($item->description); ?></td>
                                </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                            </table> --><?php /**PATH C:\Laravel\Biodiesel\resources\views/auth/list.blade.php ENDPATH**/ ?>