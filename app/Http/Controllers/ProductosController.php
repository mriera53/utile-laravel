<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function productos() {
   	$productos = \App\Productos::all();

   	$variables = [
   		"productos" => $productos
   	];

   	return view('productos', $variables);
   }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('productos.create');
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
              "servicio" => "required|string",
              "anosExperiencia" => "required|numeric",
              "calificacion" => "required|numeric",
              "name" => "required|string",
              "precioXhora" => "required|numeric"
          ];

          $messages = [
              "required" => "El :attribute es requerido!",
              "numeric" => "El :attribute tiene que ser numérico!",
          ];

          $this->validate($request, $rules, $messages);

          $productos = \App\Productos::create([
              'servicio' => $request->input('servicio'),
              'disponibilidad' => $request->input('disponibilidad'),
              'anosExperiencia' => $request->input('anosExperiencia'),
              'calificacion' => $request->input('calificacion'),
              'name' => $request->input('name'),
              'precioXhora' => $request->input('precioXhora')
          ]);
          return redirect('/productos');
      }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = \App\Productos::find($id);
//dd($reserva);
        $variables = [
    "productos" => $productos];

	return view('productos.show', $variables);
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
      $reserva = \App\Productos::find($id);

    $datos = compact("productos");

    return view("editarProductos", $datos);
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
          "servicio" => "required|string",
          "anosExperiencia" => "required|numeric",
          "calificacion" => "required|numeric",
          "name" => "required|string",
          "precioXhora" => "required|numeric"
      ];

      $messages = [
          "required" => "El :attribute es requerido!",
          "numeric" => "El :attribute tiene que ser numérico!",
      ];

      $this->validate($request, $rules, $messages);


      $productos = \App\Productos::find($id);
      $productos->servicio = $req["servicio"];
      $productos->disponibilidad = $req["disponibilidad"];
      $productos->anosExperiencia = $req["anosExperiencia"];
      $productos->calificacion = $req["calificacion"];
      $productos->name = $req["name"];
      $productos->precioXhora = $req["precioXhora"];

            $productos->save();


      //4. Redirigir
      return redirect("/productos");
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
      $productos = \App\Productos::find($id);
      $productos->delete();

return redirect("/productos");
    }
}
