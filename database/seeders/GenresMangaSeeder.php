<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresMangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'Ação', 'description' => 'Centrado em cenas de luta, batalhas e ação intensa, com ritmo rápido e muita energia.', 'category' => 'Manga'],
            ['genre' => 'Artes Marciais', 'description' => 'Envolve combates físicos e técnicas de luta, com foco no treinamento e desenvolvimento de habilidades.  ', 'category' => 'Manga'],
            ['genre' => 'Aventura', 'description' => 'Mangás que envolvem jornadas épicas, explorações e descobertas em lugares desconhecidos.', 'category' => 'Manga'],
            ['genre' => 'Comédia', 'description' => 'Histórias que têm o humor como foco principal, com situações engraçadas e personagens cômicos.', 'category' => 'Manga'],
            ['genre' => 'Crime', 'description' => 'Enredos sobre investigações, criminosos e atividades ilegais.', 'category' => 'Manga'],
            ['genre' => 'Crossdressing', 'description' => 'Histórias envolvendo personagens que se vestem com roupas do gênero oposto.', 'category' => 'Manga'],
            ['genre' => 'Cyberpunk', 'description' => 'Explora futuros distópicos, com ênfase em alta tecnologia, implantes cibernéticos e sociedades decadentes.', 'category' => 'Manga'],
            ['genre' => 'Delinquentes', 'description' => 'Narrativas sobre gangues, brigas escolares e comportamento rebelde.', 'category' => 'Manga'],
            ['genre' => 'Demônios', 'description' => 'Presença de entidades demoníacas e seres infernais na trama.', 'category' => 'Manga'],
            ['genre' => 'Drama', 'description' => 'Histórias emocionantes que exploram os sentimentos e desafios dos personagens.', 'category' => 'Manga'],
            ['genre' => 'Ecchi', 'description' => 'Conteúdo sugestivo e sexualizado, com fanservice, mas sem cenas de sexo explícitas.', 'category' => 'Manga'],
            ['genre' => 'Esporte', 'description' => 'Focados em competições esportivas e no desenvolvimento de personagens atletas, com ênfase em trabalho em equipe e superação.', 'category' => 'Manga'],
            ['genre' => 'Fantasia', 'description' => 'Histórias ambientadas em mundos fictícios com magia, criaturas míticas e elementos sobrenaturais.', 'category' => 'Manga'],
            ['genre' => 'Fantasmas', 'description' => 'Obras com espíritos, assombrações e elementos sobrenaturais.', 'category' => 'Manga'],
            ['genre' => 'Ficção Científica (Sci-Fi)', 'description' => 'Exploração de tecnologia, universos futuristas e ciência avançada.', 'category' => 'Manga'],
            ['genre' => 'Filosófico', 'description' => 'Obras que exploram reflexões profundas sobre a vida, sociedade e existência.', 'category' => 'Manga'],
            ['genre' => 'Game/VR', 'description' => 'Mangás que giram em torno de videogames ou mundos de realidade virtual, frequentemente explorando as interações entre jogo e realidade.', 'category' => 'Manga'],
            ['genre' => 'Gore', 'description' => 'Focado em violência extrema, com cenas gráficas de mutilação e sangue.', 'category' => 'Manga'],
            ['genre' => 'Gourmet (Culinária)', 'description' => 'Focado na culinária e gastronomia, geralmente envolvendo competições ou a apreciação da comida.', 'category' => 'Manga'],
            ['genre' => 'Guerra', 'description' => 'Histórias que exploram conflitos militares, guerras e as consequências para os personagens envolvidos.', 'category' => 'Manga'],
            ['genre' => 'Gyaru', 'description' => 'Personagens inspiradas na subcultura gyaru, com moda e atitude marcantes.', 'category' => 'Manga'],
            ['genre' => 'Harém', 'description' => 'O protagonista masculino é cercado por várias personagens femininas que demonstram interesse amoroso nele.', 'category' => 'Manga'],
            ['genre' => 'Hentai', 'description' => 'Obras com conteúdo adulto explícito, voltadas para o público maior de idade.', 'category' => 'Manga'],
            ['genre' => 'Histórico', 'description' => 'Ambientados em períodos históricos reais, frequentemente com retratos de figuras e eventos importantes.', 'category' => 'Manga'],
            ['genre' => 'Horror Psicológico', 'description' => 'Mistura de terror com temas psicológicos, focando em angústia mental e medo derivado de distúrbios psicológicos.', 'category' => 'Manga'],
            ['genre' => 'Horror', 'description' => 'Mangás que buscam criar medo e suspense, muitas vezes envolvendo monstros, fantasmas ou cenas macabras.', 'category' => 'Manga'],
            ['genre' => 'Incesto', 'description' => 'Narrativas que abordam relações familiares românticas ou polêmicas.', 'category' => 'Manga'],
            ['genre' => 'Isekai', 'description' => 'Mangás em que o protagonista é transportado para um mundo alternativo, geralmente com elementos de fantasia e aventura.', 'category' => 'Manga'],
            ['genre' => 'Iyashikei', 'description' => 'Mangás que buscam proporcionar conforto emocional, geralmente com histórias calmas e visuais relaxantes.', 'category' => 'Manga'],
            ['genre' => 'Josei', 'description' => 'Mangás voltados para mulheres adultas, com foco em relacionamentos, desafios da vida adulta e temas mais realistas.', 'category' => 'Manga'],
            ['genre' => 'Kodomo', 'description' => 'Mangás para crianças, com histórias simples e educativas, sem violência ou complexidade emocional.', 'category' => 'Manga'],
            ['genre' => 'Light Novel', 'description' => 'Mangás baseados em light novels (romances leves), que são histórias escritas em prosa, geralmente ilustradas.', 'category' => 'Manga'],
            ['genre' => 'Loli', 'description' => 'Presença de personagens femininas jovens com estética infantilizada.', 'category' => 'Manga'],
            ['genre' => 'Máfia', 'description' => 'Enredos envolvendo organizações criminosas e o submundo do crime.', 'category' => 'Manga'],
            ['genre' => 'Magia', 'description' => 'Histórias com feitiços, magos e poderes místicos.', 'category' => 'Manga'],
            ['genre' => 'Mahou Shoujo', 'description' => 'Focado em garotas mágicas que lutam contra o mal usando poderes sobrenaturais.', 'category' => 'Manga'],
            ['genre' => 'Mecha', 'description' => 'Focado em robôs gigantes pilotados por humanos, geralmente em batalhas ou conflitos de guerra futuristas.', 'category' => 'Manga'],
            ['genre' => 'Médico', 'description' => 'Dramas e histórias centradas no ambiente da medicina e hospitais.', 'category' => 'Manga'],
            ['genre' => 'Militar', 'description' => 'Histórias sobre guerras, exércitos e conflitos estratégicos.', 'category' => 'Manga'],
            ['genre' => 'Mistério', 'description' => 'Gênero focado em resolver enigmas e mistérios, com tramas cheias de suspense e reviravoltas.', 'category' => 'Manga'],
            ['genre' => 'Monster Girls', 'description' => 'Presença de personagens femininas que são híbridos de monstros.', 'category' => 'Manga'],
            ['genre' => 'Monstros', 'description' => 'Criaturas sobrenaturais e seres fantásticos.', 'category' => 'Manga'],
            ['genre' => 'Música', 'description' => 'Histórias que giram em torno de música, bandas e performances musicais.', 'category' => 'Manga'],
            ['genre' => 'Ninjas', 'description' => 'Enredos que exploram o mundo dos ninjas e suas habilidades furtivas.', 'category' => 'Manga'],
            ['genre' => 'Paródia', 'description' => 'Faz sátiras e homenagens a outros gêneros ou obras, utilizando humor exagerado.', 'category' => 'Manga'],
            ['genre' => 'Polícia', 'description' => 'Obras sobre investigações criminais e a rotina de policiais.', 'category' => 'Manga'],
            ['genre' => 'Pós-Apocalíptico', 'description' => 'Mangás que se passam em mundos devastados por catástrofes, focando na sobrevivência e reconstrução.', 'category' => 'Manga'],
            ['genre' => 'Psicológico', 'description' => 'Explora o estado mental dos personagens, dilemas emocionais e manipulações psicológicas.', 'category' => 'Manga'],
            ['genre' => 'Reverse Harém', 'description' => 'O oposto de Harem, onde uma protagonista feminina é cercada por vários personagens masculinos interessados nela.', 'category' => 'Manga'],
            ['genre' => 'Romance Escolar', 'description' => 'Mangás ambientados em escolas, com foco em relacionamentos amorosos entre estudantes.', 'category' => 'Manga'],
            ['genre' => 'Romance', 'description' => 'Focado em histórias de amor e relacionamentos românticos entre os personagens.', 'category' => 'Manga'],
            ['genre' => 'Samurai', 'description' => 'Obras ambientadas no Japão feudal com guerreiros habilidosos.', 'category' => 'Manga'],
            ['genre' => 'Seinen', 'description' => 'Mangás para homens adultos, com temas mais maduros, violência, dilemas psicológicos e complexidade moral.', 'category' => 'Manga'],
            ['genre' => 'Shota', 'description' => 'Personagens masculinos jovens com aparência infantilizada.', 'category' => 'Manga'],
            ['genre' => 'Shoujo', 'description' => 'Direcionados ao público jovem feminino, com foco em romance, drama e desenvolvimento emocional dos personagens.', 'category' => 'Manga'],
            ['genre' => 'Shoujo-Ai', 'description' => 'Relacionamentos românticos entre mulheres, sem foco em cenas explícitas.', 'category' => 'Manga'],
            ['genre' => 'Shounen', 'description' => 'Mangás voltados para o público jovem masculino, com muita ação, aventura e temas de superação.', 'category' => 'Manga'],
            ['genre' => 'Shounen-Ai', 'description' => 'Histórias românticas entre homens, com menos ênfase em conteúdo sexual e mais foco no romance.', 'category' => 'Manga'],
            ['genre' => 'Slice of Life', 'description' => 'Retrata o cotidiano comum, explorando as interações diárias e experiências dos personagens de forma realista.', 'category' => 'Manga'],
            ['genre' => 'Sobrenatural', 'description' => 'Envolve fenômenos além do normal, como fantasmas, espíritos e poderes místicos.', 'category' => 'Manga'],
            ['genre' => 'Sobrevivência', 'description' => 'Narrativas de luta pela vida em ambientes extremos.', 'category' => 'Manga'],
            ['genre' => 'Space Opera', 'description' => 'Histórias épicas que se passam no espaço, com guerras intergalácticas, política e aventura.', 'category' => 'Manga'],
            ['genre' => 'Super-herói', 'description' => 'Narrativas com personagens dotados de habilidades extraordinárias que lutam contra o mal.', 'category' => 'Manga'],
            ['genre' => 'Suspense (Thriller)', 'description' => 'Histórias cheias de tensão, reviravoltas e mistério.', 'category' => 'Manga'],
            ['genre' => 'Terror', 'description' => 'Narrativas que buscam causar medo e suspense, muitas vezes com elementos sobrenaturais.', 'category' => 'Manga'],
            ['genre' => 'Trabalhadores de Escritório', 'description' => 'Histórias centradas na rotina e desafios do mundo corporativo.', 'category' => 'Manga'],
            ['genre' => 'Tragédia', 'description' => 'Histórias com foco em sofrimento e perdas, frequentemente com desfechos tristes e emocionais.', 'category' => 'Manga'],
            ['genre' => 'Troca de Gênero (Genderswap)', 'description' => 'Enredos onde os personagens trocam de gênero de alguma forma.', 'category' => 'Manga'],
            ['genre' => 'Vida Escolar', 'description' => 'Histórias centradas no ambiente escolar e na juventude.', 'category' => 'Manga'],
            ['genre' => 'Violência Sexual', 'description' => 'Temas sensíveis que envolvem abuso e crimes sexuais.', 'category' => 'Manga'],
            ['genre' => 'Yaoi', 'description' => 'Mangás que exploram romances e relações sexuais entre homens, voltados principalmente para o público feminino.', 'category' => 'Manga'],
            ['genre' => 'Yuri', 'description' => 'Mangás que exploram romances e relações sexuais entre mulheres.', 'category' => 'Manga'],
            ['genre' => 'Zumbi', 'description' => 'Histórias centradas em apocalipses zumbis, com foco em sobrevivência e horror.', 'category' => 'Manga'],
        ]);
    }
}
