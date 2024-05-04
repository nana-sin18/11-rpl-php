<?php
$judul = "halaman";
$sambutan = "selamat datang";
$konten = "lorem ipsum..............geuwgdjhewgdqwbcx2oqyhoe2iqhes1 xb3he`1t3ow1bxy gaviiiiii💙💖";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .judul{
            color: red;
        }
    </style>
</head>
<body>
    <!-- perulangan dalam html php -->
    <?php for ($i =0; $i <= 4; $i++) : ?>
    <h1 class="judul"> <?= $judul ?></h1>
    <h2> <?= $sambutan ?></h2>
    <h2> <?= $konten ?></h2>
    <?php endfor ?>
</body>
</html>