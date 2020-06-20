<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Pdf;
use App\Http\Requests\CreatePdfRequest;
use App\Http\Requests\UpdatePdfRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class PdfController extends Controller {

	/**
	 * Display a listing of pdf
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $pdf = Pdf::orderBy('id','desc')->get();

		return view('admin.pdf.index', compact('pdf'));
	}

	/**
	 * Show the form for creating a new pdf
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    	    
	    return view('admin.pdf.create');
	}

	/**
	 * Store a newly created pdf in storage.
	 *
     * @param CreatePdfRequest|Request $request
	 */
	public function store(CreatePdfRequest $request)
	{
	    $request = $this->saveFiles($request);
		Pdf::create($request->all());

		return redirect()->route(config('quickadmin.route').'.pdf.index');
	}

	/**
	 * Show the form for editing the specified pdf.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$pdf = Pdf::find($id);	    
	    
		return view('admin.pdf.edit', compact('pdf'));
	}

	/**
	 * Update the specified pdf in storage.
     * @param UpdatePdfRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePdfRequest $request)
	{
		$pdf = Pdf::findOrFail($id);

        $request = $this->saveFiles($request);

		$pdf->update($request->all());

		return redirect()->route(config('quickadmin.route').'.pdf.index');
	}

	/**
	 * Remove the specified pdf from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Pdf::destroy($id);

		return redirect()->route(config('quickadmin.route').'.pdf.index');
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
            Pdf::destroy($toDelete);
        } else {
            Pdf::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.pdf.index');
    }

}
