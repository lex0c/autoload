<?php

/*
 ===========================================================================
 = Autoload Facade
 ===========================================================================
 = 
 = Este autoloader segue a especificação da PSR-4 sobre autoload e 
 = namespaces.
 = 
 */

require_once (__DIR__ . '/src/loader/Autoloader.php');

/**
 * OBSERVAÇÕES..
 * Defina aqui o nivel de subdiretórios considerando o diretório onde este 
 * modulo "_autoload" até a raiz da aplicação, para o autoload poder buscar 
 * em toda as pastas e subdiretórios as classes definidas no arquivo 'appdata' 
 * na raiz do projeto.
 *
 * DEFINA UM DIRLEVEL
 * OBS: Cuidado ao definir um nivel muito alto, pois ele irá buscar até 
 * o nivel definido podendo sair do projeto atual e buscar em outros
 * causando conflitos e falhas na aplicação.
 * 
 * Por questões de praticidade já é desconsiderado por padrão os
 * três niveis internos deste modulo. "$dirLevel += 3", desconsiderando
 * o próprio três ['dirlevel' => 3].
 * 
 * ATIVE O SUPORTE A NAMESPACES
 * Por padrão o suporte a namespace é 'true' internamente no Autoloader, 
 * para desativar defina a key 'namespaces' como 'false'.
 * 
 * ARQUIVO DE PATHS
 * Por definição este autoloader procura os paths em um arquivo 'appdata.json'
 * na raiz da aplicação com base na dirlevel.
 * 
 */

Autoloader::run([
    'dirlevel' => 3,
    'namespaces' => true,
    'paths' => 'external'
]);

/**
 * Inclua este arquivo no "start" de sua aplicação para initializar
 * o autoloader...
 */
