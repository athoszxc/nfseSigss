<?php

class tcConsultarNfseServicoPrestadoEnvio
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
     * @var int $numero_nfse
     */
    protected $numero_nfse = null;

    /**
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param int $numero_nfse
     */
    public function __construct($ccm, $cnpj, $cpf, $senha, $numero_nfse)
    {
      $this->ccm = $ccm;
      $this->cnpj = $cnpj;
      $this->cpf = $cpf;
      $this->senha = $senha;
      $this->numero_nfse = $numero_nfse;
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
     * @return tcConsultarNfseServicoPrestadoEnvio
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
     * @return tcConsultarNfseServicoPrestadoEnvio
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
     * @return tcConsultarNfseServicoPrestadoEnvio
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
     * @return tcConsultarNfseServicoPrestadoEnvio
     */
    public function setSenha($senha)
    {
      $this->senha = $senha;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumero_nfse()
    {
      return $this->numero_nfse;
    }

    /**
     * @param int $numero_nfse
     * @return tcConsultarNfseServicoPrestadoEnvio
     */
    public function setNumero_nfse($numero_nfse)
    {
      $this->numero_nfse = $numero_nfse;
      return $this;
    }

}
