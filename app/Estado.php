<?php

namespace Pediatra;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model

{
    protected $table = 'estados'

    protected $primaryKey='nombreEstado';

    public $incrementing = false;

    protected $fillable = ['nombreEstado'];
}
