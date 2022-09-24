













<!--
@extends('layouts.app')

@section('header')

<div>
    <h2>
        {{__('Pessoas') }}
    </h2>
</div>

@endsection

@section('content')




<div class="bg-gray-50 px-4 py-5 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500 ">
        <ul>
        @foreach( $people as $person)
        <li class="border-b-4 border-black-300 py-2 text-base">
            <a href="{{ route('people.show', $person)}}">
                {{ $person -> name}} </a>
        </li>
        @endforeach
    </ul>   
        </dt>
        
      </div>
<div>

   
    <button type="submit" class="bg-white mt-4 hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 mr-3 border border-gray-400 rounded shadow">
        <a href=" {{route('people.create')}}">Cadastrar</a>
    </button>

</div>

@endsection
-->