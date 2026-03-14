<?php
// config.php

session_start();
date_default_timezone_set('America/Sao_Paulo');

// Inicializa a sessão se não existir
if (!isset($_SESSION["jogos"])) {
    $_SESSION["jogos"] = [];
}

// Função para sanitizar dados (prevenir XSS)
function sanitizar($dados) {
    return htmlspecialchars(trim($dados), ENT_QUOTES, 'UTF-8');
}

// Função para imagem fallback
function getImagemJogo($url) {
    if(empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
        return 'img/capaDefault.png';
    }
    return $url;
}