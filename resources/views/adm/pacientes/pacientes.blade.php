@extends('layout.indexAdm')

@section('content')

<h2>Pacientes</h2>



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
                        <form action="{{ route('pacientes.destroy', $linha->id) }}" method="POST" style="display:inline;"> 
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>

                        <a href="{{ route('pacientes.edit', $linha->id) }}" class="btn btn-primary">Editar</a> 
                     
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
