<?php

namespace Pediatra;

use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
     protected $table = 'ciudades'


    protected $fillable = ['nombre','nombreEstado'];
}
