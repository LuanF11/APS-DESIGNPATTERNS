<?php

interface ILog {
    public function registrar($msg);
}

class LogArquivo implements ILog {
    public function registrar($msg) {
       
    }
}

class LogConsole implements ILog {
    public function registrar($msg) {
       
    }
}

class LogBancoDeDados implements ILog {
    public function registrar($msg) {
        
    }
}

class LogFactory {
    public static function criarLog($tipo) {
        switch ($tipo) {
            case 'arquivo':
                return new LogArquivo();
            case 'console':
                return new LogConsole();
            case 'bancoDeDados':
                return new LogBancoDeDados();
            default:
                throw new Exception("Tipo de log inválido");
        }
    }
}

$logArquivo = LogFactory::criarLog('arquivo');
$logArquivo->registrar('Mensagem de log em arquivo');
$logConsole = LogFactory::criarLog('console');
$logConsole->registrar('Mensagem de log no console');
$logBancoDeDados = LogFactory::criarLog('bancoDeDados');
$logBancoDeDados->registrar('Mensagem de log no banco de dados');
