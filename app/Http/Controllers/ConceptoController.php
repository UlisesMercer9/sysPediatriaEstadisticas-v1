<?php

namespace Pediatra\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Session;
use Redirect;
use Pediatra\Http\Requests;
use Pediatra\Http\Controllers\Controller;
use Pediatra\Concepto;
use Pediatra\Analogico;
use Pediatra\Cubo;



class ConceptoController extends Controller
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

    public function detalle1($id_infante)
    {
       $conceptos = Concepto::Concep2($id_infante);
        return view('concepto.detalle1',compact('conceptos'));
    }

    public function detalle2($id_infante)
    {
       $conceptos = Concepto::Concep2($id_infante);
        return view('concepto.detalle2',compact('conceptos'));
    }

    public function detalle3($id_infante)
    {
       $conceptos = Concepto::Concep2($id_infante);
        return view('concepto.detalle3',compact('conceptos'));
    }

    public function detalle4($id_infante)
    {
       $conceptos = Concepto::Concep2($id_infante);
        return view('concepto.detalle4',compact('conceptos'));
    }

    public function detalle5($id_infante)
    {
       $analogicos = Analogico::Analog2($id_infante);
        return view('concepto.detalle5',compact('analogicos'));
    }

    public function detalle6($id_infante)
    {
       $analogicos = Analogico::Analog2($id_infante);
        return view('concepto.detalle6',compact('analogicos'));
    }

    public function detalle7($id_infante)
    {
       $analogicos = Analogico::Analog2($id_infante);
        return view('concepto.detalle7',compact('analogicos'));
    }

    public function detalle8($id_infante)
    {
       $analogicos = Analogico::Analog2($id_infante);
        return view('concepto.detalle8',compact('analogicos'));
    }

    public function detalle9($id_infante)
    {
       $analogicos = Analogico::Analog2($id_infante);
        return view('concepto.detalle9',compact('analogicos'));
    }

    public function detalle95($id_infante)
    {
       $analogicos = Analogico::Analog2($id_infante);
        return view('concepto.detalle95',compact('analogicos'));
    }

    public function detalle10($id_infante)
    {
       $analogicos = Analogico::Analog2($id_infante);
        return view('concepto.detalle10',compact('analogicos'));
    }

    public function detalle11($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle11',compact('cubos'));
    }

    public function detalle12($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle12',compact('cubos'));
    }

    public function detalle13($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle13',compact('cubos'));
    }

    public function detalle14($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle14',compact('cubos'));
    }

    public function detalle15($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle15',compact('cubos'));
    }

    public function detalle16($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle16',compact('cubos'));
    }

    public function detalle17($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle17',compact('cubos'));
    }

    public function detalle18($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle18',compact('cubos'));
    }

    public function detalle19($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle19',compact('cubos'));
    }

     public function detalle20($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle20',compact('cubos'));
    }

     public function detalle21($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle21',compact('cubos'));
    }

     public function detalle22($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle22',compact('cubos'));
    }

     public function detalle23($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle23',compact('cubos'));
    }
    
     public function detalle24($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle24',compact('cubos'));
    }
    
     public function detalle25($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle25',compact('cubos'));
    }

     public function detalle26($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle26',compact('cubos'));
    }

     public function detalle27($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle27',compact('cubos'));
    }

     public function detalle28($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle28',compact('cubos'));
    }

     public function detalle29($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle29',compact('cubos'));
    }

     public function detalle30($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle30',compact('cubos'));
    }

     public function detalle31($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle31',compact('cubos'));
    }

     public function detalle32($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle32',compact('cubos'));
    }

     public function detalle33($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle33',compact('cubos'));
    }

     public function detalle34($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle34',compact('cubos'));
    }

     public function detalle35($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle35',compact('cubos'));
    }

     public function detalle36($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle36',compact('cubos'));
    }

     public function detalle37($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle37',compact('cubos'));
    }

    public function detalle38($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle38',compact('cubos'));
    }

    public function detalle39($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle39',compact('cubos'));
    }

    public function detalle40($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle40',compact('cubos'));
    }

     public function detalle41($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle41',compact('cubos'));
    }

     public function detalle42($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle42',compact('cubos'));
    }

     public function detalle43($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle43',compact('cubos'));
    }

    public function detalle44($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle44',compact('cubos'));
    }

    public function detalle45($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle45',compact('cubos'));
    }

    public function detalle46($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle46',compact('cubos'));
    }

    public function detalle47($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle47',compact('cubos'));
    }

    public function detalle48($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle48',compact('cubos'));
    }

    public function detalle49($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle49',compact('cubos'));
    }

    public function detalle50($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle50',compact('cubos'));
    }

    public function detalle51($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle51',compact('cubos'));
    }

    public function detalle52($id_infante)
    {
        $cubos = Cubo::Cub2($id_infante);
        return view('concepto.detalle52',compact('cubos'));
    }








    public function cubo1($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo1',compact('cubos'));
    }

     public function cubo2($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo2',compact('cubos'));
    }

     public function cubo3($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo3',compact('cubos'));
    }

     public function cubo4($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo4',compact('cubos'));
    }

     public function cubo5($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo5',compact('cubos'));
    }

     public function cubo6($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo6',compact('cubos'));
    }

     public function cubo7($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo7',compact('cubos'));
    }

     public function cubo8($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo8',compact('cubos'));
    }

     public function cubo9($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo9',compact('cubos'));
    }

    public function cubo10($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo10',compact('cubos'));
    }

    public function cubo11($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo11',compact('cubos'));
    }
    
    public function cubo12($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo12',compact('cubos'));
    }

    public function cubo13($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo13',compact('cubos'));
    }

    public function cubo14($id_infante)
    {
       $cubos = Cubo::Cub2($id_infante);
        return view('concepto.cubos.tcubo14',compact('cubos'));
    }


   


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $conceptos = Concepto::Concep2($id);
        $analogicos = Analogico::Analog2($id);
        $cubos = Cubo::Cub2($id);

        return view('concepto.detalles',compact('conceptos','analogicos','cubos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $conceptos = Concepto::Concep2($id);
      $analogicos = Analogico::Analog2($id);
      $cubos = Cubo::Cub2($id);
      return view('concepto.detalles2',compact('conceptos','analogicos','cubos'));
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
