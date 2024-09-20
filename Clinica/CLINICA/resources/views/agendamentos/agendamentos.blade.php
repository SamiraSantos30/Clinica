@extends('master')

@section('content')

<h2>agendamentos</h2>

<ul>
    @foreach ($agendamentos as $agendamento)
    <li>{{$agendamento-->firstName}}</li>
</ul>

@endsection