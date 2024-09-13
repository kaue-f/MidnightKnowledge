<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class databaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classification')->insert([
            ['genre' => 'Ação',  'description' => 'Focado em cenas de luta, batalhas e ação intensa, com muita energia e movimenta', 'category' => 'Animes'],
            ['genre' => 'Aventura',  'description' => 'Histórias que envolvem jornadas épicas e explorações de novos lugares, muitas vezes em mundos fantásti', 'category' => 'Animes'],
            ['genre' => 'Comédia',  'description' => 'Centrado no humor, com situações engraçadas e personagens cômicos.', 'category' => 'Animes'],
            ['genre' => 'Comédia Romântica',  'description' => 'Mistura de romance e comédia, explorando o desenvolvimento amoroso de maneira leve e divertida.', 'category' => 'Animes'],
            ['genre' => 'Drama',  'description' => 'Histórias focadas em emoções profundas, dilemas pessoais e desenvolvimento intenso dos personagens.', 'category' => 'Animes'],
            ['genre' => 'Fantasia',  'description' => 'Enredos que se passam em mundos imaginários, com elementos sobrenaturais, magia e criaturas míticas.', 'category' => 'Animes'],
            ['genre' => 'Ficção Científica',  'description' => 'Explora temas futuristas como tecnologia avançada, robôs e viagens espaciais.', 'category' => 'Animes'],
            ['genre' => 'Horror',  'description' => 'Focado em criar medo e suspense, geralmente com monstros, fantasmas ou cenários macabros.', 'category' => 'Animes'],
            ['genre' => 'Mistério',  'description' => 'Gênero centrado em enigmas e mistérios a serem resolvidos, geralmente envolvendo crimes e reviravoltas.', 'category' => 'Animes'],
            ['genre' => 'Romance',  'description' => 'Histórias centradas em relacionamentos amorosos e desenvolvimento emocional entre os personagens.', 'category' => 'Animes'],
            ['genre' => 'Slice of Life',  'description' => 'Retrata o cotidiano comum, focando nas experiências e interações diárias dos personagens.', 'category' => 'Animes'],
            ['genre' => 'Sobrenatural',  'description' => 'Envolve elementos além do natural, como fantasmas, espíritos e poderes especiais.', 'category' => 'Animes'],
            ['genre' => 'Mecha',  'description' => 'Focado em robôs gigantes, geralmente pilotados por humanos, com ênfase em batalhas e guerras futuristas.', 'category' => 'Animes'],
            ['genre' => 'Shounen',  'description' => 'Voltado para jovens do sexo masculino, com ação, aventura e temas como amizade e superação.', 'category' => 'Animes'],
            ['genre' => 'Shoujo',  'description' => 'Direcionado ao público feminino jovem, com foco em romance, drama e emoções.', 'category' => 'Animes'],
            ['genre' => 'Seinen',  'description' => 'Animes voltados para homens adultos, com temas mais complexos e maduros, incluindo violência e dilemas psicológicos.', 'category' => 'Animes'],
            ['genre' => 'Josei',  'description' => 'Voltado para mulheres adultas, abordando temas de relacionamentos e desafios da vida adulta.', 'category' => 'Animes'],
            ['genre' => 'Ecchi',  'description' => 'Conteúdo sexual sugestivo, com fanservice e situações eróticas, mas sem cenas explícitas.', 'category' => 'Animes'],
            ['genre' => 'Harem',  'description' => 'Um protagonista masculino cercado por várias personagens femininas, que têm interesse amoroso nele.', 'category' => 'Animes'],
            ['genre' => 'Hentai',  'description' => 'Conteúdo sexual explícito.', 'category' => 'Animes'],
            ['genre' => 'Isekai',  'description' => 'O protagonista é transportado para um mundo paralelo ou realidade alternativa, geralmente com elementos de fantasia.', 'category' => 'Animes'],
            ['genre' => 'Yaoi',  'description' => 'Explora relacionamentos românticos e sexuais entre homens, frequentemente voltado para o público feminino.', 'category' => 'Animes'],
            ['genre' => 'Yuri',  'description' => 'Focado em relacionamentos românticos e sexuais entre mulheres.', 'category' => 'Animes'],
            ['genre' => 'Cyberpunk',  'description' => 'Ambientado em futuros distópicos, com temas de alta tecnologia, implantes cibernéticos e realidades virtuais.', 'category' => 'Animes'],
            ['genre' => 'Pós-apocalíptico',  'description' => 'Se passa em mundos devastados por catástrofes, com foco em sobrevivência e reconstrução.', 'category' => 'Animes'],
            ['genre' => 'Psicológico',  'description' => 'Explora o estado mental dos personagens, dilemas emocionais e manipulações psicológicas.', 'category' => 'Animes'],
            ['genre' => 'Histórico',  'description' => 'Ambientado em períodos históricos reais, com retratos de eventos e figuras importantes.', 'category' => 'Animes'],
            ['genre' => 'Esportes',  'description' => 'Focado em competições esportivas, trabalho em equipe e desenvolvimento de personagens atletas.', 'category' => 'Animes'],
            ['genre' => 'Militar',  'description' => 'Temática militar, com foco em batalhas, estratégias de guerra e a vida de soldados.', 'category' => 'Animes'],
            ['genre' => 'Policial',  'description' => 'Histórias centradas em investigações criminais, com detetives e forças policiais resolvendo crimes.', 'category' => 'Animes'],
            ['genre' => 'Space Opera',  'description' => 'Ação e drama no espaço, com naves espaciais, guerras intergalácticas e civilizações futuristas.', 'category' => 'Animes'],
            ['genre' => 'Musical',  'description' => 'Enredos que giram em torno de música, bandas e performances musicais.', 'category' => 'Animes'],
            ['genre' => 'Magia',  'description' => 'Envolve o uso de magia e poderes sobrenaturais, muitas vezes em cenários de fantasia.', 'category' => 'Animes'],
            ['genre' => 'Mahou Shoujo',  'description' => 'Focado em garotas mágicas que usam poderes sobrenaturais para combater o mal.', 'category' => 'Animes'],
            ['genre' => 'Paródia',  'description' => 'Faz sátiras de outros gêneros ou animes, utilizando humor e referências exageradas.', 'category' => 'Animes'],
            ['genre' => 'Gore',  'description' => 'Envolve violência extrema, com sangue, mutilações e cenas gráficas explícitas.', 'category' => 'Animes'],
            ['genre' => 'Tragédia',  'description' => 'Histórias com foco em sofrimento, perda e desfechos tristes.', 'category' => 'Animes'],
            ['genre' => 'Game',  'description' => 'Enredos que envolvem videogames, jogos de cartas ou RPGs, com personagens que competem ou vivem dentro de um jogo.', 'category' => 'Animes'],
            ['genre' => 'Escolar',  'description' => 'Se passa em ambiente escolar, explorando a vida estudantil, amizades e romances.', 'category' => 'Animes'],
            ['genre' => 'Superpoderes',  'description' => 'Personagens possuem habilidades sobrenaturais, com foco em batalhas e vilões.', 'category' => 'Animes'],
            ['genre' => 'Vampire',  'description' => 'Focado em histórias sobre vampiros, frequentemente misturando horror, romance e imortalidade.', 'category' => 'Animes'],
            ['genre' => 'Samurai',  'description' => 'Gênero focado em samurais, explorando o código de honra e batalhas no Japão feudal.', 'category' => 'Animes'],
            ['genre' => 'Artes Marciais',  'description' => 'Centrado em combates físicos, técnicas de luta e treinamento.', 'category' => 'Animes'],
            ['genre' => 'Detetive',  'description' => 'Focado em mistérios e investigações criminais, com protagonistas resolvendo casos complexos.', 'category' => 'Animes'],
            ['genre' => 'Demônio',  'description' => 'Explora temas relacionados a demônios e seres sobrenaturais, muitas vezes com uma visão sombria.', 'category' => 'Animes'],
            ['genre' => 'Vampiro',  'description' => 'Focado em vampiros, explorando aspectos da imortalidade, romance e horror.', 'category' => 'Animes'],
            ['genre' => 'Fantasma',  'description' => 'Envolve fantasmas ou espíritos como personagens principais, geralmente com temas sobrenaturais.', 'category' => 'Animes'],
            ['genre' => 'Ninja',  'description' => 'Gênero centrado em ninjas, espionagem, combates furtivos e habilidades especiais.', 'category' => 'Animes'],
            ['genre' => 'Shoujo Ai',  'description' => 'Relacionamentos românticos entre mulheres, sem conteúdo explícito.', 'category' => 'Animes'],
            ['genre' => 'Shounen Ai',  'description' => 'Relacionamentos românticos entre homens, com foco no romance leve e sem cenas explícitas.', 'category' => 'Animes'],
            ['genre' => 'Gourmet',  'description' => 'Envolve culinária e alimentação, geralmente com foco em competições ou a arte de cozinhar.', 'category' => 'Animes'],
            ['genre' => 'Surreal',  'description' => 'Explora temas que desafiam a realidade, com atmosferas oníricas e bizarras.', 'category' => 'Animes'],
            ['genre' => 'Kodomo',  'description' => 'Voltado para crianças, com temas simples e educativos, sem complexidade emocional ou violên', 'category' => 'Animes'],
            ['genre' => 'Ação',  'description' => 'Filmes com cenas de luta, perseguições e explosões, com ritmo acelerado e foco em adrenalina.', 'category' => 'Filmes'],
            ['genre' => 'Aventura',  'description' => 'Histórias que envolvem jornadas épicas e explorações em lugares desconhecidos ou exóticos.', 'category' => 'Filmes'],
            ['genre' => 'Comédia',  'description' => 'Filmes que têm o humor como foco principal, com situações engraçadas e personagens cômicos.', 'category' => 'Filmes'],
            ['genre' => 'Drama',  'description' => 'Centrado em conflitos emocionais e dilemas pessoais, com forte desenvolvimento de personagens.', 'category' => 'Filmes'],
            ['genre' => 'Terror',  'description' => 'Filmes que visam assustar, muitas vezes com elementos sobrenaturais, monstros ou cenas macabras.', 'category' => 'Filmes'],
            ['genre' => 'Suspense',  'description' => 'Gênero que mantém o público em tensão, com reviravoltas, mistérios e situações imprevisíveis.', 'category' => 'Filmes'],
            ['genre' => 'Ficção Científica',  'description' => 'Explora futuros alternativos, tecnologia avançada, viagens espaciais e universos imaginários.', 'category' => 'Filmes'],
            ['genre' => 'Fantasia',  'description' => 'Ambientado em mundos fictícios com magia, criaturas mitológicas e elementos sobrenaturais.', 'category' => 'Filmes'],
            ['genre' => 'Romance',  'description' => 'Focado em histórias de amor e relacionamentos românticos, com ênfase em sentimentos.', 'category' => 'Filmes'],
            ['genre' => 'Musical',  'description' => 'Filmes em que os personagens se expressam através de músicas e danças integradas à narrativa.', 'category' => 'Filmes'],
            ['genre' => 'Animação',  'description' => 'Histórias contadas por meio de desenhos ou computação gráfica, abrangendo diversos temas.', 'category' => 'Filmes'],
            ['genre' => 'Documentário',  'description' => 'Filmes que retratam a realidade, explorando temas informativos ou investigativos.', 'category' => 'Filmes'],
            ['genre' => 'Biografia',  'description' => 'Retrata a vida de uma figura histórica ou contemporânea, explorando suas conquistas e desafios.', 'category' => 'Filmes'],
            ['genre' => 'Guerra',  'description' => 'Filmes que retratam conflitos militares e batalhas, explorando as consequências da guerra nos personagens.', 'category' => 'Filmes'],
            ['genre' => 'Faroeste',  'description' => 'Ambientado no Velho Oeste, com cowboys, duelos, índios e a vida nas fronteiras americanas.', 'category' => 'Filmes'],
            ['genre' => 'Noir',  'description' => 'Filmes caracterizados por moralidade ambígua, detetives e um tom sombrio, geralmente ambientado em grandes cidades.', 'category' => 'Filmes'],
            ['genre' => 'Policial',  'description' => 'Focado em investigações criminais, detetives, e policiais que lutam contra o crime.', 'category' => 'Filmes'],
            ['genre' => 'Mistério',  'description' => 'Gênero que envolve a resolução de enigmas, muitas vezes com reviravoltas e suspense.', 'category' => 'Filmes'],
            ['genre' => 'Histórico',  'description' => 'Ambientado em épocsas passadas, retratando eventos e personagens históricos importantes.', 'category' => 'Filmes'],
            ['genre' => 'Esporte',  'description' => 'Filmes que focam em competições esportivas, contando histórias de atletas e suas jornadas.', 'category' => 'Filmes'],
            ['genre' => 'Crime',  'description' => 'Explora o submundo do crime, focando em atividades ilegais, máfias e os desafios da lei.', 'category' => 'Filmes'],
            ['genre' => 'Thriller Psicológico',  'description' => 'Focado na tensão mental, explorando a psique dos personagens e seus conflitos emocionais.', 'category' => 'Filmes'],
            ['genre' => 'Gangster',  'description' => 'Filmes sobre criminosos organizados, como máfias e gangues, com foco no poder e controle.', 'category' => 'Filmes'],
            ['genre' => 'Artes Marciais',  'description' => 'Envolve combates físicos com técnicas de luta, com ênfase na disciplina e na ação coreografada.', 'category' => 'Filmes'],
            ['genre' => 'Super-Heróis',  'description' => 'Histórias de personagens com habilidades extraordinárias que combatem o mal e protegem a humanidade.', 'category' => 'Filmes'],
            ['genre' => 'Catástrofe',  'description' => 'Filmes que envolvem desastres naturais ou provocados, com foco em sobrevivência e grandes perdas.', 'category' => 'Filmes'],
            ['genre' => 'Zumbi',  'description' => 'Histórias de sobrevivência em mundos infestados por mortos-vivos, com muito horror e ação.', 'category' => 'Filmes'],
            ['genre' => 'Apocalíptico',  'description' => 'Ambientado em cenários de destruição ou colapso global, com foco na sobrevivência após o apocalipse.', 'category' => 'Filmes'],
            ['genre' => 'Infantojuvenil',  'description' => 'Filmes direcionados ao público jovem, com temas leves e histórias de crescimento pessoal.', 'category' => 'Filmes'],
            ['genre' => 'Comédia Romântica',  'description' => 'Mistura romance e humor, com histórias leves e divertidas sobre relacionamentos.', 'category' => 'Filmes'],
            ['genre' => 'Cyberpunk',  'description' => 'Explora futuros distópicos, com alta tecnologia, implantes cibernéticos e sociedades decadentes.', 'category' => 'Filmes'],
            ['genre' => 'Space Opera',  'description' => 'Filmes épicos ambientados no espaço, com guerras intergalácticas, aventuras e batalhas cósmi', 'category' => 'Filmes'],
            ['genre' => 'Ação',  'description' => 'Jogos que enfatizam reflexos rápidos, coordenação motora e desafios físicos, geralmente envolvendo combate, plataformas ou tiros. Exemplos incluem jogos de tiro em primeira pessoa (FPS), beat em ups, e jogos de plataforma.', 'category' => 'Games'],
            ['genre' => 'Aventura',  'description' => 'Jogos que se focam em exploração, resolução de quebra-cabeças e desenvolvimento de uma narrativa, muitas vezes com ênfase na história e nos personagens.', 'category' => 'Games'],
            ['genre' => 'RPG',  'description' => 'Jogos onde os jogadores assumem o papel de personagens em um mundo fictício, frequentemente com elementos de progressão de personagem, como níveis, habilidades e customização. Inclui subgêneros como JRPGs (RPGs japoneses) e ARPGs (RPGs de ação).    ', 'category' => 'Games'],
            ['genre' => 'Estratégia',  'description' => 'Jogos que exigem planejamento e tomada de decisões cuidadosas, geralmente com ênfase em gerenciamento de recursos, táticas e construção de exércitos ou impérios. Exemplos incluem jogos de estratégia em tempo real (RTS) e estratégia por turnos (TBS).    ', 'category' => 'Games'],
            ['genre' => 'Tiro em Primeira Pessoa (FPS)',  'description' => 'Jogos de ação onde os jogadores experimentam a ação através dos olhos do personagem, focando em tiroteios e combate em ritmo rápido.', 'category' => 'Games'],
            ['genre' => 'Tiro em Terceira Pessoa (TPS)',  'description' => 'Similar aos FPS, mas com a câmera posicionada atrás do personagem, oferecendo uma visão mais ampla do ambiente e do avatar do jogador.', 'category' => 'Games'],
            ['genre' => 'Plataforma',  'description' => 'Jogos que envolvem saltar entre plataformas, evitar obstáculos e coletar itens, com foco em reflexos e coordenação.', 'category' => 'Games'],
            ['genre' => 'Esportes',  'description' => 'Jogos que simulam esportes reais, como futebol, basquete, ou tênis, muitas vezes com ênfase na competição e habilidade. Subgêneros incluem jogos de simulação esportiva e jogos de esporte arcade.', 'category' => 'Games'],
            ['genre' => 'Corrida',  'description' => 'Jogos centrados em competições de velocidade, onde os jogadores controlam veículos em pistas variadas. Inclui simulações realistas e corridas de arcade.', 'category' => 'Games'],
            ['genre' => 'Luta',  'description' => 'Jogos focados em combates um contra um ou em pequenos grupos, onde os jogadores controlam personagens que lutam entre si usando uma variedade de ataques e movimentos especiais.', 'category' => 'Games'],
            ['genre' => 'Quebra-Cabeça',  'description' => 'Jogos que desafiam a mente do jogador com problemas de lógica, padrões e pensamento estratégico, frequentemente com um ritmo mais calmo e focado na solução de desafios.', 'category' => 'Games'],
            ['genre' => 'Simulação',  'description' => 'Jogos que simulam atividades da vida real ou sistemas complexos, como gerenciamento de cidades, simulações de voo, ou jogos de fazenda. Inclui subgêneros como simulação de vida e simulação de negócios.', 'category' => 'Games'],
            ['genre' => '**Horror de Sobrevivência**',  'description' => 'Jogos que combinam elementos de horror com mecânicas de sobrevivência, onde os recursos são limitados e a tensão é alta, muitas vezes envolvendo fuga ou combate contra monstros e inimigos assustadores.', 'category' => 'Games'],
            ['genre' => 'Battle Royale',  'description' => 'Um subgênero de jogos de ação multijogador, onde um grande número de jogadores luta até que apenas um (ou uma equipe) permaneça vivo, geralmente em um mapa que encolhe com o tempo.', 'category' => 'Games'],
            ['genre' => 'Mundo Aberto',  'description' => 'Jogos que oferecem um mundo expansivo e não linear para os jogadores explorarem, permitindo liberdade para seguir missões e atividades secundárias no ritmo desejado.', 'category' => 'Games'],
            ['genre' => 'MMORPG',  'description' => 'RPGs que acontecem em mundos persistentes onde milhares de jogadores interagem, completam missões e evoluem seus personagens em conjunto.', 'category' => 'Games'],
            ['genre' => 'Hack and Slash',  'description' => 'Jogos de ação focados em combates corpo a corpo contra grandes quantidades de inimigos, frequentemente com movimentos rápidos e combos.', 'category' => 'Games'],
            ['genre' => 'MOBA (Multiplayer Online Battle Arena)',  'description' => 'Jogos onde duas equipes competem para destruir a base da outra, com cada jogador controlando um personagem com habilidades únicas.', 'category' => 'Games'],
            ['genre' => 'Terror Psicológico',  'description' => 'Jogos que exploram o medo e a tensão através de atmosferas sombrias, histórias perturbadoras e ameaças sutis, muitas vezes manipulando a percepção do jogador.', 'category' => 'Games'],
            ['genre' => 'Metroidvania',  'description' => 'Um subgênero de ação e aventura que combina exploração em um mundo interconectado com habilidades adquiridas ao longo do jogo, permitindo acessar novas áreas.', 'category' => 'Games'],
            ['genre' => 'Visual Novel',  'description' => 'Jogos focados em narrativa, onde o jogador faz escolhas que influenciam a história, muitas vezes apresentando arte estática e diálogos extensos.', 'category' => 'Games'],
            ['genre' => 'Ritmo / Musical:',  'description' => 'ogos que desafiam o jogador a seguir o ritmo da música, pressionando botões em sincronia com uma trilha sonora.', 'category' => 'Games'],
            ['genre' => 'Party Game',  'description' => 'Jogos projetados para multiplayer local, muitas vezes em estilo de minijogos, focados na diversão rápida e acessível em grupo.', 'category' => 'Games'],
            ['genre' => 'Card Game',  'description' => 'Jogos baseados em cartas colecionáveis ou de baralho, onde os jogadores constroem seus decks e competem contra outros jogadores ou a IA.  ', 'category' => 'Games'],
            ['genre' => 'Survival',  'description' => 'Jogos que colocam os jogadores em ambientes hostis, onde devem gerenciar recursos, construir abrigos, e enfrentar ameaças como fome, sede, e inimigos.', 'category' => 'Games'],
            ['genre' => 'Sandbox',  'description' => 'Jogos que oferecem ferramentas e ambientes para que os jogadores criem e manipulem o mundo do jogo de maneira livre e criativa.', 'category' => 'Games'],
            ['genre' => 'Realidade Virtual (VR)',  'description' => 'Jogos projetados para serem jogados com headsets de realidade virtual, proporcionando uma imersão total através de ambientes tridimensionais e interações intuitivas.', 'category' => 'Games'],
            ['genre' => 'Realidade Aumentada (AR)',  'description' => 'Jogos que combinam o mundo real com elementos digitais, muitas vezes usando a câmera e o GPS de dispositivos móveis para interagir com o ambiente real.', 'category' => 'Games'],
            ['genre' => 'Gacha',  'description' => 'Jogos onde os jogadores obtêm personagens, itens ou cartas através de mecânicas de sorteio (semelhante a máquinas de gacha), frequentemente encontrados em jogos móveis.', 'category' => 'Games'],
            ['genre' => 'Educational',  'description' => 'Jogos projetados com o objetivo de educar, ensinando habilidades, conceitos ou conhecimento de forma interativa e divertida.', 'category' => 'Games'],
            ['genre' => 'Fighting (Versus)',  'description' => 'Jogos de luta competitivos que geralmente envolvem confrontos entre dois jogadores ou contra a IA, com uma variedade de personagens e estilos de luta.', 'category' => 'Games'],
            ['genre' => 'Tower Defense',  'description' => 'Jogos onde o jogador deve defender uma base ou caminho estratégico, posicionando torres e unidades defensivas para deter ondas de inimigos.', 'category' => 'Games'],
            ['genre' => 'Tycoon / Gestão',  'description' => 'Jogos onde o jogador gerencia negócios, parques, ou cidades, focando na economia, satisfação dos clientes, e crescimento da operação.', 'category' => 'Games'],
        ]);
    }
}
