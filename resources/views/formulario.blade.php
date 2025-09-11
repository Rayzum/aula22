@extends('layouts.app')

@section('title', 'Cadastro de Aluno')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Cadastro de Aluno</h2>
                <form>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" required>
                    </div>
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso</label>
                        <select class="form-control" id="curso" required>
                            <option value="" disabled selected>Selecione um curso</option>
                            <option value="informatica">Informática</option>
                            <option value="design">Design</option>
                            <option value="engenharia">Engenharia</option>
                            <!-- Adicione mais opções conforme necessário -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
