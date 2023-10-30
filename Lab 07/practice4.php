<?php

if (isset($_POST['size']) && is_numeric($_POST['size'])) {
    $size = intval($_POST['size']);
    
    echo "<tr>";
    echo "<th>&times;</th>"; // corner cell
    for ($i = 1; $i <= $size; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";
    
    for ($row = 1; $row <= $size; $row++) {
        echo "<tr>";
        echo "<th>$row</th>"; // column index
        for ($col = 1; $col <= $size; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
}

?>