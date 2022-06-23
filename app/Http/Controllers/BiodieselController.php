<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automation;
use App\Models\Biodiesel;
use App\Models\Fabrication;
use App\Models\ServiceFabrication;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Mail;
use Validator;
use DB;
use Hash;
use App\Role;
class BiodieselController extends Controller
{
    public function index_Bio(){
        return view('Biodiesel.biodiesel_test');
    }
    public function insertdata(Request $request){
        $id = IdGenerator::generate(['table' => 'automations', 'length' => 10,'field'=>'user_id', 'prefix' => date('Ymd')]);
        $data = new Automation;
        $data->user_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->pump = $request->pump;
        $data->address = $request->address;
        $data->problem_since = $request->problem_since;
        $data->nature = $request->nature;
        $data->description = $request->description;
        $data->save();
        Mail::send('mail.a_email', array( 

            'name' => $data['name'], 
    
            'email' => $data['email'], 
    
            'pump' => $data['pump'], 
    
            'address' => $data['address'], 
    
            'problem_since' => $data['problem_since'], 

            'nature' => $data['nature'], 

            'description' => $data['description'], 
    
        ), function($message) use ($request){ 
    
            $message->from($request->email); 
    
            $message->to('thakurneeru316@gmail.com', 'Admin')->subject($request->get('subject')); 
    
        }); 
        return back()->with('success', 'Thank you for contact us!');
    
    }   
     
    // public function edit($id)
    // {
    //     $auto = Automation::find($id);
    //     return view('Biodiesel.update', compact('auto'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $auto = Automation::find($id);
    //     $auto->name = $request->input('name');
    //     $auto->email = $request->input('email');
    //     $auto->pump = $request->input('pump');
    //     $auto->address = $request->input('address');
    //     $auto->problem_since = $request->input('problem_since');
    //     $auto->nature = $request->input('nature');
    //     $auto->description = $request->input('description');
    //     $auto->update();
    //     return response()->json(['success' => true]);
    // }

public function insertdatabio(Request $request){
     $id = IdGenerator::generate(['table' => 'biodiesels', 'length' => 10,'field'=>'user_id', 'prefix' => date('Ymd')]);
    $data = new Biodiesel;
    $data->user_id = $id;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->address = $request->address;
    $data->mobile = $request->mobile;
    $data->customer_type = $request->customer_type;
    $data->volume = $request->volume;
    $data->Use_in = $request->Use_in;
    $data->description = $request->description;
    $data->save();
    Mail::send('mail.email', array( 

        'name' => $data['name'], 

        'email' => $data['email'], 

        'address' => $data['address'], 

        'mobile' => $data['mobile'], 

        'customer_type' => $data['customer_type'], 

        'volume' => $data['volume'], 

        'Use_in' => $data['Use_in'],

        'description' => $data['description'], 

    ), function($message) use ($request){ 

        $message->from($request->email); 

        $message->to('thakurneeru316@gmail.com', 'Admin')->subject($request->get('subject')); 

    }); 
    return response()->json(['success' => true]);
}   

    // public function list()
    //     {
    //         $data = Biodiesel::all();
    //         $automation = Automation::all();
    //         $fabrication = Fabrication::all();
    //         $ServiceFabrication = ServiceFabrication::all();
    //         return view('auth.dashboard', ['automation'=>$automation,'data'=>$data,'fabrication'=>$fabrication,'ServiceFabrication'=>$ServiceFabrication]);
    //     }
public function insertdatafab(Request $request){
    $id = IdGenerator::generate(['table' => 'fabrications', 'length' => 10,'field'=>'user_id', 'prefix' => date('Ymd')]);
    $data = new Fabrication;
    $data->user_id = $id;
    $data->name = $request->name;
    $data->mobile = $request->mobile;
    $data->email = $request->email;
    $data->type = $request->type;
    $data->capacity = $request->capacity;
    $data->pump = $request->pump;
    $data->Choose = $request->Choose;
    $data->qty = $request->qty;
    $data->description = $request->description;
    $data->save();
    Mail::send('mail.f_email',array(

        'name' => $data['name'],

        'mobile' => $data['mobile'], 

        'email' => $data['email'], 

        'type' => $data['type'], 

        'capacity' => $data['capacity'], 

        'pump' => $data['pump'], 

        'Choose' => $data['Choose'], 

        'qty' => $data['qty'],

        'description' => $data['description']

    ), function($message) use ($request){ 

        $message->from($request->email); 

        $message->to('thakurneeru316@gmail.com', 'Admin')->subject($request->get('subject')); 
});
    return response()->json(['success' => true]);
}
 public function insert_data(Request $request){
    $id = IdGenerator::generate(['table' => 'service_fabrications', 'length' => 10,'field'=>'user_id', 'prefix' => date('Ymd')]);
     $data = new ServiceFabrication ;
     $data->user_id = $id;
     $data->name= $request->name;
     $data->email = $request->email;
     $data->pump= $request->pump;
     $data->address= $request->address;
     $data->mobile= $request->mobile;
     $data->problem_since= $request->problem_since;
     $data->type= $request->type;
     $data->description= $request->description;
     $data->save();
     
     Mail::send('mail.gmail',array(

        'name' => $data['name'],

        'email' => $data['email'], 

        'pump' => $data['pump'], 

        'address' => $data['address'], 

        'mobile' => $data['mobile'], 

        'problem_since' => $data['problem_since'], 

        'type' => $data['type'],

        'description' => $data['description']

    ), function($message) use ($request){ 
       
        $message->from($request->email); 

       $message->to('thakurneeru316@gmail.com', 'Admin')->subject($request->get('subject')); 
        
});
     return response()->json(['success' => true]);
     
    }

    public function add_biodiesel(){
        return view('auth.biodiesel');
    }
   public function insert_adduser(Request $request){
    $user = new User;
    $user->name=$request->name;
    $user->email = $request->email;
    $user->mobile = $request->mobile;
    $user->password =Hash::make($request->password);
    $user->department = $request->department;
    $user->save();
    if($request->department == 'Biodiesel'){
        $emails  = "thakurneeru316@gmail.com";
    }
    elseif($request->department == 'Febrication'){
        $emails  = "saurabhdscience@gmail.com";
    }
    elseif ($request->department == 'Automation') {
        $emails  = "thakurneeru316@gmail.com";
    }
    Mail::send('mail.user_auto', array(
        'name' => $user['name'],
        'email' => $user['email'],
        'mobile' => $user['mobile'],
        'password' => $user['password'],
        'department' => $user['department']
    ), function($message) use ($request,$emails){
        $message->from($request->email);
        $message->to( $emails , 'Admin')->subject($request->get('subject'));
    });
     return redirect()->back()->with('success');
    }
}
