<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        $alunos = [
            ['nome' => 'Ana Silva', 'email' => 'ana.silva@email.com', 'curso' => 'Engenharia de Software', 'data_nascimento' => '2001-03-12'],
            ['nome' => 'Bruno Costa', 'email' => 'bruno.costa@email.com', 'curso' => 'Análise e Desenvolvimento de Sistemas', 'data_nascimento' => '2000-07-25'],
            ['nome' => 'Carla Souza', 'email' => 'carla.souza@email.com', 'curso' => 'Engenharia de Software', 'data_nascimento' => '2002-01-08'],
            ['nome' => 'Diego Almeida', 'email' => 'diego.almeida@email.com', 'curso' => 'Ciência da Computação', 'data_nascimento' => '1999-11-30'],
            ['nome' => 'Elisa Ferreira', 'email' => 'elisa.ferreira@email.com', 'curso' => 'Engenharia de Software', 'data_nascimento' => '2001-05-17'],
            ['nome' => 'Felipe Rocha', 'email' => 'felipe.rocha@email.com', 'curso' => 'Sistemas de Informação', 'data_nascimento' => '2000-09-02'],
            ['nome' => 'Gabriela Lima', 'email' => 'gabriela.lima@email.com', 'curso' => 'Engenharia de Software', 'data_nascimento' => '2002-04-21'],
            ['nome' => 'Henrique Melo', 'email' => 'henrique.melo@email.com', 'curso' => 'Ciência da Computação', 'data_nascimento' => '1999-12-14'],
            ['nome' => 'Isabela Martins', 'email' => 'isabela.martins@email.com', 'curso' => 'Análise e Desenvolvimento de Sistemas', 'data_nascimento' => '2001-08-06'],
            ['nome' => 'João Pedro', 'email' => 'joao.pedro@email.com', 'curso' => 'Engenharia de Software', 'data_nascimento' => '2000-02-28'],
        ];

        foreach ($alunos as $aluno) {
            Aluno::create($aluno);
        }
    }
}
