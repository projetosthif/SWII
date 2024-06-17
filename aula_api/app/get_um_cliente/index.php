<?php
    // AQUI VAI SER NOSSA APLICAÇÃO 
    require_once __DIR__ .'../../../api/config.php'; //__DIR__ para voltar até a raiz do projeto
    require_once __DIR__ .'../../../api/response.php';

    $data = require_once __DIR__ . '/../../api/data.php';

    //VERIFICAR SE NA URL VEIO ALGUMA IDENTIFICAÇÃO DO CLIENTE
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        echo Response::resposta(400,'error','Necessário informar o ID');
        exit;
    }

    if($id < 0 || $id > count($data) - 1){
        echo Response::resposta(400,'error','Cliente não encontrado');
        exit;
    }

    echo Response::resposta(200,'sucess',$data[$id]);
?>