<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Doya;
use App\Http\Requests\CreateDoyaRequest;
use App\Http\Requests\UpdateDoyaRequest;
use Illuminate\Http\Request;



class DoyaController extends Controller {

	/**
	 * Display a listing of doya
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $doya = Doya::orderBy('id','desc')->get();

		return view('admin.doya.index', compact('doya'));
	}

	/**
	 * Show the form for creating a new doya
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{	    
	    
	    return view('admin.doya.create');
	}

	/**
	 * Store a newly created doya in storage.
	 *
     * @param CreateDoyaRequest|Request $request
	 */
	public function store(CreateDoyaRequest $request)
	{
	    
		Doya::create($request->all());

		return redirect()->route(config('quickadmin.route').'.doya.index');
	}

	/**
	 * Show the form for editing the specified doya.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$doya = Doya::find($id);	    
	    
		return view('admin.doya.edit', compact('doya'));
	}

	/**
	 * Update the specified doya in storage.
     * @param UpdateDoyaRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDoyaRequest $request)
	{
		$doya = Doya::findOrFail($id);        

		$doya->update($request->all());

		return redirect()->route(config('quickadmin.route').'.doya.index');
	}

	/**
	 * Remove the specified doya from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Doya::destroy($id);

		return redirect()->route(config('quickadmin.route').'.doya.index');
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
            Doya::destroy($toDelete);
        } else {
            Doya::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.doya.index');
    }

}
