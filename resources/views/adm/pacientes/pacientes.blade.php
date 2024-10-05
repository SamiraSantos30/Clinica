@extends('layout.indexAdm')

@section('content')

<h2>Pacientes</h2>

<a href={{ route('pacientes.create') }}>Cadastrar Paciente</a>

<div class="table-responsive">
    <table class="table align-items-center table-flush table-borderless">
        <thead>
            <tr>
                <th>Nome</th> 
                <th>Data nascimento</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th> <!-- Adiciona uma coluna para ações -->
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $linha)
                <tr>
                    <td>{{ $linha->nome }}</td>
                    <td>{{ $linha->data_nascimento }}</td>
                    <td>{{ $linha->telefone }}</td>
                    <td>{{ $linha->email }}</td>
                    <td>
                        <a href="{{ route('pacientes.edit', $linha->id) }}" class="btn btn-warning">Editar</a> <!-- Link para editar -->
                        <form action="{{ route('pacientes.destroy', $linha->id) }}" method="POST" style="display:inline;"> <!-- Formulário para excluir -->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
