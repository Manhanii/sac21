@extends('layouts.app')

@section('header')


@section('content')
<div>
    <div class=" flex items-center justify-center bg-gray-100 pt-8">
    <form action="{{route('people.store')}}" method="POST">
            @csrf

            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            </div>
            @endif

            <div class="d-md-flex pt-8 ">
                <strong>Cadastrar Pessoa</strong>
                <!-- <div>
                    <div class="form-label">
                        <div>
                            <label for="name" >Nome</label>
                        </div>
                        <input id="name" name="name" type="text" /> <br />
                    </div>
                    <div class="form-label">
                        <div>
                            <label for="cpf" value="{{ old('cpf')}}">CPF</label>
                        </div>
                        <input id="cpf" name="cpf" minlength="8" type="password" /> <br />
                    </div>
                </div>
                <div class="pb-md-0">
                    <div class="form-label">
                        <div class="form-label">
                            <div>
                                <label for="phone">Telefone</label>
                            </div>
                            <div>
                                <input id="phone" name="phone" type="text" /> <br />
                            </div>

                        </div>
                    </div>
                </div> -->

            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
              
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                                    <input type="text" name="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div>
                                    <div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                                            <input type="text" minlength="8" name="cpf" id="cpf" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
                                    <input type="text" name="phone" id="phone" autocomplete="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                            </div>

                            <button type="submit" class="bg-white mt-4 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 mr-3 border border-gray-400 rounded shadow">
                             Cadastrar
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