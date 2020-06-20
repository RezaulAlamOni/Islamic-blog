<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Quaran;
use App\Http\Requests\CreateQuaranRequest;
use App\Http\Requests\UpdateQuaranRequest;
use Illuminate\Http\Request;



class QuaranController extends Controller {

	/**
	 * Display a listing of quaran
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $quaran = Quaran::orderBy('id','desc')->get();

		return view('admin.quaran.index', compact('quaran'));
	}

	/**
	 * Show the form for creating a new quaran
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{	    
	    
	    return view('admin.quaran.create');
	}

	/**
	 * Store a newly created quaran in storage.
	 *
     * @param CreateQuaranRequest|Request $request
	 */
	public function store(CreateQuaranRequest $request)
	{
	    
		Quaran::create($request->all());

		return redirect()->route(config('quickadmin.route').'.quaran.index');
	}

	/**
	 * Show the form for editing the specified quaran.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$quaran = Quaran::find($id);	    
	    
		return view('admin.quaran.edit', compact('quaran'));
	}

	/**
	 * Update the specified quaran in storage.
     * @param UpdateQuaranRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateQuaranRequest $request)
	{
		$quaran = Quaran::findOrFail($id);        

		$quaran->update($request->all());

		return redirect()->route(config('quickadmin.route').'.quaran.index');
	}

	/**
	 * Remove the specified quaran from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Quaran::destroy($id);

		return redirect()->route(config('quickadmin.route').'.quaran.index');
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
            Quaran::destroy($toDelete);
        } else {
            Quaran::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.quaran.index');
    }

}
