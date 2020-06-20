<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Jihad;
use App\Http\Requests\CreateJihadRequest;
use App\Http\Requests\UpdateJihadRequest;
use Illuminate\Http\Request;



class JihadController extends Controller {

	/**
	 * Display a listing of jihad
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $jihad = Jihad::orderBy('id','desc')->get();

		return view('admin.jihad.index', compact('jihad'));
	}

	/**
	 * Show the form for creating a new jihad
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.jihad.create');
	}

	/**
	 * Store a newly created jihad in storage.
	 *
     * @param CreateJihadRequest|Request $request
	 */
	public function store(CreateJihadRequest $request)
	{
	    
		Jihad::create($request->all());

		return redirect()->route(config('quickadmin.route').'.jihad.index');
	}

	/**
	 * Show the form for editing the specified jihad.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$jihad = Jihad::find($id);
	    
	    
		return view('admin.jihad.edit', compact('jihad'));
	}

	/**
	 * Update the specified jihad in storage.
     * @param UpdateJihadRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateJihadRequest $request)
	{
		$jihad = Jihad::findOrFail($id);

        

		$jihad->update($request->all());

		return redirect()->route(config('quickadmin.route').'.jihad.index');
	}

	/**
	 * Remove the specified jihad from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Jihad::destroy($id);

		return redirect()->route(config('quickadmin.route').'.jihad.index');
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
            Jihad::destroy($toDelete);
        } else {
            Jihad::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.jihad.index');
    }

}
