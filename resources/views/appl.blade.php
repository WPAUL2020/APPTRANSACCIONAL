@extends('layouts.app')

@section('content')
<title>Big Data E-Commerce</title>
<a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">APPL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('home')}}">HOME</a>
                   <br>
                   <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><u><b>ACCESOS PERSONALIZADOS A TU ROL</b></u></center></div>
                </div>
<div class="row">
  <div class="col-sm-6">
    <br>
    <br>
    <div class="card">
        <br>
    <center><img src="{{ asset('Imagenes/Usuarios.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
        <center><a class="btn btn-primary" href="{{URL::to('GestionUser')}}">Gestiòn Usuarios</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <br>
    <br>
    <div class="card">
    <br>
    <center><img src="{{ asset('Imagenes/Facturas.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a href="#" class="btn btn-primary">Gestiòn Facturas</a></center>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Productos.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a href="#" class="btn btn-primary">Gestiòn Productos</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/Clientes.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('Clientes')}}">Gestiòn Clientes</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
  <br>
    <br>
  <div class="card">
  <br>
  <center><img src="{{ asset('Imagenes/BigData.png')}}" style="max-width: 150px; max-height: 150px" class='imgRedonda'/></center>
      <div class="card-body">
      <center><a class="btn btn-primary" href="{{URL::to('http://localhost/AnalisisBigData/public/')}}">Gestiòn BigData</a></center>
      </div>
    </div>
  </div>

</div>
                </div>
            </div>
    </div>
</div>
@endsection
