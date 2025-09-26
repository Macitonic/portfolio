<?php
session_start();

if (!isset($_SESSION["user_email"])) {
    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background: #397FFA;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        tr:hover {
            background: #eaf3ff;
        }
        .logout {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .logout a {
            background: #ff4b5c;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }
        .logout a:hover {
            background: #e63946;
        }
    </style>
</head>
<body>
    <h2>Welcome Admin!</h2>

    <h2>Clients List</h2>
    <table>
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>
        <?php include 'view.php'; ?>
    </table>

    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
