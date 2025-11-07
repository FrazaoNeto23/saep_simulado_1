<?php include("includes/header.php");?>
<h1> Veículos </h1>

<?php

try {
    $sql = "";
    $stmt = $conn->query($sql);
    $veiculos = $stmt->fetchAll();
    
} catch (\Throwable $th) {
    
}



<?php include("includes/footer.php");?>