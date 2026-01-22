<?php
$DB_HOST = $_ENV['DB_HOST'] ?? '127.0.0.1';
$DB_USERNAME = $_ENV['DB_USERNAME'] ?? 'root';
$DB_PASSWORD = $_ENV['DB_PASSWORD'] ?? '';
$DB_DATABASE = $_ENV['DB_DATABASE'] ?? 'My-elec-web';

try {
    $dsn = "mysql:host=$DB_HOST;dbname=$DB_DATABASE;charset=utf8mb4";
    $conn = new PDO($dsn, $DB_USERNAME, $DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    die("DB Connection failed");
}
