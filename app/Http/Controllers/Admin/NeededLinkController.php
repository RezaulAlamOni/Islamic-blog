<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\NeededLink;
use App\Http\Requests\CreateNeededLinkRequest;
use App\Http\Requests\UpdateNeededLinkRequest;
use Illuminate\Http\Request;



class NeededLinkController extends Controller {

	/**
	 * Display a listing of neededlink
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $neededlink = NeededLink::orderBy('id','desc')->get();

		return view('admin.neededlink.index', compact('neededlink'));
	}

	/**
	 * Show the form for creating a new neededlink
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.neededlink.create');
	}

	/**
	 * Store a newly created neededlink in storage.
	 *
     * @param CreateNeededLinkRequest|Request $request
	 */
	public function store(CreateNeededLinkRequest $request)
	{
	    
		NeededLink::create($request->all());

		return redirect()->route(config('quickadmin.route').'.neededlink.index');
	}

	/**
	 * Show the form for editing the specified neededlink.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$neededlink = NeededLink::find($id);	    
	    
		return view('admin.neededlink.edit', compact('neededlink'));
	}

	/**
	 * Update the specified neededlink in storage.
     * @param UpdateNeededLinkRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateNeededLinkRequest $request)
	{
		$neededlink = NeededLink::findOrFail($id);        

		$neededlink->update($request->all());

		return redirect()->route(config('quickadmin.route').'.neededlink.index');
	}

	/**
	 * Remove the specified neededlink from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		NeededLink::destroy($id);

		return redirect()->route(config('quickadmin.route').'.neededlink.index');
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
            NeededLink::destroy($toDelete);
        } else {
            NeededLink::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.neededlink.index');
    }

}
