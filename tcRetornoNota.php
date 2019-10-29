<?php

class tcRetornoNota
{

    /**
     * @var int $Resultado
     */
    protected $Resultado = null;

    /**
     * @var int $Nota
     */
    protected $Nota = null;

    /**
     * @var string $autenticidade
     */
    protected $autenticidade = null;

    /**
     * @var string $LinkImpressao
     */
    protected $LinkImpressao = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getResultado()
    {
      return $this->Resultado;
    }

    /**
     * @param int $Resultado
     * @return tcRetornoNota
     */
    public function setResultado($Resultado)
    {
      $this->Resultado = $Resultado;
      return $this;
    }

    /**
     * @return int
     */
    public function getNota()
    {
      return $this->Nota;
    }

    /**
     * @param int $Nota
     * @return tcRetornoNota
     */
    public function setNota($Nota)
    {
      $this->Nota = $Nota;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutenticidade()
    {
      return $this->autenticidade;
    }

    /**
     * @param string $autenticidade
     * @return tcRetornoNota
     */
    public function setAutenticidade($autenticidade)
    {
      $this->autenticidade = $autenticidade;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkImpressao()
    {
      return $this->LinkImpressao;
    }

    /**
     * @param string $LinkImpressao
     * @return tcRetornoNota
     */
    public function setLinkImpressao($LinkImpressao)
    {
      $this->LinkImpressao = $LinkImpressao;
      return $this;
    }

}
