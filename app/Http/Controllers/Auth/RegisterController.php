<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name0' => ['required', 'string'],
            'email0' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address'=> ['required', 'string'],
            'phone'=>['required', 'numeric'],
            'git'=> ['required', 'string'],
            'line'=> ['required', 'string'],
            'dob'=>['required'],
            'name1'=> ['required', 'string'],
            'email1'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address1'=> ['required', 'string'],
            'phone1'=>['required', 'numeric'],
            'git1'=> ['required', 'string'],
            'line1'=> ['required', 'string'],
            'dob1'=>['required'], 
            'name2'=> ['required', 'string'],
            'email2'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address2'=> ['required', 'string'],
            'phone2'=>['required', 'numeric'],
            'git2'=> ['required', 'string'],
            'line2'=> ['required', 'string'],
            'dob2'=>['required'],
            
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name0' => $data['name0'],
            'email0' => $data['email0'],
            'address'=>$data['address'],
            'phone'=>$data['phone'],
            'git'=>$data['git'],
            'line'=>$data['line'],
            'dob'=>$data['dob'],
            'name1' => $data['name1'],
            'email1' => $data['email1'],
            'address1'=>$data['address1'],
            'phone1'=>$data['phone1'],
            'git1'=>$data['git1'],
            'line1'=>$data['line1'],
            'dob1'=>$data['dob1'],
            'name2' => $data['name2'],
            'email2' => $data['email2'],
            'address2'=>$data['address2'],
            'phone2'=>$data['phone2'],
            'git2'=>$data['git2'],
            'line2'=>$data['line2'],
            'dob2'=>$data['dob2'],
            
        ]);
    }

}