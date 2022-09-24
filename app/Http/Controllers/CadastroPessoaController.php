<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Requests\User\LoguinRequest;
use Illuminate\Http\Request;
use App\Http\Requests\people\Peoples;
use App\Models\People;
use App\Services\ResponseService;

class CadastroPessoaController extends Controller
{

    public function index()
    {

        $peoples = People::all();


        return view('cadastro.people', [
            'people' => $peoples
        ]);
    }

    public function create()
    {

        return view('cadastro\cadastrar');
    }


    public function show(People $person)
    {
        return view('cadastro.show', ['person' => $person]);
    }

    public function edit(People $person)
    {

        return view('cadastro.edit', ['person' => $person]);
    }




    public function update(Request $request, People $person)
    {
        $person->update($request->only(
            'name',
            'cpf',
            'phone',
            'birth',
            'objective',
            'company',
            'job',
            'function',
            'address',
            'district',
            'cep',
            'city'
        ));
        //  dd($request->all());

        $person->fill($request->all())->save();
        return redirect()->route('people.index');
        //   return view('dashboard', [

        //]);
    }

    public function store(Request $request)
    {



        $request->validate([
            'name' => 'required',
            'cpf' => 'required|numeric',
            'phone' => 'required|numeric',

        ]);
        //  dd($request->all());
        $people = new People($request->only('name', 'cpf', 'phone', 'objective'));

        $people->save();

        return redirect()->route('people.index');
        //   return view('dashboard', [

        //]);
    }
}
