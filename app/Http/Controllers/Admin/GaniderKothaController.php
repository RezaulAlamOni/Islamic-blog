<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\GaniderKotha;
use App\Http\Requests\CreateGaniderKothaRequest;
use App\Http\Requests\UpdateGaniderKothaRequest;
use Illuminate\Http\Request;



class GaniderKothaController extends Controller {

	/**
	 * Display a listing of ganiderkotha
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ganiderkotha = GaniderKotha::orderBy('id','desc')->get();

		return view('admin.ganiderkotha.index', compact('ganiderkotha'));
	}

	/**
	 * Show the form for creating a new ganiderkotha
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.ganiderkotha.create');
	}

	/**
	 * Store a newly created ganiderkotha in storage.
	 *
     * @param CreateGaniderKothaRequest|Request $request
	 */
	public function store(CreateGaniderKothaRequest $request)
	{
	    
		GaniderKotha::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ganiderkotha.index');
	}

	/**
	 * Show the form for editing the specified ganiderkotha.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ganiderkotha = GaniderKotha::find($id);
	    
	    
		return view('admin.ganiderkotha.edit', compact('ganiderkotha'));
	}

	/**
	 * Update the specified ganiderkotha in storage.
     * @param UpdateGaniderKothaRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateGaniderKothaRequest $request)
	{
		$ganiderkotha = GaniderKotha::findOrFail($id);

        

		$ganiderkotha->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ganiderkotha.index');
	}

	/**
	 * Remove the specified ganiderkotha from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		GaniderKotha::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ganiderkotha.index');
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
            GaniderKotha::destroy($toDelete);
        } else {
            GaniderKotha::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ganiderkotha.index');
    }

}
