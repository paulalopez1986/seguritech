@extends('layouts.master')
 
@section('content')
<h1>
  Características  
</h1>
        {{ HTML::link('/', 'Inicio'); }}
        
 
<ul>
  {{ Form::open(array('url' => 'unidades/actualizar')) }} 
            
  <!--IdUnidad y IdTipoUnidad-->
  {{Form::hidden('idUnidad', $caracts[0]->IdUnidad)}}
  {{Form::hidden('idTipoUnidad', $caracts[0]->IdTipoUnidad)}} <br>
            
  @foreach($caracts as $caract) 
            {{Form::label($caract->IdCaracteristica, $caract->Caracteristica)}}
            {{Form::text($caract->IdCaracteristica, $caract->Valor)}} <br>
  @endforeach
  
  {{Form::submit('Actualizar')}}  
  {{ Form::close() }}
  </ul>
@stop
