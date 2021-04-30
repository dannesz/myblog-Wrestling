@extends('adminlte::page')

@section('title', 'Admin | myBlog')

@section('content_header')
    <h1>Hola Tarolas saludos a todas las pirinolas</h1>
@stop


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas logeado tio!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
