<?php

namespace App\Http\Controllers\Editoriales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editorial;
use Illuminate\Support\Facades\DB;

class EditorialController extends Controller
{
    public function listaedito(){
        $editorial = Editorial::all(); 
        return view('editoriales.lista', ['editorial' => $editorial]);
    }
    public function formregistro(){
        
    }
}
