<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Companie extends Model
{
    use Notifiable;

    protected $fillable = ['company'];
}
