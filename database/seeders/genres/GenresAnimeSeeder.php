<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresAnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => '4-Koma (Tirinhas)', 'description' => 'Estilo de comédia contado em quatro painéis curtos.', 'category' => ContentType::ANIME],
            ['genre' => 'Ação',  'description' => 'Focado em cenas de luta, batalhas e ação intensa, com muita energia e movimenta', 'category' => ContentType::ANIME],
            ['genre' => 'Artes Marciais',  'description' => 'Centrado em combates físicos, técnicas de luta e treinamento.', 'category' => ContentType::ANIME],
            ['genre' => 'Aventura',  'description' => 'Histórias que envolvem jornadas épicas e explorações de novos lugares.', 'category' => ContentType::ANIME],
            ['genre' => 'Biográficos', 'description' => 'Narrativas baseadas na vida de pessoas reais.', 'category' => ContentType::ANIME],
            ['genre' => 'Comédia Romântica',  'description' => 'Mistura de romance e comédia, explorando o desenvolvimento amoroso de maneira leve e divertida.', 'category' => ContentType::ANIME],
            ['genre' => 'Comédia',  'description' => 'Centrado no humor, com situações engraçadas e personagens cômicos.', 'category' => ContentType::ANIME],
            ['genre' => 'Conspiração', 'description' => 'Histórias sobre planos secretos envolvendo traições ou manipulações.', 'category' => ContentType::ANIME],
            ['genre' => 'Cyberpunk',  'description' => 'Ambientado em futuros distópicos, com temas de alta tecnologia, implantes cibernéticos e realidades virtuais.', 'category' => ContentType::ANIME],
            ['genre' => 'Dança', 'description' => 'Foco em dança como tema principal ou elemento recorrente.', 'category' => ContentType::ANIME],
            ['genre' => 'Demônio',  'description' => 'Explora temas relacionados a demônios e seres sobrenaturais, muitas vezes com uma visão sombria.', 'category' => ContentType::ANIME],
            ['genre' => 'Detetive',  'description' => 'Focado em mistérios e investigações criminais, com protagonistas resolvendo casos complexos.', 'category' => ContentType::ANIME],
            ['genre' => 'Drama Psicológico', 'description' => 'Enredos emocionantes que exploram dilemas mentais profundos.', 'category' => ContentType::ANIME],
            ['genre' => 'Drama',  'description' => 'Histórias focadas em emoções profundas, dilemas pessoais e desenvolvimento intenso dos personagens.', 'category' => ContentType::ANIME],
            ['genre' => 'Ecchi',  'description' => 'Conteúdo sexual sugestivo, com fanservice e situações eróticas, mas sem cenas explícitas.', 'category' => ContentType::ANIME],
            ['genre' => 'Escolar',  'description' => 'Se passa em ambiente escolar, explorando a vida estudantil, amizades e romances.', 'category' => ContentType::ANIME],
            ['genre' => 'Espaço',  'description' => 'Exploração espacial, naves e aventuras em outros planetas.', 'category' => ContentType::ANIME],
            ['genre' => 'Esportes',  'description' => 'Focado em competições esportivas, trabalho em equipe e desenvolvimento de personagens atletas.', 'category' => ContentType::ANIME],
            ['genre' => 'Fantasia',  'description' => 'Enredos que se passam em mundos imaginários, com elementos sobrenaturais, magia e criaturas míticas.', 'category' => ContentType::ANIME],
            ['genre' => 'Fantasma',  'description' => 'Envolve fantasmas ou espíritos como personagens principais, geralmente com temas sobrenaturais.', 'category' => ContentType::ANIME],
            ['genre' => 'Ficção Científica',  'description' => 'Explora temas futuristas como tecnologia avançada, robôs e viagens espaciais.', 'category' => ContentType::ANIME],
            ['genre' => 'Game',  'description' => 'Enredos que envolvem videogames, jogos de cartas ou RPGs, com personagens que competem ou vivem dentro de um jogo.', 'category' => ContentType::ANIME],
            ['genre' => 'Gore',  'description' => 'Envolve violência extrema, com sangue, mutilações e cenas gráficas explícitas.', 'category' => ContentType::ANIME],
            ['genre' => 'Gourmet (Culinária)',  'description' => 'Envolve culinária e alimentação, geralmente com foco em competições ou a arte de cozinhar.', 'category' => ContentType::ANIME],
            ['genre' => 'Guerra',  'description' => 'Exploração de batalhas, estratégias de guerra e a vida de soldados.', 'category' => ContentType::ANIME],
            ['genre' => 'Harem',  'description' => 'Um protagonista masculino cercado por várias personagens femininas, que têm interesse amoroso nele.', 'category' => ContentType::ANIME],
            ['genre' => 'Hentai',  'description' => 'Conteúdo sexual explícito.', 'category' => ContentType::ANIME],
            ['genre' => 'Hikikomori', 'description' => 'Personagens reclusos que evitam interação social.', 'category' => ContentType::ANIME],
            ['genre' => 'Histórico',  'description' => 'Ambientado em períodos históricos reais, com retratos de eventos e figuras importantes.', 'category' => ContentType::ANIME],
            ['genre' => 'Idol', 'description' => 'Tramas envolvendo astros da música pop e suas vidas públicas e privadas.', 'category' => ContentType::ANIME],
            ['genre' => 'Isekai',  'description' => 'O protagonista é transportado para um mundo paralelo ou realidade alternativa, geralmente com elementos de fantasia.', 'category' => ContentType::ANIME],
            ['genre' => 'Jogos de Cartas', 'description' => 'Histórias focadas em jogos de estratégia com cartas.', 'category' => ContentType::ANIME],
            ['genre' => 'Josei',  'description' => 'Voltado para mulheres adultas, abordando temas de relacionamentos e desafios da vida adulta.', 'category' => ContentType::ANIME],
            ['genre' => 'Kodomo',  'description' => 'Voltado para crianças, com temas simples e educativos, sem complexidade emocional ou violên', 'category' => ContentType::ANIME],
            ['genre' => 'Lendas Urbanas', 'description' => 'Narrativas baseadas em histórias de terror ou mistério conhecidas popularmente.', 'category' => ContentType::ANIME],
            ['genre' => 'Magia',  'description' => 'Envolve o uso de magia e poderes sobrenaturais, muitas vezes em cenários de fantasia.', 'category' => ContentType::ANIME],
            ['genre' => 'Mahou Shoujo',  'description' => 'Focado em garotas mágicas que usam poderes sobrenaturais para combater o mal.', 'category' => ContentType::ANIME],
            ['genre' => 'Mecha',  'description' => 'Focado em robôs gigantes, geralmente pilotados por humanos, com ênfase em batalhas e guerras futuristas.', 'category' => ContentType::ANIME],
            ['genre' => 'Mistério',  'description' => 'Gênero centrado em enigmas e mistérios a serem resolvidos, geralmente envolvendo crimes e reviravoltas.', 'category' => ContentType::ANIME],
            ['genre' => 'Mitologia', 'description' => 'Histórias baseadas em mitos e lendas de diversas culturas.', 'category' => ContentType::ANIME],
            ['genre' => 'Mundo Virtual', 'description' => 'Aventuras em mundos simulados digitalmente.', 'category' => ContentType::ANIME],
            ['genre' => 'Música',  'description' => 'Enredos que giram em torno de música, bandas e performances musicais.', 'category' => ContentType::ANIME],
            ['genre' => 'Ninja',  'description' => 'Gênero centrado em ninjas, espionagem, combates furtivos e habilidades especiais.', 'category' => ContentType::ANIME],
            ['genre' => 'Paródia',  'description' => 'Faz sátiras de outros gêneros ou animes, utilizando humor e referências exageradas.', 'category' => ContentType::ANIME],
            ['genre' => 'Policial',  'description' => 'Histórias centradas em investigações criminais, com detetives e forças policiais resolvendo crimes.', 'category' => ContentType::ANIME],
            ['genre' => 'Pós-apocalíptico',  'description' => 'Se passa em mundos devastados por catástrofes, com foco em sobrevivência e reconstrução.', 'category' => ContentType::ANIME],
            ['genre' => 'Psicológico',  'description' => 'Explora o estado mental dos personagens, dilemas emocionais e manipulações psicológicas.', 'category' => ContentType::ANIME],
            ['genre' => 'Psicopatia', 'description' => 'Personagens com mentes perturbadas ou enredos que exploram a psicologia doentia.', 'category' => ContentType::ANIME],
            ['genre' => 'Romance Escolar', 'description' => 'Histórias de amor envolvendo personagens em ambientes escolares.', 'category' => ContentType::ANIME],
            ['genre' => 'Romance Trágico', 'description' => 'Histórias de amor marcadas por finais melancólicos ou eventos tristes.', 'category' => ContentType::ANIME],
            ['genre' => 'Romance',  'description' => 'Histórias centradas em relacionamentos amorosos e desenvolvimento emocional entre os personagens.', 'category' => ContentType::ANIME],
            ['genre' => 'Samurai',  'description' => 'Gênero focado em samurais, explorando o código de honra e batalhas no Japão feudal.', 'category' => ContentType::ANIME],
            ['genre' => 'Seinen',  'description' => 'Animes voltados para homens adultos, com temas mais complexos e maduros, incluindo violência e dilemas psicológicos.', 'category' => ContentType::ANIME],
            ['genre' => 'Shoujo Ai',  'description' => 'Relacionamentos românticos entre mulheres, sem conteúdo explícito.', 'category' => ContentType::ANIME],
            ['genre' => 'Shoujo',  'description' => 'Direcionado ao público feminino jovem, com foco em romance, drama e emoções.', 'category' => ContentType::ANIME],
            ['genre' => 'Shounen Ai',  'description' => 'Relacionamentos românticos entre homens, com foco no romance leve e sem cenas explícitas.', 'category' => ContentType::ANIME],
            ['genre' => 'Shounen',  'description' => 'Voltado para jovens do sexo masculino, com ação, aventura e temas como amizade e superação.', 'category' => ContentType::ANIME],
            ['genre' => 'Slice of Life',  'description' => 'Retrata o cotidiano comum, focando nas experiências e interações diárias dos personagens.', 'category' => ContentType::ANIME],
            ['genre' => 'Sobrenatural',  'description' => 'Envolve elementos além do natural, como fantasmas, espíritos e poderes especiais.', 'category' => ContentType::ANIME],
            ['genre' => 'Sobrevivência', 'description' => 'Personagens tentando resistir a situações extremas e perigosas.', 'category' => ContentType::ANIME],
            ['genre' => 'Superpoderes',  'description' => 'Personagens possuem habilidades sobrenaturais, com foco em batalhas e vilões.', 'category' => ContentType::ANIME],
            ['genre' => 'Surreal',  'description' => 'Explora temas que desafiam a realidade, com atmosferas oníricas e bizarras.', 'category' => ContentType::ANIME],
            ['genre' => 'Suspense Policial', 'description' => 'Foco em investigações, policiais e resolução de crimes.', 'category' => ContentType::ANIME],
            ['genre' => 'Suspense', 'description' => 'Narrativas intensas e cheias de tensão, mantendo o público no limite.', 'category' => ContentType::ANIME],
            ['genre' => 'Terror',  'description' => 'Histórias assustadoras que exploram o medo e o desconhecido.', 'category' => ContentType::ANIME],
            ['genre' => 'Thriller', 'description' => 'Histórias cheias de ação e reviravoltas que deixam o público atento.', 'category' => ContentType::ANIME],
            ['genre' => 'Tragédia',  'description' => 'Histórias com foco em sofrimento, perda e desfechos tristes.', 'category' => ContentType::ANIME],
            ['genre' => 'Vampiros',  'description' => 'Focado em vampiros, explorando aspectos da imortalidade, romance e horror.', 'category' => ContentType::ANIME],
            ['genre' => 'Viagem no Tempo', 'description' => 'Histórias que envolvem mudanças no passado ou no futuro.', 'category' => ContentType::ANIME],
            ['genre' => 'Yaoi',  'description' => 'Explora relacionamentos românticos e sexuais entre homens, frequentemente voltado para o público feminino.', 'category' => ContentType::ANIME],
            ['genre' => 'Yuri',  'description' => 'Focado em relacionamentos românticos e sexuais entre mulheres.', 'category' => ContentType::ANIME],
            ['genre' => 'Zumbis', 'description' => 'Narrativas de sobrevivência em cenários infestados de mortos-vivos.', 'category' => ContentType::ANIME],
        ]);
    }
}
