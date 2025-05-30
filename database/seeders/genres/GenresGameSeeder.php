<?php

namespace Database\Seeders\Genres;

use App\Enums\ContentType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['genre' => 'Ação', 'description' => 'Jogos que enfatizam reflexos rápidos, coordenação motora e desafios físicos, geralmente envolvendo combate, plataformas ou tiros. Exemplos incluem jogos de tiro em primeira pessoa (FPS), beat em ups, e jogos de plataforma.', 'category' => ContentType::GAME],
            ['genre' => 'Anime', 'description' => 'Jogos com estética e narrativa inspirados por animações japonesas.', 'category' => ContentType::GAME],
            ['genre' => 'Arcade e Ritmo', 'description' => 'Jogos que oferecem uma experiência rápida e viciante, muitas vezes com desafios baseados em música ou padrões.', 'category' => ContentType::GAME],
            ['genre' => 'Aventura', 'description' => 'Jogos que se focam em exploração, resolução de quebra-cabeças e desenvolvimento de uma narrativa, muitas vezes com ênfase na história e nos personagens.', 'category' => ContentType::GAME],
            ['genre' => 'Battle Royale', 'description' => 'Um subgênero de jogos de ação multijogador, onde um grande número de jogadores luta até que apenas um (ou uma equipe) permaneça vivo, geralmente em um mapa que encolhe com o tempo.', 'category' => ContentType::GAME],
            ['genre' => 'Boa Trama', 'description' => 'Jogos com histórias complexas e envolventes que prendem o jogador.', 'category' => ContentType::GAME],
            ['genre' => 'Card Game', 'description' => 'Jogos baseados em cartas colecionáveis ou de baralho, onde os jogadores constroem seus decks e competem contra outros jogadores ou a IA.  ', 'category' => ContentType::GAME],
            ['genre' => 'Casuais', 'description' => 'Jogos simples, fáceis de entender e acessíveis para todos.', 'category' => ContentType::GAME],
            ['genre' => 'Competitivo On-line', 'description' => 'Jogos voltados para disputas entre jogadores pela internet.', 'category' => ContentType::GAME],
            ['genre' => 'Construção e Automação', 'description' => 'Foco em criar e otimizar sistemas complexos, como fábricas ou cidades.', 'category' => ContentType::GAME],
            ['genre' => 'Cooperativo', 'description' => 'Jogos onde os jogadores trabalham juntos para alcançar objetivos.', 'category' => ContentType::GAME],
            ['genre' => 'Corrida', 'description' => 'Jogos centrados em competições de velocidade, onde os jogadores controlam veículos em pistas variadas. Inclui simulações realistas e corridas de arcade.', 'category' => ContentType::GAME],
            ['genre' => 'Educational', 'description' => 'Jogos projetados com o objetivo de educar, ensinando habilidades, conceitos ou conhecimento de forma interativa e divertida.', 'category' => ContentType::GAME],
            ['genre' => 'Empregos e Passatempos', 'description' => 'Jogos que simulam carreiras ou hobbies específicos.', 'category' => ContentType::GAME],
            ['genre' => 'Encontros', 'description' => 'Simulações de relacionamentos e interações sociais.', 'category' => ContentType::GAME],
            ['genre' => 'Espaciais', 'description' => 'Foco em exploração e combate espacial.', 'category' => ContentType::GAME],
            ['genre' => 'Espaço e Aviação', 'description' => 'Jogos que simulam exploração espacial ou voos.', 'category' => ContentType::GAME],
            ['genre' => 'Esportes', 'description' => 'Jogos que simulam esportes reais, como futebol, basquete, ou tênis, muitas vezes com ênfase na competição e habilidade. Subgêneros incluem jogos de simulação esportiva e jogos de esporte arcade.', 'category' => ContentType::GAME],
            ['genre' => 'Estratégia Baseada em Turnos', 'description' => 'Jogos estratégicos onde as ações acontecem em turnos.', 'category' => ContentType::GAME],
            ['genre' => 'Estratégia', 'description' => 'Jogos que exigem planejamento e tomada de decisões cuidadosas, geralmente com ênfase em gerenciamento de recursos, táticas e construção de exércitos ou impérios. Exemplos incluem jogos de estratégia em tempo real (RTS) e estratégia por turnos (TBS).    ', 'category' => ContentType::GAME],
            ['genre' => 'Ficção Científica e Cyberpunk', 'description' => 'Cenários futuristas com tecnologia avançada.', 'category' => ContentType::GAME],
            ['genre' => 'Fighting (Versus)', 'description' => 'Jogos de luta competitivos que geralmente envolvem confrontos entre dois jogadores ou contra a IA, com uma variedade de personagens e estilos de luta.', 'category' => ContentType::GAME],
            ['genre' => 'Gacha', 'description' => 'Jogos onde os jogadores obtêm personagens, itens ou cartas através de mecânicas de sorteio (semelhante a máquinas de gacha), frequentemente encontrados em jogos móveis.', 'category' => ContentType::GAME],
            ['genre' => 'Hack and Slash', 'description' => 'Jogos de ação focados em combates corpo a corpo contra grandes quantidades de inimigos, frequentemente com movimentos rápidos e combos.', 'category' => ContentType::GAME],
            ['genre' => 'Horror de Sobrevivência', 'description' => 'Jogos que combinam elementos de horror com mecânicas de sobrevivência, onde os recursos são limitados e a tensão é alta, muitas vezes envolvendo fuga ou combate contra monstros e inimigos assustadores.', 'category' => ContentType::GAME],
            ['genre' => 'Idle Games', 'description' => 'Jogos onde o progresso continua mesmo quando o jogador não está ativamente jogando.', 'category' => ContentType::GAME],
            ['genre' => 'JRPG', 'description' => 'RPGs japoneses com ênfase em história, personagens marcantes e combates em turnos.', 'category' => ContentType::GAME],
            ['genre' => 'Luta e Artes Marciais', 'description' => 'Jogos focados em combates um contra um ou em pequenos grupos, onde os jogadores controlam personagens que lutam entre si usando uma variedade de ataques e movimentos especiais.', 'category' => ContentType::GAME],
            ['genre' => 'Metroidvania', 'description' => 'Um subgênero de ação e aventura que combina exploração em um mundo interconectado com habilidades adquiridas ao longo do jogo, permitindo acessar novas áreas.', 'category' => ContentType::GAME],
            ['genre' => 'Militar', 'description' => 'Jogos baseados em táticas e estratégias militares.', 'category' => ContentType::GAME],
            ['genre' => 'Mistério e Investigação', 'description' => 'Resolver enigmas ou crimes.', 'category' => ContentType::GAME],
            ['genre' => 'MMO', 'description' => 'Jogos massivos, com milhares de jogadores simultâneos em um mundo compartilhado.', 'category' => ContentType::GAME],
            ['genre' => 'MOBA (Multiplayer Online Battle Arena)', 'description' => 'Jogos onde duas equipes competem para destruir a base da outra, com cada jogador controlando um personagem com habilidades únicas.', 'category' => ContentType::GAME],
            ['genre' => 'MOBA', 'description' => 'Jogos de arena de batalha online, onde equipes competem para destruir a base adversária.', 'category' => ContentType::GAME],
            ['genre' => 'Multijogador Local e em Grupo', 'description' => 'Jogos para jogar com amigos localmente.', 'category' => ContentType::GAME],
            ['genre' => 'Multijogador', 'description' => 'Experiência com vários jogadores no mesmo jogo.', 'category' => ContentType::GAME],
            ['genre' => 'Mundo Aberto', 'description' => 'Jogos que oferecem um mundo expansivo e não linear para os jogadores explorarem, permitindo liberdade para seguir missões e atividades secundárias no ritmo desejado.', 'category' => ContentType::GAME],
            ['genre' => 'Musical / Ritmo', 'description' => 'Jogos baseados em sincronia com música, desafiando reflexos e coordenação.', 'category' => ContentType::GAME],
            ['genre' => 'Objetos Escondidos', 'description' => 'Jogos onde o jogador procura itens ocultos em cenários detalhados.', 'category' => ContentType::GAME],
            ['genre' => 'Party Game', 'description' => 'Jogos projetados para multiplayer local, muitas vezes em estilo de minijogos, focados na diversão rápida e acessível em grupo.', 'category' => ContentType::GAME],
            ['genre' => 'Pescaria e Caça', 'description' => 'Jogos que simulam pesca ou caça em ambientes naturais.', 'category' => ContentType::GAME],
            ['genre' => 'Plataforma', 'description' => 'Jogos que envolvem saltar entre plataformas, evitar obstáculos e coletar itens, com foco em reflexos e coordenação.', 'category' => ContentType::GAME],
            ['genre' => 'Plataformas e Corridas Intermináveis', 'description' => 'Jogos que exigem saltos precisos ou correr continuamente enquanto desvia de obstáculos.', 'category' => ContentType::GAME],
            ['genre' => 'Quebra-Cabeça', 'description' => 'Jogos que desafiam a mente do jogador com problemas de lógica, padrões e pensamento estratégico, frequentemente com um ritmo mais calmo e focado na solução de desafios.', 'category' => ContentType::GAME],
            ['genre' => 'Realidade Aumentada (AR)', 'description' => 'Jogos que combinam o mundo real com elementos digitais, muitas vezes usando a câmera e o GPS de dispositivos móveis para interagir com o ambiente real.', 'category' => ContentType::GAME],
            ['genre' => 'Realidade Virtual (VR)', 'description' => 'Jogos projetados para serem jogados com headsets de realidade virtual, proporcionando uma imersão total através de ambientes tridimensionais e interações intuitivas.', 'category' => ContentType::GAME],
            ['genre' => 'Ritmo / Musical:', 'description' => 'ogos que desafiam o jogador a seguir o ritmo da música, pressionando botões em sincronia com uma trilha sonora.', 'category' => ContentType::GAME],
            ['genre' => 'Roguelike', 'description' => 'Jogos focados em exploração de masmorras geradas proceduralmente, com elementos de morte permanente e dificuldade elevada.', 'category' => ContentType::GAME],
            ['genre' => 'RPG em Grupos', 'description' => 'Foco no gerenciamento de equipes ou grupos de personagens.', 'category' => ContentType::GAME],
            ['genre' => 'RPG', 'description' => 'Jogos onde os jogadores assumem o papel de personagens em um mundo fictício, frequentemente com elementos de progressão de personagem, como níveis, habilidades e customização. Inclui subgêneros como JRPGs (RPGs japoneses) e ARPGs (RPGs de ação).    ', 'category' => ContentType::GAME],
            ['genre' => 'Sandbox', 'description' => 'Jogos que oferecem ferramentas e ambientes para que os jogadores criem e manipulem o mundo do jogo de maneira livre e criativa.', 'category' => ContentType::GAME],
            ['genre' => 'Simulação', 'description' => 'Jogos que simulam atividades da vida real ou sistemas complexos, como gerenciamento de cidades, simulações de voo, ou jogos de fazenda. Inclui subgêneros como simulação de vida e simulação de negócios.', 'category' => ContentType::GAME],
            ['genre' => 'Simuladores Automobilísticos', 'description' => 'Experiências realistas de direção e pilotagem.', 'category' => ContentType::GAME],
            ['genre' => 'Simuladores de Esporte', 'description' => 'Simulações detalhadas de esportes.', 'category' => ContentType::GAME],
            ['genre' => 'Sobrevivência', 'description' => 'Jogos que desafiam o jogador a resistir a condições adversas.', 'category' => ContentType::GAME],
            ['genre' => 'Somente para Adultos', 'description' => 'Conteúdo maduro voltado para adultos.', 'category' => ContentType::GAME],
            ['genre' => 'Stealth', 'description' => 'Jogos que focam na furtividade e em evitar a detecção dos inimigos.', 'category' => ContentType::GAME],
            ['genre' => 'Survival', 'description' => 'Jogos que colocam os jogadores em ambientes hostis, onde devem gerenciar recursos, construir abrigos, e enfrentar ameaças como fome, sede, e inimigos.', 'category' => ContentType::GAME],
            ['genre' => 'Terror Psicológico', 'description' => 'Jogos que exploram o medo e a tensão através de atmosferas sombrias, histórias perturbadoras e ameaças sutis, muitas vezes manipulando a percepção do jogador.', 'category' => ContentType::GAME],
            ['genre' => 'Terror', 'description' => 'Jogos que provocam medo e tensão.', 'category' => ContentType::GAME],
            ['genre' => 'Tiro em Primeira Pessoa (FPS)', 'description' => 'Jogos de ação onde os jogadores experimentam a ação através dos olhos do personagem, focando em tiroteios e combate em ritmo rápido.', 'category' => ContentType::GAME],
            ['genre' => 'Tiro em Terceira Pessoa (TPS)', 'description' => 'Similar aos FPS, mas com a câmera posicionada atrás do personagem, oferecendo uma visão mais ampla do ambiente e do avatar do jogador.', 'category' => ContentType::GAME],
            ['genre' => 'Tower Defense', 'description' => 'Jogos onde o jogador deve defender uma base ou caminho estratégico, posicionando torres e unidades defensivas para deter ondas de inimigos.', 'category' => ContentType::GAME],
            ['genre' => 'Trivia', 'description' => 'Jogos baseados em perguntas e respostas, testando o conhecimento dos jogadores em diversos temas.', 'category' => ContentType::GAME],
            ['genre' => 'Tycoon / Gestão', 'description' => 'Jogos onde o jogador gerencia negócios, parques, ou cidades, focando na economia, satisfação dos clientes, e crescimento da operação.', 'category' => ContentType::GAME],
            ['genre' => 'Um Jogador', 'description' => 'Experiência focada em um único jogador.', 'category' => ContentType::GAME],
            ['genre' => 'Visual Novel', 'description' => 'Jogos focados em narrativa, onde o jogador faz escolhas que influenciam a história, muitas vezes apresentando arte estática e diálogos extensos.', 'category' => ContentType::GAME],
        ]);
    }
}
