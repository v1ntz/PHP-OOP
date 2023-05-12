<?php
include('class.php');

$product1 = new CDMusic("CDMUSIC-1", 20000, 20, "POP", "ARTIST-1");
$product2 = new CDMusic("CDMUSIC-2", 40000, 10, "Metal", "ARTIST-2");
$product3 = new CDRack("RACK-1", 100000, 20, 100, "MODEL-1");
$product4 = new CDRack("RACK-2", 50000, 30, 50, "MODEL-2");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <h2>CD Music</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Genre</th>
                <th>Artist</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?= $product1->getName(); ?></td>
                <td><?= $product1->getPrice(); ?></td>
                <td><?= $product1->getGenre(); ?></td>
                <td><?= $product1->getArtist(); ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?= $product2->getName(); ?></td>
                <td><?= $product2->getPrice(); ?></td>
                <td><?= $product2->getGenre(); ?></td>
                <td><?= $product2->getArtist(); ?></td>
            </tr>
        </tbody>
    </table>

    <h2>CD Rack</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Kapasitas</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3</td>
                <td><?= $product3->getName(); ?></td>
                <td><?= $product3->getPrice(); ?></td>
                <td><?= $product3->getCapacity(); ?></td>
                <td><?= $product3->getModel(); ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?= $product4->getName(); ?></td>
                <td><?= $product4->getPrice(); ?></td>
                <td><?= $product4->getCapacity(); ?></td>
                <td><?= $product4->getModel(); ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
