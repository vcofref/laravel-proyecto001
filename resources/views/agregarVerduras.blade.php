@extends('layouts.master')
@section('title','Agregar Verduras')
@section('header')
    <h2>Agregar Verduras</h2>
@stop
@section('content')
<hr>

<div class="container">
    <div class="row">
        <div class="col col-lg-4">
            <form action="{{ url('guardarFormulario') }}" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Verdura</label>
                    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio">
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
</div>
<hr>
@stop
@section('footer')
    <h4>Gracias por visitarnos</h4>
@stop