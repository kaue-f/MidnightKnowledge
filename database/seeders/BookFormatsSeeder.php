<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookFormatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formats')->insert([
            ['name' => 'Impresso', 'description' => 'Versão tradicional do conteúdo em papel, encadernado e disponível fisicamente.'],
            ['name' => 'E-book', 'description' => 'Versão digital, lida em dispositivos como Kindle, tablets ou aplicativos.'],
            ['name' => 'Audiobook', 'description' => 'Versão narrada do conteúdo, ideal para ouvir em vez de ler.'],
            ['name' => 'Interativo', 'description' => 'Versão digital com elementos multimídia, como animações, sons ou vídeos.'],
            ['name' => 'Online', 'description' => 'Acesso direto ao conteúdo por meio de plataformas digitais.'],
            ['name' => 'Braille', 'description' => 'Versão adaptada em relevo, para leitura tátil por pessoas com deficiência visual.'],
            ['name' => 'Híbrido', 'description' => 'Combinação de dois ou mais formatos, como impresso com acesso digital ou com audiobook incluso.'],
        ]);
    }
}
