<?php
class Configuracao {
    private static $instance;
    private $tema;
    private $idioma;
    private $tamanhoFonte;

    private function __construct() {
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Configuracao();
        }
        return self::$instance;
    }

    public function getTema() {
        return $this->tema;
    }

    public function setTema($tema) {
        $this->tema = $tema;
    }


    public function setIdioma($idioma) {
        $this->idioma = $idioma;
    }


    public function setTamanhoFonte($tamanhoFonte) {
        $this->tamanhoFonte = $tamanhoFonte;
    }
}

$configuracao = Configuracao::getInstance();
$configuracao->setTema('claro');
$configuracao->setIdioma('portugues');
$configuracao->setTamanhoFonte(12);

$configuracao2 = Configuracao::getInstance();
echo $configuracao2->getTema();



