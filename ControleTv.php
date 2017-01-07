<?php

require_once 'ControladorTv.php';

class ControleTv implements ControladorTv {

    private $ligado;
    private $volume;
    private $canal;

    public function __construct() {
        $this->ligar = false;
        $this->volume = 10;
        $this->canal = 5;
    }

    function getLigado() {
        return $this->ligado;
    }

    function getVolume() {
        return $this->volume;
    }

    function getCanal() {
        return $this->canal;
    }

    function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }

    function setCanal($canal) {
        $this->canal = $canal;
    }

    public function abrirMenu() {
        if ($this->getLigado()) {
            echo "<p>-----Status------</p>";
            echo ($this->getLigado() ? "Ligado!" : "Desligado");
            echo "<br>Volume: " . $this->getVolume();
            echo "<br>Canal: " . $this->getCanal();            
        }else {
            echo "<br>Impossivel Acessar o Menu com a Tv Desligada";
        }
    }

    public function fecharMenu() {
        echo "<p>Encerrando Menu</p>";
    }

    public function ligar() {
        $this->setLigado(true);
        echo "<p>-----Samsung HDTV-----<br/></p>";
        echo "<p>Pronta para Exibir Suas Programações Favoritas</p>";
    }

    public function desligar() {
        $this->setLigado(false);
         echo "<p>Encerrando sua Televisão - Good Bye</p>";
    }

    public function maisCanal() {
        if($this->getLigado()){
            $this->setCanal($this->getCanal() + 1);
        }else{
            echo "Erro! - Não pode mudar de canal com a Televisão Desligada";
        }
    }

    public function menosCanal() {
       if($this->getLigado()){
            $this->setLigado($this->getCanal() - 1);
        }else{
            echo "Erro!!! - Não posso voltar o Canal<br/>";
        } 
    }

    public function maisVolume() {
      if($this->getLigado()){
          $this->setVolume($this->getVolume() + 10);
      }  
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setLigado($this->getVolume() - 10);
        }else{
            echo "Erro!!! - Não posso diminuir o volume";
        }
    }

}
