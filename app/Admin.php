<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable {
    use Notifiable;

    protected $table = 'admin';

    protected $hidden = [
        'password'
    ];
}
