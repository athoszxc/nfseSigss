<?php

class tcDescricaoRps
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
     * @var string $aliquota
     */
    protected $aliquota = null;

    /**
     * @var int $servico
     */
    protected $servico = null;

    /**
     * @var string $codigo_obra
     */
    protected $codigo_obra = null;

    /**
     * @var string $obra_art
     */
    protected $obra_art = null;

    /**
     * @var string $situacao
     */
    protected $situacao = null;

    /**
     * @var string $valor
     */
    protected $valor = null;

    /**
     * @var string $base
     */
    protected $base = null;

    /**
     * @var string $ir
     */
    protected $ir = null;

    /**
     * @var string $pis
     */
    protected $pis = null;

    /**
     * @var string $cofins
     */
    protected $cofins = null;

    /**
     * @var string $csll
     */
    protected $csll = null;

    /**
     * @var string $inss
     */
    protected $inss = null;

    /**
     * @var string $retencao_iss
     */
    protected $retencao_iss = null;

    /**
     * @var int $incentivo_fiscal
     */
    protected $incentivo_fiscal = null;

    /**
     * @var string $cod_municipio_prestacao_servico
     */
    protected $cod_municipio_prestacao_servico = null;

    /**
     * @var string $cod_pais_prestacao_servico
     */
    protected $cod_pais_prestacao_servico = null;

    /**
     * @var string $cod_municipio_incidencia
     */
    protected $cod_municipio_incidencia = null;

    /**
     * @var string $descricaoNF
     */
    protected $descricaoNF = null;

    /**
     * @var int $tomador_tipo
     */
    protected $tomador_tipo = null;

    /**
     * @var string $tomador_cnpj
     */
    protected $tomador_cnpj = null;

    /**
     * @var string $tomador_email
     */
    protected $tomador_email = null;

    /**
     * @var string $tomador_ie
     */
    protected $tomador_ie = null;

    /**
     * @var string $tomador_im
     */
    protected $tomador_im = null;

    /**
     * @var string $tomador_razao
     */
    protected $tomador_razao = null;

    /**
     * @var string $tomador_endereco
     */
    protected $tomador_endereco = null;

    /**
     * @var string $tomador_numero
     */
    protected $tomador_numero = null;

    /**
     * @var string $tomador_complemento
     */
    protected $tomador_complemento = null;

    /**
     * @var string $tomador_bairro
     */
    protected $tomador_bairro = null;

    /**
     * @var string $tomador_CEP
     */
    protected $tomador_CEP = null;

    /**
     * @var string $tomador_cod_cidade
     */
    protected $tomador_cod_cidade = null;

    /**
     * @var string $tomador_fone
     */
    protected $tomador_fone = null;

    /**
     * @var string $tomador_ramal
     */
    protected $tomador_ramal = null;

    /**
     * @var string $tomador_fax
     */
    protected $tomador_fax = null;

    /**
     * @var int $rps_num
     */
    protected $rps_num = null;

    /**
     * @var string $rps_serie
     */
    protected $rps_serie = null;

    /**
     * @var int $rps_tipo
     */
    protected $rps_tipo = null;

    /**
     * @var int $rps_dia
     */
    protected $rps_dia = null;

    /**
     * @var int $rps_mes
     */
    protected $rps_mes = null;

    /**
     * @var int $rps_ano
     */
    protected $rps_ano = null;

    /**
     * @var int $nfse_substituida
     */
    protected $nfse_substituida = null;

    /**
     * @var int $rps_substituido
     */
    protected $rps_substituido = null;

    /**
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param string $aliquota
     * @param int $servico
     * @param string $situacao
     * @param string $valor
     * @param string $base
     * @param string $ir
     * @param string $pis
     * @param string $cofins
     * @param string $csll
     * @param string $inss
     * @param string $retencao_iss
     * @param string $descricaoNF
     * @param int $tomador_tipo
     * @param string $tomador_cnpj
     * @param string $tomador_email
     * @param string $tomador_ie
     * @param string $tomador_im
     * @param string $tomador_razao
     * @param string $tomador_endereco
     * @param string $tomador_numero
     * @param string $tomador_complemento
     * @param string $tomador_bairro
     * @param string $tomador_CEP
     * @param string $tomador_cod_cidade
     * @param string $tomador_fone
     * @param string $tomador_ramal
     * @param string $tomador_fax
     */
    public function __construct($ccm, $cnpj, $cpf, $senha, $aliquota, $servico, $situacao, $valor, $base, $ir, $pis, $cofins, $csll, $inss, $retencao_iss, $descricaoNF, $tomador_tipo, $tomador_cnpj, $tomador_email, $tomador_ie, $tomador_im, $tomador_razao, $tomador_endereco, $tomador_numero, $tomador_complemento, $tomador_bairro, $tomador_CEP, $tomador_cod_cidade, $tomador_fone, $tomador_ramal, $tomador_fax)
    {
      $this->ccm = $ccm;
      $this->cnpj = $cnpj;
      $this->cpf = $cpf;
      $this->senha = $senha;
      $this->aliquota = $aliquota;
      $this->servico = $servico;
      $this->situacao = $situacao;
      $this->valor = $valor;
      $this->base = $base;
      $this->ir = $ir;
      $this->pis = $pis;
      $this->cofins = $cofins;
      $this->csll = $csll;
      $this->inss = $inss;
      $this->retencao_iss = $retencao_iss;
      $this->descricaoNF = $descricaoNF;
      $this->tomador_tipo = $tomador_tipo;
      $this->tomador_cnpj = $tomador_cnpj;
      $this->tomador_email = $tomador_email;
      $this->tomador_ie = $tomador_ie;
      $this->tomador_im = $tomador_im;
      $this->tomador_razao = $tomador_razao;
      $this->tomador_endereco = $tomador_endereco;
      $this->tomador_numero = $tomador_numero;
      $this->tomador_complemento = $tomador_complemento;
      $this->tomador_bairro = $tomador_bairro;
      $this->tomador_CEP = $tomador_CEP;
      $this->tomador_cod_cidade = $tomador_cod_cidade;
      $this->tomador_fone = $tomador_fone;
      $this->tomador_ramal = $tomador_ramal;
      $this->tomador_fax = $tomador_fax;
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
     * @return tcDescricaoRps
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
     * @return tcDescricaoRps
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
     * @return tcDescricaoRps
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
     * @return tcDescricaoRps
     */
    public function setSenha($senha)
    {
      $this->senha = $senha;
      return $this;
    }

    /**
     * @return string
     */
    public function getAliquota()
    {
      return $this->aliquota;
    }

    /**
     * @param string $aliquota
     * @return tcDescricaoRps
     */
    public function setAliquota($aliquota)
    {
      $this->aliquota = $aliquota;
      return $this;
    }

    /**
     * @return int
     */
    public function getServico()
    {
      return $this->servico;
    }

    /**
     * @param int $servico
     * @return tcDescricaoRps
     */
    public function setServico($servico)
    {
      $this->servico = $servico;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodigo_obra()
    {
      return $this->codigo_obra;
    }

    /**
     * @param string $codigo_obra
     * @return tcDescricaoRps
     */
    public function setCodigo_obra($codigo_obra)
    {
      $this->codigo_obra = $codigo_obra;
      return $this;
    }

    /**
     * @return string
     */
    public function getObra_art()
    {
      return $this->obra_art;
    }

    /**
     * @param string $obra_art
     * @return tcDescricaoRps
     */
    public function setObra_art($obra_art)
    {
      $this->obra_art = $obra_art;
      return $this;
    }

    /**
     * @return string
     */
    public function getSituacao()
    {
      return $this->situacao;
    }

    /**
     * @param string $situacao
     * @return tcDescricaoRps
     */
    public function setSituacao($situacao)
    {
      $this->situacao = $situacao;
      return $this;
    }

    /**
     * @return string
     */
    public function getValor()
    {
      return $this->valor;
    }

    /**
     * @param string $valor
     * @return tcDescricaoRps
     */
    public function setValor($valor)
    {
      $this->valor = $valor;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase()
    {
      return $this->base;
    }

    /**
     * @param string $base
     * @return tcDescricaoRps
     */
    public function setBase($base)
    {
      $this->base = $base;
      return $this;
    }

    /**
     * @return string
     */
    public function getIr()
    {
      return $this->ir;
    }

    /**
     * @param string $ir
     * @return tcDescricaoRps
     */
    public function setIr($ir)
    {
      $this->ir = $ir;
      return $this;
    }

    /**
     * @return string
     */
    public function getPis()
    {
      return $this->pis;
    }

    /**
     * @param string $pis
     * @return tcDescricaoRps
     */
    public function setPis($pis)
    {
      $this->pis = $pis;
      return $this;
    }

    /**
     * @return string
     */
    public function getCofins()
    {
      return $this->cofins;
    }

    /**
     * @param string $cofins
     * @return tcDescricaoRps
     */
    public function setCofins($cofins)
    {
      $this->cofins = $cofins;
      return $this;
    }

    /**
     * @return string
     */
    public function getCsll()
    {
      return $this->csll;
    }

    /**
     * @param string $csll
     * @return tcDescricaoRps
     */
    public function setCsll($csll)
    {
      $this->csll = $csll;
      return $this;
    }

    /**
     * @return string
     */
    public function getInss()
    {
      return $this->inss;
    }

    /**
     * @param string $inss
     * @return tcDescricaoRps
     */
    public function setInss($inss)
    {
      $this->inss = $inss;
      return $this;
    }

    /**
     * @return string
     */
    public function getRetencao_iss()
    {
      return $this->retencao_iss;
    }

    /**
     * @param string $retencao_iss
     * @return tcDescricaoRps
     */
    public function setRetencao_iss($retencao_iss)
    {
      $this->retencao_iss = $retencao_iss;
      return $this;
    }

    /**
     * @return int
     */
    public function getIncentivo_fiscal()
    {
      return $this->incentivo_fiscal;
    }

    /**
     * @param int $incentivo_fiscal
     * @return tcDescricaoRps
     */
    public function setIncentivo_fiscal($incentivo_fiscal)
    {
      $this->incentivo_fiscal = $incentivo_fiscal;
      return $this;
    }

    /**
     * @return string
     */
    public function getCod_municipio_prestacao_servico()
    {
      return $this->cod_municipio_prestacao_servico;
    }

    /**
     * @param string $cod_municipio_prestacao_servico
     * @return tcDescricaoRps
     */
    public function setCod_municipio_prestacao_servico($cod_municipio_prestacao_servico)
    {
      $this->cod_municipio_prestacao_servico = $cod_municipio_prestacao_servico;
      return $this;
    }

    /**
     * @return string
     */
    public function getCod_pais_prestacao_servico()
    {
      return $this->cod_pais_prestacao_servico;
    }

    /**
     * @param string $cod_pais_prestacao_servico
     * @return tcDescricaoRps
     */
    public function setCod_pais_prestacao_servico($cod_pais_prestacao_servico)
    {
      $this->cod_pais_prestacao_servico = $cod_pais_prestacao_servico;
      return $this;
    }

    /**
     * @return string
     */
    public function getCod_municipio_incidencia()
    {
      return $this->cod_municipio_incidencia;
    }

    /**
     * @param string $cod_municipio_incidencia
     * @return tcDescricaoRps
     */
    public function setCod_municipio_incidencia($cod_municipio_incidencia)
    {
      $this->cod_municipio_incidencia = $cod_municipio_incidencia;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescricaoNF()
    {
      return $this->descricaoNF;
    }

    /**
     * @param string $descricaoNF
     * @return tcDescricaoRps
     */
    public function setDescricaoNF($descricaoNF)
    {
      $this->descricaoNF = $descricaoNF;
      return $this;
    }

    /**
     * @return int
     */
    public function getTomador_tipo()
    {
      return $this->tomador_tipo;
    }

    /**
     * @param int $tomador_tipo
     * @return tcDescricaoRps
     */
    public function setTomador_tipo($tomador_tipo)
    {
      $this->tomador_tipo = $tomador_tipo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_cnpj()
    {
      return $this->tomador_cnpj;
    }

    /**
     * @param string $tomador_cnpj
     * @return tcDescricaoRps
     */
    public function setTomador_cnpj($tomador_cnpj)
    {
      $this->tomador_cnpj = $tomador_cnpj;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_email()
    {
      return $this->tomador_email;
    }

    /**
     * @param string $tomador_email
     * @return tcDescricaoRps
     */
    public function setTomador_email($tomador_email)
    {
      $this->tomador_email = $tomador_email;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_ie()
    {
      return $this->tomador_ie;
    }

    /**
     * @param string $tomador_ie
     * @return tcDescricaoRps
     */
    public function setTomador_ie($tomador_ie)
    {
      $this->tomador_ie = $tomador_ie;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_im()
    {
      return $this->tomador_im;
    }

    /**
     * @param string $tomador_im
     * @return tcDescricaoRps
     */
    public function setTomador_im($tomador_im)
    {
      $this->tomador_im = $tomador_im;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_razao()
    {
      return $this->tomador_razao;
    }

    /**
     * @param string $tomador_razao
     * @return tcDescricaoRps
     */
    public function setTomador_razao($tomador_razao)
    {
      $this->tomador_razao = $tomador_razao;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_endereco()
    {
      return $this->tomador_endereco;
    }

    /**
     * @param string $tomador_endereco
     * @return tcDescricaoRps
     */
    public function setTomador_endereco($tomador_endereco)
    {
      $this->tomador_endereco = $tomador_endereco;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_numero()
    {
      return $this->tomador_numero;
    }

    /**
     * @param string $tomador_numero
     * @return tcDescricaoRps
     */
    public function setTomador_numero($tomador_numero)
    {
      $this->tomador_numero = $tomador_numero;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_complemento()
    {
      return $this->tomador_complemento;
    }

    /**
     * @param string $tomador_complemento
     * @return tcDescricaoRps
     */
    public function setTomador_complemento($tomador_complemento)
    {
      $this->tomador_complemento = $tomador_complemento;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_bairro()
    {
      return $this->tomador_bairro;
    }

    /**
     * @param string $tomador_bairro
     * @return tcDescricaoRps
     */
    public function setTomador_bairro($tomador_bairro)
    {
      $this->tomador_bairro = $tomador_bairro;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_CEP()
    {
      return $this->tomador_CEP;
    }

    /**
     * @param string $tomador_CEP
     * @return tcDescricaoRps
     */
    public function setTomador_CEP($tomador_CEP)
    {
      $this->tomador_CEP = $tomador_CEP;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_cod_cidade()
    {
      return $this->tomador_cod_cidade;
    }

    /**
     * @param string $tomador_cod_cidade
     * @return tcDescricaoRps
     */
    public function setTomador_cod_cidade($tomador_cod_cidade)
    {
      $this->tomador_cod_cidade = $tomador_cod_cidade;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_fone()
    {
      return $this->tomador_fone;
    }

    /**
     * @param string $tomador_fone
     * @return tcDescricaoRps
     */
    public function setTomador_fone($tomador_fone)
    {
      $this->tomador_fone = $tomador_fone;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_ramal()
    {
      return $this->tomador_ramal;
    }

    /**
     * @param string $tomador_ramal
     * @return tcDescricaoRps
     */
    public function setTomador_ramal($tomador_ramal)
    {
      $this->tomador_ramal = $tomador_ramal;
      return $this;
    }

    /**
     * @return string
     */
    public function getTomador_fax()
    {
      return $this->tomador_fax;
    }

    /**
     * @param string $tomador_fax
     * @return tcDescricaoRps
     */
    public function setTomador_fax($tomador_fax)
    {
      $this->tomador_fax = $tomador_fax;
      return $this;
    }

    /**
     * @return int
     */
    public function getRps_num()
    {
      return $this->rps_num;
    }

    /**
     * @param int $rps_num
     * @return tcDescricaoRps
     */
    public function setRps_num($rps_num)
    {
      $this->rps_num = $rps_num;
      return $this;
    }

    /**
     * @return string
     */
    public function getRps_serie()
    {
      return $this->rps_serie;
    }

    /**
     * @param string $rps_serie
     * @return tcDescricaoRps
     */
    public function setRps_serie($rps_serie)
    {
      $this->rps_serie = $rps_serie;
      return $this;
    }

    /**
     * @return int
     */
    public function getRps_tipo()
    {
      return $this->rps_tipo;
    }

    /**
     * @param int $rps_tipo
     * @return tcDescricaoRps
     */
    public function setRps_tipo($rps_tipo)
    {
      $this->rps_tipo = $rps_tipo;
      return $this;
    }

    /**
     * @return int
     */
    public function getRps_dia()
    {
      return $this->rps_dia;
    }

    /**
     * @param int $rps_dia
     * @return tcDescricaoRps
     */
    public function setRps_dia($rps_dia)
    {
      $this->rps_dia = $rps_dia;
      return $this;
    }

    /**
     * @return int
     */
    public function getRps_mes()
    {
      return $this->rps_mes;
    }

    /**
     * @param int $rps_mes
     * @return tcDescricaoRps
     */
    public function setRps_mes($rps_mes)
    {
      $this->rps_mes = $rps_mes;
      return $this;
    }

    /**
     * @return int
     */
    public function getRps_ano()
    {
      return $this->rps_ano;
    }

    /**
     * @param int $rps_ano
     * @return tcDescricaoRps
     */
    public function setRps_ano($rps_ano)
    {
      $this->rps_ano = $rps_ano;
      return $this;
    }

    /**
     * @return int
     */
    public function getNfse_substituida()
    {
      return $this->nfse_substituida;
    }

    /**
     * @param int $nfse_substituida
     * @return tcDescricaoRps
     */
    public function setNfse_substituida($nfse_substituida)
    {
      $this->nfse_substituida = $nfse_substituida;
      return $this;
    }

    /**
     * @return int
     */
    public function getRps_substituido()
    {
      return $this->rps_substituido;
    }

    /**
     * @param int $rps_substituido
     * @return tcDescricaoRps
     */
    public function setRps_substituido($rps_substituido)
    {
      $this->rps_substituido = $rps_substituido;
      return $this;
    }

}
