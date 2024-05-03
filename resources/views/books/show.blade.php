<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$book->name}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{route('dashboard')}}" class="btn btn-dark mt-3 ms-4">Voltar</a>
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="row">
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$book->name}}</h5>
                                        <p class="card-text">{{$book->description}}</p>
                                        <p class="card-text">Autor: {{$book->author}}</p>
                                        <p class="card-text">{{$book->pages}} páginas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>