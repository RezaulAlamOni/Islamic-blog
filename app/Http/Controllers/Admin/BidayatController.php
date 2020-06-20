<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Bidayat;
use App\Http\Requests\CreateBidayatRequest;
use App\Http\Requests\UpdateBidayatRequest;
use Illuminate\Http\Request;



class BidayatController extends Controller {

	/**
	 * Display a listing of bidayat
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $bidayat = Bidayat::orderBy('id','desc')->get();

		return view('admin.bidayat.index', compact('bidayat'));
	}

	/**
	 * Show the form for creating a new bidayat
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{	    
	    
	    return view('admin.bidayat.create');
	}

	/**
	 * Store a newly created bidayat in storage.
	 *
     * @param CreateBidayatRequest|Request $request
	 */
	public function store(CreateBidayatRequest $request)
	{
	    
		Bidayat::create($request->all());

		return redirect()->route(config('quickadmin.route').'.bidayat.index');
	}

	/**
	 * Show the form for editing the specified bidayat.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$bidayat = Bidayat::find($id);	    
	    
		return view('admin.bidayat.edit', compact('bidayat'));
	}

	/**
	 * Update the specified bidayat in storage.
     * @param UpdateBidayatRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBidayatRequest $request)
	{
		$bidayat = Bidayat::findOrFail($id);        

		$bidayat->update($request->all());

		return redirect()->route(config('quickadmin.route').'.bidayat.index');
	}

	/**
	 * Remove the specified bidayat from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Bidayat::destroy($id);

		return redirect()->route(config('quickadmin.route').'.bidayat.index');
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
            Bidayat::destroy($toDelete);
        } else {
            Bidayat::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.bidayat.index');
    }

}
