<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Region;

class RegionController extends Controller
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
        $regions = Region::all(); //Get all regions

        return view('regions.index')->with('regions', $regions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regions.create');
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
            'title' => 'required|max:120',
            'description' => 'nullable',
            ],

            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $region = new Region(); //Get region specified by id

        $region->title = $request->input('title');
        $region->description = $request->input('description');

        $region->save();

        return redirect()->route('regions.index')
            ->with('success',
             'Region added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = Region::findOrFail($id);

        return view('regions.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region = Region::findOrFail($id);

        return view('regions.edit', compact('region'));
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
        $region = Region::findOrFail($id); //Get region specified by id

        $this->validate($request, [
            'title' => 'required|max:120',
            'description' => 'nullable',
            ],

            $messages = [
                'required' => 'The :attribute field is required.',
            ]
        );

        $region->title = $request->input('title');
        $region->description = $request->input('description');

        $region->save();

        return redirect()->route('regions.index')
            ->with('success',
             'Region updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::findOrFail($id); //Get region specified by id

        $region->delete();

        return redirect()->route('regions.index')
            ->with('success',
             'Region deleted successfully.');
    }
}
