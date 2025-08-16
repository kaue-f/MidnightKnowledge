<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentTypeEnum;
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
            ['genre' => 'Ação', 'description' => 'Centrado em cenas de luta, batalhas e ação intensa, com ritmo rápido e muita energia.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Artes Marciais', 'description' => 'Envolve combates físicos e técnicas de luta, com foco no treinamento e desenvolvimento de habilidades.  ', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Aventura', 'description' => 'Mangás que envolvem jornadas épicas, explorações e descobertas em lugares desconhecidos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Comédia', 'description' => 'Histórias que têm o humor como foco principal, com situações engraçadas e personagens cômicos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Crime', 'description' => 'Enredos sobre investigações, criminosos e atividades ilegais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Crossdressing', 'description' => 'Histórias envolvendo personagens que se vestem com roupas do gênero oposto.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Cyberpunk', 'description' => 'Explora futuros distópicos, com ênfase em alta tecnologia, implantes cibernéticos e sociedades decadentes.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Delinquentes', 'description' => 'Narrativas sobre gangues, brigas escolares e comportamento rebelde.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Demônios', 'description' => 'Presença de entidades demoníacas e seres infernais na trama.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Drama', 'description' => 'Histórias emocionantes que exploram os sentimentos e desafios dos personagens.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Ecchi', 'description' => 'Conteúdo sugestivo e sexualizado, com fanservice, mas sem cenas de sexo explícitas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Esporte', 'description' => 'Focados em competições esportivas e no desenvolvimento de personagens atletas, com ênfase em trabalho em equipe e superação.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Fantasia', 'description' => 'Histórias ambientadas em mundos fictícios com magia, criaturas míticas e elementos sobrenaturais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Fantasmas', 'description' => 'Obras com espíritos, assombrações e elementos sobrenaturais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Ficção Científica (Sci-Fi)', 'description' => 'Exploração de tecnologia, universos futuristas e ciência avançada.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Filosófico', 'description' => 'Obras que exploram reflexões profundas sobre a vida, sociedade e existência.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Game/VR', 'description' => 'Mangás que giram em torno de videogames ou mundos de realidade virtual, frequentemente explorando as interações entre jogo e realidade.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Gore', 'description' => 'Focado em violência extrema, com cenas gráficas de mutilação e sangue.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Gourmet (Culinária)', 'description' => 'Focado na culinária e gastronomia, geralmente envolvendo competições ou a apreciação da comida.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Guerra', 'description' => 'Histórias que exploram conflitos militares, guerras e as consequências para os personagens envolvidos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Gyaru', 'description' => 'Personagens inspiradas na subcultura gyaru, com moda e atitude marcantes.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Harém', 'description' => 'O protagonista masculino é cercado por várias personagens femininas que demonstram interesse amoroso nele.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Hentai', 'description' => 'Obras com conteúdo adulto explícito, voltadas para o público maior de idade.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Histórico', 'description' => 'Ambientados em períodos históricos reais, frequentemente com retratos de figuras e eventos importantes.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Horror Psicológico', 'description' => 'Mistura de terror com temas psicológicos, focando em angústia mental e medo derivado de distúrbios psicológicos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Horror', 'description' => 'Mangás que buscam criar medo e suspense, muitas vezes envolvendo monstros, fantasmas ou cenas macabras.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Incesto', 'description' => 'Narrativas que abordam relações familiares românticas ou polêmicas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Isekai', 'description' => 'Mangás em que o protagonista é transportado para um mundo alternativo, geralmente com elementos de fantasia e aventura.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Iyashikei', 'description' => 'Mangás que buscam proporcionar conforto emocional, geralmente com histórias calmas e visuais relaxantes.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Josei', 'description' => 'Mangás voltados para mulheres adultas, com foco em relacionamentos, desafios da vida adulta e temas mais realistas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Kodomo', 'description' => 'Mangás para crianças, com histórias simples e educativas, sem violência ou complexidade emocional.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Light Novel', 'description' => 'Mangás baseados em light novels (romances leves), que são histórias escritas em prosa, geralmente ilustradas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Loli', 'description' => 'Presença de personagens femininas jovens com estética infantilizada.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Máfia', 'description' => 'Enredos envolvendo organizações criminosas e o submundo do crime.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Magia', 'description' => 'Histórias com feitiços, magos e poderes místicos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Mahou Shoujo', 'description' => 'Focado em garotas mágicas que lutam contra o mal usando poderes sobrenaturais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Mecha', 'description' => 'Focado em robôs gigantes pilotados por humanos, geralmente em batalhas ou conflitos de guerra futuristas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Médico', 'description' => 'Dramas e histórias centradas no ambiente da medicina e hospitais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Militar', 'description' => 'Histórias sobre guerras, exércitos e conflitos estratégicos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Mistério', 'description' => 'Gênero focado em resolver enigmas e mistérios, com tramas cheias de suspense e reviravoltas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Monster Girls', 'description' => 'Presença de personagens femininas que são híbridos de monstros.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Monstros', 'description' => 'Criaturas sobrenaturais e seres fantásticos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Música', 'description' => 'Histórias que giram em torno de música, bandas e performances musicais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Ninjas', 'description' => 'Enredos que exploram o mundo dos ninjas e suas habilidades furtivas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Paródia', 'description' => 'Faz sátiras e homenagens a outros gêneros ou obras, utilizando humor exagerado.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Polícia', 'description' => 'Obras sobre investigações criminais e a rotina de policiais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Pós-Apocalíptico', 'description' => 'Mangás que se passam em mundos devastados por catástrofes, focando na sobrevivência e reconstrução.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Psicológico', 'description' => 'Explora o estado mental dos personagens, dilemas emocionais e manipulações psicológicas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Reverse Harém', 'description' => 'O oposto de Harem, onde uma protagonista feminina é cercada por vários personagens masculinos interessados nela.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Romance Escolar', 'description' => 'Mangás ambientados em escolas, com foco em relacionamentos amorosos entre estudantes.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Romance', 'description' => 'Focado em histórias de amor e relacionamentos românticos entre os personagens.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Samurai', 'description' => 'Obras ambientadas no Japão feudal com guerreiros habilidosos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Seinen', 'description' => 'Mangás para homens adultos, com temas mais maduros, violência, dilemas psicológicos e complexidade moral.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Shota', 'description' => 'Personagens masculinos jovens com aparência infantilizada.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Shoujo', 'description' => 'Direcionados ao público jovem feminino, com foco em romance, drama e desenvolvimento emocional dos personagens.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Shoujo-Ai', 'description' => 'Relacionamentos românticos entre mulheres, sem foco em cenas explícitas.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Shounen', 'description' => 'Mangás voltados para o público jovem masculino, com muita ação, aventura e temas de superação.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Shounen-Ai', 'description' => 'Histórias românticas entre homens, com menos ênfase em conteúdo sexual e mais foco no romance.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Slice of Life', 'description' => 'Retrata o cotidiano comum, explorando as interações diárias e experiências dos personagens de forma realista.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Sobrenatural', 'description' => 'Envolve fenômenos além do normal, como fantasmas, espíritos e poderes místicos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Sobrevivência', 'description' => 'Narrativas de luta pela vida em ambientes extremos.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Space Opera', 'description' => 'Histórias épicas que se passam no espaço, com guerras intergalácticas, política e aventura.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Super-herói', 'description' => 'Narrativas com personagens dotados de habilidades extraordinárias que lutam contra o mal.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Suspense (Thriller)', 'description' => 'Histórias cheias de tensão, reviravoltas e mistério.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Terror', 'description' => 'Narrativas que buscam causar medo e suspense, muitas vezes com elementos sobrenaturais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Trabalhadores de Escritório', 'description' => 'Histórias centradas na rotina e desafios do mundo corporativo.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Tragédia', 'description' => 'Histórias com foco em sofrimento e perdas, frequentemente com desfechos tristes e emocionais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Troca de Gênero (Genderswap)', 'description' => 'Enredos onde os personagens trocam de gênero de alguma forma.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Vida Escolar', 'description' => 'Histórias centradas no ambiente escolar e na juventude.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Violência Sexual', 'description' => 'Temas sensíveis que envolvem abuso e crimes sexuais.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Yaoi', 'description' => 'Mangás que exploram romances e relações sexuais entre homens, voltados principalmente para o público feminino.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Yuri', 'description' => 'Mangás que exploram romances e relações sexuais entre mulheres.', 'category' => ContentTypeEnum::MANGA],
            ['genre' => 'Zumbi', 'description' => 'Histórias centradas em apocalipses zumbis, com foco em sobrevivência e horror.', 'category' => ContentTypeEnum::MANGA],
        ]);
    }
}
