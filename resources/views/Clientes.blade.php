@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es_DO">
<head>
    <meta charset="UTF-8">
<title>Pagina de Contacto</title>
                   <br>
                   <br>
</head>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-md-5">
                <h2> <center>REGISTRO DE CLIENTES</center></h2>
                <form method="POST" action="{{URL::to('clientes/guardar')}}" class="form-horizontal"> {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="NOMBRE" class="form-control" placeholder="Escribir Razon Social">
                    </div>
                    <div class="form-group">
                        <input type="text" name="DIRECCION" class="form-control" placeholder="Escribir Direcciòn">
                    </div>
                    <div class="form-group">
                        <input type="phone" name="TELEFONO" class="form-control" placeholder="Telefono Celular Contacto">
                    </div>
                    <div class="form-group">
                        <input type="text" name="PAIS" class="form-control" placeholder="Pais">
                    </div>
                    <div class="form-group">
                        <input type="text" name="CIUDAD" class="form-control" placeholder="Ciudad">
                    </div>
                    <div class="form-group">
                        <input type="email" name="CORREO" class="form-control" placeholder="Escribir E-mail de Contacto">
                    </div>
                    <div class="form-group">
                        <input type="text" name="WEBSITE" class="form-control" placeholder="Sitio Web">
                    </div>
                    <div class="form-group">
                        <input type="text" name="NIT" class="form-control" placeholder="NIT de la compañia">
                    </div>
                    <div class="form-group">
                        <select type="" name="ID_SECTOR_EMPRESA_TERCERO" class="form-control">
                                <option></option>
                                <option>SECTOR ADMINISTRACIÓN Y GESTIÓN</option>
                                <option>SECTOR AGRICULTURA Y GANADERÍA</option>
                                <option>SECTOR INDUSTRIA ALIMENTARIA</option>
                                <option>SECTOR GRANDES ALMACENES</option>
                                <option>SECTOR COMERCIO</option>
                                <option>SECTOR CONSTRUCCIÓN E INDUSTRIAS EXTRACTIVAS</option>
                                <option>SECTOR ACTIVIDADES FÍSICO-DEPORTIVAS</option>
                                <option>SECTOR EDUCACIÓN</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <textarea name="OBSERVACION" class="form-control" placeholder="Escribe tu Observación"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a class="btn btn-outline-secondary" href="{{URL::to('Clientes')}}">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
