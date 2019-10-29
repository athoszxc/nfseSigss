<?php


 function autoload_1baf7f1e51cb909335a2b9f0a93745ad($class)
{
    $classes = array(
        'ModuloEmissorNFSe' => __DIR__ .'/ModuloEmissorNFSe.php',
        'tcDescricaoRps' => __DIR__ .'/tcDescricaoRps.php',
        'tcRetornoNota' => __DIR__ .'/tcRetornoNota.php',
        'tcDescricaoCancelaNota' => __DIR__ .'/tcDescricaoCancelaNota.php',
        'tcConsultarNfseServicoPrestadoEnvio' => __DIR__ .'/tcConsultarNfseServicoPrestadoEnvio.php',
        'tcConsultarRpsServicoPrestadoEnvio' => __DIR__ .'/tcConsultarRpsServicoPrestadoEnvio.php',
        'tcEstruturaDescricaoErros' => __DIR__ .'/tcEstruturaDescricaoErros.php',
        'tcListaErrosAlertas' => __DIR__ .'/tcListaErrosAlertas.php',
        'tcConsultarCadastroContribuinteEnvio' => __DIR__ .'/tcConsultarCadastroContribuinteEnvio.php' 
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1baf7f1e51cb909335a2b9f0a93745ad');

require 'eMethods.php';

{
}
