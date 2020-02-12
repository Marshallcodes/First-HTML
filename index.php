<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index.php</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        $list = scandir('./data');
        $i = 0;
        while($i < count($list)) {
          if($list[$i] != '.') {
            if($list[$i] != '..') {
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
          }
          $i = $i + 1;
        }
      ?>
    </ol>
    <h2>
      <?php
      //만약에 ID값이 있다면
      if(isset($_GET['id'])) { //만약에 ID값이 있다면
        echo $_GET['id'];
      } else { //없다면
        echo "Welcome";
      }
      ?>
    </h2>
    <?php
    if(isset($_GET['id'])) {
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP";
    }
    ?>
  </body>
</html>
