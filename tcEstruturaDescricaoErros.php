<?php

class tcEstruturaDescricaoErros
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $DescricaoProcesso
     */
    protected $DescricaoProcesso = null;

    /**
     * @var string $DescricaoErro
     */
    protected $DescricaoErro = null;

    /**
     * @param string $id
     * @param string $DescricaoProcesso
     * @param string $DescricaoErro
     */
    public function __construct($id, $DescricaoProcesso, $DescricaoErro)
    {
      $this->id = $id;
      $this->DescricaoProcesso = $DescricaoProcesso;
      $this->DescricaoErro = $DescricaoErro;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return tcEstruturaDescricaoErros
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescricaoProcesso()
    {
      return $this->DescricaoProcesso;
    }

    /**
     * @param string $DescricaoProcesso
     * @return tcEstruturaDescricaoErros
     */
    public function setDescricaoProcesso($DescricaoProcesso)
    {
      $this->DescricaoProcesso = $DescricaoProcesso;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescricaoErro()
    {
      return $this->DescricaoErro;
    }

    /**
     * @param string $DescricaoErro
     * @return tcEstruturaDescricaoErros
     */
    public function setDescricaoErro($DescricaoErro)
    {
      $this->DescricaoErro = $DescricaoErro;
      return $this;
    }

}
