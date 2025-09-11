@extends('layouts.app')

@section('title', 'Detalhes da Turma')

@section('content')

<div class="row justify-content-center">
<div class="col-md-8 col-lg-6">
<div class="card shadow-lg p-4 mb-5 bg-white rounded">
<div class="card-body">
<h2 class="card-title text-center mb-4">Detalhes da Turma</h2>

            <div class="mb-3">
                <label class="form-label fw-bold">Nome da Turma:</label>
                <p class="form-control-static">{{ $turma->nome }}</p>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Descrição:</label>
                <p class="form-control-static">{{ $turma->descricao }}</p>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Ano:</label>
                <p class="form-control-static">{{ $turma->ano }}</p>
            </div>
            
            <div class="mt-4 text-center">
                <a href="{{ route('turmas.index') }}" class="btn btn-primary">Voltar para a Lista</a>
            </div>
        </div>
    </div>
</div>

</div>
@endsection   show.blade.php