<?php
require_once 'config/config.php'; // Asegura que la ruta es correcta

header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['query']) || empty($_GET['query'])) {
    echo json_encode(["error" => "No se proporcionó una consulta"]);
    exit;
}

$query = '%' . $_GET['query'] . '%';

try {
    $sql = "SELECT id, nombre, descripcion, imagen FROM ias WHERE nombre LIKE :query OR descripcion LIKE :query";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':query', $query, PDO::PARAM_STR);
    $stmt->execute();
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($resultados)) {
        echo json_encode(["mensaje" => "No se encontraron resultados"]);
    } else {
        echo json_encode($resultados);
    }
} catch (PDOException $e) {
    echo json_encode(["error" => "Error en la base de datos: " . $e->getMessage()]);
}
?>

