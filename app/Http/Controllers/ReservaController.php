<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Validator;




class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function reserva() {
   	$reservas = \App\Reserva::all();

   	$variables = [
   		"reservas" => $reservas
   	];

   	return view('reserva', $variables);
   }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('reserva.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $rules = [
              "fecha" => "required|date",
              "cantidadDePersonas" => "required|numeric",
              "ubicacion" => "required|string",
              "tipoDeFiesta" => "required|string"
          ];

          $messages = [
              "required" => "El :attribute es requerido!",
              "numeric" => "El :attribute tiene que ser numérico!",
          ];

          $this->validate($request, $rules, $messages);

          $reserva = \App\Reserva::create([
              'fecha' => $request->input('fecha'),
              'cantidadDePersonas' => $request->input('cantidadDePersonas'),
              'ubicacion' => $request->input('ubicacion'),
              'tipoDeFiesta' => $request->input('tipoDeFiesta')
          ]);

          return redirect('/reserva');
      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = \App\Reserva::find($id);
//dd($reserva);
        $variables = [
    "reserva" => $reserva];

	return view('reserva.show', $variables);
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
      $reserva = \App\Reserva::find($id);

    $datos = compact("reserva");

    return view("editarReserva", $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
      $rules = [
          "fecha" => "required|date",
          "cantidadDePersonas" => "required|numeric",
          "ubicacion" => "required|string",
          "tipoDeFiesta" => "required|string"
      ];

      $messages = [
          "required" => "La :attribute es requerido!",
          "numeric" => "La :attribute tiene que ser numérico!",
      ];

      $this->validate($req, $rules, $messages);


      $reserva = \App\Reserva::find($id);
      $reserva->cantidadDePersonas = $req["cantidadDePersonas"];
      $reserva->tipoDeFiesta = $req["tipoDeFiesta"];
      $reserva->ubicacion = $req["ubicacion"];
      $reserva->fecha = $req["fecha"];

      $reserva->save();


      //4. Redirigir
      return redirect("/reserva");
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
      $reserva = \App\Reserva::find($id);
      $reserva->delete();

return redirect("/reserva");
    }
}
