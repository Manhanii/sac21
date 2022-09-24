@extends('layouts.app')

@section('header')


@section('content')
<div>
    <div class=" flex items-center justify-center bg-gray-100 pt-8">
        <form action="{{route('people.update', $person)}}" method="POST">
            @csrf
            @method('PUT')

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            </div>
            @endif

            <div class="d-md-flex pt-8 ">
                <strong>Editar Informações</strong>


            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">

                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-4 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                                <input type="text" name="name" id="name" autocomplete="name" value="{{ $person->name}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div>
                                <div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                                        <input type="text" minlength="8" name="cpf" id="cpf" value="{{ $person->cpf}}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="birth" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
                                        <input type="text" minlength="8" name="birth" id="birth" value="{{ $person->birth}}" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                                <input type="text" name="phone" id="phone" autocomplete="phone" value="{{ $person->phone}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="objective" class="block text-sm font-medium text-gray-700">Profissão</label>
                                <input type="text" name="job" id="job" autocomplete="job" value="{{ $person->job}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="company" class="block text-sm font-medium text-gray-700">Instituição/Empresa</label>
                                <input type="text" name="company" id="company" autocomplete="company" value="{{ $person->company}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="function" class="block text-sm font-medium text-gray-700">Cargo/Função</label>
                                <input type="text" name="function" id="function" autocomplete="function" value="{{ $person->function}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Endereço</label>
                                <input type="text" name="address" id="address" autocomplete="address" value="{{ $person->address}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="district" class="block text-sm font-medium text-gray-700">Bairro</label>
                                <input type="text" name="district" id="district" autocomplete="district" value="{{ $person->district}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="cep" class="block text-sm font-medium text-gray-700">CEP</label>
                                <input type="text" name="cep" id="cep" autocomplete="cep" value="{{ $person->cep}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="city" class="block text-sm font-medium text-gray-700">Cidade/UF</label>
                                <input type="text" name="city" id="city" autocomplete="city" value="{{ $person->city}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="objective" class="block text-sm font-medium text-gray-700">Objetivo</label>
                                <input type="text" name="objective" id="objective" autocomplete="objective" value="{{ $person->objective}} " class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
             

                        </div>

                        <button type="submit" class="bg-white mt-4 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 mr-3 border border-gray-400 rounded shadow">
                            Salvar
                        </button>
                        <!-- </form> -->
                        <div class="text-center pt-8 pb-8">


                            <a class=" bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 mr-3 border border-gray-400 rounded shadow" href="/dashboard">Voltar</a>


                            </button>
                        </div>
        </form>

    </div>
</div>

</div>

@endsection