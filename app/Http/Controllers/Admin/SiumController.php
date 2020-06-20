<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Sium;
use App\Http\Requests\CreateSiumRequest;
use App\Http\Requests\UpdateSiumRequest;
use Illuminate\Http\Request;



class SiumController extends Controller {

	/**
	 * Display a listing of sium
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $sium = Sium::orderBy('id','desc')->get();

		return view('admin.sium.index', compact('sium'));
	}

	/**
	 * Show the form for creating a new sium
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.sium.create');
	}

	/**
	 * Store a newly created sium in storage.
	 *
     * @param CreateSiumRequest|Request $request
	 */
	public function store(CreateSiumRequest $request)
	{
	    
		Sium::create($request->all());

		return redirect()->route(config('quickadmin.route').'.sium.index');
	}

	/**
	 * Show the form for editing the specified sium.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$sium = Sium::find($id);	    
	    
		return view('admin.sium.edit', compact('sium'));
	}

	/**
	 * Update the specified sium in storage.
     * @param UpdateSiumRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSiumRequest $request)
	{
		$sium = Sium::findOrFail($id);        

		$sium->update($request->all());

		return redirect()->route(config('quickadmin.route').'.sium.index');
	}

	/**
	 * Remove the specified sium from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Sium::destroy($id);

		return redirect()->route(config('quickadmin.route').'.sium.index');
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
            Sium::destroy($toDelete);
        } else {
            Sium::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.sium.index');
    }

}
