@extends('layouts.master')
 
@section('content')
<h1>
  Buscar Unidades
</h1>
        {{ Form::open(array('url' => 'unidades/detalle')) }}
        
            {{Form::label('idunidad', 'IdUnidad')}}
            {{Form::text('idunidad', '')}} 
            {{$errors->first('idunidad')}}<br>
            
            {{Form::submit('Buscar')}}
        {{ Form::close() }}
@stop