<?php

class SocialController extends \BaseController {

	/**
     * The layout that should be used for standard responses.
     */
    protected $layout = 'layouts.crudl';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$identifier = 'title';
		$items = Social::all()->toArray();

		// Compile data
		$data = compact('identifier', 'items');

		// Handle request
		switch (Request::format()) {

			// Restful
			case 'json':
				return Response::json($data);
			break;

			// CRUDL
			default:
				$this->layout->content = View::make('social.listing', $data);
			break;
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}