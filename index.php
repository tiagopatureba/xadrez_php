<?php
spl_autoload_register(function ($class_name){
    include $class_name.'.php';
});


echo "<div align='center'> Projeto Xadrez - BD</div>";
echo '<br><br>';

$peaoPreto = new Peao('PeaoPreto');
$torrePreta = new Torre('TorrePreta');
$cavaloPreto = new Cavalo('CavaloPreto');
$bispoPreto = new Bispo('BispoPreto');
$rainhaPreta = new Rainha('RainhaPreta');
$reiPreto = new Rei('ReiPreto');

$peaoBranco = new Peao('PeaoBranco');
$torreBranca = new Torre('TorreBranca');
$cavaloBranco = new Cavalo('CavaloBranco');
$bispoBranco = new Bispo('BispoBranco');
$rainhaBranca = new Rainha('RainhaBranca');
$reiBranco = new Rei('ReiBranco');

echo $peaoPreto->getImagem();
echo $torrePreta->getImagem();
echo $cavaloPreto->getImagem();
echo $bispoPreto->getImagem();
echo $rainhaPreta->getImagem();
echo $reiPreto->getImagem();
echo $peaoBranco->getImagem();
echo $torreBranca->getImagem();
echo $cavaloBranco->getImagem();
echo $bispoBranco->getImagem();
echo $rainhaBranca->getImagem();
echo $reiBranco->getImagem();


echo '<table width="45%" height="80%" border="1" align="center">';
for ($i = 0; $i <= 7; $i++) {
    echo '<tr>';
    for($j = 0; $j<= 7; $j++){
        if ( (($i % 2) != 0) and (($j % 2) == 0) or (($i % 2) == 0) and (($j % 2) != 0)){
            echo '<td align="center" bgcolor="#C3C3C3">';

            echo '</td>';
        } else {
            echo '<td align="center" bgcolor="#FFFFF">';

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




