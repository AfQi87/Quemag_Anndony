@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro producto</h1>

    <div class="container"> 
    <form action="{{route('editarLib', $libro->id )}}" method="POST" >
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
         
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$libro->ISBN}}" name="isbn" id="isbn" placeholder="Identificación" aria-label="Username" aria-describedby="basic-addon1" disabled>
        </div>  
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$libro->titulo}}" name="titulo" id="titulo" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>  
        <div class="input-group mb-3">
            <input type="text" class="form-control" value="{{$libro->precio}}" name="precio" id="precio" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="number" class="form-control" value="{{$libro->stock}}" name="stock" id="stock" placeholder="Teléfono Del Cliente" aria-label="Username" aria-describedby="basic-addon1" required> 
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="editorial">Editorial</label>   
            </div>
            <select class="custom-select" id="editorial" name="editorial" required>
                <option value="{{$libro->editorial_fk}}" selected="true" >{{$libro->editoriales->nombre}} </option>
                @foreach($editorial as $c)
                <option value="{{$c->id}}" >{{$c->nombre}}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <button type="submit" class="btn btn-success" >Actualizar</button>
        <br><br>

    </form>
</div>
@stop
