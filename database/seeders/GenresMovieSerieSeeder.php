<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresMovieSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'Ação', 'description' => 'Gêneros com cenas de ação intensas, incluindo lutas, perseguições e confrontos explosivos.', 'category' => 'Movie/Serie'],
            ['genre' => 'Animação', 'description' => 'Produções animadas, incluindo desenhos e gráficos computadorizados.', 'category' => 'Movie/Serie'],
            ['genre' => 'Anime', 'description' => 'Animações japonesas com estilos artísticos e narrativas distintas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Aventura', 'description' => 'Histórias que exploram locais desconhecidos e desafios emocionantes.', 'category' => 'Movie/Serie'],
            ['genre' => 'Biografia', 'description' => 'Histórias baseadas na vida de pessoas reais, retratando sua trajetória e conquistas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Casa e Jardim', 'description' => 'Conteúdos relacionados à decoração, design de interiores e jardinagem.', 'category' => 'Movie/Serie'],
            ['genre' => 'Comédia Romântica', 'description' => 'Mistura romance e humor, com histórias leves e divertidas sobre relacionamentos.', 'category' => 'Movie/Serie'],
            ['genre' => 'Comédia', 'description' => 'Obras com foco no humor e situações engraçadas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Crime', 'description' => 'Narrativas centradas em crimes, investigações e justiça.', 'category' => 'Movie/Serie'],
            ['genre' => 'Curta', 'description' => 'Curtas-metragens com histórias concisas e impactantes.', 'category' => 'Movie/Serie'],
            ['genre' => 'Cyberpunk', 'description' => 'Explora futuros distópicos, com alta tecnologia, implantes cibernéticos e sociedades decadentes.', 'category' => 'Movie/Serie'],
            ['genre' => 'Documentário', 'description' => 'Filmes e séries que exploram fatos, histórias reais e eventos do mundo.', 'category' => 'Movie/Serie'],
            ['genre' => 'Docuseries', 'description' => 'Séries documentais que exploram eventos ou figuras históricas, sociais ou culturais.', 'category' => 'Movie/Serie'],
            ['genre' => 'Dorama', 'description' => 'Histórias emocionantes que exploram temas como romance, amizade e superação, destacando os desafios do cotidiano e características culturais únicas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Drama Médico', 'description' => 'Histórias focadas em temas de medicina, hospitais e dilemas éticos médicos.', 'category' => 'Movie/Serie'],
            ['genre' => 'Drama', 'description' => 'Obras que enfatizam conflitos emocionais e interpessoais.', 'category' => 'Movie/Serie'],
            ['genre' => 'Entretenimento', 'description' => 'Conteúdo leve e divertido para entretenimento geral.', 'category' => 'Movie/Serie'],
            ['genre' => 'Esportes', 'description' => 'Filmes, documentários e programas sobre esportes e atletas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Fantasia', 'description' => 'Histórias ambientadas em mundos imaginários, com elementos mágicos e sobrenaturais.', 'category' => 'Movie/Serie'],
            ['genre' => 'Faroeste', 'description' => 'Histórias ambientadas no Velho Oeste, com cowboys e aventuras.', 'category' => 'Movie/Serie'],
            ['genre' => 'Fé e Espiritualidade', 'description' => 'Obras que abordam temas religiosos e espirituais.', 'category' => 'Movie/Serie'],
            ['genre' => 'Feriados', 'description' => 'Filmes e séries ambientados em períodos festivos, como Natal e Ano Novo.', 'category' => 'Movie/Serie'],
            ['genre' => 'Ficção Científica', 'description' => 'Obras com temas como tecnologia futurista, viagens espaciais e avanços científicos.', 'category' => 'Movie/Serie'],
            ['genre' => 'Game Show', 'description' => 'Programas de competição e quiz envolvendo participantes e prêmios.', 'category' => 'Movie/Serie'],
            ['genre' => 'Guerra', 'description' => 'Obras que retratam conflitos militares e suas consequências.', 'category' => 'Movie/Serie'],
            ['genre' => 'História', 'description' => 'Produções focadas em eventos históricos e figuras importantes.', 'category' => 'Movie/Serie'],
            ['genre' => 'Histórico', 'description' => 'Ambientado em épocsas passadas, retratando eventos e personagens históricos importantes.', 'category' => 'Movie/Serie'],
            ['genre' => 'Infantil e Família', 'description' => 'Produções voltadas para crianças e momentos em família.', 'category' => 'Movie/Serie'],
            ['genre' => 'Mistério e Suspense', 'description' => 'Narrativas com mistérios intrigantes e momentos de tensão.', 'category' => 'Movie/Serie'],
            ['genre' => 'Mistério', 'description' => 'Gênero que envolve a resolução de enigmas, muitas vezes com reviravoltas e suspense.', 'category' => 'Movie/Serie'],
            ['genre' => 'Música', 'description' => 'Obras centradas em música, performances e histórias de artistas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Musical', 'description' => 'Filmes e séries com números musicais integrados à narrativa.', 'category' => 'Movie/Serie'],
            ['genre' => 'Natureza', 'description' => 'Documentários e conteúdos relacionados à vida selvagem e meio ambiente.', 'category' => 'Movie/Serie'],
            ['genre' => 'Notícias', 'description' => 'Programas jornalísticos que trazem as últimas notícias e acontecimentos.', 'category' => 'Movie/Serie'],
            ['genre' => 'Novela', 'description' => 'Histórias com drama contínuo, reviravoltas e intrigas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Policial', 'description' => 'Focado em investigações criminais, detetives, e policiais que lutam contra o crime.', 'category' => 'Movie/Serie'],
            ['genre' => 'Reality', 'description' => 'Programas de TV que retratam situações reais ou competições.', 'category' => 'Movie/Serie'],
            ['genre' => 'Romance', 'description' => 'Histórias centradas em relacionamentos amorosos e emoções.', 'category' => 'Movie/Serie'],
            ['genre' => 'Saúde e Bem-Estar', 'description' => 'Conteúdos voltados para saúde, qualidade de vida e bem-estar.', 'category' => 'Movie/Serie'],
            ['genre' => 'Stand-Up', 'description' => 'Performances cômicas ao vivo realizadas por comediantes.', 'category' => 'Movie/Serie'],
            ['genre' => 'Suspense', 'description' => 'Gênero que mantém o público em tensão, com reviravoltas, mistérios e situações imprevisíveis.', 'category' => 'Movie/Serie'],
            ['genre' => 'Talk Show', 'description' => 'Programas de entrevistas com convidados especiais e discussões.', 'category' => 'Movie/Serie'],
            ['genre' => 'Terror', 'description' => 'Histórias criadas para provocar medo, tensão e sustos.', 'category' => 'Movie/Serie'],
            ['genre' => 'Thriller Psicológico', 'description' => 'Focado na tensão mental, explorando a psique dos personagens e seus conflitos emocionais.', 'category' => 'Movie/Serie'],
            ['genre' => 'Variedades', 'description' => 'Programas com formatos diversos, incluindo esquetes, música e entrevistas.', 'category' => 'Movie/Serie'],
            ['genre' => 'Viagem', 'description' => 'Conteúdos que exploram viagens, culturas e destinos pelo mundo.', 'category' => 'Movie/Serie'],
        ]);
    }
}
