<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Bibaho;
use App\Http\Requests\CreateBibahoRequest;
use App\Http\Requests\UpdateBibahoRequest;
use Illuminate\Http\Request;



class BibahoController extends Controller {

	/**
	 * Display a listing of bibaho
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $bibaho = Bibaho::orderBy('id','desc')->get();

		return view('admin.bibaho.index', compact('bibaho'));
	}

	/**
	 * Show the form for creating a new bibaho
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{	    
	    
	    return view('admin.bibaho.create');
	}

	/**
	 * Store a newly created bibaho in storage.
	 *
     * @param CreateBibahoRequest|Request $request
	 */
	public function store(CreateBibahoRequest $request)
	{
	    
		Bibaho::create($request->all());

		return redirect()->route(config('quickadmin.route').'.bibaho.index');
	}

	/**
	 * Show the form for editing the specified bibaho.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$bibaho = Bibaho::find($id);
	    
	    
		return view('admin.bibaho.edit', compact('bibaho'));
	}

	/**
	 * Update the specified bibaho in storage.
     * @param UpdateBibahoRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBibahoRequest $request)
	{
		$bibaho = Bibaho::findOrFail($id);        

		$bibaho->update($request->all());

		return redirect()->route(config('quickadmin.route').'.bibaho.index');
	}

	/**
	 * Remove the specified bibaho from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Bibaho::destroy($id);

		return redirect()->route(config('quickadmin.route').'.bibaho.index');
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
            Bibaho::destroy($toDelete);
        } else {
            Bibaho::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.bibaho.index');
    }

}
