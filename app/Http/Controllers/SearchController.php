<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Doctor;
use App\Country;
use App\Speciality;

class SearchController extends Controller
{
    public function getDirectory()
    {
        $countries = Country::all();

        return view('pages.repertoire', compact('countries'));
    }

    public function view($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('pages.view', compact('doctor'));
    }

    public function postSearch(Request $request)
    {
    	$nb = 0;

    	$countries = Country::all();
    	//$specialities = Speciality::all();
        
        $params = $request->except('_token');

        //$doctors = Doctor::filter($params)->->get();

        //$doctors = Doctor::filter($params)->orderByDesc('id')->paginate(10,['*'],'page');

        $doctors = Doctor::filter($params)->orderBy('name')->get();

        $nb = count($doctors);

        if (count($doctors) > 0){

        	return view('pages.search', compact('doctors', 'nb' ,'countries'));

		}

        return view('pages.search', compact('nb' ,'countries'))->with('error', 'No Doctor found for your query. Try to search again!');
    }

    /*public function postSearch()
    {

    	$q = Input::get('q');

	    if($q != "")
	    {
	    	$doctor = Doctor::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere('email', 'LIKE', '%'.$q.'%')->paginate (5)->setPath ('');
	    	$pagination = $doctor->appends ( array (
	                'q' => Input::get ('q') 
	        ) );


		    if (count ( $doctor ) > 0){

		        return view ('pages.search')->withDetails ($doctor)->withQuery($q);
		    }
		}
	    
	        return view ('pages.search')->withMessage ( 'No Details found. Try to search again !' );

        //return view('pages.search');
    }*/
}
