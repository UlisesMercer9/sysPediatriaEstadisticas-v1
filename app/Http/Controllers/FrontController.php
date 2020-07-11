<?php

namespace Pediatra\Http\Controllers;

use Illuminate\Http\Request;

use Pediatra\Http\Requests;
use Pediatra\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

     public function contacto()
    {
        return view('contacto');
    }
    public function quienesSomos()
    {
        return view('quienesSomos');
    }
    public function areaInfantil()
    {
        return view('areaInfantil');
    }

   public function login(){
        return view('login');
   }


    
   
}
