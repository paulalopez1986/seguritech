@extends('layouts.master')
 
@section('sidebar')
     @parent
     Formulario de Tipo de Unidad
@stop
 
@section('content')
        {{ HTML::link('usuarios', 'volver'); }}
        <h1>
  Crear Usuario
</h1>
        {{ Form::open(array('url' => 'usuarios/crear')) }}
        
            {{Form::label('IdTipoUnidad', 'IdTipoUnidad')}}
            {{Form::text('idtipo', '')}} <br>
            
            {{Form::label('TipoUnidad', 'TipoUnidad')}}
            {{Form::text('tipoUnidad', '')}} <br>
            
            {{Form::label('Movilidad', 'Movilidad')}}
            {{Form::text('movilidad', '')}} <br>
            
            {{Form::label('IconNormal', 'IconNormal')}}
            {{Form::text('normal', '')}} <br>
            
            {{Form::label('IconPanic', 'IconPanic')}}
            {{Form::text('panic', '')}} <br>
            
            {{Form::label('IconOff', 'IconOff')}}
            {{Form::text('off', '')}} <br>
            
            {{Form::label('IconAttention', 'IconAttention')}}
            {{Form::text('attention', '')}} <br>
            
            {{Form::submit('Guardar')}}
        {{ Form::close() }}
@stop