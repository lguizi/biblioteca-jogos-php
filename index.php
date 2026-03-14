<?php
require_once 'config.php';
require_once 'logica.php';
?>
<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de Jogos</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png"    href="img/favicon.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <nav class="navbar navbar-steam py-3">
        <div class="container-fluid px-4 d-flex align-items-center flex-wrap gap-3">
            <a class="navbar-brand d-flex align-items-center gap-3 fw-bold text-uppercase text-decoration-none" href="index.php" aria-label="Página inicial">
                <img src="img/logo.png" alt="Logo PHPJogos" width="176" height="44" onerror="this.style.display='none'">
                <span>Biblioteca de Jogos</span>
            </a>

            <div class="ms-auto d-flex align-items-center gap-2">
                <label for="width-select" class="mb-0 small text-muted text-nowrap">Largura:</label>
                <select id="width-select" class="form-select form-select-sm rounded-1" aria-label="Ajustar largura do container">
                    <option value="700">Estreito — 700 px</option>
                    <option value="900" selected>Normal — 900 px</option>
                    <option value="1100">Largo — 1100 px</option>
                    <option value="1400">Completo — 1400 px</option>
                </select>
            </div>
        </div>
    </nav>
</header>

<main id="main-container" class="mx-auto mt-4 mb-5 p-4 rounded-1">

    <?php if(isset($_SESSION['mensagem'])): ?>
        <div class="alert alert-<?= $_SESSION['tipo_mensagem'] === 'success' ? 'success' : 'danger' ?> alert-dismissible fade show d-flex align-items-center gap-3" role="alert">
            <img src="img/<?= $_SESSION['tipo_mensagem'] === 'success' ? 'icone-sucesso' : 'icone-excluir' ?>.svg" alt="" width="26" height="26" class="flex-shrink-0">
            <span><?= $_SESSION['mensagem'] ?></span>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    <?php endif; ?>

    <?php if(!empty($erros)): ?>
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-start gap-3" role="alert">
            <img src="img/icone-aviso.svg" alt="" width="26" height="26" class="flex-shrink-0 mt-1">
            <div>
                <strong>Erros encontrados:</strong>
                <ul class="mb-0 mt-1">
                    <?php foreach($erros as $erro): ?>
                        <li><?= $erro ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    <?php endif; ?>

    <h2 class="mb-4 fw-bold text-white"><?= $jogo_editando ? 'Editar Jogo' : 'Cadastrar Novo Jogo' ?></h2>

    <form method="post" action="index.php">
        <input type="hidden" name="id_editando" value="<?= sanitizar($id_editando) ?>">

        <div class="row g-3">
            <div class="col-md-6">
                <label for="nome" class="form-label small fw-semibold text-uppercase">Nome do Jogo *</label>
                <input type="text" name="nome" id="nome" class="form-control rounded-1" placeholder="Ex: Elden Ring" required value="<?= $jogo_editando ? sanitizar($jogo_editando['nome']) : '' ?>">
            </div>
            <div class="col-md-3">
                <label for="genero" class="form-label small fw-semibold text-uppercase">Gênero</label>
                <select name="genero" id="genero" class="form-select rounded-1">
                    <option value="">Selecione...</option>
                    <?php
                    $generos = ['Ação','Aventura','RPG','FPS','Estratégia','Terror','Plataforma','Simulação','Party'];
                    foreach($generos as $g): ?>
                        <option value="<?= $g ?>" <?= ($jogo_editando && $jogo_editando['genero'] == $g) ? 'selected' : '' ?>><?= $g ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="preco" class="form-label small fw-semibold text-uppercase">Preço (R$)</label>
                <input type="number" step="0.01" min="0" name="preco" id="preco" class="form-control rounded-1" placeholder="0.00" value="<?= $jogo_editando ? sanitizar($jogo_editando['preco']) : '' ?>">
            </div>
            <div class="col-12">
                <label for="desenvolvedora" class="form-label small fw-semibold text-uppercase">Desenvolvedora</label>
                <input type="text" name="desenvolvedora" id="desenvolvedora" class="form-control rounded-1" placeholder="Ex: FromSoftware, Valve" value="<?= $jogo_editando ? sanitizar($jogo_editando['desenvolvedora']) : '' ?>">
            </div>
            <div class="col-12">
                <label for="img_principal" class="form-label small fw-semibold text-uppercase">Link da Imagem</label>
                <input type="url" name="img_principal" id="img_principal" class="form-control rounded-1" placeholder="https://link-da-imagem.jpg" value="<?= $jogo_editando ? sanitizar($jogo_editando['img_principal']) : '' ?>">
            </div>
            <div class="col-12">
                <label for="descricao" class="form-label small fw-semibold text-uppercase">Descrição</label>
                <textarea name="descricao" id="descricao" rows="4" class="form-control rounded-1" placeholder="Digite a descrição do jogo..."><?= $jogo_editando ? sanitizar($jogo_editando['descricao']) : '' ?></textarea>
            </div>
        </div>

        <div class="d-flex justify-content-end align-items-center gap-2 flex-wrap mt-4">
            <?php if($jogo_editando): ?>
                <a href="index.php" class="btn btn-steam-secondary text-white fw-bold text-uppercase rounded-1">Cancelar</a>
            <?php endif; ?>
            <button type="submit" class="btn btn-steam text-white fw-bold text-uppercase rounded-1 d-inline-flex align-items-center gap-2">
                <?php if($jogo_editando): ?>
                    <img src="img/icone-editar.svg"  alt="" width="15" height="15"> Salvar Alterações
                <?php else: ?>
                    <img src="img/icone-sucesso.svg" alt="" width="15" height="15"> Adicionar à Biblioteca
                <?php endif; ?>
            </button>
        </div>
    </form>

    <hr class="my-5 opacity-25">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <div class="d-flex align-items-center gap-3">
            <h3 class="fw-bold text-white mb-0">Sua Biblioteca</h3>
            <?php if(!empty($_SESSION["jogos"])): ?>
                <span class="library-count badge rounded-pill fw-bold px-3 py-1"><?= count($_SESSION["jogos"]) ?> jogo(s)</span>
            <?php endif; ?>
        </div>
        <div class="d-flex gap-2 flex-wrap">
            <a href="#" onclick="confirmarPopular(event)" class="btn btn-steam-success text-white fw-bold text-uppercase rounded-1 d-inline-flex align-items-center gap-2">
                <img src="img/icone-sucesso.svg" alt="" width="15" height="15"> Carregar Jogos de Exemplo
            </a>
            <?php if(!empty($_SESSION["jogos"])): ?>
                <a href="#" onclick="confirmarLimpar(event)" class="btn btn-steam-danger text-white fw-bold text-uppercase rounded-1 d-inline-flex align-items-center gap-2">
                    <img src="img/icone-excluir.svg" alt="" width="15" height="15"> Limpar Tudo
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="mb-4">
        <form method="get" class="d-flex align-items-center gap-2 flex-wrap">
            <input type="search" name="busca" class="form-control rounded-1 flex-grow-1" style="min-width:200px;" placeholder="Buscar jogo por nome..." value="<?= sanitizar($busca) ?>" aria-label="Buscar jogos">
            <button type="submit" class="btn btn-steam text-white fw-bold text-uppercase rounded-1">Buscar</button>
            <?php if($busca): ?>
                <a href="index.php" class="btn btn-steam-secondary text-white fw-bold text-uppercase rounded-1">Limpar</a>
            <?php endif; ?>
        </form>
    </div>

    <?php if(!empty($_SESSION["jogos"])): ?>
        <?php
        $jogos_filtrados = 0;
        foreach($_SESSION["jogos"] as $id => $jogo):
            if($busca && stripos($jogo['nome'], $busca) === false) continue;
            $jogos_filtrados++;
        ?>
            <div class="game-card d-flex flex-column flex-md-row gap-3 p-3 mb-3 rounded-1">
                <img src="<?= getImagemJogo($jogo['img_principal']) ?>" alt="Capa de <?= sanitizar($jogo['nome']) ?>" class="game-img rounded-1" loading="lazy" onerror="this.src='img/capaDefault.png';">
                <div class="d-flex flex-column flex-grow-1" style="min-width:0;">
                    <div class="fw-semibold fs-5 text-white mb-1"><?= sanitizar($jogo['nome']) ?></div>
                    <div class="small text-secondary mb-2">
                        <span class="badge bg-secondary"><?= sanitizar($jogo['genero']) ?></span>&nbsp;|&nbsp;<?= sanitizar($jogo['desenvolvedora']) ?>&nbsp;|&nbsp;
                        <span class="price fw-bold"><?= ((float)$jogo['preco'] === 0.0) ? 'Gratuito' : 'R$ ' . number_format((float)$jogo['preco'], 2, ',', '.') ?></span><br>
                        <span class="text-muted">📅 Adicionado em: <?= $jogo['data_adicao'] ?? 'N/A' ?>
                            <?php if(isset($jogo['data_atualizacao']) && $jogo['data_atualizacao'] != $jogo['data_adicao']): ?>
                                &nbsp;|&nbsp;✏️ Atualizado em: <?= $jogo['data_atualizacao'] ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    <p class="small lh-base flex-grow-1 mb-3" style="color:#c7d5e0;"><?= nl2br(sanitizar($jogo['descricao'])) ?></p>
                    <div class="d-flex gap-2 justify-content-end flex-wrap">
                        <a href="?editar=<?= $id ?>" class="btn btn-card-edit fw-bold text-uppercase rounded-1 d-inline-flex align-items-center gap-2" style="font-size:.8rem; padding:6px 16px;">
                            <img src="img/icone-editar.svg"  alt="" width="13" height="13"> Editar
                        </a>
                        <a href="#" 
                            class="btn btn-card-delete fw-bold text-uppercase rounded-1 d-inline-flex align-items-center gap-2" 
                            style="font-size:.8rem; padding:6px 16px;" 
                            data-id="<?= $id ?>"
                            data-nome="<?= sanitizar($jogo['nome']) ?>"
                            onclick="confirmarDelete(event, this)" 
                            aria-label="Remover <?= sanitizar($jogo['nome']) ?>">
                            <img src="img/icone-excluir.svg" alt="" width="13" height="13"> Remover
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if($jogos_filtrados === 0 && $busca): ?>
            <div class="alert alert-info d-flex align-items-center gap-3">
                <img src="img/icone-aviso.svg" alt="" width="26" height="26" class="flex-shrink-0">
                <span>Nenhum jogo encontrado para "<strong><?= sanitizar($busca) ?></strong>".</span>
            </div>
        <?php endif; ?>

        <div class="text-end mt-3">
            <small class="text-muted">
                <?= $busca ? "$jogos_filtrados jogo(s) encontrado(s) para \"" . sanitizar($busca) . "\"" : "$jogos_filtrados jogo(s) na biblioteca" ?>
            </small>
        </div>

    <?php else: ?>
        <div class="text-center py-5" style="color:#8f98a0;">
            <img src="img/icone-aviso.svg" alt="" class="d-block mx-auto mb-3 opacity-50" width="48" height="48">
            <p class="fs-4 mb-2">Sua biblioteca está vazia!</p>
            <p class="mb-4">Adicione um jogo pelo formulário acima ou carregue exemplos.</p>
            <a href="#" onclick="confirmarPopular(event)" class="btn btn-steam-success text-white fw-bold text-uppercase rounded-1 d-inline-flex align-items-center gap-2">
                <img src="img/icone-sucesso.svg" alt="" width="15" height="15"> Carregar Jogos de Exemplo
            </a>
        </div>
    <?php endif; ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/main.js"></script>

</body>
</html>