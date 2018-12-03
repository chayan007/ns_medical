<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'description', 'price', 'category', 'company', 'img_url1', 'img_url2', 'img_url3', 'brochure',
    ];

}
