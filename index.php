<?php
spl_autoload_register(function ($class_name){
    include $class_name.'.php';
});


echo "<div align='center'> <h2>Projeto Xadrez PHP</h2>
    <h3>Reprodutor de Jogadas a partir de Instruções de Notação Algébrica</h3>
    <h6>Previsão de Término em 30/01/2021</h6></div>";
echo '<br>';

$tabuleiro = new Tabuleiro();
$tabuleiro->setTabuleiroInicial();


echo '<table border="1" align="center">';
for ($i = 0; $i <= 7; $i++) {
    echo '<tr>';
    for($j = 0; $j<= 7; $j++){
        if ( (($i % 2) != 0) and (($j % 2) == 0) or (($i % 2) == 0) and (($j % 2) != 0)){
            echo '<td align="center" bgcolor="#C3C3C3" width="90px" height="90px">';
            $tabuleiro->getTabuleiroPecaCasa($i, $j);
            echo '</td>';
        } else {
            echo '<td align="center" bgcolor="#FFFFF" width="90px" height="90px">';
            $tabuleiro->getTabuleiroPecaCasa($i, $j);
            echo '</td>';
        }
    }
    $numeroColuna = $i+1;
    echo "<td align='center'>$numeroColuna</td>";
    echo '</tr>';
}
echo '<tr border="0" align="center">';
echo '<td border="0">A</td>';
echo '<td border="0">B</td>';
echo '<td border="0">C</td>';
echo '<td border="0">D</td>';
echo '<td border="0">E</td>';
echo '<td border="0">F</td>';
echo '<td border="0">G</td>';
echo '<td border="0">H</td>';
echo '</tr>';
echo '</table>';
