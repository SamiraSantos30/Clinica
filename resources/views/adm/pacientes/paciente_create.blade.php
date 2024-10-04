@extends('layout.indexAdm')
@section('content')

<h1>Cadastro de cliente:</h1>

<a href="{{ route('pacientes') }}">Ver lista de pacientes</a> <!-- Adicionando o link para a página de pacientes -->

<form action="{{ route('pacientes.store') }}" method="POST">
    @csrf
    <label>Nome</label>
    <input name="nome" type="text" required>

    <label>Data nascimento</label>
    <input name="data_nascimento" type="date" required>

    <label>Telefone</label>
    <input name="telefone" type="text" required>

    <label>Email</label>
    <input name="email" type="text">
 
    <button type="submit">Cadastrar</button>
</form>

@endsection
