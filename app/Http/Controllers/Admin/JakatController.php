<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Jakat;
use App\Http\Requests\CreateJakatRequest;
use App\Http\Requests\UpdateJakatRequest;
use Illuminate\Http\Request;



class JakatController extends Controller {

	/**
	 * Display a listing of jakat
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $jakat = Jakat::orderBy('id','desc')->get();

		return view('admin.jakat.index', compact('jakat'));
	}

	/**
	 * Show the form for creating a new jakat
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.jakat.create');
	}

	/**
	 * Store a newly created jakat in storage.
	 *
     * @param CreateJakatRequest|Request $request
	 */
	public function store(CreateJakatRequest $request)
	{
	    
		Jakat::create($request->all());

		return redirect()->route(config('quickadmin.route').'.jakat.index');
	}

	/**
	 * Show the form for editing the specified jakat.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$jakat = Jakat::find($id);	    
	    
		return view('admin.jakat.edit', compact('jakat'));
	}

	/**
	 * Update the specified jakat in storage.
     * @param UpdateJakatRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateJakatRequest $request)
	{
		$jakat = Jakat::findOrFail($id);        

		$jakat->update($request->all());

		return redirect()->route(config('quickadmin.route').'.jakat.index');
	}

	/**
	 * Remove the specified jakat from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Jakat::destroy($id);

		return redirect()->route(config('quickadmin.route').'.jakat.index');
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
            Jakat::destroy($toDelete);
        } else {
            Jakat::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.jakat.index');
    }

}
