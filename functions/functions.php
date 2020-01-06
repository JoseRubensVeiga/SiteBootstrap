<?php

/**
 * Obtém um valor de configuração
 * 
 * @return array
 */
function config ($config = null, $value = null) {
    global $_config;

    if(! is_null($value)) {
        $_config[$config] = $value;
    }

    if(! is_null($config))
        return $_config[$config];
    return $_config;
}

/**
 * Obtém um valor de configuração do navbar
 * 
 * @return array
 */
function navbar ($item = null) {
    global $_navbar;

    if(! is_null($item))
        return $_navbar[$item];
    return $_navbar;
}

/**
 * Obtém o arquivo buscado pela requisição
 * 
 * @return string
 */
function thisPage () {
    return ltrim($_SERVER['REQUEST_URI'], '/');
}

/**
 * Obtém o item ativo do navbar
 * 
 * @return array
 */
function thisItemNavbar () {
    $itens = navbar('itens');
    foreach($itens as $item) {
        if($item['url'] ?? '' == thisPage())
            return $item;
    }
}

/**
 * Obtém o título do documento
 * 
 * @return string
 */
function documentTitle () {
    $item = thisItemNavbar();
    
    return $item['document_title'];
}

/**
 * Verfifica se a página atual é a mesma de uma URL informada
 * 
 * @return boolean
 */
function isNavLinkActive ($url) {
    return thisPage() == $url;
}

/**
 * Obtém o valor de ativo ou não de acordo com a página atual e a url informada
 * 
 * @return string
 */
function navLinkActive ($url) {
    return isNavLinkActive($url) ? 'active' : '';
}

function asset ($path = null) {
    if(! is_null($path))
        return '/public/' . $path;
    return '/public/';
}

/**
 * Equivalente ao echo
 * 
 * @param string
 * 
 * @return void
 */
function e ($string) {
    echo $string;
}

/**
 * Obtém a URL da página principal
 * 
 * @return string
 */
function getUrlIndexPage () {
    return "/index.php";
}

/**
 * Cria uma session se ela nao existir
 * 
 * @return void
 */
function createSession () {
    if(session_status() != 2)
        session_start();
}

/**
 * Adiciona ou recupera valores da session
 * 
 * @param string $key defaul null
 * @param string $value defaul null
 * @return $_SESSION
 */
function session($key = null, $value = null) {
    createSession();
    if(! is_null($key) && is_null($value)) {
        return $_SESSION[$key] ?? 'pt-BR';
    }
    elseif(! is_null($key) && ! is_null($value)) {
        $_SESSION[$key] = $value;
        return $value;
    }else {
        return $_SESSION;
    }

}

/**
 * Insere o idioma original do site
 * 
 * @param string lang
 * @return void
 */
function setLaguageSession ($lang = null) {
    createSession();
    if($lang == "pt-BR" || $lang == 'en'){
        session('lang', $lang);
    }else {
        session('lang', 'pt-BR');
    }
}

/**
 * Obtém o idioma do site
 * 
 * @return string
 */
function getLanguageSession () {
    createSession();
    return session('lang');
}

/**
 * Traduz um texto com base no idioma do site e mostra na tela
 * 
 * @param string
 * @return string
 */
function __($text, $translate) {
    createSession();

    if(session('lang') == 'pt-BR')
        echo $text;
    elseif(session('lang') == 'en')
        echo $translate;
    else
        echo $text;
}