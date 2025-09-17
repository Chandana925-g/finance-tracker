<?php include 'includes/header.php'; ?>

<!-- Add the navigation bar here -->


<h2>Add Transaction</h2>
<form action="actions/add-transaction-action.php" method="POST">
    <input type="number" name="amount" placeholder="Amount" required>
    <select name="type">
        <option value="income">Income</option>
        <option value="expense">Expense</option>
    </select>
    <input type="text" name="category" placeholder="Category" required>
    <input type="date" name="date" required>
    <textarea name="note" placeholder="Note"></textarea>
    <button type="submit">Add</button>
</form>

</body>
</html>
