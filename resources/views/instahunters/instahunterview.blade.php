@extends('layouts.app')

@section('content')
<title>Vista Previa</title>
<a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MI PERFIL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">MENSAJES</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('appl')}}">APPL</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('home')}}">HOME</a>
                   <a class="btn btn-outline-secondary" href="{{URL::to('instahunters')}}">REGRESAR</a>
                   <br>
                   <br>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">InstaHunters Show v0.1</div>
                    @foreach ($posts as $post)
                    <div class="card-body">
                        {{$post->txt}}
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div> --}}

</div>

@endsection

