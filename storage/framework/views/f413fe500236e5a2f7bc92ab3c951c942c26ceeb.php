<?php echo $__env->make('Biodiesel.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
        <section>
             <!-- Sales Section start-->
            <div class="container">
                        <select name="skill_dropdown" id="skill_dropdown" class="select">
                            <option value="">Please select skill</option>
                            <option value="php">Sales</option>
                            <option value="mysql">Service</option>
                        </select>
                    </div>	
                <div  class="php skill">
                    <select  name="skill_dropdown_2" id="skill_dropdown_2" class="select">
                        <option>Sales Form</option>
                        <option value="bio">Biodiesel</option>
                        <option value="fab">Fabrication</option>
                    </select>
                   <!-- Biodiesel Form start -->

                        
                        <div class="col-lg-8 mt-2 m-3" style="float: right;">
                            <div class=" bio form_test" >
                            <h4>Biodiesel Form</h4>
                            <form method="POST" action="/insertbio">
                            <?php echo e(csrf_field()); ?>  
                            <div class="row">
                            <div class=" col-lg-6 form-group">
                                <input type="text" class="form-control" name="name"  placeholder="Customer Name" required>
                            </div>
                            <div class=" col-lg-6 form-group">
                                <input type="text" class="form-control" name="address"  placeholder="Address" required>
                            </div>
                            <div class=" col-lg-6 form-group">
                                <input type="text" class="form-control" name="mobile"  placeholder="Mobile No." required>
                            </div>
                            <div class=" col-lg-6 form-group">
                                <select class="custom-select my-1 mr-sm-2"  name="customer_type" >
                                <option selected>Customer Type</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                            </div>
                            <div class=" col-lg-6 form-group">
                                <input type="text" class="form-control" name="volume" placeholder="Volume" required>
                            </div>
                            <div class=" col-lg-6 form-group">
                                <select class="custom-select my-1 mr-sm-2" name="Use_in" >
                                <option selected>Use in </option>
                                <option >One</option>
                                <option >Two</option>
                                <option>Three</option>
                            </select>
                            </div>
                            <div class=" col-lg-12 form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            
                            <textarea class="form-control" name="description" rows="3" required></textarea>
                        </div>
                        <div class=" col-lg-12 form-group">
                            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                     </div>
                            </form>
                                </div>
                                </div>
                                
                     <!-- Biodiesel Form end -->
                    <!-- Fabrication Form start -->
                  
                            <div class="col-lg-8 mt-2 m-3" style="float: right;">
                            <div class="fab form_test" >
                            <h4>Fabrication Form</h4>
                            <form method="POST" action="/insertfab">
                            <?php echo e(csrf_field()); ?> 
                            <div class="row">
                            <div class=" col-lg-6 form-group">
                            <input type="text" class="form-control" name="mobile"  placeholder="Mobile No." required>
                        </div>
                        <div class=" col-lg-6 form-group">
                            <select class="custom-select my-1 mr-sm-2" name="type" required>
                            <option selected>Type</option>
                            <option>One</option>
                            <option>Two</option>
                        </select>
                        </div>
                        <div class=" col-lg-6 form-group">
                            <input type="text" class="form-control" name="capacity"  placeholder="Capatcity" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <select class="custom-select my-1 mr-sm-2" name="pump" required >
                            <option selected>Pump</option>
                            <option >IOC</option>
                            <option >BPC</option>
                            <option >HPC</option>
                            <option >ATG</option>
                            <option >Startup</option>
                        </select>
                        </div>
                        <div class=" col-lg-6 form-group">
                            <select class="custom-select my-1 mr-sm-2" name="Choose" required>
                            <option selected>Choose...</option>
                            <option >Top Loading</option>
                            <option >Bottom Loading</option>
                        </select>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="qty" placeholder="QTY" required>
                        </div>
                        <div class=" col-lg-12 form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" rows="3" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mx-3 w-100">Submit</button>
                        </form>
                        </div>
                        </div>
</div>
                    </div>
                
            <!-- Fabrication Form end -->
             <!-- Sales section end -->
             <!-- service section start -->

                <div class="mysql skill">
                    <select name="skill_dropdown_3" id="skill_dropdown_3" class="select">
                        <option>Service Form</option>
                        <option value="auto">Automation</option>
                        <option value="fab_2">Fabrication</option>
                    </select>
                    <!-- Automation Form start -->
                    
                            <div class="col-lg-8 mt-5 m-3" style="float: right;">
                            <div class=" auto form_test_2" >
                            <div class="container mt-4">
                            <h4>Automation Form</h4>
       
                            <form method="POST" action="/insert">
                            <?php echo e(csrf_field()); ?>  
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="pump"  placeholder="Pump Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="address"  placeholder="Address" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="problem_since" placeholder="Problem Since" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select class="custom-select my-1 mr-sm-2" name="nature" >
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
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary mx-3 w-100">Submit</button>
                                </div>
                                </form>
                           
                        </div>
                        </div>
                    </div>
                     <!-- Automation Form end -->
                    <!-- Fabrication Form start -->
                   
                            <div class="col-lg-8 mt-2 m-3" style="float: right;">
                            <div class="fab_2 form_test_2" >
                            <h4>Fabrication Form</h4>
                            <form method="POST" action="/insertservice">
                            <?php echo e(csrf_field()); ?>  
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="name"  placeholder="Customer Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name=" pump"  placeholder="Pump Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="address"  placeholder="Address" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="mobile"  placeholder="Mobile No." required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="problem_since" placeholder="Problem Since" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select class="custom-select my-1 mr-sm-2" name="type" >
                                    <option selected>Nature of Compliment</option>
                                    <option>Dispenser</option>
                                    <option>Mechanical / PTO</option>
                                    <option>Welding</option>
                                    <option>Pipeline</option>
                                    <option>Electrician</option>
                                    <option>Other</option>
                                </select>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" name="description"  rows="3" required></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary mx-3 w-100">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
                <!-- Service Section end -->
        </section>
<?php echo $__env->make('Biodiesel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Biodiesel\resources\views/Biodiesel/biodiesel_test.blade.php ENDPATH**/ ?>