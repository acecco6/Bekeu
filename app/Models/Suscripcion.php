<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    use HasFactory;

    protected $table = 'suscripciones';
    protected $fillable = ['email','estado_id',];

    public $timestamps = true;
    protected $createdAt = 'createdAt';
    protected $updatedAt = 'updatedAt';

}
