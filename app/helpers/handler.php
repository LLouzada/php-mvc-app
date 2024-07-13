<?php

function handleAppError(Exception $e): void
{
    echo 'Erro na aplicação.' . '<br>' . '<br>';

    if (DEBUG) {
        echo 'Detalhes: <br> <br>';
        echo '&nbsp;&nbsp;&nbsp;- Mensagem do erro: ' . $e->getMessage() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Arquivo: ' . $e->getFile() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Linha: ' . $e->getLine() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Código de erro: ' . $e->getCode() . '<br>' . '<br>';
        echo '&nbsp;&nbsp;&nbsp;- Stack trace: ' . $e->getTraceAsString() . '<br>';
    }
}
