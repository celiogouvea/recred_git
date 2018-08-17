<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cpf','telefone','endereco','bairro','cidade','estado','remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function salvar($newUser)
    {


        //dd($newUser);

       User::create([
            'name' => $newUser['name'],
            'email' => $newUser['email'],
            'password' => Hash::make($newUser['password']),
            'cpf'=> $newUser['cpf'],
            'telefone'=> $newUser['telefone'],
            'endereco'=> $newUser['endereco'],
            'bairro'=> $newUser['bairro'],
            'cidade'=> $newUser['cidade'],
            'estado'=> $newUser['estado']
        ]);
    }



}
