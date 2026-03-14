<?php
// logica.php

// --- POPULAR COM DADOS DE TESTE ---
if(isset($_GET['popular'])) {
    $jogos_teste = [
        ["nome" => "Elden Ring","genero" => "RPG","preco" => 249.90,"desenvolvedora" => "FromSoftware","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1245620/header.jpg","descricao" => "O novo RPG de ação e fantasia..."],
        ["nome" => "The Elder Scrolls V: Skyrim Special Edition","genero" => "RPG","preco" => 149.00,"desenvolvedora" => "Bethesda Game Studios","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/489830/header.jpg","descricao" => "Vencedor de mais de 200 prêmios..."],
        ["nome" => "Marvel's Spider-Man Remastered","genero" => "Ação","preco" => 249.90,"desenvolvedora" => "Insomniac Games","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/header.jpg","descricao" => "Em Marvel's Spider-Man Remastered..."],
        ["nome" => "Dark Souls III","genero" => "RPG","preco" => 199.90,"desenvolvedora" => "FromSoftware","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/374320/header.jpg","descricao" => "Dark Souls continua a redefinir..."],
        ["nome" => "Baldur's Gate 3","genero" => "RPG","preco" => 199.90,"desenvolvedora" => "Larian Studios","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/header.jpg","descricao" => "Reúna seu grupo e retorne aos Forgotten Realms..."],
        ["nome" => "Grand Theft Auto V","genero" => "Ação","preco" => 82.00,"desenvolvedora" => "Rockstar North","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/271590/header.jpg","descricao" => "Quando um malandro de rua..."],
        ["nome" => "Red Dead Redemption 2","genero" => "Aventura","preco" => 299.90,"desenvolvedora" => "Rockstar Games","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/header.jpg","descricao" => "Vencedor de mais de 175 prêmios..."],
        ["nome" => "Cyberpunk 2077","genero" => "RPG","preco" => 199.90,"desenvolvedora" => "CD PROJEKT RED","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/header.jpg","descricao" => "Cyberpunk 2077 é um RPG de ação..."],
        ["nome" => "The Witcher 3: Wild Hunt","genero" => "RPG","preco" => 79.90,"desenvolvedora" => "CD Projekt Red","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/header.jpg","descricao" => "Torne-se um caçador de monstros..."],
        ["nome" => "God of War","genero" => "Ação","preco" => 199.90,"desenvolvedora" => "Santa Monica Studio","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/header.jpg","descricao" => "Do Santa Monica Studio..."],
        ["nome" => "Hades","genero" => "Ação","preco" => 69.90,"desenvolvedora" => "Supergiant Games","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/header.jpg","descricao" => "Desafie o deus dos mortos..."],
        ["nome" => "Counter-Strike 2","genero" => "FPS","preco" => 0.00,"desenvolvedora" => "Valve","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/730/header.jpg","descricao" => "Há 25 anos, o Counter-Strike..."],
        ["nome" => "Resident Evil 4","genero" => "Terror","preco" => 199.90,"desenvolvedora" => "Capcom","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2050650/header.jpg","descricao" => "Sobreviva ao terror remasterizado..."],
        ["nome" => "Stardew Valley","genero" => "Simulação","preco" => 24.90,"desenvolvedora" => "ConcernedApe","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/header.jpg","descricao" => "Você herdou a antiga fazenda..."],
        ["nome" => "Hollow Knight","genero" => "Aventura","preco" => 46.90,"desenvolvedora" => "Team Cherry","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/header.jpg","descricao" => "Um épico de ação e aventura..."],
        ["nome" => "God of War Ragnarök","genero" => "Ação","preco" => 299.90,"desenvolvedora" => "Santa Monica Studio","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2322010/header.jpg","descricao" => "Embarque em uma jornada épica..."],
        ["nome" => "Alan Wake 2","genero" => "Terror","preco" => 249.90,"desenvolvedora" => "Remedy Entertainment","img_principal" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1903440/header.jpg","descricao" => "Alan Wake está preso em um pesadelo..."],
        ["nome" => "Hogwarts Legacy","genero" => "RPG","preco" => 249.90,"desenvolvedora" => "Avalanche Software","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/990080/header.jpg","descricao" => "Hogwarts Legacy é um RPG de ação..."],
        ["nome" => "Black Myth: Wukong","genero" => "Ação","preco" => 299.90,"desenvolvedora" => "Game Science","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2358720/header.jpg","descricao" => "Black Myth: Wukong é um RPG..."],
        ["nome" => "Lies of P","genero" => "RPG","preco" => 249.90,"desenvolvedora" => "NEOWIZ","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1627720/header.jpg","descricao" => "Um soulslike sombrio..."],
        ["nome" => "Palworld","genero" => "Aventura","preco" => 79.90,"desenvolvedora" => "Pocketpair","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1623730/header.jpg","descricao" => "Um jogo de mundo aberto..."],
        ["nome" => "Helldivers 2","genero" => "Ação","preco" => 199.90,"desenvolvedora" => "Arrowhead Game Studios","img_principal" => "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/553850/header.jpg","descricao" => "Espalhe a Democracia Gerenciada..."],
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