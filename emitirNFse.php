<?php
/*
@author Athos Gomes
@email athoszxc@gmail.com


 Emissão de NFSe SIGISS  em Londrina
  
 
*/
 
require 'autoload.php';
 
	
//Dados autenticação
$aConfig = array(
      'cmc'   => base64_decode($_POST['cmc']  ),
      'cnpj'  => base64_decode($_POST['cnpj'] ),
      'cpf'   => base64_decode($_POST['cpf']  ),
      'senha' => base64_decode($_POST['senha'])
);

 
 function getCidadeIBGE($ibge)
 {
    ($r = mysql_query("SELECT CONCAT(c.nome_cidade, ', ', (SELECT uf_estado FROM sefaz_estado WHERE id_estado = c.id_estado LIMIT 1 )) as estado FROM sefaz_cidade c WHERE ibge_cidade = ".$ibge.";")) or die(mysql_error());
    ($a = mysql_fetch_row($r)) or die(mysql_error());
	
    return $a[0];
 };
 
function getSituacaoTribNFSe($in)
{
	switch ($in) {
    case 'tp':
        return "Tributada no prestador";
        break;
    case 'tt':
        return "Tributada no tomador";
        break;
    case 'tf':
        return "Tributado Fixo";
        break;	
	case 'is':
        return "Isenta/Imune";
        break;
	case 'nt':
        return "Outro município";
        break;
	case 'si':
        return "Exportação";
        break;
	case 'ca':
        return "Cancelada";
        break;
	}
}; 

function getTipoTomador($in){
switch ($in) {
    case 1:
        return "PFNI";
        break;
    case 2:
        return "Pessoa Física";
        break;
    case 3:
        return "Jurídica do Município";
        break;	
	case 4:
        return "Jurídica de fora do Município";
        break;
	case 5:
        return "Pessoa Jurídica de fora do país";
        break;
 
	}	
};

function getTipoIncentivoFiscal($in){
	
	switch ($in) {
    case 'false':
        return "Não.";
	break;
	case '1':
        return "Optante pelo Simples Nacional em início de \n atividade (primeiras três competências)";
	break;
    case '2':
        return "Serviço prestado no Programa Minha Casa \n Minha Vida (até 3 salários mínimos) \nObrigatório apenas no registro de operações \nisentas do imposto – campo “situacao” igual “is”.";
	break;
 
	
	
	};
	
};

