<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\KichuHadis;
use App\Http\Requests\CreateKichuHadisRequest;
use App\Http\Requests\UpdateKichuHadisRequest;
use Illuminate\Http\Request;



class KichuHadisController extends Controller {

	/**
	 * Display a listing of kichuhadis
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $kichuhadis = KichuHadis::orderBy('id','desc')->get();

		return view('admin.kichuhadis.index', compact('kichuhadis'));
	}

	/**
	 * Show the form for creating a new kichuhadis
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.kichuhadis.create');
	}

	/**
	 * Store a newly created kichuhadis in storage.
	 *
     * @param CreateKichuHadisRequest|Request $request
	 */
	public function store(CreateKichuHadisRequest $request)
	{
	    
		KichuHadis::create($request->all());

		return redirect()->route(config('quickadmin.route').'.kichuhadis.index');
	}

	/**
	 * Show the form for editing the specified kichuhadis.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$kichuhadis = KichuHadis::find($id);	    
	    
		return view('admin.kichuhadis.edit', compact('kichuhadis'));
	}

	/**
	 * Update the specified kichuhadis in storage.
     * @param UpdateKichuHadisRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateKichuHadisRequest $request)
	{
		$kichuhadis = KichuHadis::findOrFail($id);        

		$kichuhadis->update($request->all());

		return redirect()->route(config('quickadmin.route').'.kichuhadis.index');
	}

	/**
	 * Remove the specified kichuhadis from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		KichuHadis::destroy($id);

		return redirect()->route(config('quickadmin.route').'.kichuhadis.index');
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
            KichuHadis::destroy($toDelete);
        } else {
            KichuHadis::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.kichuhadis.index');
    }

}
