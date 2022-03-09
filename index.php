<?php 
    $text= 'Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura ché la diritta via era smarrita.';
    $censurato = $_GET['censurato'];
    $censura = str_replace($censurato, '***', $text);
    // per apparire la censura bisogna scrivere alla fine dell'url (esempio index.php) un punto interrogativo
    // seguito dal nome della mia operazione con in questo caso la parola da censurare es. index.php?censurato=ritrovai
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>

    <!-- Stampo il testo e la sua lunghezza -->
    <p><?php echo $text; ?></p>
    <p><?php echo strlen($text);?></p>

    <!-- Stampo il testo con censura e la sua lunghezza -->
    <p><?php echo $censura; ?></p>
    <p><?php echo strlen($censura); ?></p>

</body>
</html>