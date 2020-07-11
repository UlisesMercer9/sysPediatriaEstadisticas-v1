<?php

namespace Pediatra;

use Carbon\Carbon;
use DB;


use Illuminate\Database\Eloquent\Model;


class Cubo extends Model
{


      protected $table = "cubos";

      protected $fillable = ['fecha_aplicacion_test'];

      protected $dates = array('fecha_aplicacion_test');


      public static function Cub($id)
      {
          return DB::table('infantes')
          ->join('cubos','cubos.id_infante','=','infantes.id')
          ->where('cubos.id_infante', '=' , $id)
          ->select('cubos.*')
          ->paginate(1);
      }

      public static function Cub2($id)
      {
          return DB::table('infantes')
          ->join('cubos','cubos.id_infante','=','infantes.id')
          ->where('cubos.id_infante', '=' , $id)
          ->select('cubos.*')
          ->get();
      }
}
