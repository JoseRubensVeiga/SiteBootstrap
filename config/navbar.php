<?php

return [
    'type' => 'dark',
    'bg' => 'danger',
    'itens' => [
        [
            'title' => 'Home',
            'url' => '/index.php',
            'document_title' => 'Página Inicial'
        ],
        [
            'title' => 'Galeria',
            'url' => '/galeria.php',
            'document_title' => 'Veja nossas fotos!',
        ],
        [
            'title' => 'Contato',
            'url' => '/contato.php',
            'document_title' => 'Entre em contato!',
        ],
        [
            'title' => 'Sobre',
            'url' => '/sobre.php',
            'document_title' => 'Nos conheça melhor!',
        ],
        [
            'title' => 'Informações',
            'children' => [
                [
                    'title' => 'info 1',
                    'url' => '/informacoes/info1.php',
                    'document_title' => 'Informações 1!',
                ],
                [
                    'title' => 'info 2',
                    'url' => '/informacoes/info2.php',
                    'document_title' => 'Informações 2!',
                ],
                [
                    'title' => 'info 3',
                    'url' => '/informacoes/info3.php',
                    'document_title' => 'Informações 3!',
                ],
            ],
        ],
    ],
    /**
     * O logo do navbar do site.
     * 
     * Na chave "type" é possível colocar "image" ou "text".
     * Caso for imagem, na chave "content" é necessário colocar o caminho da imagem e preencher a chave "alt" com uma descricao da imagem.
     * caso for texto então deve colocar o texto a ser exibido.
     */
    'logo' => [
        'type' => 'text',
        'content' => 'Meu Site',
        'alt' => ''
    ],
];