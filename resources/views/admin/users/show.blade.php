@extends('admin.layouts.app')
@section('title', 'Detalhes do usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100">
            Detalhes do usuário
        </h2>
    </div>
    <ul class="max-w-md space-y-1  text-gray-500 list-disc list-inside">
        <li class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">Nome: {{ $user->name }}</li>
        <li class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">E-mail: {{ $user->email }}</li>
    </ul>
    <x-alert/>

    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button>
    @endcan
@endsection