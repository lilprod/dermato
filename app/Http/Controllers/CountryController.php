<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Region;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']); //supAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all(); 

        return view('countries.index')->with('countries', $countries);
    }

    public function getCountries(Request $request)
    {
        $contries = Country::where('region_id', $request->id)
                            ->get();
        return response()->json($contries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all(); //Get all regions

        return view('countries.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'nullable|max:5',
            'title' => 'required|max:120',
            'region_id' => 'required',
            ],

            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $country = new Country();

        $country->code = $request->input('code');
        $country->title = $request->input('title');
        $country->region_id = $request->input('region_id');

        $country->save();

        return redirect()->route('countries.index')
            ->with('success',
             'Country added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id); //Get country specified by id

        return view('countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id); //Get country specified by id

        $regions = Region::all(); //Get all regions

        return view('countries.edit', compact('country', 'regions'));
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
        $country = Country::findOrFail($id); //Get country specified by id

        $this->validate($request, [
            'code' => 'nullable|max:5',
            'title' => 'required|max:120',
            'region_id' => 'required',
            ],

            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $country->code = $request->input('code');
        $country->title = $request->input('title');
        $country->region_id = $request->input('region_id');

        $country->save();

        return redirect()->route('countries.index')
            ->with('success',
             'Country updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id); //Get country specified by id
    }
}
