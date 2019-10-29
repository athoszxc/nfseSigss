<?php

class tcDescricaoCancelaNota
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
     * @var int $nota
     */
    protected $nota = null;

    /**
     * @var int $cod_cancelamento
     */
    protected $cod_cancelamento = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param int $nota
     * @param int $cod_cancelamento
     * @param string $email
     */
    public function __construct($ccm, $cnpj, $cpf, $senha, $nota, $cod_cancelamento, $email)
    {
      $this->ccm = $ccm;
      $this->cnpj = $cnpj;
      $this->cpf = $cpf;
      $this->senha = $senha;
      $this->nota = $nota;
      $this->cod_cancelamento = $cod_cancelamento;
      $this->email = $email;
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
     * @return tcDescricaoCancelaNota
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
     * @return tcDescricaoCancelaNota
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
     * @return tcDescricaoCancelaNota
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
     * @return tcDescricaoCancelaNota
     */
    public function setSenha($senha)
    {
      $this->senha = $senha;
      return $this;
    }

    /**
     * @return int
     */
    public function getNota()
    {
      return $this->nota;
    }

    /**
     * @param int $nota
     * @return tcDescricaoCancelaNota
     */
    public function setNota($nota)
    {
      $this->nota = $nota;
      return $this;
    }

    /**
     * @return int
     */
    public function getCod_cancelamento()
    {
      return $this->cod_cancelamento;
    }

    /**
     * @param int $cod_cancelamento
     * @return tcDescricaoCancelaNota
     */
    public function setCod_cancelamento($cod_cancelamento)
    {
      $this->cod_cancelamento = $cod_cancelamento;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return tcDescricaoCancelaNota
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
