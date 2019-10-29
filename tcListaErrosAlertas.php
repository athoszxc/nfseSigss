<?php

class tcListaErrosAlertas
{

    /**
     * @var tcEstruturaDescricaoErros[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tcEstruturaDescricaoErros[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param tcEstruturaDescricaoErros[] $item
     * @return tcListaErrosAlertas
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
