@extends('master') 
@section('contenido')
<div class="container">
    <h1 style="text-align: center;">Bienvenido A La Libreria Nacional</h1>
    <h2 style="text-align: center;margin-top: 50px;">Ofertas Para Tí</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4" style="margin-top: 50px;height: 500px;">
            <div class="card text-center">
                <div class="card-header">
                  Nosotros
                </div>
                <div class="card-body" style="height: 350px;">
                    <img src='{{url("/img/imh1.jpg")}}' alt="" style="width: 360px;">
                    <p>
                        Contamos con 250 Proveedores y Editoriales entre las cuales estan las mas representativas del mundo editorial en lengua 
                        española e inglesa
                    </p>
                </div>
                <div class="card-footer text-muted">
                    <input type="text" style="text-align: center;" name="fecha"  value="<?php echo date("Y-m-d");?>" disabled>
                </div>
            </div>
        </div>
        </br>
        <div class="col-md-4" style="margin-top: 50px; height: 400px;">
            <div class="card text-center">
                <div class="card-header">
                  Historia
                </div>
                <div class="card-body" style="height: 350px;">
                    <img src='{{url("/img/img.jpg")}}' alt="" style="width: 360px;">   
                    <p>
                        La Libreria Nacional de Colombia fue Fundada en la ciudad de Barranquilla en septiembre de 1941, y fue pionera en la 
                        modalidad de autoservicio y en la venta y distribucion de revistas en el país
                    </p>
                </div>
                <div class="card-footer text-muted">
                    <input type="text" style="text-align: center;" name="fecha"  value="<?php echo date("Y-m-d");?>" disabled>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 50px;height: 400px;">
            <div class="card text-center">
                <div class="card-header">
                  Servicios
                </div>
                <div class="card-body" style="height: 350px;">
                    <img src='{{url("/img/img1.jpg")}}' alt="" style="width: 360px;">
                    <p>
                        Mensualmente recibimos un promedio de 500 novedades diversas, entre los que se destacan los libros de mayor venta
                        en todo el mundo, los bestseller de éxito siempre están primero en nuestras librerías 
                    </p>
                </div>
                <div class="card-footer text-muted">
                    <input type="text" style="text-align: center;" name="fecha"  value="<?php echo date("Y-m-d");?>" disabled>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
 

@stop
