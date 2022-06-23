@include('Biodiesel.header')
    </head>
    <body>
       
                        @if (session('status'))
                                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                                @endif
                                <div class="col-lg-8 mt-5" >
                            <div class="update_form" >
                            <div class="container mt-4">
                            <h4>Automation Form</h4>
                            <form method="POST" action="{{ url('update/'.$auto->id) }}" id="automation">
                            {{ csrf_field() }}  
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $auto->name }}" placeholder="Name" >
                                </div>
                                <div class=" col-lg-6 form-group">
                                <input type="email" class="form-control" id="email" name="email" value="{{ $auto->email }}"  placeholder="Email Address">
                            </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="pump" id="pump" value="{{ $auto->pump }}" placeholder="Pump Name" >
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" name="address" value="{{ $auto->address }}" id="address"  placeholder="Address">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="text" class="form-control" id="problem_since" value="{{ $auto->problem_since }}" name="problem_since" placeholder="Problem Since">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select class="custom-select my-1 mr-sm-2" name="nature" id="nature" value="{{ $auto->nature }}">
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
                                    <textarea class="form-control" name="description" value="{{ $auto->description }}"  id="description" rows="3"></textarea>
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

    @include('Biodiesel.footer')

  






  




