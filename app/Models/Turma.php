<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
protected $fillable = ["nome", "descricao", "ano" ];
public $timestamps = false;
use HasFactory;


}
