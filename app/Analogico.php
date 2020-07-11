<?php

namespace Pediatra;

use Carbon\Carbon;
use DB;

use Illuminate\Database\Eloquent\Model;

class Analogico extends Model
{
    protected $table = "analogicos";

    protected $fillable = ['fecha_aplicacion_test'];

    protected $dates = ['fecha_aplicacion_test'];

    public function getFechaAplicacionTestAttribute($value)
    {
        return $value->format('m/d/Y');// Use whatever you want here to format the date, this is just an example
    }


    public static function Analog($id)
    {
        return DB::table('infantes')
        ->join('analogicos','analogicos.id_infante','=','infantes.id')
        ->where('analogicos.id_infante', '=' , $id)
        ->select('analogicos.*')
        ->paginate(1);
    }

    public static function Analog2($id)
    {
        return DB::table('infantes')
        ->join('analogicos','analogicos.id_infante','=','infantes.id')
        ->where('analogicos.id_infante', '=' , $id)
        ->select('analogicos.*')
        ->get();
    }
}
