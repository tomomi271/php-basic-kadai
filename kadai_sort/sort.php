<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
$nums = [15, 4, 18, 23, 10 ];


function sort_2way(&$array,$order){
  // ソート処理
  if($order === TRUE){
    // 昇順
    sort($array);
  }
  else{
    // 降順
    rsort($array);
  }
}
 echo '昇順にソートします。<br>';
  sort_2way($nums, TRUE);

  foreach($nums as $val){
  echo $val .'<br>';
  }

echo '降順にソートします。<br>';
  sort_2way($nums, FALSE);

  foreach($nums as $val){
    echo $val .'<br>';
  }
?>


   
</body>

</html>