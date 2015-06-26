<?php

namespace App\Http\Controllers\Frontend;

use View;
use Input;
use Redirect;
use App\Coil;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CoilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $coils = Coil::all();

	return View::make('frontend.warehouse.coil.index', compact('coils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('frontend.warehouse.coil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
	Coil::create($input);

	return Redirect::route('coil.index')->withFlashSuccess('The coil data was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $coil = Coil::findOrFail($id);

	return View::make('frontend.warehouse.coil.edit', compact('coil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $coil = Coil::findOrFail($id);
	$input = array_except(Input::all(), '_method');

	$coil->update($input);
	
	return Redirect::route('coil.index')->withFlashSuccess('The coil data was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $coil = Coil::findOrFail($id)->delete();
	
	return Redirect::route('coil.index')->withFlashSuccess('The coil data was successfully deleted.');
    }
}
