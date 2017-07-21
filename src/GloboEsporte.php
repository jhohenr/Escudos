<?php

namespace Escudos;

use PHPHtmlParser\Dom;

class GloboEsporte
{
    public static function brasileiraoA() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/brasileirao-serie-a');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }

    public static function brasileiraoB() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/brasileirao-serie-b');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }

    public static function brasileiraoC() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/brasileirao-serie-c');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }

    public static function brasileiraoD() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/brasileirao-serie-d');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }

    public static function copaDoBrasil() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/copa-do-brasil');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }

    public static function copaSulAmericana() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/copa-sul-americana');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }

    public static function libertadores() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/libertadores');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }

    public static function ligaDosCampeoes() {
        $dom = new Dom;
        $dom->loadFromUrl('http://globoesporte.globo.com/futebol/futebol-internacional/liga-dos-campeoes');

        $elementos = $dom->find('.placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante');
        $equipes = array();

        foreach ($elementos as $elemento) {
            $equipe = new \stdClass();
            $equipe->sigla = $elemento->find('.placar-jogo-equipes-sigla')->text();
            $equipe->nome = $elemento->find('.placar-jogo-equipes-nome')->text();
            $equipe->escudo = $elemento->find('img')->getAttribute('src');

            $equipes[] = $equipe;
        }

        return $equipes;
    }
}