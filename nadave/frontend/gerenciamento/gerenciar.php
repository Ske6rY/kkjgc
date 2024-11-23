<?php
include 'config .php';

$sql = "SELECT * FROM problemas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
                <td>{$row['endereco']}</td>
                <td>{$row['problema']}</td>
                <td>
                    <button onclick=\"location.href='editar.php?id={$row['id']}'\">Editar</button>
                    <button onclick=\"location.href='pagar.php?id={$row['id']}'\">Pagar</button>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
}

$conn->close();
?>