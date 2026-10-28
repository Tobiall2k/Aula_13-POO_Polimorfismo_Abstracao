<?php

class Notificacao{

    public function enviar($mensagem){
       echo $mensagem;
    }
}

class NotificacaoEmail extends Notificacao{
    public function enviar($mensagem){
        echo "Mensagem por email: <br><br>". $mensagem. "<br><br>";
        echo "<hr>";
    }
}

class NotificacaoSMS extends Notificacao{
    public function enviar($mensagem){
        echo "Mensagem por SMS: <br><br>". $mensagem. "<br><br>";
        echo "<hr>";
    }
}

class NotificacaoPush extends Notificacao{
    public function enviar($mensagem){
        echo "Mensagem Push: <br><br>". $mensagem. "<br><br>";
        echo "<hr>";
    }
}

$notificacaoEm = new NotificacaoEmail();
$notificacaoEm->enviar("Olá, sou Tobias");

$notificacaoSMS = new NotificacaoSMS();
$notificacaoSMS->enviar("Olá, sou Maria");

$notificacaoPush = new NotificacaoPush();
$notificacaoPush->enviar("Olá, sou Lucas");
?>