<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Personal Finance Tracker</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            color: white;
            padding: 15px;
        }

        nav .title {
            flex: 1;
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
        }

        nav .menu {
            display: flex;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<nav>
    <div class="title">Personal Finance Tracker</div>
    <div class="menu">
        <a href="index.php">Dashboard</a>
        <a href="add-transaction.php">Add Transaction</a>
        <a href="logout.php">Logout</a>
    </div>
</nav>
