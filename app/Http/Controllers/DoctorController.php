<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use App\Department;
use App\Historique;
use Illuminate\Support\Facades\Storage;
use DB;
use Excel;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all doctors and pass it to the view
        $doctors = Doctor::all();
        //$doctors = Doctor::orderby('id', 'asc')->paginate(8);

        return view('doctors.index')->with('doctors', $doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$departments = Department::all();
        //return view('doctors.create',compact('departments'));

        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate name, email and password fields
        $this->validate($request, [
            'name' => 'required|max:120',
            'firstname' => 'required|max:120',
            'email' => 'required|email|unique:users',
            //'password' => 'required|min:6|confirmed',
            'phone_number' => 'required',
            'birth_date' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'title' => 'required',
            'exercice_place' => 'required',
            'region' => 'required',
            'profile_picture' => 'image|nullable',
        ]);

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

        $doctor = new Doctor();
        $doctor->name = $request->input('name');
        $doctor->firstname = $request->input('firstname');
        $doctor->email = $request->input('email');
        $doctor->gender = $request->input('gender');
        $doctor->profile_picture = $fileNameToStore;
        $doctor->phone_number = $request->input('phone_number');
        $doctor->country = $request->input('country');
        $doctor->region = $request->input('region');
        $doctor->birth_date = $request->input('birth_date');
        $doctor->title = $request->input('title');
        $doctor->exercice_place = $request->input('exercice_place');
        //$doctor->status = 1;
        $doctor->status = $request->input('status');

        $user = new User();
        $user->name = $request->input('name');
        $user->firstname = $request->input('firstname');
        $user->email = $request->input('email');
        //$user->password = $request->input('password');
        $user->password = 123456;
        $user->profile_picture = $fileNameToStore;
        $user->phone_number = $request->input('phone_number');
        $user->gender = $request->input('gender');
        $user->birth_date = $request->input('birth_date');
        $user->role_id = 1;

        $doctor->save();
        $user->save();
        $user->assignRole('Doctor');
        
        /*$historique = new Historique();
        $historique->action = 'Create';
        $historique->table = 'User/Doctor';
        $historique->user_id = auth()->user()->id;*/

        $doctor = Doctor::findOrFail($doctor->id);
        $doctor->user_id = $user->id;

        $doctor->save();
        //$historique->save();

        //Redirect to the users.index view and display message
        return redirect()->route('doctors.index')
            ->with('success',
             'New Doctor added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::findOrFail($id); //Get doctor with specified id

        return view('doctors.show', compact('doctor')); //pass doctor data to view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id); //Get doctor with specified id

        //$departments = Department::all();

        return view('doctors.edit', compact('doctor')); //pass doctor data to view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id); //Get role specified by id

        //Validate name, email and password fields
        $this->validate($request, [
            'name' => 'required|max:120',
            'firstname' => 'required|max:120',
            'email' => 'required|email|unique:doctors,email,'.$id,
            //'password' => 'required|min:6|confirmed',
            'birth_date' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'title' => 'required',
            'exercice_place' => 'required',
            'region' => 'required',
            'profile_picture' => 'image|nullable',
        ]);

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

        $doctor->name = $request->input('name');
        $doctor->firstname = $request->input('firstname');
        $doctor->email = $request->input('email');
        $doctor->gender = $request->input('gender');
        if ($request->hasfile('profile_picture')) {
            $doctor->profile_picture = $fileNameToStore;
        }
        $doctor->phone_number = $request->input('phone_number');
        $doctor->country = $request->input('country');

        $doctor->birth_date = $request->input('birth_date');
        $doctor->exercice_place = $request->input('exercice_place');
        $doctor->title = $request->input('title');
        $doctor->region = $request->input('region');
        $doctor->status = $request->input('status');

        $user = User::findOrFail($doctor->user_id);

        $user->name = $request->input('name');
        $user->firstname = $request->input('firstname');
        $user->email = $request->input('email');
        //$user->password = $request->input('password');
        $user->phone_number = $request->input('phone_number');
        $user->gender = $request->input('gender');
        $user->birth_date = $request->input('birth_date');
        $user->role_id = 1;
        if ($request->hasfile('profile_picture')) {
            $user->profile_picture = $fileNameToStore;
        }

        $doctor->save();
        $user->save();
        
        /*$historique = new Historique();
        $historique->action = 'Update';
        $historique->table = 'User/Doctor';
        $historique->user_id = auth()->user()->id;
        $historique->save();*/

        return redirect()->route('doctors.index')
            ->with('success',
             'Doctor '.$doctor->name.' updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $user = User::findOrFail($doctor->user_id);

        if ($user->profile_picture != 'avatar.jpg') {
            Storage::delete('public/cover_images/'.$user->profile_picture);
        }

        $historique = new Historique();
        $historique->action = 'Delete';
        $historique->table = 'User/Doctor';
        $historique->user_id = auth()->user()->id;

        $user->delete();
        $doctor->delete();
        $historique->save();

        return redirect()->route('doctors.index')
            ->with('success',
             'Doctor deleted successfully.');
    }

    public function import(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

     $data = Excel::load($path)->get();

     if($data->count() > 0)
     {
      foreach($data->toArray() as $key => $value)
      {
       foreach($value as $row)
       {
        $insert_data[] = array(
         'CustomerName'  => $row['customer_name'],
         'Gender'   => $row['gender'],
         'Address'   => $row['address'],
         'City'    => $row['city'],
         'PostalCode'  => $row['postal_code'],
         'Country'   => $row['country']
        );
       }
      }

      if(!empty($insert_data))
      {
       DB::table('doctors')->insert($insert_data);

       DB::table('users')->insert($insert_data);
      }
      }
      //return back()->with('success', 'Excel Data Imported successfully.');

      return redirect()->route('doctors.index')->with('success', 'Excel Data Imported successfully.');
     }

     public function getImport(){

        return view('doctors.import_excel');
     }
     
}
