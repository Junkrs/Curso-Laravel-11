@extends('admin.layouts.app')
@section('title', 'Adicionar usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100">
            Novo usuário
        </h2>
    </div>

    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.users.partials.form')
    </form>

@endsection