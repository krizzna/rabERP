<?php

namespace App\Http\Controllers\Frontend;

use View;
use Redirect;
use Input;
use App\Cutting;
use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CuttingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cuttings = Cutting::with('customer')->get();

	return View::make('frontend.ppc.cutting.index', compact('cuttings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $customers = Customer::lists('name','id');
	return View('frontend.ppc.cutting.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
	Cutting::create($input);

	return Redirect::route('cuttings.index')->withFlashSuccess('The cutting data was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Cutting $cutting)
    {
        return View('frontend.ppc.cutting.show', compact('cutting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Cutting $cutting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Cutting $cutting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Cutting $cutting)
    {
        //
    }
}
