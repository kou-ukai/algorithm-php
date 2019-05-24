<?php
print("<pre>");
require_once("sort/BubbleSort.php");
require_once("sort/SelectionSort.php");
require_once("sort/InsertionSort.php");

$before = createArray();

print("before---------\n");
print_r($before);

// バブルソート
//$bubbleSort = new BubbleSort();
//$after = $bubbleSort->sort($before);

// 選択ソート
// $selectionSort = new SelectionSort();
// $after = $selectionSort->sort($before);

// 挿入ソート
$insertionSort = new InsertionSort();
$after = $insertionSort->sort($before);

print("after---------\n");
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