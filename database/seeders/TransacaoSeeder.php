<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transacao;
use Faker\Factory;

class TransacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Transacao::create([
                'tipo' => $fake->randomElement(['receita', 'despesa']),
                'categoria' => $fake->randomElement(['Alimentação', 'Transporte', 'Saúde', 'Educação', 'Lazer', 'Moradia']),
                'valor' => $fake->randomFloat(2, 10, 1000),
                'descricao' => $fake->sentence(),
                'data' => $fake->dateTimeBetween('2023-01-01', '2025-05-24')->format('Y-m-d'),
            ])->save();
        }      
    }
}
