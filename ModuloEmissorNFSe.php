<?php

class ModuloEmissorNFSe extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'tcDescricaoRps' => '\\tcDescricaoRps',
  'tcRetornoNota' => '\\tcRetornoNota',
  'tcDescricaoCancelaNota' => '\\tcDescricaoCancelaNota',
  'tcConsultarNfseServicoPrestadoEnvio' => '\\tcConsultarNfseServicoPrestadoEnvio',
  'tcConsultarRpsServicoPrestadoEnvio' => '\\tcConsultarRpsServicoPrestadoEnvio',
  'tcEstruturaDescricaoErros' => '\\tcEstruturaDescricaoErros',
  'tcListaErrosAlertas' => '\\tcListaErrosAlertas',
  'tcConsultarCadastroContribuinteEnvio' => '\\tcConsultarCadastroContribuinteEnvio',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
       // $wsdl = 'http://testeiss.londrina.pr.gov.br/ws/v1_03/sigiss_ws.php?wsdl';
		$wsdl = 'https://iss.londrina.pr.gov.br/ws/v1_03/sigiss_ws.php?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gera a nota fiscal eletrônica
     *
     * @param tcDescricaoRps $DescricaoRps
     * @return list(tcRetornoNota $RetornoNota, tcListaErrosAlertas $Mensagens)
     */
    public function GerarNota(tcDescricaoRps $DescricaoRps)
    {
      return $this->__soapCall('GerarNota', array($DescricaoRps));
    }

    /**
     * Faz o cancelamento da nota fiscal eletrônica
     *
     * @param tcDescricaoCancelaNota $DescricaoCancelaNota
     * @return list(tcRetornoNota $RetornoNota, tcListaErrosAlertas $Mensagens)
     */
    public function CancelarNota(tcDescricaoCancelaNota $DescricaoCancelaNota)
    {
      return $this->__soapCall('CancelarNota', array($DescricaoCancelaNota));
    }

    /**
     * Consulta uma nota fiscal emitida
     *
     * @param tcConsultarNfseServicoPrestadoEnvio $ConsultarNfseServicoPrestadoEnvio
     * @return list(string $RetornoNota, tcListaErrosAlertas $Mensagens)
     */
    public function ConsultarNfseServicoPrestado(tcConsultarNfseServicoPrestadoEnvio $ConsultarNfseServicoPrestadoEnvio)
    {
      return $this->__soapCall('ConsultarNfseServicoPrestado', array($ConsultarNfseServicoPrestadoEnvio));
    }

    /**
     * Consulta uma nota fiscal emitida por RPS
     *
     * @param tcConsultarRpsServicoPrestadoEnvio $ConsultarRpsServicoPrestadoEnvio
     * @return list(string $RetornoNota, tcListaErrosAlertas $Mensagens)
     */
    public function ConsultarRpsServicoPrestado(tcConsultarRpsServicoPrestadoEnvio $ConsultarRpsServicoPrestadoEnvio)
    {
      return $this->__soapCall('ConsultarRpsServicoPrestado', array($ConsultarRpsServicoPrestadoEnvio));
    }

    /**
     * Consulta dados cadastrais de um contribuinte
     *
     * @param tcConsultarCadastroContribuinteEnvio $ConsultarCadastroContribuinteEnvio
     * @return list(string $RetornoCadastro, tcListaErrosAlertas $Mensagens)
     */
    public function ConsultarCadastroContribuinte(tcConsultarCadastroContribuinteEnvio $ConsultarCadastroContribuinteEnvio)
    {
      return $this->__soapCall('ConsultarCadastroContribuinte', array($ConsultarCadastroContribuinteEnvio));
    }

}
