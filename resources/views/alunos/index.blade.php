@extends('layouts.app')


@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               
                <div class="card-header">Alunos</div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            @foreach($alunos as $al)
                            <tr>
                                <td>{{ $al->id }}</td>    
                                <td>{{ $al->nome }}</td>    
                                <td>{{ $al->curso }}</td>
                                <td>{{ $al->email }}</td>
                                <td>{{ $al->endereco }}</td>
                                <td>
                                    <a href="{{ route('alunos.edit', $al->id) }}" class="btn btn-sm btn-info"><i class="material-icons">edit</i>Editar</a>
                                    
                                    <form method="POST" action="{{ route('alunos.destroy', $al->id) }}"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i>Excluir</button>
                                    </form>
                                </td>
                            </tr>    
                            @endforeach
                        </tbody>
                        
                    </table>
                    <div class="form-group row mb-2 mt-2 ml-2" style="text-align: right;">
                <div class="col-md-6">
                        <a href="{{ route('alunos.create') }}" class=" btn btn-primary"  style="text-align:center;  background-color:green">
                        <i class="material-icons" style="">person_add</i>   Novo Aluno
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
@endsection