<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'Ação', 'description' => 'Focados em cenas de alta energia, os livros de ação geralmente envolvem perseguições, lutas e situações perigosas, mantendo o leitor envolvido com adrenalina constante.', 'category' => 'Book'],
            ['genre' => 'Antologias', 'description' => ' Coleções de contos ou poemas de diversos autores, ou de um único autor.', 'category' => 'Book'],
            ['genre' => 'Autobiografia', 'description' => 'Biografias escritas pela própria pessoa sobre sua vida, oferecendo uma perspectiva pessoal e íntima de suas experiências e pensamentos.', 'category' => 'Book'],
            ['genre' => 'Aventura', 'description' => 'Histórias focadas em jornadas, explorações, e desafios que os personagens devem superar, frequentemente em ambientes exóticos ou desconhecidos.', 'category' => 'Book'],
            ['genre' => 'Biografia', 'description' => 'Narrativas que contam a vida de uma pessoa real, explorando sua história, realizações, desafios e impacto na sociedade.', 'category' => 'Book'],
            ['genre' => 'Casa e jardim', 'description' => 'Guias e dicas sobre decoração, organização doméstica, jardinagem e criação de ambientes acolhedores.', 'category' => 'Book'],
            ['genre' => 'Clássicos', 'description' => 'Livros que resistiram ao teste do tempo e são considerados fundamentais para a literatura universal, como "Dom Quixote", "Orgulho e Preconceito" ou "Moby Dick".', 'category' => 'Book'],
            ['genre' => 'Comédia', 'description' => 'Obras criadas para divertir e fazer rir, utilizando humor, situações cômicas e diálogos espirituosos.', 'category' => 'Book'],
            ['genre' => 'Computadores e Internet', 'description' => 'Guias e livros sobre o uso de tecnologias digitais, programação, segurança na internet, redes sociais e o impacto da tecnologia na sociedade.', 'category' => 'Book'],
            ['genre' => 'Contemporânea', 'description' => 'Livros que retratam a vida moderna, abordando questões sociais, emocionais e culturais atuais, muitas vezes com uma escrita mais realista e direta.', 'category' => 'Book'],
            ['genre' => 'Contos', 'description' => 'Histórias curtas que exploram um tema ou evento específico, com enredos concisos e foco em um pequeno grupo de personagens ou uma situação.', 'category' => 'Book'],
            ['genre' => 'Crime Reais', 'description' => 'Relatos reais de crimes, investigações e mistérios, explorando casos famosos ou pouco conhecidos com detalhes reais e análises investigativas.', 'category' => 'Book'],
            ['genre' => 'Criminal', 'description' => 'Obras centradas em crimes, investigação, e a mente dos criminosos, muitas vezes com um enfoque no sistema de justiça e moralidade.', 'category' => 'Book'],
            ['genre' => 'Cristã', 'description' => 'Obras que exploram temas religiosos, abordando questões de fé, moralidade e os ensinamentos cristãos, muitas vezes com uma mensagem de esperança e redenção.', 'category' => 'Book'],
            ['genre' => 'Crônicas', 'description' => 'Narrativas curtas que documentam eventos ou reflexões sobre um tema específico, muitas vezes com tom pessoal.', 'category' => 'Book'],
            ['genre' => 'Culinária', 'description' => 'Livros que ensinam receitas, exploram a arte de cozinhar, ou discutem os aspectos culturais e históricos da comida e bebida.', 'category' => 'Book'],
            ['genre' => 'Cultural e étnico', 'description' => 'Explora as experiências de diferentes culturas ou etnias, abordando questões de identidade, imigração, diversidade e tradições, frequentemente oferecendo uma visão rica sobre diferentes modos de vida.', 'category' => 'Book'],
            ['genre' => 'Diários', 'description' => 'Registros pessoais escritos em formato de diário, onde os autores compartilham suas experiências diárias, pensamentos e reflexões íntimas.', 'category' => 'Book'],
            ['genre' => 'Distopia', 'description' => 'Livros ambientados em sociedades opressivas ou futuros sombrios, onde o controle social, a perda de liberdades, e os colapsos sociais são temas centrais.', 'category' => 'Book'],
            ['genre' => 'Drama', 'description' => 'Livros que exploram as complexidades das emoções humanas, relacionamentos interpessoais, e os dilemas morais, muitas vezes em contextos realistas e introspectivos.', 'category' => 'Book'],
            ['genre' => 'Ecoficção', 'description' => 'Ficção que aborda questões ambientais, explorando a relação entre humanidade e natureza.', 'category' => 'Book'],
            ['genre' => 'Educação e Referência', 'description' => 'Livros voltados para o aprendizado, pesquisa e aprofundamento em diversas áreas do conhecimento.', 'category' => 'Book'],
            ['genre' => 'Ensaios', 'description' => 'Textos reflexivos sobre temas variados, explorando opiniões e perspectivas de forma argumentativa.', 'category' => 'Book'],
            ['genre' => 'Entretenimento', 'description' => 'Focado em proporcionar prazer e diversão, com temas variados como filmes, música, cultura pop, celebridades e eventos.', 'category' => 'Book'],
            ['genre' => 'Escrita e Publicação', 'description' => 'Guias sobre como escrever e publicar livros, com dicas de redação, edição e aspectos do mercado editorial.', 'category' => 'Book'],
            ['genre' => 'Esportes e atividades ao ar livre', 'description' => 'Relacionados a diferentes esportes, atividades físicas e o prazer da vida ao ar livre, explorando também o desenvolvimento de habilidades esportivas.', 'category' => 'Book'],
            ['genre' => 'Fábulas', 'description' => 'Histórias curtas com uma moral, frequentemente usando animais personificados para ilustrar lições de vida e comportamentos.', 'category' => 'Book'],
            ['genre' => 'Fantasia Urbana', 'description' => 'Histórias de fantasia ambientadas em cenários urbanos contemporâneos.', 'category' => 'Book'],
            ['genre' => 'Fantasia', 'description' => 'Obras que apresentam mundos imaginários, com elementos mágicos, criaturas místicas, e sistemas de mitologia próprios, muitas vezes envolvendo heróis em jornadas épicas.', 'category' => 'Book'],
            ['genre' => 'Feminista', 'description' => 'Obras que exploram questões de gênero, poder, e o papel das mulheres na sociedade, muitas vezes com foco em empoderamento e crítica social.', 'category' => 'Book'],
            ['genre' => 'Ficção Científica', 'description' => 'Livros que exploram futuros alternativos, tecnologias avançadas, viagens espaciais, inteligência artificial, e temas relacionados à ciência e seus impactos na sociedade.', 'category' => 'Book'],
            ['genre' => 'Gastronomia', 'description' => 'Livros que se focam na culinária, receitas, e a arte de cozinhar, muitas vezes com narrativas pessoais ou históricas sobre a comida.', 'category' => 'Book'],
            ['genre' => 'Gestão de negócios', 'description' => 'Focado em estratégias, liderança, finanças e administração, oferecendo dicas e abordagens para o sucesso no mundo dos negócios.', 'category' => 'Book'],
            ['genre' => 'Gótica', 'description' => 'Narrativas que combinam elementos de horror e romance, muitas vezes ambientadas em cenários sombrios e antigos, explorando o sobrenatural e o psicológico.', 'category' => 'Book'],
            ['genre' => 'Guia de Autoajuda', 'description' => 'Livros destinados a ajudar os leitores a melhorar aspectos de suas vidas, oferecendo conselhos práticos, técnicas de crescimento pessoal, e motivação.', 'category' => 'Book'],
            ['genre' => 'Guias de carreira', 'description' => 'Oferecem conselhos sobre como construir uma carreira, encontrar um emprego, gerenciar seu desenvolvimento profissional ou mudar de área.', 'category' => 'Book'],
            ['genre' => 'Histórica', 'description' => 'Narrativas ambientadas em períodos passados, retratando eventos, figuras ou contextos históricos, muitas vezes com uma mistura de fatos reais e ficção.', 'category' => 'Book'],
            ['genre' => 'Horror', 'description' => 'Livros que buscam causar medo e desconforto no leitor, explorando temas sombrios, sobrenaturais, monstros, e atmosferas macabras.', 'category' => 'Book'],
            ['genre' => 'Humanidades e Ciências Sociais', 'description' => 'Livros sobre filosofia, história, sociologia, psicologia, e outras disciplinas que exploram a natureza humana e as sociedades.', 'category' => 'Book'],
            ['genre' => 'Humor e comédia', 'description' => 'Livros que têm como objetivo fazer o leitor rir, com situações engraçadas, personagens cômicos ou sátiras da vida cotidiana.', 'category' => 'Book'],
            ['genre' => 'Infantil', 'description' => 'Livros destinados a crianças, geralmente com histórias simples, moralizantes ou educativas, muitas vezes acompanhadas de ilustrações.', 'category' => 'Book'],
            ['genre' => 'Inspirador', 'description' => 'Livros que têm como objetivo motivar, inspirar e elevar o espírito dos leitores, oferecendo lições de vida e mensagens de otimismo.', 'category' => 'Book'],
            ['genre' => 'LGBTQ', 'description' => 'Focada em personagens e temas relacionados à comunidade LGBTQ+, abordando questões de identidade, amor e aceitação.', 'category' => 'Book'],
            ['genre' => 'Literária', 'description' => 'Livros que se concentram mais na qualidade da escrita e na exploração profunda das emoções e da condição humana do que em uma trama emocionante ou complexa.', 'category' => 'Book'],
            ['genre' => 'Literatura Erótica', 'description' => 'Livros que exploram o erotismo e a sexualidade de forma explícita, muitas vezes com foco no prazer e nas relações íntimas.', 'category' => 'Book'],
            ['genre' => 'Literatura Juvenil', 'description' => 'Obras voltadas para adolescentes e jovens adultos, explorando temas de amadurecimento, identidade, e as dificuldades da transição para a vida adulta.', 'category' => 'Book'],
            ['genre' => 'Manifesto', 'description' => 'Textos que expressam intenções, ideologias ou planos de um grupo ou movimento.', 'category' => 'Book'],
            ['genre' => 'Matemática e Ciências', 'description' => 'Livros que abordam temas matemáticos, científicos e tecnológicos, muitas vezes com uma abordagem educativa ou investigativa.', 'category' => 'Book'],
            ['genre' => 'Mistério e crime', 'description' => 'Histórias de investigação, onde o enigma central é resolver um crime, como assassinatos ou furtos, com muitos detalhes que desafiam o leitor a descobrir a verdade.', 'category' => 'Book'],
            ['genre' => 'Não-ficção infantil', 'description' => 'Livros que educam ou entretêm as crianças com fatos, curiosidades ou temas informativos, como ciências, história ou natureza.', 'category' => 'Book'],
            ['genre' => 'Novela Gráfica', 'description' => 'Livros que contam histórias através de uma combinação de texto e arte visual, semelhante aos quadrinhos, mas com enredos mais complexos e sofisticados.', 'category' => 'Book'],
            ['genre' => 'Novela', 'description' => 'Narrativas mais curtas que romances, mas mais longas que contos, que desenvolvem enredos e personagens de maneira mais concentrada.', 'category' => 'Book'],
            ['genre' => 'Paranormal', 'description' => 'Livros que exploram o sobrenatural, como fantasmas, espíritos, e outras entidades não explicáveis pela ciência, muitas vezes em cenários contemporâneos.', 'category' => 'Book'],
            ['genre' => 'Peças e roteiros', 'description' => 'Textos escritos para serem encenados ou filmados, como peças de teatro, roteiros de filmes e séries, com diálogos e ações que podem ser representados por atores.', 'category' => 'Book'],
            ['genre' => 'Poesia', 'description' => 'Obras que expressam ideias, emoções e narrativas através de versos, ritmos e linguagens figurativas, frequentemente explorando a beleza e a profundidade da linguagem.', 'category' => 'Book'],
            ['genre' => 'Policial', 'description' => 'Livros centrados em crimes e suas resoluções, geralmente com detetives ou policiais como protagonistas que investigam e solucionam mistérios.', 'category' => 'Book'],
            ['genre' => 'Pós-Apocalíptica', 'description' => 'Narrativas ambientadas em mundos devastados por algum tipo de catástrofe, focando na sobrevivência e reconstrução da sociedade.', 'category' => 'Book'],
            ['genre' => 'Projeto', 'description' => 'Relacionado a realizar projetos em diversas áreas, seja construção, design ou empreendedorismo, com uma abordagem prática e instrutiva.', 'category' => 'Book'],
            ['genre' => 'Quadrinhos não ficção', 'description' => 'Quadrinhos que abordam temas reais e informativos, como histórias de eventos históricos, biografias ou questões sociais.', 'category' => 'Book'],
            ['genre' => 'Religião e Espiritualidade', 'description' => 'Focado em temas religiosos, espirituais e filosóficos, com textos sagrados, práticas espirituais ou reflexão sobre a vida e o universo.', 'category' => 'Book'],
            ['genre' => 'Romance Histórico', 'description' => 'Histórias de amor ambientadas em períodos históricos, que combinam elementos de ficção histórica com narrativas românticas.', 'category' => 'Book'],
            ['genre' => 'Romance', 'description' => 'Histórias centradas em relacionamentos amorosos, explorando os altos e baixos das conexões emocionais entre personagens, muitas vezes com finais felizes.', 'category' => 'Book'],
            ['genre' => 'Saúde e Bem-estar', 'description' => 'Livros que abordam cuidados com o corpo, a mente e o espírito, focando em hábitos saudáveis, alimentação e equilíbrio emocional.', 'category' => 'Book'],
            ['genre' => 'Sexo e Relacionamentos', 'description' => 'Aborda temas sobre amor, intimidade, comunicação em relacionamentos e sexualidade, com uma abordagem educativa ou de bem-estar.', 'category' => 'Book'],
            ['genre' => 'Surrealista', 'description' => 'Narrativas que desafiam a lógica e a realidade, muitas vezes misturando sonho e realidade para criar uma experiência única e desconcertante.', 'category' => 'Book'],
            ['genre' => 'Tecnologia', 'description' => 'Livros sobre inovações tecnológicas, desenvolvimento de novos dispositivos, inteligência artificial, e o impacto da tecnologia no cotidiano.', 'category' => 'Book'],
            ['genre' => 'Thriller e Suspense', 'description' => 'Histórias cheias de tensão e mistério, com personagens em situações perigosas ou emocionalmente carregadas, onde o perigo ou o segredo por trás da trama mantém o leitor em suspense.', 'category' => 'Book'],
        ]);
    }
}
