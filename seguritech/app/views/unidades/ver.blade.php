@extends('layouts.master')
 
@section('content')
<h1>
  Información de Unidad Encontrada
</h1>
        {{ HTML::link('/', 'Volver'); }}
        
       {{ Form::open(array('url' => 'unidades/detalle')) }}
        
            {{Form::label('idunidad', 'IdUnidad')}}
            {{Form::text('idunidad', $unidad->IdUnidad)}} <br>
            
            {{Form::label('idtipo', 'IdTipoUnidad')}}
            {{Form::text('idtipo', $unidad->IdTipoUnidad)}} <br>
            
            {{Form::label('tipoUnidad', 'TipoUnidad')}}
            {{Form::text('tipoUnidad', $unidad->TipoUnidad)}} <br>
            
            {{Form::label('movilidad', 'Movilidad')}}
            {{Form::text('movilidad', $unidad->Movilidad)}} <br>
            
            {{Form::label('normal', 'IconNormal')}}
            {{Form::text('normal', $unidad->IconNormal)}} <br>
            
            {{Form::label('panic', 'IconPanic')}}
            {{Form::text('panic', $unidad->IconPanic)}} <br>
            
            {{Form::label('off', 'IconOff')}}
            {{Form::text('off', $unidad->IconOff)}} <br>
            
            {{Form::label('attention', 'IconAttention')}}
            {{Form::text('attention', $unidad->IconAttention)}} <br>
            
            {{Form::label('latitud', 'Latitud')}}
            {{Form::text('latitud', $unidad->Latitud)}} <br>
            
            {{Form::label('longitud', 'Longitud')}}
            {{Form::text('longitud', $unidad->Longitud)}} <br>
            
            {{Form::label('altitud', 'Altitud')}}
            {{Form::text('altitud', $unidad->Altitud)}} <br>
            
            {{Form::label('ultLectura', 'UltLectura')}}
            {{Form::text('ultLectura', $unidad->UltLectura)}} <br>
            
            {{Form::label('buttonPanic', 'ButtonPanic')}}
            {{Form::text('buttonPanic', $unidad->ButtonPanic)}} <br>
            
            {{Form::label('inhabilitar', 'Inhabilitar')}}
            {{Form::text('inhabilitar', $unidad->Inhabilitar)}} <br>
            
            {{Form::label('aperturaSeguro', 'AperturaSeguro')}}
            {{Form::text('aperturaSeguro', $unidad->AperturaSeguro)}} <br>
            
            {{Form::label('alarmaActiva', 'AlarmaActiva')}}
            {{Form::text('alarmaActiva', $unidad->AlarmaActiva)}} <br>
            
            {{Form::label('lucesEncendidas', 'LucesEncendidas')}}
            {{Form::text('lucesEncendidas', $unidad->LucesEncendidas)}} <br>
            
            {{Form::label('sirenaActiva', 'SirenaActiva')}}
            {{Form::text('sirenaActiva', $unidad->SirenaActiva)}} <br>
            
            {{Form::label('evento', 'Evento')}}
            {{Form::text('evento', $unidad->Evento)}} <br>
            
            {{Form::label('velocidad', 'Velocidad')}}
            {{Form::text('velocidad', $unidad->Velocidad)}} <br>
            
            {{Form::label('EngineOn', 'EngineOn')}}
            {{Form::text('engineOn', $unidad->EngineOn)}} <br>
            
            {{Form::submit('Detalle')}}
        {{ Form::close() }}
      
        
@stop

