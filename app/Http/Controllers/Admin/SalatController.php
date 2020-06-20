<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Salat;
use App\Http\Requests\CreateSalatRequest;
use App\Http\Requests\UpdateSalatRequest;
use Illuminate\Http\Request;



class SalatController extends Controller {

	/**
	 * Display a listing of salat
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $salat = Salat::orderBy('id','desc')->get();

		return view('admin.salat.index', compact('salat'));
	}

	/**
	 * Show the form for creating a new salat
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.salat.create');
	}

	/**
	 * Store a newly created salat in storage.
	 *
     * @param CreateSalatRequest|Request $request
	 */
	public function store(CreateSalatRequest $request)
	{
	    
		Salat::create($request->all());
		return redirect()->route(config('quickadmin.route').'.salat.index');
	}

	/**
	 * Show the form for editing the specified salat.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$salat = Salat::find($id);	    
	    
		return view('admin.salat.edit', compact('salat'));
	}

	/**
	 * Update the specified salat in storage.
     * @param UpdateSalatRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSalatRequest $request)
	{
		$salat = Salat::findOrFail($id);        

		$salat->update($request->all());

		return redirect()->route(config('quickadmin.route').'.salat.index');
	}

	/**
	 * Remove the specified salat from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Salat::destroy($id);

		return redirect()->route(config('quickadmin.route').'.salat.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Salat::destroy($toDelete);
        } else {
            Salat::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.salat.index');
    }

}
