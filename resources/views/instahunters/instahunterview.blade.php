@extends('layouts.app')

@section('content')
<div class="container">
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
</div>

@endsection

