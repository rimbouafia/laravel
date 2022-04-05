<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\technologieController;


class technologie extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom_technologie'];

}
