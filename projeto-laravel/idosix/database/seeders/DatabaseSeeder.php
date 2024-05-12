<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Especialidades;
use App\Models\Agendamento;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\Double;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table("especialidades")->insert([
            "descricao" => "Cardiologista",
            "preco"=> 250.00,
        ]);
        DB::table("especialidades")->insert([
            "descricao" => "Cliníco Geral",
            "preco"=> 100.00,
        ]);
        DB::table("especialidades")->insert([
            "descricao" => "Urologista",
            "preco"=> 100.00,
        ]);
        
        DB::table("users")->insert([
            "nome"=> "admin",
            "cpf" => "66666666666",
            "genero" => "Masculino",
            "data_nascimento" => "1996-02-27",
            "celular"=> "67956567878",
            "cep" => "12345233",
            "logradouro" => "rua99",
            "numero" => "99",
            "complemento" => "complemento do lado do cabaré",
            "bairro" => "bairro99",
            "cidade" => "cidade99",
            "estado" => "estado99",
            "email" => "admin@exemplo.com",
            "password" => Hash::make("12345678"),
            "tipo" => "admin",
        ]);

        DB::table("users")->insert([
            "nome"=> "cliente1",
            "cpf" => "99999999999",
            "genero" => "Masculino",
            "data_nascimento" => "1996-02-27",
            "celular"=> "67987878787",
            "cep" => "12345678",
            "logradouro" => "rua1",
            "numero" => "1",
            "complemento" => "complemento1",
            "bairro" => "bairro1",
            "cidade" => "cidade1",
            "estado" => "estado1",
            "email" => "cliente1@exemplo.com",
            "password" => Hash::make("12345678"),
            "tipo" => "cliente",
        ]);

        DB::table("users")->insert([
            "nome"=> "medico1",
            "cpf" => "99999987999",
            "crm" => "12345678",
            "genero" => "Masculino",
            "data_nascimento" => "1999-08-17",
            "celular"=> "67955668787",
            "cep" => "12345546",
            "logradouro" => "rua2",
            "numero" => "2",
            "complemento" => "complemento2",
            "bairro" => "bairro2",
            "cidade" => "cidade2",
            "estado" => "estado2",
            "email" => "medico1@exemplo.com",
            "password" => Hash::make("12345678"),
            "tipo" => "medico",
            "id_especialidade" => 1,
        ]);
        DB::table("users")->insert([
            "nome"=> "medico2",
            "cpf" => "99912999999",
            "crm" => "87654321",
            "genero" => "Feminino",
            "data_nascimento" => "1998-07-15",
            "celular"=> "67987871221",
            "cep" => "12345249",
            "logradouro" => "rua3",
            "numero" => "3",
            "complemento" => "complemento3",
            "bairro" => "bairro3",
            "cidade" => "cidade3",
            "estado" => "estado3",
            "email" => "medico2@exemplo.com",
            "password" => Hash::make("12345678"),
            "tipo" => "medico",
            "id_especialidade" => 2,
        ]);
        DB::table("agendamentos")->insert([
            "id_cliente" => 2,
            "id_medico" => 3,
            "data" => "2024-06-13",
            "forma_pagamento" => "Pix",
        ]);
        DB::table("agendamentos")->insert([
            "id_cliente" => 2,
            "id_medico" => 3,
            "data" => "2024-06-29",
            "forma_pagamento" => "Convênio",
        ]);
    }

}
