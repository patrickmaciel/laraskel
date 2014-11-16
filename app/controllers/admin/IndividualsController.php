<?php
namespace Admin;

class IndividualsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /individuals
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.individuals.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /individuals/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.individuals.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /individuals
	 *
	 * @return Response
	 */
	public function store()
	{
		return View::make('admin.individuals.store');
	}

	/**
	 * Display the specified resource.
	 * GET /individuals/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('admin.individuals.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /individuals/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('admin.individuals.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /individuals/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return View::make('admin.individuals.update');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /individuals/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return View::make('admin.individuals.destroy');
	}

}
