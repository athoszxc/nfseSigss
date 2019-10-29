<?php

 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
/			consultaNFse
*/
function notaAsObj($string) {
  $xml = simplexml_load_string($string);
			
 return $xml;
};

function consultaNFse($config, $numeroNota, $retornoXml = false){ 

 $retNota = '';
 $lote =  new ModuloEmissorNFSe;
 $nfse = new tcConsultarNfseServicoPrestadoEnvio($config['cmc'], $config['cnpj'], $config['cpf'], $config['senha'] , $numeroNota);
 $resultArr  = $lote -> ConsultarNfseServicoPrestado($nfse);
 
 
  $retNota = $resultArr['RetornoNota']; 
  return $retNota; 
 
 
};


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
/			consultaCadastro
*/

function cadastroAsObj($string) {
  $xml = simplexml_load_string($string);
			
 return $xml->Consulta->Cadastro->DadosCadastro;
};

function consultaCadastro($config, $cpf_cnpj){
 
 $retCadastro  = '';
 $lErros ='';
 $lote =  new ModuloEmissorNFSe;
 $nfse =  new tcConsultarCadastroContribuinteEnvio($config['cmc'], $config['cnpj'],$config['cpf'], $config['senha'], $cpf_cnpj);
 $resultArr  = $lote -> ConsultarCadastroContribuinte($nfse);
 //print_r($resultArr);
 $retCadastro = $resultArr['RetornoCadastro']; 
 
 $lErros = $resultArr['Mensagens'];
 
  return cadastroAsObj($retCadastro);
};

 
function gerarNota($config, $aliquota, $servico, $situacao, $valor, $base, $ir, $pis, $cofins, $csll, $inss, $retencao_iss, $descricaoNF, $tomador_tipo, $tomador_cnpj, $tomador_email, $tomador_ie, $tomador_im, $tomador_razao, $tomador_endereco, $tomador_numero, $tomador_complemento, $tomador_bairro, $tomador_CEP, $tomador_cod_cidade, $tomador_fone, $tomador_ramal, $tomador_fax){
	
 $retCadastro  = '';
 $lErros ='';
 $lote =  new ModuloEmissorNFSe;
 $nfse =  new tcDescricaoRps($config['cmc'], $config['cnpj'],$config['cpf'], $config['senha'], $aliquota, $servico, $situacao, $valor, $base, $ir, $pis, $cofins, $csll, $inss, $retencao_iss, $descricaoNF, $tomador_tipo, $tomador_cnpj, $tomador_email, $tomador_ie, $tomador_im, $tomador_razao, $tomador_endereco, $tomador_numero, $tomador_complemento, $tomador_bairro, $tomador_CEP, $tomador_cod_cidade, $tomador_fone, $tomador_ramal, $tomador_fax);
  
 $resultArr  = $lote -> GerarNota($nfse); 
 $retCadastro = $resultArr['RetornoNota']; 
  	
};	
 
 
