<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php require '../includes/title.php';?></title>
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body class="bg-gray-100">

    <!-- Header Component -->
    <?php require '../components/headerUI.php'; ?>

    <!-- products card component -->
    <?php require '../components/productsCard.php'; ?>

</body>
</html>