<?php
// logica.php

// --- POPULAR COM DADOS DE TESTE ---
if(isset($_GET['popular'])) {
    $jogos_teste = [
        ["nome"=>"Elden Ring","genero"=>"RPG","preco"=>249.90,"desenvolvedora"=>"FromSoftware","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1245620/header.jpg","descricao"=>"Elden Ring é um RPG de ação em mundo aberto criado pela FromSoftware. Explore as Terras Intermédias, enfrente chefes desafiadores, descubra masmorras secretas e construa seu personagem com diferentes armas, magias e estilos de combate. A narrativa envolve mistério, exploração e liberdade total para o jogador seguir seu próprio caminho."],

        ["nome"=>"The Elder Scrolls V: Skyrim Special Edition","genero"=>"RPG","preco"=>149.00,"desenvolvedora"=>"Bethesda Game Studios","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/489830/header.jpg","descricao"=>"Skyrim Special Edition traz o clássico RPG da Bethesda com gráficos aprimorados e todos os conteúdos adicionais. Explore um vasto mundo aberto cheio de cidades, cavernas, dragões e missões épicas. Você assume o papel do Dragonborn, um herói com o poder de enfrentar os dragões que retornaram ao mundo."],

        ["nome"=>"Marvel's Spider-Man Remastered","genero"=>"Ação","preco"=>249.90,"desenvolvedora"=>"Insomniac Games","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/header.jpg","descricao"=>"Assuma o papel de Peter Parker e balance pelas ruas de Nova York em Marvel's Spider-Man Remastered. Enfrente vilões icônicos do universo Marvel, utilize habilidades acrobáticas e participe de uma história emocionante cheia de ação, drama e momentos cinematográficos."],

        ["nome"=>"Dark Souls III","genero"=>"RPG","preco"=>199.90,"desenvolvedora"=>"FromSoftware","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/374320/header.jpg","descricao"=>"Dark Souls III é um RPG de ação desafiador conhecido por sua dificuldade e atmosfera sombria. Explore reinos decadentes, enfrente inimigos poderosos e descubra segredos ocultos enquanto tenta impedir o fim do mundo. Cada batalha exige estratégia, precisão e paciência."],

        ["nome"=>"Baldur's Gate 3","genero"=>"RPG","preco"=>199.90,"desenvolvedora"=>"Larian Studios","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/header.jpg","descricao"=>"Baldur's Gate 3 é um RPG profundo baseado no universo de Dungeons & Dragons. Reúna um grupo de companheiros, tome decisões que afetam a história e explore um mundo cheio de perigos, escolhas morais e combates estratégicos por turnos."],

        ["nome"=>"Grand Theft Auto V","genero"=>"Ação","preco"=>82.00,"desenvolvedora"=>"Rockstar North","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/271590/header.jpg","descricao"=>"Grand Theft Auto V apresenta uma enorme cidade aberta chamada Los Santos. A história acompanha três protagonistas envolvidos em crimes, golpes e conflitos perigosos. Além da campanha, o jogo oferece GTA Online, onde jogadores podem explorar, competir e criar suas próprias aventuras."],

        ["nome"=>"Red Dead Redemption 2","genero"=>"Aventura","preco"=>299.90,"desenvolvedora"=>"Rockstar Games","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/header.jpg","descricao"=>"Red Dead Redemption 2 é uma aventura épica ambientada no final do Velho Oeste americano. Você controla Arthur Morgan, membro da gangue Van der Linde, enfrentando conflitos, perseguições e escolhas morais em um mundo aberto extremamente detalhado."],

        ["nome"=>"Cyberpunk 2077","genero"=>"RPG","preco"=>199.90,"desenvolvedora"=>"CD PROJEKT RED","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/header.jpg","descricao"=>"Cyberpunk 2077 é um RPG futurista ambientado em Night City, uma metrópole dominada por tecnologia, corporações e crime. Jogue como V, um mercenário que busca um implante lendário capaz de conceder imortalidade. Personalize habilidades, armas e implantes cibernéticos."],

        ["nome"=>"The Witcher 3: Wild Hunt","genero"=>"RPG","preco"=>79.90,"desenvolvedora"=>"CD Projekt Red","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/header.jpg","descricao"=>"Em The Witcher 3 você controla Geralt de Rívia, um caçador de monstros profissional. Explore um vasto mundo aberto cheio de histórias complexas, criaturas perigosas e escolhas que impactam diretamente o destino dos personagens e do reino."],

        ["nome"=>"God of War","genero"=>"Ação","preco"=>199.90,"desenvolvedora"=>"Santa Monica Studio","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/header.jpg","descricao"=>"God of War reinventa a série trazendo Kratos para a mitologia nórdica. A jornada acompanha Kratos e seu filho Atreus enquanto enfrentam deuses, monstros e desafios emocionais em uma história intensa sobre família e redenção."],

        ["nome"=>"Hades","genero"=>"Ação","preco"=>69.90,"desenvolvedora"=>"Supergiant Games","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/header.jpg","descricao"=>"Hades é um roguelike de ação rápida onde você controla Zagreus, filho de Hades, tentando escapar do submundo. Cada tentativa traz novos desafios, armas e habilidades, combinando combate frenético com narrativa dinâmica."],

        ["nome"=>"Counter-Strike 2","genero"=>"FPS","preco"=>0.00,"desenvolvedora"=>"Valve","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/730/header.jpg","descricao"=>"Counter-Strike 2 é a nova geração do clássico jogo competitivo de tiro em primeira pessoa. Equipes de terroristas e contra-terroristas competem em partidas estratégicas onde habilidade, trabalho em equipe e precisão são essenciais."],

        ["nome"=>"Resident Evil 4","genero"=>"Terror","preco"=>199.90,"desenvolvedora"=>"Capcom","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2050650/header.jpg","descricao"=>"Resident Evil 4 traz Leon S. Kennedy em uma missão para resgatar a filha do presidente dos Estados Unidos. O jogo mistura ação intensa, terror e sobrevivência enquanto o jogador enfrenta uma misteriosa seita em uma vila isolada."],

        ["nome"=>"Stardew Valley","genero"=>"Simulação","preco"=>24.90,"desenvolvedora"=>"ConcernedApe","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/header.jpg","descricao"=>"Stardew Valley é um simulador de fazenda onde você herda uma antiga propriedade e começa uma nova vida no campo. Cultive plantações, crie animais, faça amizades com moradores da cidade e explore cavernas cheias de segredos."],

        ["nome"=>"Hollow Knight","genero"=>"Aventura","preco"=>46.90,"desenvolvedora"=>"Team Cherry","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/header.jpg","descricao"=>"Hollow Knight é uma aventura em estilo metroidvania ambientada em um reino subterrâneo chamado Hallownest. Explore cavernas misteriosas, enfrente chefes desafiadores e descubra uma história profunda escondida no mundo do jogo."],

        ["nome"=>"Sekiro: Shadows Die Twice","genero"=>"Ação","preco"=>199.90,"desenvolvedora"=>"FromSoftware","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/814380/header.jpg","descricao"=>"Sekiro: Shadows Die Twice é um jogo de ação intenso ambientado no Japão feudal. Você controla um shinobi conhecido como Lobo de Um Braço Só, em uma jornada de vingança e resgate. O combate exige precisão, reflexos rápidos e domínio da espada contra inimigos e chefes extremamente desafiadores."],

        ["nome"=>"Monster Hunter: World","genero"=>"Ação","preco"=>129.90,"desenvolvedora"=>"Capcom","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/582010/header.jpg","descricao"=>"Monster Hunter: World coloca você em um vasto ecossistema cheio de criaturas gigantes. Como caçador, sua missão é rastrear monstros colossais, estudar seus comportamentos e enfrentá-los em batalhas épicas usando armas e equipamentos personalizados."],

        ["nome"=>"Terraria","genero"=>"Aventura","preco"=>19.99,"desenvolvedora"=>"Re-Logic","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/105600/header.jpg","descricao"=>"Terraria é um jogo de aventura e construção em um mundo 2D cheio de exploração, crafting e combate. Cave profundamente, construa bases, enfrente chefes gigantes e descubra milhares de itens enquanto cria sua própria jornada."],

        ["nome"=>"DOOM Eternal","genero"=>"FPS","preco"=>199.90,"desenvolvedora"=>"id Software","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/header.jpg","descricao"=>"DOOM Eternal traz combates frenéticos contra hordas demoníacas em cenários intensos. Como o Doom Slayer, você utiliza um arsenal devastador de armas e habilidades para destruir demônios em batalhas rápidas e extremamente violentas."],

        ["nome"=>"Starfield","genero"=>"RPG","preco"=>299.90,"desenvolvedora"=>"Bethesda Game Studios","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1716740/header.jpg","descricao"=>"Starfield é um RPG espacial de mundo aberto onde você explora centenas de planetas, participa de conflitos entre facções e descobre mistérios do universo. Personalize sua nave, tripulação e personagem enquanto cria sua própria história entre as estrelas."],

        ["nome"=>"Forza Horizon 5","genero"=>"Corrida","preco"=>249.90,"desenvolvedora"=>"Playground Games","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1551360/header.jpg","descricao"=>"Forza Horizon 5 oferece uma experiência de corrida em mundo aberto ambientada no México. Dirija centenas de carros diferentes, participe de eventos, desafios e corridas espetaculares em ambientes que vão de desertos a cidades vibrantes."],

        ["nome"=>"Assassin's Creed Valhalla","genero"=>"RPG","preco"=>249.90,"desenvolvedora"=>"Ubisoft Montreal","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2208920/header.jpg","descricao"=>"Assassin's Creed Valhalla coloca você no papel de Eivor, um guerreiro viking em busca de glória e novas terras. Construa assentamentos, participe de batalhas épicas e explore uma Inglaterra medieval cheia de mistérios e conflitos."],

        ["nome"=>"Hogwarts Legacy","genero"=>"RPG","preco"=>249.90,"desenvolvedora"=>"Avalanche Software","img_principal"=>"https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/990080/header.jpg","descricao"=>"Hogwarts Legacy é um RPG de ação ambientado no universo de Harry Potter no século XIX. Como estudante de Hogwarts, você aprenderá feitiços, explorará castelos e florestas mágicas e descobrirá um antigo segredo que ameaça o mundo bruxo."],
    ];


    foreach($jogos_teste as $jogo) {
        $novo_id = 'jogo_' . time() . '_' . rand(1000, 9999);
        $jogo["data_adicao"] = date('d/m/Y H:i');
        $jogo["data_atualizacao"] = date('d/m/Y H:i');
        $_SESSION["jogos"][$novo_id] = $jogo;
    }
    
    $_SESSION['mensagem'] = count($jogos_teste) . " jogos de exemplo adicionados com sucesso!";
    $_SESSION['tipo_mensagem'] = "success";
    header("Location: index.php");
    exit;
}

