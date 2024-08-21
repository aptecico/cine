<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias=Categorias::all();

        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar los datos que se envian
        $campo=[
            'nombre'=>'required'
        ];
        $mensaje=[
            'required'=>'El campo es requerido'
        ];
        $this->validate($request,$campo,$mensaje);
        $requestData=$request->all();
        
        //guardar los datos en la base de datos

        Categorias::create($requestData);

        return redirect('categorias')->with('success','Se ingresó correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorias=Categorias::findOrFail($id);

        return view('categorias.edit',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campo=[
            'nombre'=>'required'
        ];
        $mensaje=[
            'required'=>'El campo es requerido'
        ];
        $this->validate($request,$campo,$mensaje);
        //recibir todos los datos enviados desde el formulario
        $requestData=$request->all();
        //buscar el registro con el id enviado
        $categorias=Categorias::findOrFail($id);
        $categorias->update($requestData);

        return redirect('categorias')->with('success','Se editó correctamente el registro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //eliminar el registro de la base de datos
        Categorias::destroy($id);
        return redirect('categorias')->with('success','Se eliminó correctamente el registro');
    }
}
