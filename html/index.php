<?php 
$jsonFile = 'data.json';
$index = isset($_GET['index']) ? intval($_GET['index']) : 0;
$batchSize = 3;

$jsonData = file_get_contents($jsonFile);
$records = json_decode($jsonData, true);

if ($records !== null) {
    $batch = array_slice($records, $index, $batchSize);
    echo json_encode($batch);
} else {
    echo json_encode([]);
}
?>