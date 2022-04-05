<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\etatController;

class etat extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['resultat'];

}
