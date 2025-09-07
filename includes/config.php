<?php
// ==========================================================
// CONFIGURAÇÕES DE CAMINHOS - Isso evita erros de diretórios
// ==========================================================
// Define o nome do site
define('SITE_NAME', 'sctechmidia');
// Função define cria uma constante. A constante se Chama SITE_NAME e o valor é 'SCTechMidia'.

// Define a URL base do site.
// 'http://' . $_SERVER['HTTP_HOST'] pega o host do servidor (por exemplo, localhost ou seu-dominio.com).
// '/sctechmidia/' é o caminho da pasta onde o projeto está.
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/sctechmidia/');

// Define o caminho para a pasta de imagens, usando o caminho de uploads.
define('IMG_PATH', SITE_URL . 'imgs/');


// Inicia uma sessão PHP, mas apenas se uma sessão ainda não tiver sido iniciada.
// Isso evita erros caso o arquivo de configuração seja incluído várias vezes.
// session_status() === PHP_SESSION_NONE verifica se não há uma sessão ativa.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Cria uma função chamada 'url' para gerar URLs completas de forma fácil.
// Por exemplo, url('sobre.php') retornará 'http://localhost/sctechmidia/sobre.php'.
// ltrim($path, '/') remove a barra inicial caso ela seja passada, evitando URLs com duas barras.
function url($path = '') {
    return SITE_URL . ltrim($path, '/');
}


// Cria uma função 'img_url' para gerar o caminho completo de uma imagem.
// Por exemplo, img_url('logo.png') retornará 'http://localhost/sctechmidia/uploads/imgs/logo.png'.
function img_url($image) {
    return IMG_PATH . $image;
}
?>