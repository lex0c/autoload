<?php

/*
 ===========================================================================
 = Autoload Facade
 ===========================================================================
 = 
 = OBS: Ainda não possui suporte a namespaces!
 = 
 */

require_once (__DIR__ . '/src/loader/Autoload.php');

/**
 * Defina aqui o nivel de subdiretórios considerando este modulo "_autoload"
 * até a raiz da aplicação, para o autoload poder buscar em toda as pastas
 * e subdiretórios as classes definidas no arquivo 'appdata'
 * na raiz do projeto.
 *
 * OBS: Cuidado ao definir um nivel muito alto, pois ele irá buscar até 
 * o nivel definido podendo sair do projeto atual e buscar em outros
 * causando conflitos e falhas na aplicação.
 * 
 * Por questões de praticidade já é desconsiderado por padrão os
 * três niveis internos deste modulo. "$dirLevel += 3", desconsiderando
 * o próprio três ['dirlevel' => 3].
 * 
 */

Autoload::run([
    'dirlevel' => 3,
    'namespaces' => true,
    'paths' => 'external'
]);

/**
 * Inclua este arquivo no "start" de sua aplicação para initializar
 * o autoloader...
 * 
 */
