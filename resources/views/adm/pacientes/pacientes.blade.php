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
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $linha)
                <tr>
                    <td>{{ $linha->nome }}</td>
                    <td>{{ $linha->data_nascimento }}</td>
                    <td>{{ $linha->telefone }}</td>
                    <td>{{ $linha->email }}</td>
                    <th>    <button type="submit">Editar</button>
                        <button type="submit">Excluir</button></th>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
