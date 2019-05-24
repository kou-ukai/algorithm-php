<?php

/**
 * バブルソートで並び替えるクラスです。
 */
class BubbleSort {

  /**
   * 配列の値を小さい順に並び替えた結果を返却します。
   */
  function sort($ary){
    // TODO バブルソートで並び替える処理を実装してください。
    
    // ループ用の変数を用意
    $count = count($ary)-1;
    $loopCount = $count;

    // 要素数-1の数だけ全体ループする
    for($j = 0; $j < $count; $j++){

      // 配列の比較、入れ替え用の変数
      $x = $count;
      $y = $x - 1;

      for($k = 0; $k < $loopCount; $k++){
        
        // 隣り合った配列を比較、順番が逆であれば交換する
        if($ary[$x] < $ary[$y]){
          $temp = $ary[$x];
          $ary[$x] = $ary[$y];
          $ary[$y] = $temp;
        }

        $x--;
        $y--;

      }

      // 並び替えが完了した数はループしないための処理
      $loopCount--;

    }

    return $ary;
  }

}