<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Akida;
use App\Http\Requests\CreateAkidaRequest;
use App\Http\Requests\UpdateAkidaRequest;
use Illuminate\Http\Request;



class AkidaController extends Controller {

	/**
	 * Display a listing of akida
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $akida = Akida::orderBy('id','desc')->get();

		return view('admin.akida.index', compact('akida'));
	}

	/**
	 * Show the form for creating a new akida
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.akida.create');
	}

	/**
	 * Store a newly created akida in storage.
	 *
     * @param CreateAkidaRequest|Request $request
	 */
	public function store(CreateAkidaRequest $request)
	{
	    
		Akida::create($request->all());

		dd($request->all());
		return redirect()->route(config('quickadmin.route').'.akida.index');
	}

	/**
	 * Show the form for editing the specified akida.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$akida = Akida::find($id);
	    
	    
		return view('admin.akida.edit', compact('akida'));
	}

	/**
	 * Update the specified akida in storage.
     * @param UpdateAkidaRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAkidaRequest $request)
	{
		$akida = Akida::findOrFail($id);

        

		$akida->update($request->all());

		return redirect()->route(config('quickadmin.route').'.akida.index');
	}

	/**
	 * Remove the specified akida from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Akida::destroy($id);

		return redirect()->route(config('quickadmin.route').'.akida.index');
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
            Akida::destroy($toDelete);
        } else {
            Akida::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.akida.index');
    }

}
