<?php

namespace Pediatra\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use Pediatra\Http\Requests;
use Pediatra\Http\Requests\LoginRequest;
use Pediatra\Http\Controllers\Controller;

class LogController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if(Auth::user()->attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return Redirect::to('admin');
        }
        elseif(Auth::especialista()->attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return Redirect::to('infante');
        }
         elseif(Auth::tutor()->attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return Redirect::to('tutor');
        }
        

        Session::flash('message-error','Datos con incorrectos');
        return Redirect::to('login');

    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/login');
    }

    public function logout2(){
        Auth::logout();
        return Redirect::to('/login');
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
