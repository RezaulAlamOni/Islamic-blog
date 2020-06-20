<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Bibidh;
use App\Http\Requests\CreateBibidhRequest;
use App\Http\Requests\UpdateBibidhRequest;
use Illuminate\Http\Request;



class BibidhController extends Controller {

	/**
	 * Display a listing of bibidh
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $bibidh = Bibidh::orderBy('id','desc')->get();

		return view('admin.bibidh.index', compact('bibidh'));
	}

	/**
	 * Show the form for creating a new bibidh
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.bibidh.create');
	}

	/**
	 * Store a newly created bibidh in storage.
	 *
     * @param CreateBibidhRequest|Request $request
	 */
	public function store(CreateBibidhRequest $request)
	{
	    
		Bibidh::create($request->all());

		return redirect()->route(config('quickadmin.route').'.bibidh.index');
	}

	/**
	 * Show the form for editing the specified bibidh.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$bibidh = Bibidh::find($id);	    
	    
		return view('admin.bibidh.edit', compact('bibidh'));
	}

	/**
	 * Update the specified bibidh in storage.
     * @param UpdateBibidhRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBibidhRequest $request)
	{
		$bibidh = Bibidh::findOrFail($id);        

		$bibidh->update($request->all());

		return redirect()->route(config('quickadmin.route').'.bibidh.index');
	}

	/**
	 * Remove the specified bibidh from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Bibidh::destroy($id);

		return redirect()->route(config('quickadmin.route').'.bibidh.index');
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
            Bibidh::destroy($toDelete);
        } else {
            Bibidh::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.bibidh.index');
    }

}
