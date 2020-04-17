@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">InstaHunters</div>
                <div class="card-body">
                    <form method="POST" action="{{URL::to('instahunters/instahunters')}}" class="form-horizontal"> {{ csrf_field() }}
                         <div class="form-group row">
                            <select name="campoSelect" class="form-control ">
                                <option>Seleccionar..</option>
                                <option value="usuario">@Usuario</option>
                                <option value="hashtag">#Hashtag</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control form-control-lg" placeholder="Ingrese la palabra clave (username o hashtag)" name="palabraClave" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-success" name="buscar">
                                   Buscar
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

