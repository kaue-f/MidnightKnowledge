<?php

namespace Database\Seeders;

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
            ['genre' => 'Ação', 'description' => 'Jogos que enfatizam reflexos rápidos, coordenação motora e desafios físicos, geralmente envolvendo combate, plataformas ou tiros. Exemplos incluem jogos de tiro em primeira pessoa (FPS), beat em ups, e jogos de plataforma.', 'category' => 'Game'],
            ['genre' => 'Anime', 'description' => 'Jogos com estética e narrativa inspirados por animações japonesas.', 'category' => 'Game'],
            ['genre' => 'Arcade e Ritmo', 'description' => 'Jogos que oferecem uma experiência rápida e viciante, muitas vezes com desafios baseados em música ou padrões.', 'category' => 'Game'],
            ['genre' => 'Aventura', 'description' => 'Jogos que se focam em exploração, resolução de quebra-cabeças e desenvolvimento de uma narrativa, muitas vezes com ênfase na história e nos personagens.', 'category' => 'Game'],
            ['genre' => 'Battle Royale', 'description' => 'Um subgênero de jogos de ação multijogador, onde um grande número de jogadores luta até que apenas um (ou uma equipe) permaneça vivo, geralmente em um mapa que encolhe com o tempo.', 'category' => 'Game'],
            ['genre' => 'Boa Trama', 'description' => 'Jogos com histórias complexas e envolventes que prendem o jogador.', 'category' => 'Game'],
            ['genre' => 'Card Game', 'description' => 'Jogos baseados em cartas colecionáveis ou de baralho, onde os jogadores constroem seus decks e competem contra outros jogadores ou a IA.  ', 'category' => 'Game'],
            ['genre' => 'Casuais', 'description' => 'Jogos simples, fáceis de entender e acessíveis para todos.', 'category' => 'Game'],
            ['genre' => 'Competitivo On-line', 'description' => 'Jogos voltados para disputas entre jogadores pela internet.', 'category' => 'Game'],
            ['genre' => 'Construção e Automação', 'description' => 'Foco em criar e otimizar sistemas complexos, como fábricas ou cidades.', 'category' => 'Game'],
            ['genre' => 'Cooperativo', 'description' => 'Jogos onde os jogadores trabalham juntos para alcançar objetivos.', 'category' => 'Game'],
            ['genre' => 'Corrida', 'description' => 'Jogos centrados em competições de velocidade, onde os jogadores controlam veículos em pistas variadas. Inclui simulações realistas e corridas de arcade.', 'category' => 'Game'],
            ['genre' => 'Educational', 'description' => 'Jogos projetados com o objetivo de educar, ensinando habilidades, conceitos ou conhecimento de forma interativa e divertida.', 'category' => 'Game'],
            ['genre' => 'Empregos e Passatempos', 'description' => 'Jogos que simulam carreiras ou hobbies específicos.', 'category' => 'Game'],
            ['genre' => 'Encontros', 'description' => 'Simulações de relacionamentos e interações sociais.', 'category' => 'Game'],
            ['genre' => 'Espaciais', 'description' => 'Foco em exploração e combate espacial.', 'category' => 'Game'],
            ['genre' => 'Espaço e Aviação', 'description' => 'Jogos que simulam exploração espacial ou voos.', 'category' => 'Game'],
            ['genre' => 'Esportes', 'description' => 'Jogos que simulam esportes reais, como futebol, basquete, ou tênis, muitas vezes com ênfase na competição e habilidade. Subgêneros incluem jogos de simulação esportiva e jogos de esporte arcade.', 'category' => 'Game'],
            ['genre' => 'Estratégia Baseada em Turnos', 'description' => 'Jogos estratégicos onde as ações acontecem em turnos.', 'category' => 'Game'],
            ['genre' => 'Estratégia', 'description' => 'Jogos que exigem planejamento e tomada de decisões cuidadosas, geralmente com ênfase em gerenciamento de recursos, táticas e construção de exércitos ou impérios. Exemplos incluem jogos de estratégia em tempo real (RTS) e estratégia por turnos (TBS).    ', 'category' => 'Game'],
            ['genre' => 'Ficção Científica e Cyberpunk', 'description' => 'Cenários futuristas com tecnologia avançada.', 'category' => 'Game'],
            ['genre' => 'Fighting (Versus)', 'description' => 'Jogos de luta competitivos que geralmente envolvem confrontos entre dois jogadores ou contra a IA, com uma variedade de personagens e estilos de luta.', 'category' => 'Game'],
            ['genre' => 'Gacha', 'description' => 'Jogos onde os jogadores obtêm personagens, itens ou cartas através de mecânicas de sorteio (semelhante a máquinas de gacha), frequentemente encontrados em jogos móveis.', 'category' => 'Game'],
            ['genre' => 'Hack and Slash', 'description' => 'Jogos de ação focados em combates corpo a corpo contra grandes quantidades de inimigos, frequentemente com movimentos rápidos e combos.', 'category' => 'Game'],
            ['genre' => 'Horror de Sobrevivência', 'description' => 'Jogos que combinam elementos de horror com mecânicas de sobrevivência, onde os recursos são limitados e a tensão é alta, muitas vezes envolvendo fuga ou combate contra monstros e inimigos assustadores.', 'category' => 'Game'],
            ['genre' => 'Idle Games', 'description' => 'Jogos onde o progresso continua mesmo quando o jogador não está ativamente jogando.', 'category' => 'Game'],
            ['genre' => 'JRPG', 'description' => 'RPGs japoneses com ênfase em história, personagens marcantes e combates em turnos.', 'category' => 'Game'],
            ['genre' => 'Luta e Artes Marciais', 'description' => 'Jogos focados em combates um contra um ou em pequenos grupos, onde os jogadores controlam personagens que lutam entre si usando uma variedade de ataques e movimentos especiais.', 'category' => 'Game'],
            ['genre' => 'Metroidvania', 'description' => 'Um subgênero de ação e aventura que combina exploração em um mundo interconectado com habilidades adquiridas ao longo do jogo, permitindo acessar novas áreas.', 'category' => 'Game'],
            ['genre' => 'Militar', 'description' => 'Jogos baseados em táticas e estratégias militares.', 'category' => 'Game'],
            ['genre' => 'Mistério e Investigação', 'description' => 'Resolver enigmas ou crimes.', 'category' => 'Game'],
            ['genre' => 'MMO', 'description' => 'Jogos massivos, com milhares de jogadores simultâneos em um mundo compartilhado.', 'category' => 'Game'],
            ['genre' => 'MOBA (Multiplayer Online Battle Arena)', 'description' => 'Jogos onde duas equipes competem para destruir a base da outra, com cada jogador controlando um personagem com habilidades únicas.', 'category' => 'Game'],
            ['genre' => 'MOBA', 'description' => 'Jogos de arena de batalha online, onde equipes competem para destruir a base adversária.', 'category' => 'Game'],
            ['genre' => 'Multijogador Local e em Grupo', 'description' => 'Jogos para jogar com amigos localmente.', 'category' => 'Game'],
            ['genre' => 'Multijogador', 'description' => 'Experiência com vários jogadores no mesmo jogo.', 'category' => 'Game'],
            ['genre' => 'Mundo Aberto', 'description' => 'Jogos que oferecem um mundo expansivo e não linear para os jogadores explorarem, permitindo liberdade para seguir missões e atividades secundárias no ritmo desejado.', 'category' => 'Game'],
            ['genre' => 'Musical / Ritmo', 'description' => 'Jogos baseados em sincronia com música, desafiando reflexos e coordenação.', 'category' => 'Game'],
            ['genre' => 'Objetos Escondidos', 'description' => 'Jogos onde o jogador procura itens ocultos em cenários detalhados.', 'category' => 'Game'],
            ['genre' => 'Party Game', 'description' => 'Jogos projetados para multiplayer local, muitas vezes em estilo de minijogos, focados na diversão rápida e acessível em grupo.', 'category' => 'Game'],
            ['genre' => 'Pescaria e Caça', 'description' => 'Jogos que simulam pesca ou caça em ambientes naturais.', 'category' => 'Game'],
            ['genre' => 'Plataforma', 'description' => 'Jogos que envolvem saltar entre plataformas, evitar obstáculos e coletar itens, com foco em reflexos e coordenação.', 'category' => 'Game'],
            ['genre' => 'Plataformas e Corridas Intermináveis', 'description' => 'Jogos que exigem saltos precisos ou correr continuamente enquanto desvia de obstáculos.', 'category' => 'Game'],
            ['genre' => 'Quebra-Cabeça', 'description' => 'Jogos que desafiam a mente do jogador com problemas de lógica, padrões e pensamento estratégico, frequentemente com um ritmo mais calmo e focado na solução de desafios.', 'category' => 'Game'],
            ['genre' => 'Realidade Aumentada (AR)', 'description' => 'Jogos que combinam o mundo real com elementos digitais, muitas vezes usando a câmera e o GPS de dispositivos móveis para interagir com o ambiente real.', 'category' => 'Game'],
            ['genre' => 'Realidade Virtual (VR)', 'description' => 'Jogos projetados para serem jogados com headsets de realidade virtual, proporcionando uma imersão total através de ambientes tridimensionais e interações intuitivas.', 'category' => 'Game'],
            ['genre' => 'Ritmo / Musical:', 'description' => 'ogos que desafiam o jogador a seguir o ritmo da música, pressionando botões em sincronia com uma trilha sonora.', 'category' => 'Game'],
            ['genre' => 'Roguelike', 'description' => 'Jogos focados em exploração de masmorras geradas proceduralmente, com elementos de morte permanente e dificuldade elevada.', 'category' => 'Game'],
            ['genre' => 'RPG em Grupos', 'description' => 'Foco no gerenciamento de equipes ou grupos de personagens.', 'category' => 'Game'],
            ['genre' => 'RPG', 'description' => 'Jogos onde os jogadores assumem o papel de personagens em um mundo fictício, frequentemente com elementos de progressão de personagem, como níveis, habilidades e customização. Inclui subgêneros como JRPGs (RPGs japoneses) e ARPGs (RPGs de ação).    ', 'category' => 'Game'],
            ['genre' => 'Sandbox', 'description' => 'Jogos que oferecem ferramentas e ambientes para que os jogadores criem e manipulem o mundo do jogo de maneira livre e criativa.', 'category' => 'Game'],
            ['genre' => 'Simulação', 'description' => 'Jogos que simulam atividades da vida real ou sistemas complexos, como gerenciamento de cidades, simulações de voo, ou jogos de fazenda. Inclui subgêneros como simulação de vida e simulação de negócios.', 'category' => 'Game'],
            ['genre' => 'Simuladores Automobilísticos', 'description' => 'Experiências realistas de direção e pilotagem.', 'category' => 'Game'],
            ['genre' => 'Simuladores de Esporte', 'description' => 'Simulações detalhadas de esportes.', 'category' => 'Game'],
            ['genre' => 'Sobrevivência', 'description' => 'Jogos que desafiam o jogador a resistir a condições adversas.', 'category' => 'Game'],
            ['genre' => 'Somente para Adultos', 'description' => 'Conteúdo maduro voltado para adultos.', 'category' => 'Game'],
            ['genre' => 'Stealth', 'description' => 'Jogos que focam na furtividade e em evitar a detecção dos inimigos.', 'category' => 'Game'],
            ['genre' => 'Survival', 'description' => 'Jogos que colocam os jogadores em ambientes hostis, onde devem gerenciar recursos, construir abrigos, e enfrentar ameaças como fome, sede, e inimigos.', 'category' => 'Game'],
            ['genre' => 'Terror Psicológico', 'description' => 'Jogos que exploram o medo e a tensão através de atmosferas sombrias, histórias perturbadoras e ameaças sutis, muitas vezes manipulando a percepção do jogador.', 'category' => 'Game'],
            ['genre' => 'Terror', 'description' => 'Jogos que provocam medo e tensão.', 'category' => 'Game'],
            ['genre' => 'Tiro em Primeira Pessoa (FPS)', 'description' => 'Jogos de ação onde os jogadores experimentam a ação através dos olhos do personagem, focando em tiroteios e combate em ritmo rápido.', 'category' => 'Game'],
            ['genre' => 'Tiro em Terceira Pessoa (TPS)', 'description' => 'Similar aos FPS, mas com a câmera posicionada atrás do personagem, oferecendo uma visão mais ampla do ambiente e do avatar do jogador.', 'category' => 'Game'],
            ['genre' => 'Tower Defense', 'description' => 'Jogos onde o jogador deve defender uma base ou caminho estratégico, posicionando torres e unidades defensivas para deter ondas de inimigos.', 'category' => 'Game'],
            ['genre' => 'Trivia', 'description' => 'Jogos baseados em perguntas e respostas, testando o conhecimento dos jogadores em diversos temas.', 'category' => 'Game'],
            ['genre' => 'Tycoon / Gestão', 'description' => 'Jogos onde o jogador gerencia negócios, parques, ou cidades, focando na economia, satisfação dos clientes, e crescimento da operação.', 'category' => 'Game'],
            ['genre' => 'Um Jogador', 'description' => 'Experiência focada em um único jogador.', 'category' => 'Game'],
            ['genre' => 'Visual Novel', 'description' => 'Jogos focados em narrativa, onde o jogador faz escolhas que influenciam a história, muitas vezes apresentando arte estática e diálogos extensos.', 'category' => 'Game'],
        ]);
    }
}
