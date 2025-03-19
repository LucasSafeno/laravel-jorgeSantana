<?php

namespace Database\Seeders;

use App\Models\MotivoContato;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MotivoContato::create(['motivo_contato' => 'Dúvida']);
        MotivoContato::create(['motivo_contato' => 'Elógio']);
        MotivoContato::create(['motivo_contato' => 'Reclamação']);
    }
}
