<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;


    protected $table = 'pessoa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         'cpf',
         'phone',
         'objective',
         'birth',
         'company',
         'job',
         'function',
         'address',
         'district',
         'cep',
         'city'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
     
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'cpf_verified_at' => 'datetime',
    ];

    public function create($fields)
    {
        return parent::create([
            'name' => $fields['name'],
            'cpf' => $fields['cpf'] ,
            'phone' => $fields['phone'] ,
            'objective' => $fields['objective'],
            'birth' => $fields['birth'],
           'company' => $fields['company'],
            'job'=> $fields['job'],
           'function'=> $fields['function'],
           'address'=> $fields['address'],
            'district'=> $fields['district'],
           'cep'=> $fields['cep'],
            'city' => $fields['city']
        ]);
    }
}


