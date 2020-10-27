<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Doctor;
use App\Region;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

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

    public function showRegistrationForm()
    {
        $regions = Region::all();

        return view('auth.register', compact('regions'));
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
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string', 'min:8'],
            //'address' => ['required', 'string'],
            //'username' => ['nullable', 'string'],
            'title' => ['required', 'string'],
            'gender' => ['required'],
            'birth_date' => ['required'],
            //'place_birth' => ['required', 'string'],
            //'nationality' => ['required'],
            'country' => ['required', 'string'],
            'region' => ['required', 'string'],
            'exercice_place' => ['required', 'string'],
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
        $request = app('request');

        if ($request->hasfile('profile_picture')) {
            // Get filename with the extension
            $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('profile_picture')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('profile_picture')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'avatar.jpg';
        }


        $user = User::create([
            'name' => $data['name'],
            'firstname' => $data['firstname'],
            //'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'phone_number' => $data['phone_number'],
            //'address' => $data['address'],
            'role_id' => 1,
            'profile_picture' => $fileNameToStore,
        ]);

        $user->assignRole('Doctor');

        $doctor = new Doctor();
        $doctor->name = $data['name'];
        $doctor->firstname = $data['firstname'];
        $doctor->email = $data['email'];
        $doctor->phone_number = $data['phone_number'];
        $doctor->title = $data['title'];
        //$doctor->address =$data['address'];
        $doctor->gender = $data['gender'];
        $doctor->birth_date = $data['birth_date'];
        //$doctor->place_birth = $data['place_birth'];
        //$doctor->nationality = $data['nationality'];
        $doctor->country =$data['country'];
        $region = Region::findOrFail($data['region']);
        $doctor->region = $region->title;
        $doctor->exercice_place =$data['exercice_place'];
        $doctor->profile_picture = $fileNameToStore;
        $doctor->status = 0;
        $doctor->user_id = $user->id;

        $doctor->save();

        return $user;
    }
}