// --- LIMPAR TODOS OS JOGOS ---
if(isset($_GET['limpar'])) {
    $_SESSION["jogos"] = [];
    $_SESSION['mensagem'] = "Todos os jogos foram removidos da biblioteca!";
    $_SESSION['tipo_mensagem'] = "danger";
    header("Location: index.php");
    exit;
}

// --- DELETAR (DELETE) ---
if(isset($_GET['deletar'])){
    $id = $_GET['deletar'];
    if(isset($_SESSION["jogos"][$id])){
        $nome_jogo = $_SESSION["jogos"][$id]['nome'];
        unset($_SESSION["jogos"][$id]);
        $_SESSION['mensagem'] = "Jogo '$nome_jogo' removido com sucesso!";
        $_SESSION['tipo_mensagem'] = "danger";
    }
    header("Location: index.php");
    exit;
}

// --- VARIÁVEIS DE ESTADO DA TELA ---
$jogo_editando = null;
$id_editando = '';
if(isset($_GET['editar'])){
    $id_editando = $_GET['editar'];
    if(isset($_SESSION["jogos"][$id_editando])){
        $jogo_editando = $_SESSION["jogos"][$id_editando];
    }
}

$busca = $_GET['busca'] ?? '';
$erros = [];

// --- SALVAR (CREATE OU UPDATE) ---
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST["nome"])) {
        $erros[] = "O nome do jogo é obrigatório";
    }
    if(!empty($_POST["preco"]) && !is_numeric($_POST["preco"])) {
        $erros[] = "O preço deve ser um número válido";
    }
    
    if(empty($erros)) {
        $jogo = [
            "nome"           => trim($_POST["nome"]),
            "genero"         => $_POST["genero"] ?: "Não informado",
            "preco"          => !empty($_POST["preco"]) ? floatval($_POST["preco"]) : 0,
            "desenvolvedora" => trim($_POST["desenvolvedora"]) ?: "Não informada",
            "img_principal"  => filter_var($_POST["img_principal"], FILTER_VALIDATE_URL) ? $_POST["img_principal"] : '',
            "descricao"      => trim($_POST["descricao"]) ?: "Sem descrição"
        ];

        if(isset($_POST['id_editando']) && $_POST['id_editando'] !== '') {
            $id = $_POST['id_editando'];
            $jogo["data_atualizacao"] = date('d/m/Y H:i');
            $jogo["data_adicao"]      = $_SESSION["jogos"][$id]["data_adicao"] ?? date('d/m/Y H:i');
            $_SESSION["jogos"][$id]   = $jogo;
            $_SESSION['mensagem']     = "Jogo '" . $jogo['nome'] . "' atualizado com sucesso!";
            $_SESSION['tipo_mensagem'] = "success";
        } else {
            $novo_id = 'jogo_' . time() . '_' . rand(1000, 9999);
            $jogo["data_adicao"]         = date('d/m/Y H:i');
            $jogo["data_atualizacao"]    = date('d/m/Y H:i');
            $_SESSION["jogos"][$novo_id] = $jogo;
            $_SESSION['mensagem']        = "Jogo '" . $jogo['nome'] . "' adicionado com sucesso!";
            $_SESSION['tipo_mensagem']   = "success";
        }
        
        header("Location: index.php");
        exit;
    }
}