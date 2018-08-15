<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'Célio Gomes Gouvea',
            'email'         => 'celiogomesgouvea@gmail.com',
            'password'      => bcrypt('Fernando2018'),
            'cpf'           => '01430857196',
            'telefone'      => '63992720118',
            'endereco'      => 'Rua 2 de Julho, Qd. 15, Lt. 16',
            'bairro'        => 'Aureny II',
            'cidade'        => 'Palmas',
            'estado'        => 'TO',
            'imagem'        => ''
        ]);
    }
}
