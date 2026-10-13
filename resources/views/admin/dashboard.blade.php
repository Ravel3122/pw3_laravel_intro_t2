@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    <section class="flex flex-wrap items-center justify-between gap-4">
    <div>
        <h2 class="text-3xl font-bold text-slate-900">Painel Administrativo</h2>
        <p class="text-slate-600">Resumo rápido do sistema para tomada de decisão.</p>
    </div>
    <a href="/usuarios/novo" class="rounded-lg bg-slate-900 px-4 py-2 font-medium text-white hover:bg-slate-700">
        Novo usuário
    </a>
</section>
<section class="mt-8 grid gap-4 md:grid-cols-3">
    <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Usuários ativos</p>
        <p class="mt-2 text-3xl font-bold text-slate-900">67</p>
    </article>
    <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Pendentes de validação</p>
        <p class="mt-2 text-3xl font-bold text-amber-600">5</p>
    </article>
    <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Usuários offline</p>
        <p class="mt-2 text-3xl font-bold text-slate-900">12</p>
    </article>
</section>
<section class="mt-8 grid gap-4 md:grid-cols-3">
    <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Usuários ativos</p>
        <p class="mt-2 text-3xl font-bold text-slate-900">67</p>
    </article>
    <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Pendentes de validação</p>
        <p class="mt-2 text-3xl font-bold text-amber-600">5</p>
    </article>
    <article class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Usuários offline</p>
        <p class="mt-2 text-3xl font-bold text-slate-900">12</p>
    </article>
</section>
<footer class="mt-8 rounded-xl bg-slate-900 px-6 py-4 text-sm text-slate-300">
    <div class="flex flex-wrap items-center justify-between gap-2">
        <p>© {{ date('Y') }} Painel Administrativo</p>
        <p>Versão 1.0.0</p>
    </div>
</footer>
@endsection