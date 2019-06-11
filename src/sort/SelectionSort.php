<?php

/**
 * 選択ソートで配列の値を並び替えるクラスです。
 */
class SelectionSort {

  /**
   * 配列の値を小さい順に並び替えた結果を返却します。
   */
  function sort($ary){

    $max = count($ary);

    // 交換対象の要素を指定
    for($swapIndex = 0; $swapIndex < $max - 1; $swapIndex++){

      // 最小値の位置を初期化
      $minIndex = $swapIndex;

      // 最小値の位置を検索
      for($testIndex = $swapIndex; $testIndex < $max; $testIndex++){

        if($ary[$testIndex] < $ary[$minIndex]){
          // 比較対象が最小値より小さい場合、最小値の位置を更新
          $minIndex = $testIndex;

        }

      }

      // 交換する
      $temp = $ary[$swapIndex];
      $ary[$swapIndex] = $ary[$minIndex];
      $ary[$minIndex] = $temp;
    }

    return $ary;
  }

}