<?php

namespace App\Http\Controllers\Libros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


//Para hacer las consultas
use Illuminate\Support\Facades\DB;

//Para hacer  posible  registro
use App\Models\Libro;
use App\Models\Editorial;

class LibroController extends Controller
{
    public function formregistro(){
        $editorial = Editorial::all();
        return view('libros.registroform', ['editorial' => $editorial]);
    }
    public function registro(){
        $editorial = Editorial::all();
        return view('libros.registroform', ['editorial' => $editorial]);
    }
    public function registrar(Request $request){
        $libro = new Libro();
        $libro->ISBN = $request->input('isbn');
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('cantidad');
        $libro->editorial_fk = $request->input('editorial');
        $libro->save();
        return redirect('libros/lista');
    }
    public function listalibro(){
        $libro = Libro::all(); 
        $i=0;
        foreach($libro as $l){
            if($l->stock <11 && $l->stock >0 ){
                $aux[$i]='Ultimas Unidades';

                
            }else{
                if($l->stock >10){
                    $aux[$i]='Disponible';
                }else{

                    $aux[$i]='agotado';
                }
            }
            if($l->editoriales->nombre == 'Norma' || $l->editoriales->nombre == 'La Santillana'){
                $auxt[$i]=$l->precio*(1-(0.05));
                $auxd[$i]=$l->precio*(0.05);
            }else{
                $auxt[$i]=0;
                $auxd[$i]=0;
            }
            $i++;
            
        }
        
        return view('libros.lista', compact('libro', 'aux', 'auxd', 'auxt'));
        
        
        
    }
    public function formeditar($id){
        $libro = Libro::findOrFail($id);

        $libros = Libro::where('libro.id', 'like',$id)->first(); 

        $editorial = Editorial::all();
        return view('libros.formeditar', compact('libro', 'libros', 'editorial'));
        
    }
    public function editar(Request $request, $id){

        $libro = Libro::findOrFail($id);

        
        $libro->titulo = $request->input('titulo');
        $libro->precio = $request->input('precio');
        $libro->stock = $request->input('stock');
        $libro->editorial_fk = $request->input('editorial');
        $libro->save();
        return redirect('libros/lista');
    }
    public function eliminar($id){
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return redirect('libros/lista');
        
    }

    public function buscar(Request $request){
        $titulo = $request->input('buscar');

        $libro = Libro::
        where('titulo', 'like','%'.$titulo.'%')->get();
        

        $i=0;
        foreach($libro as $l){
            if($l->stock <11 && $l->stock >0 ){
                $aux[$i]='Ultimas Unidades';

                
            }else{
                if($l->stock >10){
                    $aux[$i]='Disponible';
                }else{

                    $aux[$i]='agotado';
                }
            }
            if($l->editoriales->nombre == 'Norma' || $l->editoriales->nombre == 'La Santillana'){
                $auxt[$i]=$l->precio*(1-(0.05));
                $auxd[$i]=$l->precio*(0.05);
            }else{
                $auxt[$i]=0;
                $auxd[$i]=0;
            }
            $i++;
            
        }
        
        return view('libros.lista', compact('libro', 'aux', 'auxd', 'auxt'));

        
    }
}
