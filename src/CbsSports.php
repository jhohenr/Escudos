<?php

namespace Escudos;

use PHPHtmlParser\Dom;

class CbsSports
{
    public static function nfl() {
        $dom = new Dom;
        $dom->loadFromUrl('http://www.cbssports.com/nfl/scoreboard');

        $elementos = $dom->find('.in-progress-table td.team');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->nome = $elemento->find('.team')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }
}