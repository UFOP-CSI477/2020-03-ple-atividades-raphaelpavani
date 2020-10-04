<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'registro_id'];
    //1-equipamento tem muitos registros;
    public function registros()
    {
        return $this->hasMany('Registro'::class);
    }
}
