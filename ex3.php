<?php function createHTMLTable($nbLignes,$nbCols)
{
    echo "<table border='1'>";
    for ($i = 0; $i < $nbLignes; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $nbCols; $j++) {
            echo "<td>{$i}-{$j}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

echo "Le tableau de l''exerciçe 3  est : ".createHTMLTable(2,5)
?>

