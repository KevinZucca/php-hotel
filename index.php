
<?php 
    $hotelNames = [];
    $hotelDescriptions = [];
    $hotelParkings = [];
    $hotelVotes = [];
    $hotelDistances = [];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
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

//    foreach($hotels as $hotel) {
//      foreach($hotel as $key => $value){
//         echo "<p> {$key} : {$value} '<br>' </p>" ;
//      }
//    }

    foreach($hotels as $hotel) {
        $hotelNames[] = $hotel["name"];
        $hotelDescriptions[] = $hotel["description"]; 
        $hotelParkings[] = $hotel["parking"];  
        $hotelVotes[] = $hotel["vote"]; 
        $hotelDistances[] = $hotel["distance_to_center"];               
    }

    var_dump($hotelNames);
    var_dump($hotelDescriptions);
    var_dump($hotelParkings);
    var_dump($hotelVotes);
    var_dump($hotelDistances);
?>

<table class="table table-success table-striped-columns">
  <thead>
    <tr>
    <th>
    </th>
    <?php foreach($hotels as $hotel) { ?>
      <th> 
        <?php echo $hotel['name'] ?>
     </th>
    <?php } ?>
    </tr>
    
  </thead>
  <tbody>
  <tr>
    <td>
        Description
    </td>
    <?php foreach($hotels as $hotel) { ?>
      <td> 
        <?php echo $hotel['description'] ?>
     </td>
    <?php } ?>
    </tr>

    <tr>
    <td>
        Parking
    </td>
    <?php foreach($hotels as $hotel) { ?>
      <td> 
        <?php echo $hotel['parking'] == "true" ? "Yes" : "No" ?>
     </td>
    <?php } ?>
    </tr>

    <tr>
    <td>
        Vote
    </td>
    <?php foreach($hotels as $hotel) { ?>
      <td> 
        <?php echo $hotel['vote'] ?>
     </td>
    <?php } ?>
    </tr>

    <tr>
    <td>
        Distance to center
    </td>
    <?php foreach($hotels as $hotel) { ?>
      <td> 
        <?php echo $hotel['distance_to_center'] ?>
        <span>km</span>
     </td>
    <?php } ?>
    </tr>
  </tbody>
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>