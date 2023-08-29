<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



  <?php
      $isMale = true;
      $isTall = false;
      if($isMale && $isTall){
          echo "You are a tall male <br>";
      } elseif($isMale && !$isTall) {
          echo "You are a short male <br>";
      } elseif(!$isMale && $isTall) {
          echo "You are tall but not male <br>";
      } else {
          echo "You are short and not male <br>";
      }

  ?>
  </body>
</html>
