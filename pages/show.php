<?php
    include("../config/core.php");
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FlixTime - </title>

  <?php include($components."stylesheet.php"); ?>
</head>

<body>
  <?php
    include($components."header.php");
  ?>

  <div class="container">
    <div id="movie" class="well"></div>
  </div>

  <?php include($components."script.php"); ?>
  <script>
    getMovie();
  </script>
</body>

</html>