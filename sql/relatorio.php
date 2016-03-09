<?php 

// acesso ao bd no mysql
include("../src/app/Config/database.php");
$config = new DATABASE_CONFIG();

if ($conn = mysqli_connect($config->default['host'], $config->default['login'], $config->default['password'])){
    if (mysqli_select_db($conn, $config->default['database'])) { 
        unset($config);
    } else{
        die("Erro ao tentar selecionar banco de dados"); 
    }
} else{
    die("Erro com o banco de dados.");
} 


// query
$sql = "SELECT * FROM logs ORDER BY logs.moment DESC";
                    
$logs = mysqli_query($conn, $sql);

// output (e subqueries)
include("layout/relatorio_inicio.php");
echo "<table>";
echo "<tr><td><strong>Operador</strong></td><td><strong>Item</strong></td><td><strong>Operação</strong></td><td><strong>Movimentação</strong></td><td><strong>Instante (AAAA-MM-DD HH-MM-SS)</strong></td></tr>";
while ($log = mysqli_fetch_array($logs)){
    
    $campusItem = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM campus_items WHERE id=".$log['campus_item_id']));
    $usuario = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE id=".$campusItem['user_id']));
    $item = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM items WHERE id=".$campusItem['item_id']));
    $operacao = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM deal_types WHERE id=".$log['deal_type_id']));
    
    echo "<tr>";
    echo "<td>".$usuario['name']."</td>";
    echo "<td>".$item['name']."</td>";
    echo "<td>".$operacao['name']."</td>";
    echo "<td>".$log['amount']."</td>";
    echo "<td>".$log['moment']."</td>";
    echo "</tr>";
}
echo "</table>";
include("layout/relatorio_fim.php");

?>