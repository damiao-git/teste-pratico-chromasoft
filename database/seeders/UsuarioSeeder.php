<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create(['nome' => 'Maria', 'email' => 'maria@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'José', 'email' => 'jose@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'João', 'email' => 'joao@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Mariana', 'email' => 'mariana@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Hugo', 'email' => 'hugo@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Bob', 'email' => 'Bob@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Jubileu', 'email' => 'jubileu@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Allyne', 'email' => 'allyne@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Tereza', 'email' => 'tereza@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Ricardo', 'email' => 'ricardo@gmail.com', 'senha' => Hash::make('123456')]);
        Usuario::create(['nome' => 'Douglas - Lembrei de você', 'email' => 'douglas@gmail.com', 'senha' => Hash::make('123456')]);
    }
}
