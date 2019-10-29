<?php

class tcConsultarRpsServicoPrestadoEnvio
{

    /**
     * @var int $ccm
     */
    protected $ccm = null;

    /**
     * @var string $cnpj
     */
    protected $cnpj = null;

    /**
     * @var string $cpf
     */
    protected $cpf = null;

    /**
     * @var string $senha
     */
    protected $senha = null;

    /**
     * @var int $numero_rps
     */
    protected $numero_rps = null;

    /**
     * @var int $dia_rps
     */
    protected $dia_rps = null;

    /**
     * @var int $mes_rps
     */
    protected $mes_rps = null;

    /**
     * @var int $ano_rps
     */
    protected $ano_rps = null;

    /**
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param int $numero_rps
     * @param int $dia_rps
     * @param int $mes_rps
     * @param int $ano_rps
     */
    public function __construct($ccm, $cnpj, $cpf, $senha, $numero_rps, $dia_rps, $mes_rps, $ano_rps)
    {
      $this->ccm = $ccm;
      $this->cnpj = $cnpj;
      $this->cpf = $cpf;
      $this->senha = $senha;
      $this->numero_rps = $numero_rps;
      $this->dia_rps = $dia_rps;
      $this->mes_rps = $mes_rps;
      $this->ano_rps = $ano_rps;
    }

    /**
     * @return int
     */
    public function getCcm()
    {
      return $this->ccm;
    }

    /**
     * @param int $ccm
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setCcm($ccm)
    {
      $this->ccm = $ccm;
      return $this;
    }

    /**
     * @return string
     */
    public function getCnpj()
    {
      return $this->cnpj;
    }

    /**
     * @param string $cnpj
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setCnpj($cnpj)
    {
      $this->cnpj = $cnpj;
      return $this;
    }

    /**
     * @return string
     */
    public function getCpf()
    {
      return $this->cpf;
    }

    /**
     * @param string $cpf
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setCpf($cpf)
    {
      $this->cpf = $cpf;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenha()
    {
      return $this->senha;
    }

    /**
     * @param string $senha
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setSenha($senha)
    {
      $this->senha = $senha;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumero_rps()
    {
      return $this->numero_rps;
    }

    /**
     * @param int $numero_rps
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setNumero_rps($numero_rps)
    {
      $this->numero_rps = $numero_rps;
      return $this;
    }

    /**
     * @return int
     */
    public function getDia_rps()
    {
      return $this->dia_rps;
    }

    /**
     * @param int $dia_rps
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setDia_rps($dia_rps)
    {
      $this->dia_rps = $dia_rps;
      return $this;
    }

    /**
     * @return int
     */
    public function getMes_rps()
    {
      return $this->mes_rps;
    }

    /**
     * @param int $mes_rps
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setMes_rps($mes_rps)
    {
      $this->mes_rps = $mes_rps;
      return $this;
    }

    /**
     * @return int
     */
    public function getAno_rps()
    {
      return $this->ano_rps;
    }

    /**
     * @param int $ano_rps
     * @return tcConsultarRpsServicoPrestadoEnvio
     */
    public function setAno_rps($ano_rps)
    {
      $this->ano_rps = $ano_rps;
      return $this;
    }

}
