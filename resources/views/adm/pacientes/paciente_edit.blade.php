@extends('layout.indexAdm') {{-- ou o layout que você estiver usando --}}

@section('content')
<div class="container">
    <h1>Editar Paciente</h1>

    {{-- Exibe mensagens de sucesso ou erro --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulário para editar o paciente --}}
    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $paciente->nome) }}" required>
        </div>

        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="{{ old('data_nascimento', $paciente->data_nascimento) }}" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="{{ old('telefone', $paciente->telefone) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $paciente->email) }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Paciente</button>
        <a href="{{ route('pacientes') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection