<?php 
include 'includes/db.php'; 
include 'includes/header.php'; 

// Ensure user_id is set in the session
if (!isset($_SESSION['user_id'])) {
    // Redirect to login if the user is not logged in
    header("Location: login.php");
    exit();
}

// Fetch the balance from the database
$stmt = $pdo->prepare("SELECT SUM(CASE WHEN type='income' THEN amount ELSE -amount END) AS balance FROM Transactions WHERE user_id = ?");
$stmt->execute([$_SESSION['user_id']]);
$balance = $stmt->fetchColumn();
?>

<!-- Display current balance -->
<div class="balance">
    <strong>Current Balance:</strong> $<?= number_format($balance ?? 0, 2) ?>
</div>

<!-- Fetch and display transactions -->

<div class="container">
<h3>My Transaction Summary</h3>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Type</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->prepare("SELECT * FROM Transactions WHERE user_id = ? ORDER BY date DESC");
            $stmt->execute([$_SESSION['user_id']]);
            $transactions = $stmt->fetchAll();

            if ($transactions):
                foreach ($transactions as $transaction):
            ?>
            <tr>
                <td><?= htmlspecialchars($transaction['date']) ?></td>
                <td><?= htmlspecialchars(ucfirst($transaction['type'])) ?></td>
                <td><?= htmlspecialchars($transaction['category']) ?></td>
                <td>$<?= number_format($transaction['amount'], 2) ?></td>
                <td><?= htmlspecialchars($transaction['note']) ?></td>
            </tr>
            <?php 
                endforeach;
            else:
            ?>
            <tr>
                <td colspan="5" style="text-align: center;">No transactions found</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
