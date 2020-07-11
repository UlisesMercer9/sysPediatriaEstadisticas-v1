<?php

namespace Pediatra;
use DB;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
      protected $table = "conceptos";

      protected $fillable = ['aplicacion_fecha_test','fecha_aplicacion_test'];

      protected $dates = ['created_at', 'updated_at','aplicacion_fecha_test'];

      public function getAplicacion_Fecha_TestAttribute($value)
    {
        return $value->format('d-m-Y'); // Use whatever you want here to format the date, this is just an example
    }

      public static function Concep($id)
      {
          return DB::table('infantes')
          ->join('conceptos','conceptos.id_infante','=','infantes.id')
          ->where('conceptos.id_infante', '=' , $id)
          ->select('conceptos.*')
          ->paginate(1000);
      }

      public static function Concep2($id)
      {
          return DB::table('infantes')
          ->join('conceptos','conceptos.id_infante','=','infantes.id')
          ->where('conceptos.id_infante', '=' , $id)
          ->select('conceptos.*')
          ->get();
      }


}
