@extends('layout')
@section('content')

<div class="container py-5">

    <!-- Título central -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">
            Sistema de Recompensas por Ações Sustentáveis
        </h1>
        <p class="text-secondary fs-5 mt-3">
            Ganhe pontos realizando ações que ajudam o planeta. Troque por recompensas e acompanhe seu progresso sustentável!
        </p>
    </div>

    <!-- Cards de funcionalidades -->
    <div class="row g-4 mb-4">

        <div class="col-md-4">
            <div class="card bg-dark text-light h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-leaf fs-1 text-success"></i>
                    <h5 class="mt-3">Registrar Ações</h5>
                    <p class="small text-secondary">Cadastre suas ações sustentáveis e acumule pontos automaticamente.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-light h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-gift fs-1 text-warning"></i>
                    <h5 class="mt-3">Recompensas</h5>
                    <p class="small text-secondary">Troque seus pontos por recompensas exclusivas.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-dark text-light h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>
                    <h5 class="mt-3">Seu Progresso</h5>
                    <p class="small text-secondary">Acompanhe sua evolução e metas diárias sem esforço.</p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
