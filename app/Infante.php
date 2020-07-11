<?php

namespace Pediatra;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
use Carbon\Carbon;


class Infante extends Model
{
    protected $table = "infantes";


    protected $fillable = ['nombre','apellido', 'edad', 'sexo','estado','ciudad','localidad','postal','id_especialista'];


    public function setPathAttribute($path){
      $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
      $name = Carbon::now()->second.$path->getClientOriginalName();
      \Storage::disk('local')->put($name, \File::get($path));
    }

    protected $hidden = ['password', 'remember_token'];


     public static function Infantes(){

     	$user_id = Auth::especialista()->get()->id;

        return DB::table('infantes')
        ->join('especialistas','especialistas.id','=','infantes.id_especialista')
        ->where('especialistas.id','=', $user_id)
        ->select('infantes.*')
        ->get();
    }

    public static function Tutores($id)
    {
        return DB::table('infantes')
        ->join('tutors','tutors.id_infante','=','infantes.id')
        ->where('tutors.id_infante', '=' , $id)
        ->select('tutors.*')
        ->get();
    }
}
