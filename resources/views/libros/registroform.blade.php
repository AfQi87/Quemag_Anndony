@extends('master')
@section('contenido') 
    
    <h1 class="text-center">Formulario de registro Libro</h1>

    <div class="container"> 
    <form action="{{url('libros/registrar')}}" method="POST">
        @csrf
        <br>
        
         <!-- Etiquetas de tipo Select -->
        <div class="input-group mb-3">
           
            <label for="isbn" class="form-control" style="max-width: 100px;">ISBN</label>
            <input type="text" class="form-control" name="isbn"  required>   
           
        </div>
        <br>
        <div class="input-group mb-3">
           
            <label for="titulo" class="form-control" style="max-width: 100px;">Titulo</label>
            <input type="text" class="form-control" name="titulo"  required>   
           
        </div>
        <br>
        <div class="input-group mb-3">
           
            <label for="cantidad" class="form-control" style="max-width: 100px;">Cantidad</label>
            <input type="text" class="form-control" name="cantidad"  required>   
           
        </div>
        <br><div class="input-group mb-3">
           
            <label for="precio" class="form-control" style="max-width: 100px;">Precio</label>
            <input type="number" class="form-control" name="precio"  required>   
           
        </div>
        <br>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="editorial">Clientes</label>   
            </div>
            <select class="form-control" id="editorial" name="editorial" required>
                <option value="" >Selecione un Cliente</option>
                @foreach($editorial as $e)
                    <option value="{{$e->id}}">{{$e->nombre}}</option>
                @endforeach
            </select>
        </div>
        <br>

           
        <br><br>
        <button type="submit" class="btn btn-success" >Registrar</button>
        <a href="{{url('/')}}"  class="btn btn-danger" >Cancelar</a>
        <a href="{{url('libros/lista')}}"  class="btn btn-info" >Listar</a>
        
        <br><br>

    </form>
</div>
@stop