//REALIZA CONSULTA DE NFSe LONDRINA
if ($_GET['action']=='consultaNFSe')
{

 
     $nota = consultaNFse($aConfig, $_POST['numero']);
	//$nota = file_get_contents('exemplos/xmlNfse.txt'); 
  
	$nota = notaAsObj($nota);
 
    // Insere no banco
 
	 $layout        = '';
	 $layoutNota    = '';
	 $layoutTomador = '';
	 
	 //Link visualização
	 $layout .= '<tr><td><b>Link:</b></td><td><a href="'
	 .$nota->Nfse->IdentificacaoNfse->LinkImpressao.'" target="_blank">Visualizar</a></td></tr>';
	 //Código de verificação
	 $layout .= '<tr><td><b>Código:</b></td><td>'
	 .$nota->Nfse->IdentificacaoNfse->CodigoVerificacao.'</td></tr>';
	 //Status 
	 $layout .= '<tr><td><b>Status:</b></td><td>'
	 .$nota->Nfse->IdentificacaoNfse->StatusNfse.'</td></tr>';
	 //Competencia
	 $layout .= '<tr><td><b>Competência:</b></td><td>'
	 .$nota->Nfse->IdentificacaoNfse->Competencia.'</td></tr>';
	 //Numero 
	 $layout .= '<tr><td><b>Número:</b></td><td>'
	 .$nota->Nfse->IdentificacaoNfse->Numero.'</td></tr>';
	 
 
	 ///// TOMADOR
	 $layoutTomador .=  '<tr><td><b>Tipo</b></td><td>'
	 .traduzTipoTomador($nota->Nfse->DadosNfse->TomadorTipo).'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>CPF/CNPJ</b></td><td>'
	 .$nota->Nfse->DadosNfse->TomadorCpfCnpj.'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>Razão Social</b></td><td>'
	 .$nota->Nfse->DadosNfse->TomadorRazaoSocial.'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>Endereço</b></td><td>'
	 .$nota->Nfse->DadosNfse->TomadorEndereco.'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>Número</b></td><td>'
	 .$nota->Nfse->DadosNfse->TomadorNumero.'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>Bairro</b></td><td>'
	 .$nota->Nfse->DadosNfse->TomadorBairro.'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>CEP</b></td><td>'
	 .$nota->Nfse->DadosNfse->TomadorCep.'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>Município</b></td><td>'
	 .getCidadeIBGE($nota->Nfse->DadosNfse->TomadorCodigoMunicipio).'</td></tr>';
	 $layoutTomador .=  '<tr><td><b>UF</b></td><td>'
	 .$nota->Nfse->DadosNfse->TomadorUf.'</td></tr>';
	 
	 ///// Dados da nota
	 //Situação
	 $layoutNota .= '<tr><td><b>Situação:</b></td><td>'
	 .traduzSituacaoTribNFSe($nota->Nfse->DadosNfse->Situacao).'('.$nota->Nfse->DadosNfse->Situacao.')</td></tr>';
	 // Valor Serviços
	 $layoutNota .= '<tr><td><b>Valor Serviços:</b></td><td>'
	 .$nota->Nfse->DadosNfse->ValorServicos.'</td></tr>';
	 // Valor Liquido
	 $layoutNota .= '<tr><td><b>Valor líquido:</b></td><td>'
	 .$nota->Nfse->DadosNfse->ValorLiquidoNfse.'</td></tr>';
	 // Municipio Realizado 
	 $layoutNota .= '<tr><td><b>Mun. da prestação:</b></td><td>'
	 .getCidadeIBGE($nota->Nfse->DadosNfse->MunicipioIncidencia).'</td></tr>';
	 // Discriminacao serviços
	 $layoutNota .= '<tr><td><b>Discriminação:</b></td><td>'
	 .nl2br($nota->Nfse->DadosNfse->Discriminacao).'</td></tr>';
	 
	 //Observações
	 $layoutNota .= '<tr><td><b>Observações:</td><td>'
	 .nl2br($nota->Nfse->DadosNfse->Observacoes).'</td></tr>';
	// print_r( $nota );
	
		
			 echo '<section class="panel clearfix bg-info dk">
                          <div class="panel-body">
                          
                            <div class="clear">
                    
                             Consulta
                            </div>
                          </div>
                        </section>';
						
						
	    echo '<table class="table table-striped m-b-none dataTable">'.$layout.'</table>';
	 	 echo '<section class="panel clearfix bg-info dk">
                          <div class="panel-body">
                          
                            <div class="clear">
                    
                              Resumo
                            </div>
                          </div>
                        </section>';
						
     echo ' <table class="table table-striped m-b-none dataTable">'.$layoutNota.'</table>';
	 echo '<section class="panel clearfix bg-info dk">
                          <div class="panel-body">
                          
                            <div class="clear">
                    
                              Tomador
                            </div>
                          </div>
                        </section>';
	 echo ' <table class="table table-striped m-b-none dataTable">'.$layoutTomador.'</table>';
	 
		echo '
		<a href="#emiteNFe" data-toggle="modal" class="btn btn-rounded btn-primary" id="btnNFeMake">
		<i class="fa fa-plus"></i> Visualizar</a> 
		<a href="#emiteNFe" data-toggle="modal" class="btn btn-rounded btn-primary" id="btnNFeMake">
		<i class="fa fa-plus"></i> Salvar XML </a>
		<a href="#emiteNFe" data-dismiss="modal" class="btn btn-rounded btn-primary" id="btnNFeMake">
		<i class="fa fa-plus"></i> Fechar</a>
		';

};



?>