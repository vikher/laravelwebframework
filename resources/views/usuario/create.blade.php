@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
            <div class="form-group">
                {!!Form::label('Nombre:')!!}
                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre de Usuario'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Correo:')!!}
                {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre de Correo'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('Password:')!!}
                {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa Nombre de Password'])!!}
            </div>
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@stop