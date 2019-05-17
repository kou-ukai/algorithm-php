<?php
print("<pre>");
require_once("sort/bubbleSort.php");

$bubbleSort = new BubbleSort();

$before = createArray();

print("before---------");
print_r($before);

$after = $bubbleSort->sort($before);

print("after---------");
print_r($after);

/**
 * 0～99までの値を格納した長さ10の配列を生成する
 */
function createArray(){
  $max = 10;
  $ary = [];
  for($i = 0; $i < $max; $i++){
    $ary[$i] = rand(0, 99);
  }

  return $ary;
}

print("</pre>");
?>