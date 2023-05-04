<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container mt-5 d-flex flex-wrap align-items-center justify-content-center">
        <h1 class="text-center text-white">PHP Hotel a Milano</h1>
        <table class="table table-bordered border-white table-striped table-dark mt-5">
            <tbody>
                <tr>
                    <th>Nome</th>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td class="text-center"><?php echo $hotel["name"]; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <th>Descrizione</th>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td class="text-center"><?php echo $hotel["description"]; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <th>Parcheggio</th>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td class="text-center">
                            <?php if ($hotel["parking"] == true) { ?>
                                <p class="text-success">Disponibile</p>
                            <?php } else { ?>
                                <p class="text-danger">Non disponibile</p>
                            <?php } ?>
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <th>Voto</th>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td class="text-center text-warning"><?php echo $hotel["vote"]; ?> / 5 &#9733;</td>
                    <?php } ?>
                </tr>
                <tr>
                    <th>Distanza dal centro</th>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td class="text-center"><?php echo $hotel["distance_to_center"]; ?> km</td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>