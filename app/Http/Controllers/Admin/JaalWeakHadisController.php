<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\JaalWeakHadis;
use App\Http\Requests\CreateJaalWeakHadisRequest;
use App\Http\Requests\UpdateJaalWeakHadisRequest;
use Illuminate\Http\Request;



class JaalWeakHadisController extends Controller {

	/**
	 * Display a listing of jaalweakhadis
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $jaalweakhadis = JaalWeakHadis::orderBy('id','desc')->get();

		return view('admin.jaalweakhadis.index', compact('jaalweakhadis'));
	}

	/**
	 * Show the form for creating a new jaalweakhadis
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.jaalweakhadis.create');
	}

	/**
	 * Store a newly created jaalweakhadis in storage.
	 *
     * @param CreateJaalWeakHadisRequest|Request $request
	 */
	public function store(CreateJaalWeakHadisRequest $request)
	{
	    
		JaalWeakHadis::create($request->all());

		return redirect()->route(config('quickadmin.route').'.jaalweakhadis.index');
	}

	/**
	 * Show the form for editing the specified jaalweakhadis.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$jaalweakhadis = JaalWeakHadis::find($id);	    
	    
		return view('admin.jaalweakhadis.edit', compact('jaalweakhadis'));
	}

	/**
	 * Update the specified jaalweakhadis in storage.
     * @param UpdateJaalWeakHadisRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateJaalWeakHadisRequest $request)
	{
		$jaalweakhadis = JaalWeakHadis::findOrFail($id);        

		$jaalweakhadis->update($request->all());

		return redirect()->route(config('quickadmin.route').'.jaalweakhadis.index');
	}

	/**
	 * Remove the specified jaalweakhadis from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		JaalWeakHadis::destroy($id);

		return redirect()->route(config('quickadmin.route').'.jaalweakhadis.index');
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
            JaalWeakHadis::destroy($toDelete);
        } else {
            JaalWeakHadis::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.jaalweakhadis.index');
    }

}
