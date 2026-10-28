<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido...";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo "Miauuuuuu!<br>";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        echo "Auau!<br>";
    }
}

$gato = new Gato();
$gato->emitirSom();

$cachorro = new Cachorro();
$cachorro->emitirSom();

?>