<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('Marshall', 'Hans', 'MaxEar', 'Ken');
    echo $coworkers[0].'<br>';
    echo $coworkers[1].'<br>';
    echo $coworkers[2].'<br>';
    echo $coworkers[3].'<br>';
    var_dump(count($coworkers));
    array_push($coworkers, 'Joe');
    var_dump($coworkers);
    ?>
  </body>
</html>
