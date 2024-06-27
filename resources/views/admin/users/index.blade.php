@extends('admin.layouts.app')
@section('title', 'Lista de usuários')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100">
            Lista de Usuários
        </h2>
    </div>

    
    <a href="{{ route('users.create') }}"> 
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Novo</button>
    </a>

    <x-alert/>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nome</th>
                <th scope="col" class="px-6 py-3">E-mail</th>
                <th scope="col" class="px-6 py-3">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$user->name}}</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$user->email}}</td>
                    <td class="px-6 py-4">
                        <a href=" {{route('users.edit', $user->id)}} " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        <a href=" {{route('users.show', $user->id)}} " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detalhes</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário no banco</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="py-4">
        {{ $users -> links() }}
    </div>
@endsection