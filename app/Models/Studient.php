<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studient extends Model
{
    use HasFactory;

    protected $fillable = ['matricule', 'name', 'email', 'phone'];
}
