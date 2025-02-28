<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Carbon\Factory;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteContato();
        // $contato->name = 'Sitema 56';
        // $contato->telefone = '(81)1234-5678';
        // $contato->email = 'contato@sg.com.br';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'Seja bem-vindo ao Sistema Super gestão';

        // $contato->save();

        //factory(SiteContatoFactory::class, 100)->create();
        //SiteContato::factory()->count(100)->create();
        //factory(SiteContato::class, 100)->create();
        SiteContatoFactory::factoryForModel(SiteContato::class)->count(100)->create();



    }
}
