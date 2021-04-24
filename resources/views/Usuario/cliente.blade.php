@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Solicitud de Cotización</h1>    
    <div class="row justify-content-center">   
        <div class="col-md-8">
            <form action="" method="post" id="formulario" class="formulario">
                @csrf
                @include('Usuario.form')
            </form>
        </div>
    </div>
</div>

@endsection