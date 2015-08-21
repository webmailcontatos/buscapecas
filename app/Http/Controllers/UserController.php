<?php

namespace buscapecas\Http\Controllers;

use Illuminate\Http\Request;
use buscapecas\Http\Requests;
use buscapecas\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $users = [
            ['name' => 'Thiago', 'age' => rand(20, 45), 'perfil' => 'Master'],
            ['name' => 'Thiago', 'age' => rand(20, 45), 'perfil' => 'Master'],
            ['name' => 'Thiago', 'age' => rand(20, 45), 'perfil' => 'Master'],
            ['name' => 'Thiago', 'age' => rand(20, 45), 'perfil' => 'Master'],
        ];
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
