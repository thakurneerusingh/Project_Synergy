
@extends('auth.layout')


@section('content')

@include('auth.nav')
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
                                    <th>Action</th>
                                    </tr>
                                </thead>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->customer_type }}</td>
                                    <td>{{ $item->volume }}</td>
                                    <td>{{ $item->Use_in }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td><a href="#"><i class="fa fa-trash text-success"></i></a></td>
                                </tr>
                             @endforeach
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
                                @foreach($fabrication as $user)
                                    <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->user_id }}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->type }}</td>
                                    <td>{{$user->capacity}}</td>
                                    <td>{{$user->pump }}</td>
                                    <td>{{$user->Choose}}</td>
                                    <td>{{$user->qty}}</td>
                                    <td>{{$user->description}}</td>
                                    <td><a href=""><i class="fa fa-trash text-success"></i></a></td>
                                    </tr>
                                @endforeach
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
                                @foreach ($automation as $res)
                                    <tr>
                                    <td>{{ $res->id }}</td>
                                    <td>{{ $res->user_id }}</td>
                                    <td>{{ $res->name }}</td>
                                    <td>{{ $res->email }}</td>
                                    <td>{{ $res->pump }}</td>
                                    <td>{{ $res->address }}</td>
                                    <td>{{ $res->problem_since }}</td>
                                    <td>{{ $res->nature }}</td>
                                    <td>{{ $res->description }}</td>
                                    <td><a href="#"><i class="fa fa-trash text-success"></i></a></td>
                                    </tr>
                                @endforeach
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
                                @foreach ($ServiceFabrication   as $item_2)
                                    <tr>
                                    <td>{{$item_2->id}}</td>
                                    <td>{{$item_2->user_id }}</td>
                                    <td>{{$item_2->name}}</td>
                                    <td>{{$item_2->email}}</td>
                                    <td>{{$item_2->pump}}</td>
                                    <td>{{$item_2->address}}</td>
                                    <td>{{$item_2->mobile}}</td>
                                    <td>{{$item_2->problem_since}}</td>
                                    <td>{{$item_2->type}}</td>
                                    <td>{{$item_2->description }}</td>
                                    <td><a href="#"><i class="fa fa-trash text-success"></i></a></td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
                <!-- Service Section end -->
        </section>
    @include('Biodiesel.footer')
@endsection
