<!DOCTYPE html>
<html>
  <head>
    <title>PHP Form Example</title>
  </head>
  <body>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "<h2>Hello, " . $name . "!</h2>";
      }
    ?>
  </body>
</html>
