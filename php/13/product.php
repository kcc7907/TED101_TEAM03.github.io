<?php
    include("../connect.php");

    $sql = 'SELECT * FROM `PRODUCT`;';
    $result = $pdo->query($sql);
    $result->execute();
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);




?>