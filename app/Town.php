<?php

namespace Pediatra;
use DB;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
  protected $table = 'towns';

  protected $fillable = ['name','state_id'];



}
