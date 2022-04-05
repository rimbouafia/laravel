<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\inscriptionController;


class inscription extends Model
{
    use HasFactory;
    protected $fillable = ['id_inscription','nom','prénom','sexe','date_naissance','Email','cin',
    'id_ville','id_faculte','id_diplome','id_technologie'];

}
