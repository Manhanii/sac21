@extends('layouts.app');

@section('header')


@section('content')

<div  id="complete" class="complete">

<div   >
    <p>Cadastro completado com sucesso!!!</p>


</div>
    <div class="botoes">
        <button class="bg-transparent hover:bg-blue-300 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent">

Complementar Cadastro</button>
    

<button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">

            <a href="/dashboard"> Voltar</a>
        </button>
 
    </div>
</div>




@endsection