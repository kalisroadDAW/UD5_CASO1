<?php
//Creamos el constructor de la clase
class Dado {
    private $minNumDado; //Atributo mínimo
    private $maxNumDado; //Atributo de valor máximo.
    
    public function __construct($minNumDado, $maxNumDado) {
        $this->minNumDado = $minNumDado;
        $this->maxNumDado = $maxNumDado;
    } //Método constructor.

    

    //MÉTODO TIRAR DADO

    public function tirarDado() {
        return rand($this->minNumDado, $this->maxNumDado);
    }
}
    



