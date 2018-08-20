<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//controlador mío
use App\Employed;

class EmployedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //muetra los datos
        $employed = Employed::latest()->paginate(5);
        return view('employed.index', compact('employed'))->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
          'nombre' => 'required',
          'a_paterno' => 'required',
          'a_materno' => 'required',
        ]);
        Employed::create($request->all());
        return redirect()->route('employed.index')->with('success', 'Éxito al crear empleado');
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
        $employe  = Employed::find($id);
        return view('employed.show', compact('employe'));
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
        $employe  = Employed::find($id);
        return view('employed.edit', compact('employe'));
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
        request()->validate([
          'nombre' => 'required',
          'a_paterno' => 'required',
          'a_materno' => 'required',
        ]);
        Employed::find($id)->update($request->all());
        return redirect()->route('employed.index')->with('success', 'Éxito al modificar empleado');
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
        Employed::find($id)->delete();
        return redirect()->route('employed.index')->with('success','Usuario eliminado');
    }
}
