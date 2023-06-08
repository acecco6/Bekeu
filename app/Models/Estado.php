<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $createdAt = 'createdAt';
    protected $updatedAt = 'updatedAt';

    protected $table = "estados";
    protected $fillable = ["code", "name"];
    protected $hidden = ['createdAt', 'updatedAt'];
}
