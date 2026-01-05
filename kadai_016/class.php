<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>第16章課題</title>
</head>

<body>
 
   <p>
       <?php
      //  「Food」のクラス定義
      class Food {
      //プロパティを定義 
      private $name;
      private $price;

      // 「show_price」メソッドを定義
      public function show_price(){
      echo $this->price . '<br>';
      }
      // コンストラクタを定義する
      public function __construct(string $name, int $price){
      $this->name = $name;
      $this->price = $price;
      }
      }
      // 「Animal」クラス定義
      class  Animal {
        // プロパティを定義
      private $name;
      private $height;
      private $weight;

      // 「show_height」メソッドを定義
      public function show_height(){
      echo $this->height . '<br>';
      }
       // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight; 
      }
      }

      // インスタンス化する
      $food = new Food('potato',250);

      $animal = new Animal('dog',60,5000);

      // インスタンス「food」プロパティの値を出力
      print_r($food);
      echo '<br>';
      // インスタンス「animal」プロパティの値を出力
      print_r($animal);
      echo '<br>';
      // メソッドにアクセスして$priceの値を出力
      $food->show_price();
      $animal->show_height();

      
      ?>
  </p>
</body>

</html>