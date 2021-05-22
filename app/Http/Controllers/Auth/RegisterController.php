<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserHasDetail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
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
            'role' => ['required'],
            'course_id' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['role'] === 'faculty'){
            return User::create([
                'name' => $data['name'],
                'course_id' => $data['course_id'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ])->assignRole($data['role']);
        }
        else{
            $user = User::create([
                'name' => $data['name'],
                'course_id' => $data['course_id'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ])->assignRole($data['role']);

            
            UserHasDetail::create([
                'roll_no' => $data['roll_no'],
                'finger_id' => $data['finger_id'],
                'user_id' => $user->id,
            ]);

            return $user;
        }
    }

    // Register
    public function facultyForm()
    {
        if(auth()->check()){            
            return redirect(route('dashboard'));
        }
        return view('faculty.register')->with(['courses' => Course::all()]);
    }

    public function studentForm()
    {
        if(auth()->check()){            
            return redirect(route('dashboard'));
        }
        return view('student.register')->with(['courses' => Course::all()]);
    }
}
