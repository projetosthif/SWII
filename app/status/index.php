<?php
    // AQUI VAI SER NOSSA APLICAÇÃO 
    require_once __DIR__ .'../../../api/config.php'; //__DIR__ para voltar até a raiz do projeto
    require_once __DIR__ .'../../../api/response.php';

    if(API_IS_ACTIVE){
        echo Response::resposta(200,'sucess',[
            'version' => API_VERSION,
            'status' =>'ATIVA'
        ]);
    } else{
        echo Response::resposta(200,'sucess',[
            'version' => API_VERSION,
            'status' =>'MANUTENÇÃO'
        ]);
    }
?>