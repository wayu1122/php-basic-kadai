<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_015</title>
</head>
<body>
  <?php
    // クラスを定義
    class Food {
      // プロパティを定義
      private $name;
      private $price;
    
      // コンストラクタを定義
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
      
      // メソッドを定義
      public function show_price () {
        echo $this->price . '<br/>';
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティの値を出力
    print_r($food);
    echo '<br/>';

   
    // クラスを定義
    class Animal {
      // プロパティを定義
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      
      // メソッドを定義
      public function show_height () {
        echo $this->height . '<br/>';
      }
    }

      // インスタンス化する
      $animal = new Animal('dog', 60, 5000);

      // インスタンス$animalの各プロパティの値を出力
      print_r($animal);
      echo'<br/>';

      // メソッドにアクセスし実行
      $food->show_price();
      $animal->show_height();

   ?>
</body>
</html>