<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastrar livro
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{route('dashboard')}}" class="btn btn-dark mt-3 ms-4">Voltar</a>
                <div class="p-6 text-gray-900">
                    <form action="{{route('books.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="serie" class="form-label">Nome do livro: </label>
                            <input type="text" name="name" id="" class="form-control" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="serie" class="form-label">Descrição: </label>
                            <input type="text" name="description" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="serie" class="form-label">Autor: </label>
                            <input type="text" name="author" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="serie" class="form-label">Número de páginas: </label>
                            <input type="number" name="pages" id="" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
