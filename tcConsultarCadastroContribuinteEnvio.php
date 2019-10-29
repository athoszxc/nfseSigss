<?php

class tcConsultarCadastroContribuinteEnvio
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
     * @var string $cnpj_cpf_cadastro
     */
    protected $cnpj_cpf_cadastro = null;

    /**
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param string $cnpj_cpf_cadastro
     */
    public function __construct($ccm, $cnpj, $cpf, $senha, $cnpj_cpf_cadastro)
    {
      $this->ccm = $ccm;
      $this->cnpj = $cnpj;
      $this->cpf = $cpf;
      $this->senha = $senha;
      $this->cnpj_cpf_cadastro = $cnpj_cpf_cadastro;
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
     * @return tcConsultarCadastroContribuinteEnvio
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
     * @return tcConsultarCadastroContribuinteEnvio
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
     * @return tcConsultarCadastroContribuinteEnvio
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
     * @return tcConsultarCadastroContribuinteEnvio
     */
    public function setSenha($senha)
    {
      $this->senha = $senha;
      return $this;
    }

    /**
     * @return string
     */
    public function getCnpj_cpf_cadastro()
    {
      return $this->cnpj_cpf_cadastro;
    }

    /**
     * @param string $cnpj_cpf_cadastro
     * @return tcConsultarCadastroContribuinteEnvio
     */
    public function setCnpj_cpf_cadastro($cnpj_cpf_cadastro)
    {
      $this->cnpj_cpf_cadastro = $cnpj_cpf_cadastro;
      return $this;
    }

}
