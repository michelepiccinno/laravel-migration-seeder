@extends('layouts.app')

@foreach ($trains as $train)
    <div class="card">
        <h1>AZIENDA: </h1> {{ $train['azienda'] }}
        <h2>STAZIONE DI PARTENZA: </h2> {{ $train['stazione_di_partenza'] }}
        <h2>STAZIONE DI ARRIVO: </h2> {{ $train['stazione_di_arrivo'] }}
        <h2>ORARIO PARTENZA: </h2> {{ $train['orario_di_partenza'] }}
    </div>
@endforeach


@section('content')
@endsection
