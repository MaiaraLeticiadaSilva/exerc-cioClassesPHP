<?php
/**
 * Classe usada para coletar e armazenar dados pessoais de uma pessoa.
 * @author Maiara Silva
 * @access public
 * @param String $nome
 * @param String $data_nasc
 * @param String $cpf
 * @param int $rg
 * @see objetos.php
 * @return void
 */
class Pessoa{
    private $nome;
    private $data_nasc;
    private $cpf;
    private $rg;

    
    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }
    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }



    /**
     * Get the value of data_nasc
     */ 
    public function getData_nasc()
    {
        return $this->data_nasc;
    }
    /**
     * Set the value of data_nasc
     *
     * @return  self
     */ 
    public function setData_nasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;

        return $this;
    }



    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }
    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }



    /**
     * Get the value of rg
     */ 
    public function getRg()
    {
        return $this->rg;
    }
    /**
     * Set the value of rg
     *
     * @return  self
     */ 
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }
}
?>