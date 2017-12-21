<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view ('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $messages = [];
          $rules = [
              "fecha" => "required|date",
              "cantidadDePersonas" => "required|numeric",
              "ubicacion" => "required|string",
              "tipoDeFiesta" => "required|string"
          ];

          $messages = [
              "required" => "El :attribute es requerido!!",
              "numeric" => "El :attribute tiene que ser numérico!",
          ];

          $this->validate($request, $rules, $messages);

          $reserva = \App\Reserva::create([
              'fecha' => $request->input('fecha'),
              'cantidadDePersonas' => $request->input('cantidadDePersonas'),
              'ubicacion' => $request->input('ubicacion'),
              'tipoDeFiesta' => $request->input('tipoDeFiesta')
          ]);

          return redirect('/home');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
