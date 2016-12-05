<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Poll Results</title>
  </head>
  <body>
  <br>
  <br>
  <h2 class="poll-header" id="headerPoll">These are the current results for the poll!</h2>
  <?php
  $games = $_POST["game"];
  $number = count($games);
  $db = new mysqli("localhost","root","","games");
  if ($db->connect_error){
    echo "Error";
  }
  $sql="";
  for ($i=0;$i<$number;$i++){
    $sql="UPDATE games SET Count = Count + 1 WHERE Name='" . $games[$i] . "'";
    $db->query($sql);
  }
  $results=$db->query("SELECT * FROM games");
  while ($row = $results->fetch_assoc()){
    echo $row["Name"] . " Votes:" . $row["Count"] . "<br>";
  }
  ?>
  </body>
</html>