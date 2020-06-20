<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Hazz;
use App\Http\Requests\CreateHazzRequest;
use App\Http\Requests\UpdateHazzRequest;
use Illuminate\Http\Request;



class HazzController extends Controller {

	/**
	 * Display a listing of hazz
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $hazz = Hazz::orderBy('id','desc')->get();

		return view('admin.hazz.index', compact('hazz'));
	}

	/**
	 * Show the form for creating a new hazz
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{	    
	    
	    return view('admin.hazz.create');
	}

	/**
	 * Store a newly created hazz in storage.
	 *
     * @param CreateHazzRequest|Request $request
	 */
	public function store(CreateHazzRequest $request)
	{
	    
		Hazz::create($request->all());

		return redirect()->route(config('quickadmin.route').'.hazz.index');
	}

	/**
	 * Show the form for editing the specified hazz.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$hazz = Hazz::find($id);    
	    
		return view('admin.hazz.edit', compact('hazz'));
	}

	/**
	 * Update the specified hazz in storage.
     * @param UpdateHazzRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateHazzRequest $request)
	{
		$hazz = Hazz::findOrFail($id);        

		$hazz->update($request->all());

		return redirect()->route(config('quickadmin.route').'.hazz.index');
	}

	/**
	 * Remove the specified hazz from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Hazz::destroy($id);

		return redirect()->route(config('quickadmin.route').'.hazz.index');
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
            Hazz::destroy($toDelete);
        } else {
            Hazz::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.hazz.index');
    }

}
