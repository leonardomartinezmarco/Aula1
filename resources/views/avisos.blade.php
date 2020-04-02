@extends('layouts.externo')

@section('title', 'Quadro de avisos da empresa')

@section('sidebar')
    @parent
        <p>-- Barra superior adicionada do layont pai/mãe --</p>
@endsection

@section('content')
    <p>Quadro de avisos da empresa</p><br>
    <p>Olá {{$nome}}, Veja abaixo os avisos de hoje:</p>

@if ($mostrar)
    Mostrar aviso
@else 
    Escondendo aviso
@endif

@foreach($avisos as $aviso)
    <p>Aviso {{ $aviso['id'] }}: {{ $aviso['texto']}}</p>
@endforeach



@endsection 


