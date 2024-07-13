<?php

function handleAppError(Exception $e = null , PDOException $pdoe = null): void
{
    if ($pdoe !== null) {
        echo 'Erro ao conectar com o banco de dados.' . '<br>' . '<br>';
        if (DEBUG) {
        echo 'Detalhes: <br> <br>';
        echo '&nbsp;&nbsp;&nbsp;- Mensagem do erro: ' . $pdoe->getMessage() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Arquivo: ' . $pdoe->getFile() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Linha: ' . $pdoe->getLine() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Código de erro: ' . $pdoe->getCode() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Stack trace: ' . $pdoe->getTraceAsString() . '<br>';
        }
        return;
    }

    $errorMsg = 'Erro na aplicação.' . '<br>' . '<br>';
    
    if ($e === null) {
        echo $errorMsg;
        return;
    }
    
    echo $errorMsg;
    
    if (DEBUG) {
        echo 'Detalhes: <br> <br>';
        echo '&nbsp;&nbsp;&nbsp;- Mensagem do erro: ' . $e->getMessage() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Arquivo: ' . $e->getFile() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Linha: ' . $e->getLine() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Código de erro: ' . $e->getCode() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Stack trace: ' . $e->getTraceAsString() . '<br>';
    }
}
