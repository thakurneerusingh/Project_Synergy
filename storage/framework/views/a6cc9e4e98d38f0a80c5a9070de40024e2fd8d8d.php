<?php echo $__env->make('Biodiesel.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
        <section>
             <!-- Sales Section start-->
            <div class="container-fluid mt-3">
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

                        <div class="col-lg-8 mt-5">
                            <div class=" bio form_test" >
                            <h4>Biodiesel Form</h4>
                            <form method="POST" action="javascript:void(0)" id="bioform">
                            <?php echo e(csrf_field()); ?>  
                            <div class="row">
                                <input type="hidden" class="form-control"  name="user_id"  >
                           
                            <div class=" col-lg-6 col-md-6 col-12 form-group">
                                <input type="text" class="form-control" id="name" name="name"  placeholder="Customer Name">
                            </div>
                            <div class=" col-lg-6 col-md-6 col-12 form-group">
                                <input type="email" class="form-control" id="email" name="email"  placeholder="Email Address">
                            </div>
                            <div class=" col-lg-6 col-md-6 col-12 form-group">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No.">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                <select class="custom-select my-1 mr-sm-2" id="customer_type"  name="customer_type"  placeholder="Customer Type">
                                <option selected>End Customer Traders</option>
                                <option>MSME</option>
                                <option>Transporter</option>
                                <option>Infratech </option>
                                <option>Other</option>
                            </select>
                            </div>
                          
                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                <select class="custom-select my-1 mr-sm-2" id="Use_in" name="Use_in" >
                                <option selected>Use in </option>
                                <option >Generator</option>
                                <option >Boiler</option>
                                <option >Furnace</option>
                                <option >Burner</option>
                                <option >Vehicle</option>
                            </select>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-12 form-group">
                                <input type="text" class="form-control" id="volume" name="volume" placeholder="Volume" >
                            </div>
                            <div class=" col-lg-12 form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" ></textarea>
                        </div>
                        <div class=" col-lg-12 form-group">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                     </div>
                            </form>
                                </div>
                                </div>
                                
                     <!-- Biodiesel Form end -->
                    <!-- Fabrication Form start -->
                    <div class="col-lg-2"></div>
                            <div class="col-lg-8 mt-2">
                            <div class="fab form_test" >
                            <h4>Fabrication Form</h4>
                            <form method="POST" action="javascript:void(0)" id="fab_form">
                            <?php echo e(csrf_field()); ?> 
                            <div class="row">
                            <input type="hidden" class="form-control"  name="user_id"  >
                            <div class="col-lg-6 col-md-6 col-12 form-group">
                             <input type="text" class="form-control" name="name" id="name"  placeholder="Customer Name.">
                            </div>
                            <div class=" col-lg-6 col-md-6 col-12 form-group">
                             <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Mobile No." required>
                            </div>
                        <div class=" col-lg-6 col-md-6 col-12 form-group">
                                <input type="email" class="form-control" id="email" name="email"  placeholder="Email Address">
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 form-group">
                            <input type="text" class="form-control" name="qty" placeholder="QTY" id="qty">
                        </div>
                        <div class=" col-lg-6 col-md-6 col-12 form-group">
                            <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Capatcity" required>
                        </div>
                        <div class=" col-lg-6 col-md-6 col-12 form-group">
                            <select class="custom-select my-1 mr-sm-2" name="type" id="type" >
                            <option selected>Type</option>
                            <option>Bowser</option>
                            <option>Tanker</option>
                        </select>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-12 form-group">
                            <select class="custom-select my-1 mr-sm-2" name="pump" id="pump" >
                            <option selected>Pump</option>
                            <option >IOC</option>
                            <option >BPC</option>
                            <option >HPC</option>
                            <option >ATG</option>
                            <option >Startup</option>
                        </select>
                        </div>
                        <div class=" col-lg-6 col-md-6 col-12 form-group">
                            <select class="custom-select my-1 mr-sm-2" name="Choose" id="Choose">
                            <option selected>Choose...</option>
                            <option >Top Loading</option>
                            <option >Bottom Loading</option>
                        </select>
                        </div>
                       
                        <div class=" col-lg-12 form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" rows="3" id="description"></textarea>
                        </div>
                        <button type="submit" id ="submit" name="submit" class="btn btn-primary mx-3 w-100">Submit</button>
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
                             <div class="col-lg-2"></div>
                            <div class="col-lg-8 mt-5" >
                            <div class=" auto form_test_2" >
                            <div class="container mt-4">
                            <h4>Automation Form</h4>
                            <form method="POST" action="javascript:void(0)" id="automation">
                            <?php echo e(csrf_field()); ?>  
                            <div class="row">
                            <input type="hidden" class="form-control"  name="user_id"  >
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Customer Name" >
                                </div>
                                <div class=" col-lg-6 col-md-6 col-12 form-group">
                                <input type="email" class="form-control" id="email" name="email"  placeholder="Email Address">
                            </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" name="pump" id="pump"   placeholder="Pump Name" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" name="address" id="address"  placeholder="Address">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" id="problem_since" name="problem_since"  placeholder="Problem Since">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <select class="custom-select my-1 mr-sm-2" name="nature" value="nature" id="nature" >
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
                                    <textarea class="form-control" name="description" value="description"  id="description" rows="3"></textarea>
                                </div>
                                
                                <button type="submit" id="submit" name="submit" class="btn btn-primary mx-3 w-100">Submit</button>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- Automation Form end -->
                    <!-- Fabrication Form start -->
                               
                            <div class="col-lg-8 ">
                            <div class="fab_2 form_test_2" >
                            <h4>Fabrication Form</h4>
                            <form method="POST" action="javascript:void(0)" id="main_form">
                            <?php echo e(csrf_field()); ?>  
                            <div class="row">
                            <input type="hidden" class="form-control"  name="user_id"  >
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" id="name" name="name"  placeholder="Customer Name">
                                </div>
                                <div class=" col-lg-6 col-md-6 col-12 form-group">
                                <input type="email" class="form-control" id="email" name="email"  placeholder="Email Address">
                            </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" id="pump" name="pump"  placeholder="Pump Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" id="address" name="address"  placeholder="Address">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile"  placeholder="Mobile No.">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <input type="text" class="form-control" id="problem_since" name="problem_since"  placeholder="Problem Since">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form-group">
                                    <select class="custom-select my-1 mr-sm-2" id="type" name="type" >
                                    <span class="text-danger error-text type_error"></span>
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
                                    <textarea class="form-control" id="description  " name="description"  rows="3"></textarea>
                                </div>
                                <button type="submit" id="submit"  name="submit" class="btn btn-primary mx-3 w-100">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
                <!-- Service Section end -->
        </section>

    <?php echo $__env->make('Biodiesel.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  






  




<?php /**PATH C:\Laravel\Biodiesel\resources\views/Biodiesel/biodiesel_test.blade.php ENDPATH**/ ?>