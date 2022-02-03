<?php

class Perro extends Animal{

    public function comer(){
        echo "<p>El perro come Huesos.</p>";
    }
    public function llamarDormir(){
        $this->dormir();
    }
}