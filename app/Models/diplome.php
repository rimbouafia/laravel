<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\diplomeController;


class diplome extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['specialite','niveau','nom_faculte'];


}
