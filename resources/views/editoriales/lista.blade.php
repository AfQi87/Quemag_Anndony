@extends('master')
@section('contenido') 
    <br>
    <h1 class="text-center">Lista de Editoriales</h1>
    <br>
    

        <div class="container" style="margin-top: 50px;">
            <table class="table table-striped">
                <thead >
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Más</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($editorial as $p)
                        <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td> {{$p->nombre}}</td>
                        <td> {{$p->direccion}}</td>
                        <td> {{$p->ciudad}}</td>
                        <td> {{$p->telefono}}</td>
                        <td> 
                            <a href=""  class="btn btn-success">Editar</a> 
                            
                        </td>     
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    
    
    
@stop
