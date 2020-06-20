<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\FozilotAmol;
use App\Http\Requests\CreateFozilotAmolRequest;
use App\Http\Requests\UpdateFozilotAmolRequest;
use Illuminate\Http\Request;



class FozilotAmolController extends Controller {

	/**
	 * Display a listing of fozilotamol
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $fozilotamol = FozilotAmol::orderBy('id','desc')->get();

		return view('admin.fozilotamol.index', compact('fozilotamol'));
	}

	/**
	 * Show the form for creating a new fozilotamol
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.fozilotamol.create');
	}

	/**
	 * Store a newly created fozilotamol in storage.
	 *
     * @param CreateFozilotAmolRequest|Request $request
	 */
	public function store(CreateFozilotAmolRequest $request)
	{
	    
		FozilotAmol::create($request->all());

		return redirect()->route(config('quickadmin.route').'.fozilotamol.index');
	}

	/**
	 * Show the form for editing the specified fozilotamol.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$fozilotamol = FozilotAmol::find($id);	    
	    
		return view('admin.fozilotamol.edit', compact('fozilotamol'));
	}

	/**
	 * Update the specified fozilotamol in storage.
     * @param UpdateFozilotAmolRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFozilotAmolRequest $request)
	{
		$fozilotamol = FozilotAmol::findOrFail($id);        

		$fozilotamol->update($request->all());

		return redirect()->route(config('quickadmin.route').'.fozilotamol.index');
	}

	/**
	 * Remove the specified fozilotamol from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		FozilotAmol::destroy($id);

		return redirect()->route(config('quickadmin.route').'.fozilotamol.index');
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
            FozilotAmol::destroy($toDelete);
        } else {
            FozilotAmol::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.fozilotamol.index');
    }

}
