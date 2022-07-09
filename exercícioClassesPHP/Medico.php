<?php
/**
 * Conecta o arquivo 'Pessoa.php' referente à classe 'Pessoa'.
 */
require_once 'Pessoa.php';

/**
 * Classe usada para coletar e armazenar o CRM de um médico, extendida da classe 'Pessoas', de Pessoa.php.
 * @author Maiara Silva
 * @access public
 * @param String $crm
 * @see Pessoa.php
 * @see objetos.php 
 * @return void
 */
class Medico extends Pessoa{
    private $crm;

    /**
     * Get the value of crm
     */ 
    public function getCrm()
    {
        return $this->crm;
    }
    /**
     * Set the value of crm
     *
     * @return  self
     */ 
    public function setCrm($crm)
    {
        $this->crm = $crm;

        return $this;
    }
}
?>