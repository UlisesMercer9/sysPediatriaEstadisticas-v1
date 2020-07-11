<?php

return [

   
'multi-auth' => [

    'especialista' => [
        'driver' => 'eloquent',
        'model'  => Pediatra\Especialista::class,
        'table' => 'especialistas'
    ],
    'user' => [
        'driver' => 'eloquent',
        'model'  => Pediatra\User::class,
        'table' => 'users'
    ],
    'tutor' => [
        'driver' => 'eloquent',
        'model'  => Pediatra\Tutor::class,
        'table' => 'tutors'
    ]
  ],

    'password' => [
        'email' => 'emails.password',
        'table' => 'password_resets',
        
    ],

];
