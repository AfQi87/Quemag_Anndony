<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table='libro';
    public function editoriales(){
        return $this->belongsTo(Editorial::class,'editorial_fk','id');
    }
}
