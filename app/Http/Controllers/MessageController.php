<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return int
     */
    public function store(Request $request)
    {
        $request->validate([
            'uuid' => 'required',
            'username' => 'required',
            'message' => 'required',
            'location' => 'required'
        ]);

        Message::create($request->all());

        return Response::HTTP_OK;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return int
     */
    public function show($id)
    {
        return Response::HTTP_OK;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return int
     */
    public function update(Request $request, $id)
    {
        return Response::HTTP_OK;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return int
     */
    public function destroy($id)
    {
        return Response::HTTP_OK;
    }
}
