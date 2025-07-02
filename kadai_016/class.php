<!DOCTYPE html>

<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
  </head>

  <body>
    <p>
      <?php
      // クラスの定義
      class Food{
        //プロパティの定義
        private $name;
        private $price;

        // メソッドの定義
        public function show_price(){
          echo $this->price.'<br>';
        }

        public function __construct(string $name,int $price){
          $this->name = $name;
          $this->price = $price;
        }
      }

      class Animal{
        private $name;
        private $height;
        private $weight;

        public function show_height(){
          echo $this->height.'<br>';
        }

        public function __construct(string $name,int $height,int $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
      }

      $food = new Food('potato',250);
      $animal = new Animal('dog',60,5000);

      print_r($food);

      echo '<br>';

      print_r($animal) ;

      echo '<br>';

      $food->show_price();
      $animal->show_height();

      ?>
    </p>
  </body>
</html>