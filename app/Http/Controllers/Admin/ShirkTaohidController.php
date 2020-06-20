<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ShirkTaohid;
use App\Http\Requests\CreateShirkTaohidRequest;
use App\Http\Requests\UpdateShirkTaohidRequest;
use Illuminate\Http\Request;



class ShirkTaohidController extends Controller {

	/**
	 * Display a listing of shirktaohid
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $shirktaohid = ShirkTaohid::orderBy('id','desc')->get();

		return view('admin.shirktaohid.index', compact('shirktaohid'));
	}

	/**
	 * Show the form for creating a new shirktaohid
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{	    
	    
	    return view('admin.shirktaohid.create');
	}

	/**
	 * Store a newly created shirktaohid in storage.
	 *
     * @param CreateShirkTaohidRequest|Request $request
	 */
	public function store(CreateShirkTaohidRequest $request)
	{
	    
		ShirkTaohid::create($request->all());

		return redirect()->route(config('quickadmin.route').'.shirktaohid.index');
	}

	/**
	 * Show the form for editing the specified shirktaohid.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$shirktaohid = ShirkTaohid::find($id);    
	    
		return view('admin.shirktaohid.edit', compact('shirktaohid'));
	}

	/**
	 * Update the specified shirktaohid in storage.
     * @param UpdateShirkTaohidRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateShirkTaohidRequest $request)
	{
		$shirktaohid = ShirkTaohid::findOrFail($id);        

		$shirktaohid->update($request->all());

		return redirect()->route(config('quickadmin.route').'.shirktaohid.index');
	}

	/**
	 * Remove the specified shirktaohid from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ShirkTaohid::destroy($id);

		return redirect()->route(config('quickadmin.route').'.shirktaohid.index');
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
            ShirkTaohid::destroy($toDelete);
        } else {
            ShirkTaohid::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.shirktaohid.index');
    }

}
