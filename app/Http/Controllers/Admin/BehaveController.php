<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Behave;
use App\Http\Requests\CreateBehaveRequest;
use App\Http\Requests\UpdateBehaveRequest;
use Illuminate\Http\Request;



class BehaveController extends Controller {

	/**
	 * Display a listing of behave
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $behave = Behave::orderBy('id','desc')->get();

		return view('admin.behave.index', compact('behave'));
	}

	/**
	 * Show the form for creating a new behave
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.behave.create');
	}

	/**
	 * Store a newly created behave in storage.
	 *
     * @param CreateBehaveRequest|Request $request
	 */
	public function store(CreateBehaveRequest $request)
	{
	    
		Behave::create($request->all());

		return redirect()->route(config('quickadmin.route').'.behave.index');
	}

	/**
	 * Show the form for editing the specified behave.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$behave = Behave::find($id);
	    
	    
		return view('admin.behave.edit', compact('behave'));
	}

	/**
	 * Update the specified behave in storage.
     * @param UpdateBehaveRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBehaveRequest $request)
	{
		$behave = Behave::findOrFail($id);

        

		$behave->update($request->all());

		return redirect()->route(config('quickadmin.route').'.behave.index');
	}

	/**
	 * Remove the specified behave from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Behave::destroy($id);

		return redirect()->route(config('quickadmin.route').'.behave.index');
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
            Behave::destroy($toDelete);
        } else {
            Behave::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.behave.index');
    }

}
