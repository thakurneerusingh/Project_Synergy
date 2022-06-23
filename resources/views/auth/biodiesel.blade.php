@extends('auth.layout')
@section('content')
@include('auth.nav')
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                        <div class="col-lg-3 mt-5">
                            </div>
                            <div class="col-lg-6 mt-5">
                            <div class=" form_test_add " >
                            <h4>Add User</h4>
                            <form method="POST" action="insert_adduser">
                            {{ csrf_field() }}  
                            
                                <input type="hidden" class="form-control mb-4"  name="user_id"  >
                           
                            <div class="form-group">
                                <input type="text" class="form-control mb-4" id="name" name="name"  placeholder="UserName">
                            </div>
                            <div class="  form-group">
                                <input type="email" class="form-control mb-4" id="email" name="email"  placeholder="Email Address">
                            </div>
                            <div class=" form-group">
                                <input type="text" class="form-control mb-4" name="mobile" id="mobile" placeholder="Mobile No.">
                            </div>
                            <div class=" form-group">
                                <input type="password" class="form-control mb-4" name="password" id="password" placeholder="Password ">
                            </div>
                            <div class="form-group">
                                <select class="custom-select my-1 mr-sm-2" id="department"  name="department"  placeholder="Customer Type">
                                <option selected="selected">Department</option>
                                <option>Biodiesel</option>
                                <option>Febrication</option>
                                <option>Automation</option>
                            </select>
                            </div>
                            <div class=" form-group text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary w-100 btn_add">Submit</button>
                            </div>
                                 </div>
                            </form>
                                </div>
                                </div>
                        </div>
                    </div>  
                    <div class="col-lg-3 mt-5">
                </div>
            </div>
            </div>
        </section>

    @include('Biodiesel.footer')
    @endsection
  






  




