@extends('layouts.app')

@section('title', 'Sobre Nós')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-lg p-4 mb-5 bg-white rounded">
            <div class="card-body text-center">
                <h1 class="card-title display-4">Conheça Nossa História</h1>
                <p class="lead">
                    Nascemos de uma ideia simples: transformar o mercado com inovação, qualidade e uma paixão inabalável por nossos clientes.
                </p>
                <hr class="my-4">
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h2 class="text-primary">Nossa História</h2>
                    <p>Fundada em 2010, nossa jornada começou com um time pequeno, mas com uma grande visão. Superamos desafios, celebramos conquistas e, passo a passo, construímos uma empresa sólida e reconhecida pela qualidade e dedicação aos nossos clientes. Crescemos, mas nunca perdemos a essência que nos guia desde o início: a busca incansável pela excelência.</p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-primary">Missão e Valores</h2>
                    <p><strong>Nossa Missão:</strong> Entregar as melhores soluções para nossos clientes, superando expectativas e criando valor de forma sustentável.</p>
                    <p><strong>Nossos Valores:</strong></p>
                    <ul>
                        <li><strong>Inovação:</strong> Sempre buscando o que há de mais novo no mercado.</li>
                        <li><strong>Integridade:</strong> Agimos com ética e transparência em todas as nossas relações.</li>
                        <li><strong>Colaboração:</strong> Acreditamos que o trabalho em equipe é o segredo do sucesso.</li>
                        <li><strong>Foco no Cliente:</strong> O cliente está sempre no centro de nossas decisões.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection