<?php

namespace Pediatra\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use Pediatra\Http\Requests;
use Pediatra\Http\Controllers\Controller;
use Pediatra\Tutor;
use Pediatra\Infante;
use Pediatra\State;
use Pediatra\Town;
use DB;


class TutorController extends Controller
{

     public function __construct(){

        $this->beforeFilter('@find',['only'=> ['edit','update','destroy']]);
    }

    public function find(Route $route){
         $this->tutor = Tutor::find($route->getParameter('tutor'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
         return view('tutor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $infantes = Infante::lists('nombre','id');
          $states = State::lists('name','id');
          return view('tutor.create',compact('infantes','states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tutor::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
            'password' => $request['password'],
            'telefono' => $request['telefono'],
            'estado' => $request['estado'],
            'ciudad' => $request['ciudad'],
            'localidad' => $request['localidad'],
            'postal' => $request['postal'],
            'id_especialista' => $request['id_especialista'],
            'id_infante' => $request['id_infante'],
            'path' => $request['path'],
            ]);

        Session::flash('message','Tutor agregado correctamente');
        return redirect::to('/infante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $id_infante = $id;
      $infantes = Infante::lists('nombre','id');
      

       $states = State::lists('name','id');
       $towns = DB::table('tutors')->where('id','=',$id)->lists('ciudad');

      $tutor = Tutor::find($id_infante);
      return view('tutor.edit',compact('infantes','states','towns'),['tutor' => $tutor]);
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
      $this->tutor->fill($request->all());
      $this->tutor->save();

      Session::flash('message','Tutor Editado Correctamente');
      return redirect::to('/infante');
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
