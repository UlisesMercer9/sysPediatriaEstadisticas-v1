<?php

namespace Pediatra\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use Pediatra\Http\Requests;
use Pediatra\Http\Controllers\Controller;
use Pediatra\Especialista;
use Pediatra\State;
use Pediatra\Town;
use DB;

class EspecialistaController extends Controller
{
     public function __construct(){

        $this->beforeFilter('@find',['only'=> ['edit','update','destroy','getTowns','show']]);
    }

    public function find(Route $route){
         $this->especialista = Especialista::find($route->getParameter('especialista'));

    }

    public function index()
    {
        $users = Especialista::paginate(15);
        return view('especialista.index',compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $states = State::lists('name','id');
        return view('especialista.create',compact('states'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     Especialista::create([
            'cedula' => $request['cedula'],
            'nombre' => $request['nombre'],
            'apellidos' => $request['apellidos'],
            'email' => $request['email'],
            'password' => $request['password'],
            'especialidad' => $request['especialidad'],
            'organizacion' => $request['organizacion'],
            'estado' => $request['estado'],
            'ciudad' => $request['ciudad'],
            'localidad' => $request['localidad'],
            'postal' => $request['postal'],
            'path' => $request['path'],
            ]);
        Session::flash('message','Especialista agregado correctamente');
        return redirect::to('/especialista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $especialista = Especialista::find($id);
      $states = State::lists('name','name','id');
      return view('especialista.doctorInfo',compact('states'),['especialista' => $this->especialista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $especialista = Especialista::find($id);
        $states = State::lists('name','id');
        $towns = DB::table('especialistas')->where('id','=',$id)->lists('ciudad');
        return view('especialista.edit',compact('states','towns'),['especialista' => $this->especialista]);
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
        $this->especialista->fill($request->all());
        $this->especialista->save();

        Session::flash('message','Usuario Editado Correctamente');
        return redirect::to('/especialista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->especialista = Especialista::find($id);
        $this->especialista->delete();
        Session::flash('message','Usuario Eliminado Correctamente');
        return redirect::to('/especialista');
    }
}
