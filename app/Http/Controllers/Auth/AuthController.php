<?php

namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserFormRequest;
use App\Models\Automation;
use App\Models\Biodiesel;
use App\Models\Fabrication;
use App\Models\ServiceFabrication;
use Session;
use App\Models\User;
use Hash;
  
class AuthController extends Controller
{
   
    public function index()
    {
        return view('auth.login');
    }  
      
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6', 
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    
    
    public function dashboard()

    {
        $data = Biodiesel::all();
        $automation = Automation::all();
        $fabrication = Fabrication::all();
        $ServiceFabrication = ServiceFabrication::all();
        if(Auth::check()){
            return view('auth.dashboard',['automation'=>$automation,'data'=>$data,'fabrication'=>$fabrication,'ServiceFabrication'=>$ServiceFabrication]);
        }
        else
        {  
            session()->flash('error', 'Invalid Credentials'); 
            return redirect()->route('login');
        }  
       
    }
    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //     'department' => $data['department'];
    //   ]);
    // }
    
    
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    
    
}
}