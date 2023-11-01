<?php
$elementos = array();

while (true) {
    $entrada = readline("Insira elementos separados por vírgula (ex: 5,4,3,2,1) ou digite 'sair' para encerrar: ");

    if ($entrada === 'sair') {
        echo "Encerrando o programa.\n";
        exit();
    }

    $novosElementos = explode(',', $entrada);

    foreach ($novosElementos as $valor) {
        $numero = intval($valor);
        array_push($elementos, $numero);
    }

    echo "Elementos atuais: " . implode(', ', $elementos) . "\n";

    $ordem = readline("Escolha a ordem de classificação (crescente ou decrescente): ");

    if ($ordem === 'crescente') {
        sort($elementos);
    } elseif ($ordem === 'decrescente') {
        rsort($elementos);
    } else {
        echo "Ordem inválida. Tente novamente.\n";
    }

    echo "Elementos ordenados: " . implode(', ', $elementos) . "\n";
}
?>
