<?php

namespace Database\Seeders;

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
            ['genre' => '4-Koma (Tirinhas)', 'description' => 'Estilo de comédia contado em quatro painéis curtos.'],
            ['genre' => 'Ação',  'description' => 'Focado em cenas de luta, batalhas e ação intensa, com muita energia e movimenta', 'category' => 'Anime'],
            ['genre' => 'Artes Marciais',  'description' => 'Centrado em combates físicos, técnicas de luta e treinamento.', 'category' => 'Anime'],
            ['genre' => 'Aventura',  'description' => 'Histórias que envolvem jornadas épicas e explorações de novos lugares.', 'category' => 'Anime'],
            ['genre' => 'Biográficos', 'description' => 'Narrativas baseadas na vida de pessoas reais.'],
            ['genre' => 'Comédia Romântica',  'description' => 'Mistura de romance e comédia, explorando o desenvolvimento amoroso de maneira leve e divertida.', 'category' => 'Anime'],
            ['genre' => 'Comédia',  'description' => 'Centrado no humor, com situações engraçadas e personagens cômicos.', 'category' => 'Anime'],
            ['genre' => 'Conspiração', 'description' => 'Histórias sobre planos secretos envolvendo traições ou manipulações.'],
            ['genre' => 'Cyberpunk',  'description' => 'Ambientado em futuros distópicos, com temas de alta tecnologia, implantes cibernéticos e realidades virtuais.', 'category' => 'Anime'],
            ['genre' => 'Dança', 'description' => 'Foco em dança como tema principal ou elemento recorrente.'],
            ['genre' => 'Demônio',  'description' => 'Explora temas relacionados a demônios e seres sobrenaturais, muitas vezes com uma visão sombria.', 'category' => 'Anime'],
            ['genre' => 'Detetive',  'description' => 'Focado em mistérios e investigações criminais, com protagonistas resolvendo casos complexos.', 'category' => 'Anime'],
            ['genre' => 'Drama Psicológico', 'description' => 'Enredos emocionantes que exploram dilemas mentais profundos.'],
            ['genre' => 'Drama',  'description' => 'Histórias focadas em emoções profundas, dilemas pessoais e desenvolvimento intenso dos personagens.', 'category' => 'Anime'],
            ['genre' => 'Ecchi',  'description' => 'Conteúdo sexual sugestivo, com fanservice e situações eróticas, mas sem cenas explícitas.', 'category' => 'Anime'],
            ['genre' => 'Escolar',  'description' => 'Se passa em ambiente escolar, explorando a vida estudantil, amizades e romances.', 'category' => 'Anime'],
            ['genre' => 'Espaço',  'description' => 'Exploração espacial, naves e aventuras em outros planetas.', 'category' => 'Anime'],
            ['genre' => 'Esportes',  'description' => 'Focado em competições esportivas, trabalho em equipe e desenvolvimento de personagens atletas.', 'category' => 'Anime'],
            ['genre' => 'Fantasia',  'description' => 'Enredos que se passam em mundos imaginários, com elementos sobrenaturais, magia e criaturas míticas.', 'category' => 'Anime'],
            ['genre' => 'Fantasma',  'description' => 'Envolve fantasmas ou espíritos como personagens principais, geralmente com temas sobrenaturais.', 'category' => 'Anime'],
            ['genre' => 'Ficção Científica',  'description' => 'Explora temas futuristas como tecnologia avançada, robôs e viagens espaciais.', 'category' => 'Anime'],
            ['genre' => 'Game',  'description' => 'Enredos que envolvem videogames, jogos de cartas ou RPGs, com personagens que competem ou vivem dentro de um jogo.', 'category' => 'Anime'],
            ['genre' => 'Gore',  'description' => 'Envolve violência extrema, com sangue, mutilações e cenas gráficas explícitas.', 'category' => 'Anime'],
            ['genre' => 'Gourmet (Culinária)',  'description' => 'Envolve culinária e alimentação, geralmente com foco em competições ou a arte de cozinhar.', 'category' => 'Anime'],
            ['genre' => 'Guerra',  'description' => 'Exploração de batalhas, estratégias de guerra e a vida de soldados.', 'category' => 'Anime'],
            ['genre' => 'Harem',  'description' => 'Um protagonista masculino cercado por várias personagens femininas, que têm interesse amoroso nele.', 'category' => 'Anime'],
            ['genre' => 'Hentai',  'description' => 'Conteúdo sexual explícito.', 'category' => 'Anime'],
            ['genre' => 'Hikikomori', 'description' => 'Personagens reclusos que evitam interação social.'],
            ['genre' => 'Histórico',  'description' => 'Ambientado em períodos históricos reais, com retratos de eventos e figuras importantes.', 'category' => 'Anime'],
            ['genre' => 'Idol', 'description' => 'Tramas envolvendo astros da música pop e suas vidas públicas e privadas.'],
            ['genre' => 'Isekai',  'description' => 'O protagonista é transportado para um mundo paralelo ou realidade alternativa, geralmente com elementos de fantasia.', 'category' => 'Anime'],
            ['genre' => 'Jogos de Cartas', 'description' => 'Histórias focadas em jogos de estratégia com cartas.'],
            ['genre' => 'Josei',  'description' => 'Voltado para mulheres adultas, abordando temas de relacionamentos e desafios da vida adulta.', 'category' => 'Anime'],
            ['genre' => 'Kodomo',  'description' => 'Voltado para crianças, com temas simples e educativos, sem complexidade emocional ou violên', 'category' => 'Anime'],
            ['genre' => 'Lendas Urbanas', 'description' => 'Narrativas baseadas em histórias de terror ou mistério conhecidas popularmente.'],
            ['genre' => 'Magia',  'description' => 'Envolve o uso de magia e poderes sobrenaturais, muitas vezes em cenários de fantasia.', 'category' => 'Anime'],
            ['genre' => 'Mahou Shoujo',  'description' => 'Focado em garotas mágicas que usam poderes sobrenaturais para combater o mal.', 'category' => 'Anime'],
            ['genre' => 'Mecha',  'description' => 'Focado em robôs gigantes, geralmente pilotados por humanos, com ênfase em batalhas e guerras futuristas.', 'category' => 'Anime'],
            ['genre' => 'Mistério',  'description' => 'Gênero centrado em enigmas e mistérios a serem resolvidos, geralmente envolvendo crimes e reviravoltas.', 'category' => 'Anime'],
            ['genre' => 'Mitologia', 'description' => 'Histórias baseadas em mitos e lendas de diversas culturas.'],
            ['genre' => 'Mundo Virtual', 'description' => 'Aventuras em mundos simulados digitalmente.'],
            ['genre' => 'Música',  'description' => 'Enredos que giram em torno de música, bandas e performances musicais.', 'category' => 'Anime'],
            ['genre' => 'Ninja',  'description' => 'Gênero centrado em ninjas, espionagem, combates furtivos e habilidades especiais.', 'category' => 'Anime'],
            ['genre' => 'Paródia',  'description' => 'Faz sátiras de outros gêneros ou animes, utilizando humor e referências exageradas.', 'category' => 'Anime'],
            ['genre' => 'Policial',  'description' => 'Histórias centradas em investigações criminais, com detetives e forças policiais resolvendo crimes.', 'category' => 'Anime'],
            ['genre' => 'Pós-apocalíptico',  'description' => 'Se passa em mundos devastados por catástrofes, com foco em sobrevivência e reconstrução.', 'category' => 'Anime'],
            ['genre' => 'Psicológico',  'description' => 'Explora o estado mental dos personagens, dilemas emocionais e manipulações psicológicas.', 'category' => 'Anime'],
            ['genre' => 'Psicopatia', 'description' => 'Personagens com mentes perturbadas ou enredos que exploram a psicologia doentia.'],
            ['genre' => 'Romance Escolar', 'description' => 'Histórias de amor envolvendo personagens em ambientes escolares.'],
            ['genre' => 'Romance Trágico', 'description' => 'Histórias de amor marcadas por finais melancólicos ou eventos tristes.'],
            ['genre' => 'Romance',  'description' => 'Histórias centradas em relacionamentos amorosos e desenvolvimento emocional entre os personagens.', 'category' => 'Anime'],
            ['genre' => 'Samurai',  'description' => 'Gênero focado em samurais, explorando o código de honra e batalhas no Japão feudal.', 'category' => 'Anime'],
            ['genre' => 'Seinen',  'description' => 'Animes voltados para homens adultos, com temas mais complexos e maduros, incluindo violência e dilemas psicológicos.', 'category' => 'Anime'],
            ['genre' => 'Shoujo Ai',  'description' => 'Relacionamentos românticos entre mulheres, sem conteúdo explícito.', 'category' => 'Anime'],
            ['genre' => 'Shoujo',  'description' => 'Direcionado ao público feminino jovem, com foco em romance, drama e emoções.', 'category' => 'Anime'],
            ['genre' => 'Shounen Ai',  'description' => 'Relacionamentos românticos entre homens, com foco no romance leve e sem cenas explícitas.', 'category' => 'Anime'],
            ['genre' => 'Shounen',  'description' => 'Voltado para jovens do sexo masculino, com ação, aventura e temas como amizade e superação.', 'category' => 'Anime'],
            ['genre' => 'Slice of Life',  'description' => 'Retrata o cotidiano comum, focando nas experiências e interações diárias dos personagens.', 'category' => 'Anime'],
            ['genre' => 'Sobrenatural',  'description' => 'Envolve elementos além do natural, como fantasmas, espíritos e poderes especiais.', 'category' => 'Anime'],
            ['genre' => 'Sobrevivência', 'description' => 'Personagens tentando resistir a situações extremas e perigosas.'],
            ['genre' => 'Superpoderes',  'description' => 'Personagens possuem habilidades sobrenaturais, com foco em batalhas e vilões.', 'category' => 'Anime'],
            ['genre' => 'Surreal',  'description' => 'Explora temas que desafiam a realidade, com atmosferas oníricas e bizarras.', 'category' => 'Anime'],
            ['genre' => 'Suspense Policial', 'description' => 'Foco em investigações, policiais e resolução de crimes.'],
            ['genre' => 'Suspense', 'description' => 'Narrativas intensas e cheias de tensão, mantendo o público no limite.'],
            ['genre' => 'Terror',  'description' => 'Histórias assustadoras que exploram o medo e o desconhecido.', 'category' => 'Anime'],
            ['genre' => 'Thriller', 'description' => 'Histórias cheias de ação e reviravoltas que deixam o público atento.'],
            ['genre' => 'Tragédia',  'description' => 'Histórias com foco em sofrimento, perda e desfechos tristes.', 'category' => 'Anime'],
            ['genre' => 'Vampiros',  'description' => 'Focado em vampiros, explorando aspectos da imortalidade, romance e horror.', 'category' => 'Anime'],
            ['genre' => 'Viagem no Tempo', 'description' => 'Histórias que envolvem mudanças no passado ou no futuro.'],
            ['genre' => 'Yaoi',  'description' => 'Explora relacionamentos românticos e sexuais entre homens, frequentemente voltado para o público feminino.', 'category' => 'Anime'],
            ['genre' => 'Yuri',  'description' => 'Focado em relacionamentos românticos e sexuais entre mulheres.', 'category' => 'Anime'],
            ['genre' => 'Zumbis', 'description' => 'Narrativas de sobrevivência em cenários infestados de mortos-vivos.'],
        ]);
    }
}
