<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>PHP課題</title>
  </head>

  <body>
    <p>
      <?php
      $vesitables =['名前' => '玉ねぎ', '値段' => 200 , '産地' => '北海道'];

      foreach($vesitables as $key=>$value){
        echo "{$key}:{$value}<br>";
      }

      ?>
    </p>
  </body>
</html>