<?php

namespace Database\Seeders;

use App\Enums\ContentType;
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
            ['genre' => 'Ação', 'description' => 'Gêneros com cenas de ação intensas, incluindo lutas, perseguições e confrontos explosivos.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Animação', 'description' => 'Produções animadas, incluindo desenhos e gráficos computadorizados.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Anime', 'description' => 'Animações japonesas com estilos artísticos e narrativas distintas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Aventura', 'description' => 'Histórias que exploram locais desconhecidos e desafios emocionantes.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Biografia', 'description' => 'Histórias baseadas na vida de pessoas reais, retratando sua trajetória e conquistas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Casa e Jardim', 'description' => 'Conteúdos relacionados à decoração, design de interiores e jardinagem.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Comédia Romântica', 'description' => 'Mistura romance e humor, com histórias leves e divertidas sobre relacionamentos.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Comédia', 'description' => 'Obras com foco no humor e situações engraçadas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Crime', 'description' => 'Narrativas centradas em crimes, investigações e justiça.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Curta', 'description' => 'Curtas-metragens com histórias concisas e impactantes.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Cyberpunk', 'description' => 'Explora futuros distópicos, com alta tecnologia, implantes cibernéticos e sociedades decadentes.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Documentário', 'description' => 'Filmes e séries que exploram fatos, histórias reais e eventos do mundo.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Docuseries', 'description' => 'Séries documentais que exploram eventos ou figuras históricas, sociais ou culturais.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Dorama', 'description' => 'Histórias emocionantes que exploram temas como romance, amizade e superação, destacando os desafios do cotidiano e características culturais únicas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Drama Médico', 'description' => 'Histórias focadas em temas de medicina, hospitais e dilemas éticos médicos.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Drama', 'description' => 'Obras que enfatizam conflitos emocionais e interpessoais.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Entretenimento', 'description' => 'Conteúdo leve e divertido para entretenimento geral.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Esportes', 'description' => 'Filmes, documentários e programas sobre esportes e atletas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Fantasia', 'description' => 'Histórias ambientadas em mundos imaginários, com elementos mágicos e sobrenaturais.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Faroeste', 'description' => 'Histórias ambientadas no Velho Oeste, com cowboys e aventuras.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Fé e Espiritualidade', 'description' => 'Obras que abordam temas religiosos e espirituais.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Feriados', 'description' => 'Filmes e séries ambientados em períodos festivos, como Natal e Ano Novo.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Ficção Científica', 'description' => 'Obras com temas como tecnologia futurista, viagens espaciais e avanços científicos.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Game Show', 'description' => 'Programas de competição e quiz envolvendo participantes e prêmios.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Guerra', 'description' => 'Obras que retratam conflitos militares e suas consequências.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'História', 'description' => 'Produções focadas em eventos históricos e figuras importantes.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Histórico', 'description' => 'Ambientado em épocsas passadas, retratando eventos e personagens históricos importantes.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Infantil e Família', 'description' => 'Produções voltadas para crianças e momentos em família.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Mistério e Suspense', 'description' => 'Narrativas com mistérios intrigantes e momentos de tensão.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Mistério', 'description' => 'Gênero que envolve a resolução de enigmas, muitas vezes com reviravoltas e suspense.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Música', 'description' => 'Obras centradas em música, performances e histórias de artistas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Musical', 'description' => 'Filmes e séries com números musicais integrados à narrativa.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Natureza', 'description' => 'Documentários e conteúdos relacionados à vida selvagem e meio ambiente.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Notícias', 'description' => 'Programas jornalísticos que trazem as últimas notícias e acontecimentos.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Novela', 'description' => 'Histórias com drama contínuo, reviravoltas e intrigas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Policial', 'description' => 'Focado em investigações criminais, detetives, e policiais que lutam contra o crime.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Reality', 'description' => 'Programas de TV que retratam situações reais ou competições.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Romance', 'description' => 'Histórias centradas em relacionamentos amorosos e emoções.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Saúde e Bem-Estar', 'description' => 'Conteúdos voltados para saúde, qualidade de vida e bem-estar.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Stand-Up', 'description' => 'Performances cômicas ao vivo realizadas por comediantes.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Suspense', 'description' => 'Gênero que mantém o público em tensão, com reviravoltas, mistérios e situações imprevisíveis.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Talk Show', 'description' => 'Programas de entrevistas com convidados especiais e discussões.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Terror', 'description' => 'Histórias criadas para provocar medo, tensão e sustos.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Thriller Psicológico', 'description' => 'Focado na tensão mental, explorando a psique dos personagens e seus conflitos emocionais.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Variedades', 'description' => 'Programas com formatos diversos, incluindo esquetes, música e entrevistas.', 'category' => ContentType::MOVIE_SERIES],
            ['genre' => 'Viagem', 'description' => 'Conteúdos que exploram viagens, culturas e destinos pelo mundo.', 'category' => ContentType::MOVIE_SERIES],
        ]);
    }
}
