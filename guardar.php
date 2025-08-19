<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacto";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Conexión fallida: " . $conn->connect_error]));
}


$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$servicio = $_POST['servicio'];
$colaboradores = $_POST['colaboradores'];
$mensaje = $_POST['mensaje'];


$sql = "INSERT INTO contactos (nombre, empresa, email, telefono, servicio, colaboradores, mensaje) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssis", $nombre, $empresa, $email, $telefono, $servicio, $colaboradores, $mensaje);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Datos guardados correctamente"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
