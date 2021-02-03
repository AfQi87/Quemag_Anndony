@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Lista de Libros</h1>
    <br>
    <div class="container">
        <a href="{{url('libros/registrar')}}"  class="btn btn-info" >Registrar</a>
        <form action="{{url('libros/buscar')}}" method="POST">
            @csrf
            <input style="margin-left: 1000px;margin-top: -50px;" type="search" id="buscar" name="buscar" placeholder="buscar" aria-label="Search" style="max-width: 400px;">
            <button type="submit" class="btn btn-success" >Buscar</button>
        </form>
    </div>                    

        <div class="container" style="margin-top: 50px;">
            <table class="table table-striped">
                <thead >
                    <tr>
                    <th scope="col">ISBN</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Precio Normal</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Precio Total</th>
                    <th scope="col">Más</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach($libro as $p)
                   
                        <tr>
                        <th scope="row">{{$p->ISBN}}</th>
                        <td> {{$p->titulo}}</td>
                        <td> {{$p->stock}}</td>
                        <td> {{$aux[$i]}}</td>
                        <td> {{$p->editoriales->nombre}}</td>
                        <td> {{$p->precio}}</td>
                        <td> {{$auxd[$i]}}</td>
                        <td> {{$auxt[$i]}}</td>
                        <td> 
                            <a href="{{route('editarLibro', $p->id)}}"  class="btn btn-success">Editar</a> 
                            <a href="{{route('eliminarLibro', $p->id)}}" onclick="return alerta()" class="btn btn-danger" >Eliminar</a>
                        </td>     
                        </tr>
                        @php
                            $i=$i+1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

    
    
    
@stop
