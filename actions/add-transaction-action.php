<?php
include '../includes/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $amount = $_POST['amount'];
    $type = $_POST['type'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $note = $_POST['note'];

    $stmt = $pdo->prepare("INSERT INTO Transactions (user_id, amount, type, category, date, note) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$user_id, $amount, $type, $category, $date, $note]);

    header('Location: ../index.php');
}
?>
