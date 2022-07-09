<?php
/**
 * Conecta o arquivo 'Pessoa.php' referente à classe 'Pessoa'.
 */
require_once 'Pessoa.php';

/**
 * Classe usada para coletar e armazenar o CREA de um engenheiro, extendida da classe 'Pessoas', de Pessoa.php.
 * @author Maiara Silva
 * @access public
 * @param String $crea
 * @see Pessoa.php
 * @see objetos.php
 * @return void
 */
class Engenheiro extends Pessoa{
    private $crea;

    /**
     * Get the value of crea
     */ 
    public function getCrea()
    {
        return $this->crea;
    }
    /**
     * Set the value of crea
     *
     * @return  self
     */ 
    public function setCrea($crea)
    {
        $this->crea = $crea;

        return $this;
    }
}
?>