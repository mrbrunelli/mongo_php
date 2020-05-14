<?php

function botao($href)
{
    return "<a href=$href.php><button>Ir para: $href</button></a>";
}

function exibirBotao()
{
    echo '<br>';
    echo botao('index') . " " . botao('show') . " " . botao('update') . " " . botao('delete');
}
